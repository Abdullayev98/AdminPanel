<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("assets/admin/css/all.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/admin/css/select2.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/admin/css/select2-bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/admin/css/adminlte.min.css") }}">
  <style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src=" {{ asset("assets/admin/img/user1-128x128.jpg") }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src=" {{ asset("assets/admin/img/user8-128x128.jpg") }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src=" {{ asset("assets/admin/img/user3-128x128.jpg") }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url("/") }}" target="_blank" class="brand-link">
      <img src=" {{ asset("assets/admin/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bosh sahifa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("assets/admin/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-archive"></i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('categories.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List of Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('categories.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>New Category</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>
                      Tag
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('tags.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>List of Tags</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('tags.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>New Tag</p>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Post
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List of Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('posts.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>New Post</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="mx-2">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
            <div class="alert alert-danger mt-2">
              <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach  
              </ul>  
            </div>            
          @endif

          @if (session()->has('success'))
            <div class="alert alert-success mt-2">
              {{ session("success") }}
            </div>            
          @endif
        </div>
      </div>
    </div>
    @yield("content")
  </div>  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset("assets/admin/js/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset("assets/admin/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/admin/js/select2.full.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("assets/admin/js/adminlte.min.js") }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset("assets/admin/js/demo.js") }}"></script>
<!-- CKeditor 4  -->
<script src="{{ asset('assets/admin/ckeditor5/build/ckeditor.js') }}"></script>
 <script src="{{ asset('assets/admin/ckfinder/ckfinder.js') }}"></script>

<script>
    //active bo'lishi dropdown
    $('.nav-sidebar a').each(function(){
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if(link == location){
            $(this).addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
        }
    });
    // inputdagi tanlangan rasmni nomi chiqishi uchun
    $(function () {
        bsCustomFileInput.init();
    });
 </script>
 
 
 {{-- <script>
     ClassicEditor
         .create( document.querySelector( '#content' ), {
             ckfinder: {
                 uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
             },
             image: {
                 // You need to configure the image toolbar, too, so it uses the new style buttons.
                 toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],
 
                 styles: [
                     // This option is equal to a situation where no style is applied.
                     'full',
 
                     // This represents an image aligned to the left.
                     'alignLeft',
 
                     // This represents an image aligned to the right.
                     'alignRight'
                 ]
             },
             toolbar: {
                 items: [
                     'heading',
                     '|',
                     'bold',
                     'italic',
                     'link',
                     'bulletedList',
                     'numberedList',
                     '|',
                     'indent',
                     'outdent',
                     'alignment',
                     '|',
                     'blockQuote',
                     'insertTable',
                     'undo',
                     'redo',
                     'CKFinder',
                     'mediaEmbed'
                 ]
             },
             language: 'ru',
             table: {
                 contentToolbar: [
                     'tableColumn',
                     'tableRow',
                     'mergeTableCells'
                 ]
             },
         } )
         .catch( function( error ) {
             console.error( error );
         } );
 
     ClassicEditor
         .create( document.querySelector( '#description' ), {
             toolbar: [ 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
         } )
         .catch( function( error ) {
             console.error( error );
         } );
 </script> --}}
</body>
</html>
