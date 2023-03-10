
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/dashboard">Aisya</a>
          <a class="sidebar-brand brand-logo-mini" href="/dashboard">A</a>
        </div>
        @include('layout.sidebar')
      </nav>
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('layout.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title"> Daftar Arsip </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Arsip</li> --}}
                  </ol>
                </nav>
              </div>
              <div class="row">
                
                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Daftar Arsip</h4>
                        {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                        </p>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th> No </th>
                                <th> Nama </th>
                                <th> NIK </th>
                                <th> Alamat </th>
                                <th> Jenis Kelamin </th>                                             
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($arsip as $a)                                                                                                                                            
                            <tr>
                                <td class="py-1">{{ $a->id }}</td>
                                <td> {{ $a->name }} </td>
                                <td>{{ $a->nik }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{$a->jenis_kelamin}}</td>
                                <td></td>
                                
                              </tr>                                                                  
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
  
                {{-- Footer --}}
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                
              </div>
            </footer>
            <!-- partial -->
          </div>


        {{-- <div class="container page-body-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> NIK </th>
                            <th> Alamat </th>
                            <th> Jenis Kelamin </th>
                            <th></th>                            
                            <th>Aksi</th>                  
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($arsip as $a)                                                    
                        <tr>
                            <td class="py-1">{{ $a->id }}</td>
                            <td> {{ $a->name }} </td>
                            <td>{{ $a->nik }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{$a->jenis_kelamin}}</td>
                            <td></td>
                            <td>
                                <a href="edit/{{ $a->id }}"><button type="button" class="btn btn-outline-success">Edit</button></a>
                                <button type="button" class="btn btn-outline-danger">Hapus</button>
                            </td>                            

                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
    </div> --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset("assets/vendors/js/vendor.bundle.base.js") }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset("assets/vendors/chart.js/Chart.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/progressbar.js/progressbar.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jvectormap/jquery-jvectormap.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
    <script src="{{ asset("assets/vendors/owl-carousel-2/owl.carousel.min.js") }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset("assets/js/off-canvas.js") }}"></script>
    <script src="{{ asset("assets/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("assets/js/misc.js") }}"></script>
    <script src="{{ asset("assets/js/settings.js") }}"></script>
    <script src="{{ asset("assets/js/todolist.js") }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset("assets/js/dashboard.js") }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>