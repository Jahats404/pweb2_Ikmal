
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
          <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}">Aisya</a>
          <a class="sidebar-brand brand-logo-mini" href="{{ route('dashboard') }}">A<A></A></a>
        </div>
        @include('layout.sidebar')
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layout.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Edit Arsip </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  {{-- <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li> --}}
                </ol>
              </nav>
            </div>
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Arsip</h4>
                    <p class="card-description"> Edit Arsip </p>
                    <form action="/arsip/{{ $arsip->id }}" method="POST" class="forms-sample">
                        @method('put')
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" for="name" value="{{ $arsip->name }}" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" for="nik" value="{{ $arsip->nik }}" placeholder="NIK">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Alamat</label>
                        <textarea class="form-control" id="alamat" for="alamat" name="alamat" placeholder="Alamat" rows="4">{{ $arsip->alamat }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option value="L" @if ($arsip->jenis_kelamin == "L") selected @endif>Laki Laki</option>
                          <option value="P" @if ($arsip->jenis_kelamin == "P") selected @endif>Perempuan</option>
                        </select>
                      </div>
                      
                      <button type="submit" name="submit" value="Save" class="btn btn-primary mr-2">+ Tambahkan</button>
                      {{-- <button class="btn btn-dark">Cancel</button> --}}
                    </form>
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
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    
  </body>
</html>