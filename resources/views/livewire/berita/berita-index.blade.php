<div>
    {{-- Be like water. --}}
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Table</h4>
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

                                    <livewire:berita.berita-create />

                                    {{--  <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                        class="btn_1">Add New</a>  --}}
                                </div>
                            </div>
                        </div>

                        <div class="QA_table mb_30">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Teacher</th>
                                        <th scope="col">Lesson</th>
                                        <th scope="col">Enrolled</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"> <a href="#" class="question_content"> title here 1</a>
                                        </th>
                                        <td>Category name</td>
                                        <td>Teacher James</td>
                                        <td>Lessons name</td>
                                        <td>16</td>
                                        <td>$25.00</td>
                                        <td><a href="#" class="status_btn">Active</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
