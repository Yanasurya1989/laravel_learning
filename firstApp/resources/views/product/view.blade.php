@include('backend.main_layout.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('backend.main_layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('backend.main_layout.navbar')
    
                <div class="container">
      <div class="row">
        <div class="col md-12">
          <h1>Daftar Product</h1>
          <a href="/insert" class="btn btn-primary mb-3">Tambah Data</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="#" class="btn btn-primary">detil</a>
                    <a href="#" class="btn btn-warning">update</a>
                    <a href="#" class="btn btn-danger">delete</a>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
            </div>
            <!-- End of Main Content -->
@include('backend.main_layout.footer')