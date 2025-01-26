<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class BeritaHapus extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $judul;

    public $modalBeritaHapus = false;

    #[On('dispatch-berita-table-hapus')]
    public function set_berita($id, $judul)
    {
        $this->id = $id;
        $this->judul = $judul;

        $this->modalBeritaHapus = true;
    }

    public function hapus()
    {

        $berita = Berita::find($this->id);

        if ($berita) {
            // Hapus file gambar jika ada
            if ($berita->gambar) {
                $fullPath = public_path('storage/'.$berita->gambar);
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                }
            }

            $berita->delete();

            // Reset properti modal

            return $this->redirect('/berita?status=success&message='.urlencode('Selamat, berita berhasil disimpan!'), navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.berita.berita-hapus');
    }
}
