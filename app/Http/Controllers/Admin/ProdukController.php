<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Products;
use Illuminate\Support\Arr;

class ProdukController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexOpen(){
        $open = Products::where('tipe','open')->get();
        return view('admin.paket.paket')->with(['produk' => $open]);
    }

    public function indexPrivat(){
        $open = Products::where('tipe','private')->get();
        return view('admin.privat.privat')->with(['produk' => $open]);
    }

    public function addForm(){
        $image = $this->generateImageName('gambar');
        $data = [
            'nama' => $this->postField('nama'),
            'tipe' => $this->postField('tipe'),
            'harga' => $this->postField('harga'),
            'min_kuota' => $this->postField('minquota'),
            'max_kuota' => $this->postField('maxquota'),
            'tgl_berangkat' => $this->postField('tgl_berangkat'),
            'deskripsi' => $this->postField('fasilitas'),
            'durasi' => $this->postField('durasi'),
            'kota' => $this->postField('kota'),
            'wisata' => $this->postField('wisata'),
            'url'         => $image,
        ];
        $this->uploadImage('gambar', $image, 'image');
        $this->insert(Products::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }

    public function editForm($id){
        if($this->request->isMethod('POST')){
            $data = [
                'nama' => $this->postField('nama'),
                'tipe' => $this->postField('tipe'),
                'harga' => $this->postField('harga'),
                'min_kuota' => $this->postField('minquota'),
                'max_kuota' => $this->postField('maxquota'),
                'tgl_berangkat' => $this->postField('tgl_berangkat'),
                'deskripsi' => $this->postField('fasilitas'),
                'durasi' => $this->postField('durasi'),
                'kota' => $this->postField('kota'),
                'wisata' => $this->postField('wisata'),
            ];
            if ($this->request->hasFile('gambar')) {
                $image = $this->generateImageName('gambar');
                $data   = Arr::add($data, 'url', $image);
                $this->uploadImage('gambar', $image, 'image');
            }

            $this->update(Products::class, $data);
            return redirect()->back()->with(['success' => 'success']);
        }

        if ($this->request->get('aksi') == 'privat'){
            $produk = Products::where('tipe','private')->where('id',$id)->first();
            return view('admin.privat.editprivat')->with(['produk' => $produk]);
        }else{
            $produk = Products::where('tipe','open')->where('id',$id)->first();
            return view('admin.paket.editpaket')->with(['produk' => $produk]);
        }
    }

    public function hapus($id)
    {
        try {
            Products::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
