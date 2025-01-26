<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaCreate extends Component
{
    use WithFileUploads;

    public Berita $berita;

    public $judul;
    public $slug;
    public $konten;
    public $type;
    public $kategori_id = '';
    public $subkategori_id = '';
    public $gambar;

    public $heading;
    public $status = false;
    public $tanggal_publikasi;
    public $oldGambarBerita;
    public $kategoris = [];
    public $subkategoris = [];
    public $search = '';
    public $isLoading = false;

    public function mount(Berita $berita)
    {
        $this->berita = $berita;
        $this->kategoris = $this->setKategori();
        $this->subkategoris = []; // Start with empty subkategoris
    }

public function setKategori(): array
    {
        return Kategori::select('id', 'nama')
            ->orderBy('nama', 'asc')
            ->get()
            ->map(fn($item) => ['id' => $item->id, 'nama' => $item->nama])
            ->toArray();
    }


  public function setSubKategori(): array
{
    if (!$this->kategori_id) {
        return [];
    }

    return SubKategori::select('id', 'nama_sub')
        ->where('kategori_id', $this->kategori_id)
        ->orderBy('nama_sub', 'asc')
        ->get()
        ->map(fn($item) => ['id' => $item->id, 'nama_sub' => $item->nama_sub])
        ->toArray();
}
public function updatedKategoriId($value)
{
    $this->subkategori_id = null;
    
    if ($value) {
        // Check if kategori has any subkategori
        $hasSubkategori = SubKategori::where('kategori_id', $value)->exists();
        
        if ($hasSubkategori) {
            // Get subkategori only if exist for selected kategori
            $subkategoris = SubKategori::where('kategori_id', $value)
                ->select('id', 'nama_sub')
                ->orderBy('nama_sub', 'asc')
                ->get();

            $this->subkategoris = $subkategoris->map(function($item) {
                return [
                    'id' => $item->id,
                    'nama_sub' => $item->nama_sub
                ];
            })->toArray();
        } else {
            // If no subkategori found, set empty array
            $this->subkategoris = [];
        }
        
        // Dispatch event with updated data
        $this->dispatch('set-subkategori-create', data: $this->subkategoris);
    } else {
        $this->subkategoris = [];
        $this->dispatch('set-subkategori-create', data: []);
    }
}

    public function updatedJudul($value)
    {
        $this->slug = Str::slug($value);
    }

    protected function rules()
    {
        return [
            'judul' => 'required|min:3|max:255',
            'konten' => 'required',
            'kategori_id' => 'required',
            'type' => 'required',
            'konten' => 'required',
            'subkategori_id' => 'nullable',
            'gambar' => 'required|image|max:2048', // Gambar opsional
        ];
    }

    protected function messages()
    {
        return [
            'judul.required' => 'Judul wajib diisi.',
            'judul.min' => 'Judul harus terdiri dari minimal 3 karakter.',
            'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'konten.required' => 'Konten wajib diisi.',
            'kategori_id.required' => 'Kategori wajib dipilih.',
            'type.required' => 'Type Berita wajib dipilih.',
            'gambar.required' => 'Gambar Berita wajib dipilih.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function save()
    {
         $this->validate(); // Validasi dengan aturan dan pesan custom
    
        try {
            $data = [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'konten' => $this->konten,
                'penulis_id' => Auth::id(),
                'kategori_id' => $this->kategori_id,
                'subkategori_id' => $this->subkategori_id ?: null,
                'heading' => $this->heading,
                'type' => $this->type,
                'status' => '2',
                'tanggal_publikasi' => Carbon::now('Asia/Jakarta'),
            ];

            if ($this->gambar instanceof UploadedFile) {
                $data['gambar'] = $this->gambar->store('gambar', 'public');
            }

            Berita::create($data);

            $this->reset(['judul', 'slug', 'konten', 'kategori_id', 'subkategori_id', 'heading', 'gambar']);

            return $this->redirect('/berita?status=success&message=' . urlencode('Selamat, berita berhasil disimpan!'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create Berita: ' . $e->getMessage());
            session()->flash('error', 'Gagal menyimpan berita: ' . $e->getMessage());
            return null;
        }
    }

  public function render()
{
    // Initialize kategori options
    $this->dispatch('set-kategori-create', data: $this->setKategori());
    
    // Only initialize subkategori if kategori is selected
    if ($this->kategori_id) {
        $this->dispatch('set-subkategori-create', data: $this->setSubKategori());
    }

    return view('livewire.berita.berita-create');
}
}