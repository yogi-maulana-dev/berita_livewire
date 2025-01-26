<div>
    {{-- Be like water. --}}
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Kategori: <span
                                    class="bg-blue-500 text-white px-2 py-2 rounded">{{ $kategori->nama }}</span></h4>

                            </h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    {{--  <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>  --}}
                                </div>
                                <div class="add_button ms-2">

                                    <livewire:subkategori.subkategori-create />

                                </div>
                            </div>
                        </div>

                        {{--  ini tabel  --}}
                        <livewire:subkategori.subkategori-table :kategori_id="$kategori->id" />
                        <livewire:subkategori.subkategori-edit />
                        <livewire:subkategori.subkategori-hapus />
                    </div>
                </div>
            </div>
        </div>


    </div>
