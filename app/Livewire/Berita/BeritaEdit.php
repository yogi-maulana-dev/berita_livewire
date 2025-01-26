<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaEdit extends Component
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

    // Add listener for CKEditor content updates
    protected $listeners = ['editorUpdated' => 'updateKonten'];

    #[On('dispatch-berita-table-edit')]

    public function mount(Berita $berita)
    {
        $this->berita = $berita;
        $this->judul = $berita->judul;
        $this->slug = $berita->slug;
        $this->konten = $berita->konten;
        $this->type = $berita->type; // Mengisi properti type dari model
        $this->kategori_id = $berita->kategori_id;
        $this->subkategori_id = $berita->subkategori_id;
        $this->oldGambarBerita = $berita->gambar;
        
        $this->kategoris = $this->setKategori();
        $this->subkategoris = $this->setSubKategori();

        $this->dispatch('reinit-ckeditor');
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
        $this->subkategori_id = '';
        $this->subkategoris = $this->setSubKategori();
        $this->dispatch('set-subkategori-create', data: $this->subkategoris);
    }



    public function updatedJudul($value)
    {
        $this->slug = Str::slug($value);
    }

    // Updated method to handle CKEditor content
    public function updateKonten($value)
    {
        $this->konten = $value;
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

    public function edit()
    {
        try {
            $data = [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'konten' => $this->konten,
                'penulis_id' => Auth::id(),
                'kategori_id' => $this->kategori_id,
                'type' => $this->type,
                'subkategori_id' => $this->subkategori_id ?: null,
                'status' => '2'
            ];

            if ($this->gambar instanceof UploadedFile) {
                $data['gambar'] = $this->gambar->store('gambar', 'public');
                $this->deleteOldFile($this->oldGambarBerita);
            }

            if ($this->berita->update($data)) {
                // Refresh table component
                $this->dispatch('berita-updated')->to('berita.berita-table');

                // Close modal if using modal
                $this->dispatch('closeModal');

                // Reinitialize CKEditor
                $this->dispatch('reinit-ckeditor');

                return $this->redirect('/berita', navigate: true);
            }
        } catch (\Exception $e) {
            \Log::error('Gagal mengedit berita: '.$e->getMessage(), ['trace' => $e->getTraceAsString()]);

            return false;
        }
    }

    public function render()
    {
        return view('livewire.berita.berita-edit', [
            'kategoris' => $this->kategoris,
            'subkategoris' => $this->subkategoris,  // Tambahkan ini

        ]);
    }
}