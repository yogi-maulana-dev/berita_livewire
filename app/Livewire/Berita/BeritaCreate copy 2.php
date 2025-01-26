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

    #[Rule('required|min:3|max:255')]
    public $judul;

    public $slug;

    #[Rule('required')]
    public $konten;

    #[Rule('required')]
    public $kategori_id = '';

    public $subkategori_id = '';

    #[Rule('nullable|image|max:2048')]
    public $gambar;

    public $heading;

    public $status = false;

    public $tanggal_publikasi;

    public $oldGambarBerita;

    public $kategoris = [];

    public $subkategoris = [];

    public $search = ''; // Add this property for search

    public $isLoading = false;

    public function mount(Berita $berita)
    {
        $this->berita = $berita;
        $this->loadKategori();

        if ($berita->exists) {
            $this->kategori_id = $berita->kategori_id;
            $this->subkategori_id = $berita->subkategori_id;
            $this->loadSubkategori();
        }

        $this->dispatch('reinit-ckeditor');
    }

    public function updatedJudul($value)
    {
        $this->slug = Str::slug($value);
    }

    public function searchKategori($query)
    {
        return Kategori::where('nama', 'like', "%{$query}%")
            ->limit(10)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                ];
            });
    }

    public function loadKategori()
    {
        $this->kategoris = Kategori::select('id', 'nama')
            ->orderBy('nama')
            ->get()
            ->toArray();
    }

    public function loadSubkategori()
    {
        if (! $this->kategori_id) {
            $this->subkategoris = [];
            $this->dispatch('subkategorisUpdated', ['subkategoris' => []]); // Kosongkan opsi jika kategori tidak dipilih

            return;
        }

        $subkategoris = SubKategori::where('kategori_id', $this->kategori_id)
            ->select('id', 'nama_sub')
            ->orderBy('nama_sub', 'asc')
            ->get()
            ->toArray();

        $this->subkategoris = $subkategoris;

        // Kirim event dengan data yang benar
        $this->dispatch('subkategorisUpdated', ['subkategoris' => $subkategoris]);
    }

    public function save()
    {

        try {

            $data = $this->validate();
            $data = [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'konten' => $this->konten,
                'penulis_id' => Auth::id(),
                'kategori_id' => $this->kategori_id,
                'subkategori_id' => $this->subkategori_id,
                'heading' => $this->heading,
                'status' => '2',
                'tanggal_publikasi' => Carbon::now('Asia/Jakarta'),
            ];

            if ($this->gambar instanceof UploadedFile) {
                $data['gambar'] = $this->gambar->store('gambar', 'public');
            }

            Berita::create($data);

            $this->reset([
                'judul',
                'slug',
                'konten',
                'kategori_id',
                'subkategori_id',
                'heading',
                'gambar',
            ]);

            return $this->redirect('/berita?status=success&message='.urlencode('Selamat, berita berhasil disimpan!'), navigate: true);

        } catch (\Exception $e) {
            Log::error('Failed to create gaganya Berita: '.$e->getMessage());

            return $e->getMessage();
        }
    }

    public function render()
    {

        return view('livewire.berita.berita-create');
    }
}
//
