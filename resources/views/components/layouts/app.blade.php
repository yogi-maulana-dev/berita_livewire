<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hospital</title>

    <link rel="icon" href="img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css'])

     @livewireStyless
</head>

<body class="crm_body_bg">

    <!-- main content part here -->
    <!-- sidebar  -->
    <!-- sidebar part here -->
    @livewire('navigation-menu')

    <!-- sidebar part end -->
    <!--/ sidebar  -->


    <section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info d-flex align-items-center">
                                <img src="img/client_img.png" alt="Profile Picture" class="rounded-circle me-3"
                                    style="width: 50px; height: 50px;">
                                <div class="profile_info_iner">
                                    <p class="text-muted mb-1">Neurologist</p>
                                    <h5 class="mb-2">Dr. Robar Smith</h5>
                                    <div class="profile_info_details">
                                        <a href="#" class="d-block mb-1 text-decoration-none text-primary">
                                            <i class="ti-user me-2"></i>My Profile
                                        </a>
                                        <a href="#" class="d-block mb-1 text-decoration-none text-primary">
                                            <i class="ti-settings me-2"></i>Settings
                                        </a>
                                        <form method="POST" action="{{ route('logout') }}" x-data class="mt-2">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-link text-decoration-none text-danger p-0">
                                                <i class="ti-shift-left me-2"></i>{{ __('Log Out') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->
        {{ $slot }}

        <!-- footer part -->
        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a
                                    href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content part end -->

    <x-notifikasi />
    @stack('modals')
    @livewireScripts

    <!-- footer  -->
    <!-- jquery slim -->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery1-3.4.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('/js/popper1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('/js/bootstrap1.min.js') }}"></script>
    <!-- Sidebar Menu -->
    <script src="{{ asset('/js/metisMenu.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('/vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <!-- Chart -->
    <script src="{{ asset('/vendors/chartlist/Chart.min.js') }}"></script>
    <!-- CounterUp -->
    <script src="{{ asset('/vendors/count_up/jquery.counterup.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('/vendors/swiper_slider/js/swiper.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <!-- Gijgo -->
    <script src="{{ asset('/vendors/gijgo/gijgo.min.js') }}"></script>
    <!-- Responsive Table -->
    <script src="{{ asset('/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <!-- Chart -->
    <script src="{{ asset('/js/chart.min.js') }}"></script>
    <!-- Progressbar -->
    <script src="{{ asset('/vendors/progressbar/jquery.barfiller.js') }}"></script>
    <!-- Tag Input -->
    <script src="{{ asset('/vendors/tagsinput/tagsinput.js') }}"></script>
    <!-- Text Editor -->
    <script src="{{ asset('/vendors/text_editor/summernote-bs4.js') }}"></script>
    <!-- Apex Charts -->
    <script src="{{ asset('/vendors/apex_chart/apexcharts.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('/js/custom.js') }}"></script>




</body>


</html>
