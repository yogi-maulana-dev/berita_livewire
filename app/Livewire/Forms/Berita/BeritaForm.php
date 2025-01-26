<?php

namespace App\Livewire\Forms\Berita;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Livewire\Form;
use Livewire\WithFileUploads;

class BeritaForm extends Form
{
    use WithFileUploads;

    public ?Berita $berita;

    public $judul;

    public $slug;

    public $konten;

    public $penulis_id;

    public $kategori_id;

    public $gambar;

    public $type;

    public $status; // Menyimpan nilai boolean

    public $tanggal_publikasi;

    public $id;

    protected function rules()
    {
        return [
            'judul' => 'required|min:3',
            'slug' => 'required|string',
            'konten' => 'required|string',
            'kategori_id' => 'required|integer',
            'gambar' => 'nullable|image|max:1024',
        ];
    }

    public $oldGambarBerita;

    public $kotentex;

    public function mount()
    {
        // Inisialisasi dengan gambar lama jika ada
        $this->oldGambarBerita = $this->berita->gambar ?? null;
        $this->kotentex = $this->berita->konten ?? null;
    }

    public function setBerita(Berita $berita)
    {
        $this->berita = $berita;
        $this->judul = $berita->judul;
        $this->slug = $berita->slug;
        $this->konten = $berita->konten;  // tambahkan ini jika belum ada
        $this->kotentex = $berita->konten;  // ini yang akan ditampilkan di textarea
        $this->kategori_id = $berita->kategori_id;

        // Ubah status menjadi boolean
        $this->status = $berita->status;
        $this->type = $berita->type;
        $this->gambar = null;
        $this->oldGambarBerita = $berita->gambar;

    }

    public function setKategori(): array
    {
        $setKategori = [];
        $kategoris = Kategori::select('id', 'nama')->get();

        foreach ($kategoris as $ind => $data) {
            $setKategori[$ind] = ['id' => $data->id, 'nama' => $data->nama];
        }

        return $setKategori;
    }

    public function store()
    {

        try {

            $data = $this->validate();
            $data = [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'konten' => $this->konten,
                'penulis_id' => Auth::id(),
                'kategori_id' => $this->kategori_id,
                'type' => $this->type,
                'status' => '2',
                'tanggal_publikasi' => Carbon::now('Asia/Jakarta'),
            ];

            if ($this->gambar instanceof UploadedFile) {
                $data['gambar'] = $this->gambar->store('gambar', 'public');
            }

            Berita::create($data);

            Log::info('Berita created successfully', $data);

            $this->reset(['judul', 'slug', 'konten', 'kategori_id', 'type', 'gambar']);

            return null;
        } catch (\Exception $e) {
            Log::error('Failed to create gaganya Berita: '.$e->getMessage());

            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $data = [
                'judul' => $this->judul,
                'slug' => $this->slug,
                'konten' => $this->konten,
                'penulis_id' => Auth::id(),
                'kategori_id' => $this->kategori_id,
                'type' => $this->type,
                'status' => '2',
                'tanggal_publikasi' => $this->status ? Carbon::now('Asia/Jakarta') : null,
            ];

            if ($this->gambar instanceof UploadedFile) {
                $data['gambar'] = $this->gambar->store('gambar', 'public');
                $this->deleteOldFile($this->oldGambarBerita);
            }

            $this->berita->update($data);
            Log::info('Data berhasil diperbarui:', $data);

            return true;
        } catch (\Exception $e) {
            Log::error('Gagal memperbarui data:', ['error' => $e->getMessage()]);

            return false;
        }
    }

    private function deleteOldFile($path)
    {
        if ($path) {
            $fullPath = public_path('storage/'.$path);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }
}
