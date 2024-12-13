<?php

namespace App\Livewire\Forms\Berita;

use App\Models\Berita;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Livewire\Form;
use Livewire\WithFileUploads;

class BeritaForm extends Form
{
    //

    use WithFileUploads;

    public ?Berita $berita;

    public $judul;

    public $gambar_berita;

    // public $diskusi_gambar;

    public $slug;

    public $konten;

    public $penulis_id;

    public $kategori_id;

    public $jawaban;

    public $id;

    protected $rules = [
        'soal' => 'required|min:3',
        'gambar_pertanyaan' => 'nullable|image|max:1024',
        'diskusi_gambar' => 'nullable|image|max:1024',
        'diskusi' => 'nullable|string',
        'kategori_id' => 'required|integer',
        'jawaban' => 'required|integer',
    ];

    public $oldGambarBerita;

    public $oldGambarDiskusi;

    public function mount()
    {
        // Inisialisasi dengan gambar lama jika ada
        $this->oldGambarBerita = $this->pertanyaan->gambar_pertanyaan ?? null;
        // $this->oldGambarDiskusi = $this->pertanyaan->diskusi_gambar ?? null;
    }

    public function setBerita(Berita $berita)
    {
        $this->id = $berita->id;
        $this->berita = $berita;
        $this->soal = $berita->soal;
        $this->gambar_berita = null;
        $this->diskusi_gambar = null;
        $this->diskusi = $berita->diskusi;
        $this->kategori_id = $berita->kategori_id;
        $this->jawaban = $berita->jawaban;
        $this->id = $berita->id;
        $this->oldGambarBerita = $berita->gambar_berita;
        // $this->oldGambarDiskusi = $pertanyaan->diskusi_gambar;
    }

    public function store()
    {
        $data = $this->validate();

        if ($this->gambar_berita instanceof UploadedFile) {
            $data['gambar_berita'] = $this->gambar_berita->store('gambar_berita', 'public');
        }

        // if ($this->diskusi_gambar instanceof UploadedFile) {
        //     $data['diskusi_gambar'] = $this->diskusi_gambar->store('diskusi_gambar', 'public');
        // }

        try {
            Berita::create($data);
            $this->reset(['soal', 'gambar_berita', 'diskusi_gambar', 'diskusi', 'kategori_id', 'jawaban']);
        } catch (\Exception $e) {
            Log::error('Failed to create Pertanyaan: ' . $e->getMessage());

            return null;
        }
    }

    public function update()
    {
        $this->validate();

        $data = $this->except(['pertanyaan', 'oldGambarBerita', 'oldGambarDiskusi']);

        // Handle gambar_berita
        if ($this->gambar_berita instanceof UploadedFile) {
            $this->deleteOldFile($this->berita->gambar_berita);
            $data['gambar_berita'] = $this->gambar_berita->store('gambar_berita', 'public');
        } else {
            // Jika tidak ada perubahan, gunakan gambar yang ada
            $data['gambar_berita'] = $this->berita->gambar_berita;
        }

        // Handle diskusi_gambar
        if ($this->diskusi_gambar instanceof UploadedFile) {
            $this->deleteOldFile($this->berita->diskusi_gambar);
            $data['diskusi_gambar'] = $this->diskusi_gambar->store('diskusi_gambar', 'public');
        } else {
            // Jika tidak ada perubahan, gunakan gambar yang ada
            $data['diskusi_gambar'] = $this->berita->diskusi_gambar;
        }

        $this->berita->update($data);

        return $this->berita;
    }

    private function deleteOldFile($path)
    {
        if ($path) {
            $fullPath = public_path('storage/' . $path);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }
}
