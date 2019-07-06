<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="/css/fontawesome-free/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/dashboard.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/decoupled-document/ckeditor.js"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Artiom <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Categorii
        </div>

       
      <div class="categories">
          @foreach ($categories as $category)
              <li id="nav-category-{{$category->id}}" class="nav-item">
                  <a href={{route('category.show', $category->id)}} class="nav-link ">
                      <span class='cat-size nav-category-name-{{$category->id}}'>{{ $category->name }}</span>
                  </a>
              </li>
          @endforeach
              

        </div>
        <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                    <span class='cat-size'>Categories managment</span>
                </a>
        </li>   
        <div class="input-group mb-3 p-3 d-none" id="input-category" data-toggle="0"> 
            <input type="text" class="form-control" aria-label="Categorie" id="category-input">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="button" id="add-category-btn" data-url={{route('category.store')}}>Add</button>
            </div>

        </div>
        
        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        {{-- Aici este butonul de adaugare --}}
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="plusButton">+</button>
        </div>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <ul class="navbar-nav ml-auto">
                    <form action="{{route('logout')}}" method="POST" class="d-flex p-3">
                        @csrf
                        <button type='submit' class="btn btn-primary">Logout</button>
                    </form>
                </ul>
            </nav>
            
            @yield('content')
                  
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/js/jquery/jquery.min.js"></script>
  <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/js/jquery/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/chart-area-demo.js"></script>
  <script src="/js/chart-pie-demo.js"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</body>

</html>
