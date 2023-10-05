<?php

namespace App\Http\Controllers;

use App\Models\Product_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product_model::all();
        return view('product/view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/insert_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'nama_products' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required',
            'gambar_product' => 'required',
        ]);

        // mengembalikan pesan error
        if($validator -> fails()){
            return back() -> withErrors($validator -> messages());
        }

        $data = [
            'nama_products' => $request -> nama_products,
            'harga' => $request -> harga,
            'stock' => $request -> stock,
            'deskripsi' => $request -> deskripsi,
            'gambar_product' => $request -> gambar_product,
        ] ;

        if($request -> hasFile('gambar_product')){
            $gambar_product = $request -> file('gambar_product');

            $path = Storage::putFileAs('public/images', $gambar_product,$gambar_product->getClientOriginalName());

            $data['gambar_product'] = $path;
        }

        $products = Product_model::create($data);

        if($products){
            // jika tidak eror akan menambahkan data ke database
            return Redirect()->to('/')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function show(Product_model $product_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_model $product_model)
    {
        return view('product/edit_form', compact('product_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_model $product_model)
    {
        // validasi data
        $validator = Validator::make($request->all(),[
            
            'id' => 'required',
            'nama_products' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required',
            'gambar_product' => 'required',
        ]);

        // menampilkan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'nama_products' => request()->nama_products,
            'harga' => request()->harga,
            'stock' => request()->stock,
            'deskripsi' => request()->deskripsi,
            'gambar_product' => request()->gambar_product,
        ];

        if($request->hasFile('gambar_product')){
            if(Storage::get($product_model->gambar_product)){
                Storage::delete($product_model->gambar_product);

            }

            $gambar_product = $request->file('gambar_product');

            $path = Storage::putFileAs('public/images',$gambar_product,$gambar_product->getClientOriginalName());
            $data['gambar_product'] = $path;
        }

        // jika data tidak eror maka yang ada di database diganti data form
        $product_model = $product_model->update($data);

        if($product_model){

            // jika berhasil update tambahkan ke tampilan index
            return Redirect()->to('/')->withSuccess('data berhasil diubah');
        }else{

            // jika gagal update maka akan dikembalikan ke form dengan pesan eror
            return back()->withErrors('data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_model $product_model)
    {
        // dd($product_model->gambar_product);

        if(Storage::get($product_model->gambar_product)){
            Storage::delete($product_model->gambar_product);

        }

        $product_model = $product_model -> delete();

        // dd($product_model->$gambar_product);

            if($product_model){
                return back()->withSuccess('Data berhasil dihapus');
            }else{
                return back()->withErrors('Data gagal dihapus');
            }
    }
    
}
