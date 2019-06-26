<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script type="text/javascript" src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script>
    tinymce.init({
            selector: "textarea",
            plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor codesample"
            ],
 
            toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft codesample",
 
            menubar: "false",
            toolbar_items_size: 'small',
 
            style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
 
            templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
            ],

            
            plugins: "preview",
            toolbar: "preview"
    });
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="{{ url('forms') }}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
            <!-- Log out -->
            <div class="list-inline-item logout"><a id="logout" href="{{ url('login') }}" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ url('images/dung.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Nursano Gandung Praseto</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="{{ url('forms') }}"> <i class="icon-padnote"></i>Forms </a></li>
          <li><a href="{{ url('tables') }}"> <i class="icon-grid"></i>Tables </a></li>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Forms</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('forms') }}">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!--Experience-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong class="d-block">Experiance</strong></div>
                  <div class="block-body">
                    <form method="POST" action="{{ url('forms/pengalaman') }}">
                      {{ csrf_field() }}
                      <div class="form-group">       
                        <label class="form-control-label">Nama Kantor</label>
                        <input type="text" class="form-control" name="kantor" required>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Jenis Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" required>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-6">
                              <label class="form-control-label">Tahun masuk</label>
                              <select name="tahunMasuk" class="form-control mb-3 mb-3" required>
                                <option value="0">Please Select</option>
                                <option value="present">Present</option>
                                <?php
                                  $thn_skr = date('Y');
                                  for ($x = $thn_skr; $x >= 2000; $x--) {
                                ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                  }
                                ?>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label class="form-control-label">Tahun keluar</label>
                              <select name="tahunKeluar" class="form-control mb-3 mb-3" required>
                                <option value="0000">Please Select</option>
                                <option value="1111">Present</option>
                                <?php
                                  $thn_skr = date('Y');
                                  for ($x = $thn_skr; $x >= 2000; $x--) {
                                ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Kota/Kabupaten</label>
                        <input type="text" class="form-control" name="kota" required>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Negara</label>
                        <input type="text" class="form-control" name="negara" required>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Education-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong class="d-block">Education</strong></div>
                  <div class="block-body">
                    <form method="post" action="{{ url('forms/edukasi') }}" >
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label">Nama sekolah</label>
                        <input type="text" class="form-control" name="sekolah" required>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-6">
                              <label class="form-control-label">Tahun masuk</label>
                              <select name="tahunMasuk" class="form-control mb-3 mb-3" required>
                                <option value="0000">Please Select</option>
                                <option value="1111">Present</option>
                                <?php
                                  $thn_skr = date('Y');
                                  for ($x = $thn_skr; $x >= 2000; $x--) {
                                ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                  }
                                ?>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label class="form-control-label">Tahun keluar</label>
                              <select name="tahunKeluar" class="form-control mb-3 mb-3" required>
                                <option value="0000">Please Select</option>
                                <option value="1111">Present</option>
                                <?php
                                  $thn_skr = date('Y');
                                  for ($x = $thn_skr; $x >= 2000; $x--) {
                                ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Kota/Kabupaten</label>
                        <input type="text" class="form-control" name="kota" required>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Negara</label>
                        <input type="text" class="form-control" name="negara" required>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--skill-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong>Skill</strong></div>
                  <div class="block-body">
                    <form method="POST" action="{{ url('forms/skill') }} ">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label">Keahlian</label>
                        <input type="text" name="keahlian" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Persentase (%)</label>
                        <input type="range" name="persentase" class="form-control-range" min="0" max="100" value="0" onchange="updateTextInput(this.value);">
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-3">
                              <input type="text" id="textInput" class="form-control" value="" style="border: none;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- upload -->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong>Upload CV</strong></div>
                  <div class="block-body">
                    <form method="POST" action="forms/cv" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <input type="file" name="file_cv" class="form-control" accept="application/pdf" id="file_cv" style="border: none;">
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Berita -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Berita</strong></div>
                  <div class="block-body">
                    <form method="POST" action="{{ url('forms/berita') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea name="isiBerita" id="isiBerita" rows="22"></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Judul</h5></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="judul" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Gambar</h5></label>
                        <div class="form-group files color col-sm-9">
                          <input type="file" name="file_gambar" id="file_gambar" class="form-control"
                         accept="image/*" style="border: none;">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Portofolio -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Portfolio</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="forms/portfolio">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <textarea name="isiPortfolio" rows="22"></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Nama Projek</h5></label>
                        <div class="form-group files color col-sm-9">
                          <input type="text" name="namaProjek" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Jenis Projek</h5></label>
                        <div class="form-group files color col-sm-9">
                          <input type="text" name="jenisProjek" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Client</h5></label>
                        <div class="form-group files color col-sm-9">
                          <input type="text" name="client" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><h5>Gambar</h5></label>
                        <div class="form-group files color col-sm-9">
                          <input type="file" class="form-control" name="file_gambar" accept="image/*" style="border: none;">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary" style="width: 120px; float: right;">Submit </button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2019 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/front.js') }}"></script>
    <script type="text/javascript">
      function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @include('sweet::alert')
  </body>
</html>