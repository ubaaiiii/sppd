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
    <title>Perjalanan Dinas | <?=$lokasi;?></title>
    <link rel="apple-touch-icon" href="<?= base_url(); ?>/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/app-assets/images/ico/business.png">
    <link href="<?= base_url(); ?>/app-assets/css/font.googleapis.com.min.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/pages/error.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url(); ?>/app-assets/vendors/js/vendors.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- BEGIN Vendor JS-->

    <script>
    function base_url() {
      var pathparts = location.pathname.split('/');
      if (location.host == 'localhost') {
          var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
      }else{
          var url = location.origin; // http://stackoverflow.com
      }
      return url+"/";
    }
    </script>
    <?php
      $notif = 6;
    ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="<?= base_url(); ?>">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                             <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                   <span class="notification-title">Status SPPD</span>
                                </div>
                             </li>
                             <li class="scrollable-container media-list">
                                <a class="d-flex justify-content-between" href="javascript:void(0)">
                                   <div class="media d-flex align-items-start">
                                      <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                      <div class="media-body">
                                         <h6 class="primary media-heading">Kegiatan Baru</h6>
                                         <small class="notification-text">Anda memiliki 6 kegiatan yang baru diinput</small>
                                      </div>
                                      <div class="badge badge-pill badge-glow badge-primary mr-1 mb-1 badge-md">6</div>
                                   </div>
                                </a>
                                <a class="d-flex justify-content-between" href="javascript:void(0)">
                                   <div class="media d-flex align-items-start">
                                      <div class="media-left"><i class="feather icon-check font-medium-5 warning"></i></div>
                                      <div class="media-body">
                                         <h6 class="warning media-heading">Approval Staf Deputi</h6>
                                         <small class="notification-text">Anda memiliki 6 kegiatan yang sudah disetujui oleh Staf Deputi</small>
                                      </div>
                                      <div class="badge badge-pill badge-glow badge-warning mr-1 mb-1 badge-md">6</div>
                                   </div>
                                </a>
                                <a class="d-flex justify-content-between" href="javascript:void(0)">
                                   <div class="media d-flex align-items-start">
                                      <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                      <div class="media-body">
                                         <h6 class="info media-heading">Approval Deputi</h6>
                                         <small class="notification-text">Anda memiliki 6 kegiatan yang sudah disetujui oleh Deputi</small>
                                      </div>
                                      <div class="badge badge-pill badge-glow badge-info mr-1 mb-1 badge-md">6</div>
                                   </div>
                                </a>
                                <a class="d-flex justify-content-between" href="javascript:void(0)">
                                   <div class="media d-flex align-items-start">
                                      <div class="media-left"><i class="feather icon-check-square font-medium-5 success"></i></div>
                                      <div class="media-body">
                                         <h6 class="success media-heading red darken-1">Approval Gubernur</h6>
                                         <small class="notification-text">Anda memiliki 6 kegiatan yang sudah disetujui oleh Gubernur</small>
                                      </div>
                                      <div class="badge badge-pill badge-glow badge-success mr-1 mb-1 badge-md">6</div>
                                   </div>
                                </a>
                                <a class="d-flex justify-content-between" href="javascript:void(0)">
                                   <div class="media d-flex align-items-start">
                                      <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                      <div class="media-body">
                                         <h6 class="danger media-heading yellow darken-3">Kegiatan Ditolak</h6>
                                         <small class="notification-text">Anda memiliki 6 kegiatan yang ditolak</small>
                                      </div>
                                      <div class="badge badge-pill badge-glow badge-danger mr-1 mb-1 badge-md">6</div>
                                   </div>
                                </a>
                             </li>
                             <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="<?=base_url('home/monitoring');?>">Lihat semua data kegiatan</a></li>
                          </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span></div><span><img class="round" src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url('account_setting'); ?>"> <i class="feather icon-user"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="feather icon-power"></i> Logout</a>
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
                    <div class="mr-50"><img src="<?= base_url(); ?>/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url(); ?>/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url(); ?>/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="<?= base_url(); ?>/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
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
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url(); ?>">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Menu</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include <?= base_url(); ?>/includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item" data-menu="dropdown"><a class="nav-link" href="<?= base_url('home'); ?>"><i class="feather icon-home"></i><span>Home</span></a>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-archive"></i><span>Master</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url('home/data_pegawai'); ?>" data-toggle="dropdown"><i class="feather icon-file-text"></i>Data SPPD</a></li>
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url('home/data_pegawai'); ?>" data-toggle="dropdown"><i class="feather icon-file-text"></i>Data Kwitansi</a></li>
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url('home/pegawai'); ?>" data-toggle="dropdown"><i class="feather icon-users"></i>Data Pegawai</a></li>
                            <li data-menu=""><a class="dropdown-item" href="<?= base_url('home/pertanyaan_keamanan'); ?>" data-toggle="dropdown"><i class="feather icon-database"></i>Data Master</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" data-menu="dropdown"><a class="nav-link" href="<?= base_url('home/monitoring'); ?>"><i class="feather icon-printer"></i><span>Cetak SPPD</span></a>
                    </li>
                    <li class="nav-item" data-menu="dropdown"><a class="nav-link" href="<?= base_url('home/laporan'); ?>"><i class="fa fa-files-o"></i><span>Data Laporan</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
              <?php if ($lokasi!="Home") { ?>
              <div class="content-header-left col-md-9 col-12 mb-2">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <h2 class="content-header-title float-left mb-0" id="judul-halaman"></h2>
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active"><?= $lokasi; ?>
                                  </li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
            <?php } ?>
            </div>
            <div class="content-body">

                <?= view($content); ?>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/maxlength/bootstrap-maxlength.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="<?= base_url(); ?>/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url(); ?>/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/core/app.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url(); ?>/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <script src="<?= base_url(); ?>/app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
    <script>
      $(document).ready(function(){
        $('#judul-halaman').text('<?=$lokasi;?>');

        setTimeout(function(){
            $('li.nav-item:contains("<?=$lokasi;?>")').addClass("active");
            $('li[data-menu]:contains("<?=$lokasi;?>")').addClass("active");
            $('li[data-menu="dropdown-submenu"]:contains("<?=$lokasi;?>")').addClass("sidebar-group-active active open");
        },200);
        $('input[maxlength]').maxlength();

        $('#backdrop').on('hidden.bs.modal', function() {
            $('#btn-reset').click();
            $('#btn-cancel').attr('hidden',true);
            $('#btn-reset').removeAttr('hidden');
            $('#tipe').val('save');
            $('#btn-submit').html('Simpan');
        });
      })
    </script>

</body>
<!-- END: Body-->
</html>
