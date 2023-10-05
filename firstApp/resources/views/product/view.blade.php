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
          <a href="/product/insert" class="btn btn-primary mb-3">Tambah Data</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Create at</th>
                <th scope="col">updated at</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $list)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$list->nama_products}}</td>
                  <td>{{$list->harga}}</td>
                  <td>{{$list->stock}}</td>
                  <td>{{$list->deskripsi}}</td>
                  <td>
                    {{-- <a href="http://localhost:8000{{ Storage::url($list->gambar_product) }}">{{ $list->gambar_product }}</a> --}}
                    <img src="http://localhost:8000{{ Storage::url($list->gambar_product) }}" alt="" width="60">
                  </td>
                  <td>{{$list->created_at}}</td>
                  <td>{{$list->updated_at}}</td>
                  <td>
                      <a href="#" class="btn btn-primary">detil</a>
                      <a href="/edit/product/{{$list->id}}" class="btn btn-warning">update</a>
                      <a href="/delete/product/{{$list->id}}" class="btn btn-danger" onclick="return confirm('Yakin?')">delete</a>
                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
            </div>
            <!-- End of Main Content -->
@include('backend.main_layout.footer')