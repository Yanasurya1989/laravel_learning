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
    
                <div class="container p-5">
                    <h1>Tambah Data Product</h1>
                    <a href="/" class="btn btn-primary mb-5">Kembali ke list</a>
                    <form action="/add" method="post" enctype="multipart/form-data">
                        @if(session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ (session('errors'))->first() }}
                            </div>
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">nama_products</label>
                            <input type="text" class="form-control" id="nama_products" name="nama_products">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">stock</label>
                            <input type="text" class="form-control" id="stock" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">gambar_product</label>
                            <input type="file" class="form-control" id="gambar_product"  name="gambar_product" accept="aplication/msword, application/pdf">
                        </div>
            
            
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
    
            </div>
            <!-- End of Main Content -->
@include('backend.main_layout.footer')