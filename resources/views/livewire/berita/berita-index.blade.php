<div>
    {{-- Be like water. --}}

    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Berita</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">

                                </div>
                                <div class="add_button ms-2">
                                    <x-button wire:navigate href="{{ route('berita.create') }}">
                                        Tambah Konten
                                    </x-button>

                                </div>
                            </div>
                        </div>
                        <livewire:berita.berita-table />
                        <livewire:berita.berita-hapus />
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
