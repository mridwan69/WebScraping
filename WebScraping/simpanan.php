<!DOCTYPE html>
<html lang="en">

<head>
    <title>SUKU BUNGA SIMPANAN</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">

      
      <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <!--<body class="fix-menu dark-layout">-->

  <body>

        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="index.html">
                           <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>

                   </div>
               </div>
           </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                           
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Kurs Jual Beli</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="kursforward.php">
                                        <span class="pcoded-micon"><i class="ti-control-forward"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Kurs Forward</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="konverter.php">
                                        <span class="pcoded-micon"><i class="ti-money"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Konverter Mata Uang</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="kredit.php">
                                        <span class="pcoded-micon"><i class="ti-credit-card"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Suku Bunga Kartu Kredit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="simpanan.php">
                                        <span class="pcoded-micon"><i class="ti-stack-overflow"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Suku Bunga Simpanan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
								<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Suku Bunga Simpanan</h5>
                    
                                            <?php
                function bacaHTML($url){
                // inisialisasi CURL
                $data = curl_init();
                // setting CURL
                curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($data, CURLOPT_URL, $url);
                // menjalankan CURL untuk membaca isi file
                $hasil = curl_exec($data);
                curl_close($data);
                return $hasil;
                }


                $kodeHTML =  bacaHTML('https://www.bca.co.id/id/Individu/Sarana/Kurs-dan-Suku-Bunga/Suku-Bunga-Simpanan');
                $pecah = explode('<table class="table table-bordered table-striped table-hovered table-responsive">', $kodeHTML);
                $pecahLagi = explode('</table>', $pecah[1]);

              echo "<b>Tahapan</b>";
              echo '<table class="table table-bordered">';
              echo $pecahLagi[0];
              echo '</table>';

              $paragraph2 = explode('<p class="iz_notes">',$kodeHTML);
              $paragraph22 = explode('</p>', $paragraph2[1]);
              echo $paragraph22[0]; 

              echo "<br><br><br><b>Tahapan Xpresi</b>";
              $pecahLagi1 = explode('</table>', $pecah[2]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi1[0];
              echo '</table>';
              echo $paragraph22[0];

              echo "<br><br><br><b>Tahapan Berjangka</b>";
              $pecahLagi2 = explode('</table>', $pecah[3]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi2[0];
              echo '</table>';
              echo $paragraph22[0];

              echo "<br><br><br><b>Tapres</b>";
              $pecahLagi3 = explode('</table>', $pecah[4]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi3[0];
              echo '</table>';
              echo $paragraph22[0];

              echo "<br><br><br><b>Tabunganku</b>";
              $pecahLagi4 = explode('</table>', $pecah[5]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi4[0];
              echo '</table>';
              $tabungan = explode('</p>', $paragraph2[5]);
              echo '<br>'.$tabungan[0];

              echo "<br><br><br><b>BCA Dollar</b>";
              $pecahLagi5 = explode('</table>', $pecah[6]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi5[0];
              echo '</table>';
              $paragraph222 = explode('</p>', $paragraph2[6]);
              echo '<br>'.$paragraph222[0];

              echo "<br><br><br><b>Deposito</b>";
              $pecahLagi6 = explode('</table>', $pecah[7]);
              echo '<table class="table table-bordered">';
              echo $pecahLagi6[0];
              echo '</table>';

              echo '<br>'.$paragraph222[0]; 

              $keterangan = explode('</p>', $paragraph2[9]);
              echo '<br>'.$keterangan[0];
            ?>
                                    </div>
                                </div>
                            </div>
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
</body>

</html>
