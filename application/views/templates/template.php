<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- DatePicker -->
    
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- End DatePicket -->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/card-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">


                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0"></h2>
                            </div>
                        </div>
                    </div>
                    <ul class="nav navbar-nav float-right">



                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"> <?= userdata('nama'); ?></span><span class="user-status">Online</span></div><span><img class="round" src="<?= base_url() ?>assets/app-assets/images/portrait/small/user.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= site_url('auth/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url() ?>assets/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url() ?>assets/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url() ?>assets/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url() ?>assets/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url() ?>assets/html/ltr/vertical-menu-template-semi-dark/index.html">
                        <!-- <div class="brand-logo"></div> -->
                        <h2 class="brand-text mb-0">Pengadaan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="<?= $this->uri->segment(1) == 'dashboard' ? 'class="active"' : '' ?>"><a href="<?= site_url('dashboard') ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a>

                <li class=" navigation-header"><span>Data Master</span>
                </li>
                <li class=" nav-item"><a href="<?= site_url('supplier') ?>"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Supplier">Supplier</span></a>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Barang">Barang</span></a>
                    <ul class="menu-content">
                        <li><a href="<?= site_url('satuan') ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Satuan Barang">Satuan Barang</span></a>
                        </li>
                        <li><a href="<?= site_url('jenis') ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jenis Barang">Jenis Barang</span></a>
                        </li>
                        <li><a href="<?= site_url('barang') ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Data Barang">Data Barang</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Transaksi</span>
                <li class=" nav-item"><a href="<?= site_url('barangmasuk') ?>"><i class="feather icon-download"></i><span class="menu-title" data-i18n="Barang Masuk">Barang Masuk</span></a>
                </li>
                <li class=" nav-item"><a href="<?= site_url('barangkeluar') ?>"><i class="feather icon-upload"></i><span class="menu-title" data-i18n="Barang Keluar">Barang Keluar</span></a>
                </li>


                <li class=" navigation-header"><span>Report</span>
                </li>
                <li class=" nav-item"><a href="<?= site_url('laporan') ?>"><i class="feather icon-printer"></i><span class="menu-title" data-i18n="Cetak Laporan">Cetak Laporan</span></a>
                </li>

                <li class=" navigation-header"><span>Setting</span>
                </li>
                <li class=" nav-item"><a href="<?= site_url('user') ?>"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User Management">User Management</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <?php echo $contents ?>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>

    <!-- <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->

    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangalrange').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#tanggalrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });

        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
    </script>

</body>
<!-- END: Body-->

</html>