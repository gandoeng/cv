<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tables</title>
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
          <li><a href="{{ url('forms') }}"> <i class="icon-padnote"></i>Forms </a></li>
          <li class="active"><a href="{{ url('tables') }}"> <i class="icon-grid"></i>Tables </a></li>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('forms') }}">Home</a></li>
            <li class="breadcrumb-item active">Tables        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
            <!-- tabel education -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Education</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Nama sekolah</th>
                          <th>Tahun masuk</th>
                          <th>Tahun keluar</th>
                          <th>Kota/Kabupaten</th>
                          <th>Negara</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($edukasi as $e)
                        <tr>
                          <td>{{ $e->sekolah }}</td>
                          <td>{{ $e->tahun_masuk }}</td>
                          <td>{{ $e->tahun_keluar }}</td>
                          <td>{{ $e->kota }}</td>
                          <td>{{ $e->negara }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusEdukasi') }}/{{ $e->id }} ">Hapus</a>
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
              <!-- tabel Experience -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Experience</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Nama kantor</th>
                          <th>Jenis pekerjaan</th>
                          <th>Tahun masuk</th>
                          <th>Tahun keluar</th>
                          <th>Kota/Kabupaten</th>
                          <th>Negara</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pengalaman as $p)
                        <tr>
                          <td>{{ $p->kantor }}</td>
                          <td>{{ $p->jenis }}</td>
                          <td>{{ $p->tahun_masuk }}</td>
                          <td>{{ $p->tahun_keluar }}</td>
                          <td>{{ $p->kota }}</td>
                          <td>{{ $p->negara }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusPengalaman') }}/{{ $p->id }} ">Hapus</a>                          
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
              <!-- tabel education -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Skill</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Keahlian</th>
                          <th>Prensetase (%)</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($skill as $s)
                        <tr>
                          <td>{{ $s->keahlian }}</td>
                          <td>{{ $s->persentase }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusSkill') }}/{{ $s->id }} ">Hapus</a>
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
               <!-- tabel education -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>CV</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cv as $c)
                        <tr>
                          <td>{{ $c->nama }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusCV') }}/{{ $c->id }} ">Hapus</a>
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
              <!-- tabel berita -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Berita</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Isi</th>
                          <th>Gambar</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($berita as $b)
                        <tr>
                          <td>{{ $b->judul }}</td>
                          <td><?=str_replace('"','',$b->isi)?></td>
                          <td>{{ $b->gambar }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusBerita') }}/{{ $b->id }} ">Hapus</a>
                          </td>
                        </tr>
                        @endforeach   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
              <!-- tabel portfolio -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Portfolio</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Nama projek</th>
                          <th>Jenis projek</th>
                          <th>Client</th>
                          <th>Isi</th>
                          <th>Gambar</th>
                          <th>Tindakan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($portfolio as $p)
                        <tr>
                          <td>{{ $p->nama }}</td>
                          <td>{{ $p->jenis }}</td>
                          <td>{{ $p->client }}</td>
                          <td><?=str_replace('"','',$p->isi)?></td>
                          <td>{{ $p->gambar }}</td>
                          <td>
                            <a class="btn btn-primary" style="width: 80px; float: left; background-color: #DB6574; color: #fff" href="{{ url('hapusPortfolio') }}/{{ $p->id }} ">Hapus</a>                          </td>
                        </tr>   
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end table -->
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
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/front.js') }}"></script>
  </body>
</html>