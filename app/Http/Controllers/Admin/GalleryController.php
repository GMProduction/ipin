<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Gallery;
use App\Models\Products;
use Illuminate\Support\Arr;

class GalleryController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $galery = Gallery::all();

        return view('admin.gallery.gallery')->with(['gallery' => $galery]);
    }

    public function addForm()
    {
        if($this->request->isMethod('POST')){
            $image = $this->generateImageName('gambar');
            $data  = [
                'nama' => $this->postField('nama'),
                'url'  => $image,
            ];
            $this->uploadImage('gambar', $image, 'gallery');
            $this->insert(Gallery::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }
        return view('Admin.gallery.tambahgallery');
    }

    public function editForm($id)
    {
        if ($this->request->isMethod('POST')) {
            $image = $this->generateImageName('gambar');
            $data  = [
                'nama'          => $this->postField('nama'),
            ];
            if ($this->request->hasFile('gambar')) {
                $image = $this->generateImageName('gambar');
                $data   = Arr::add($data, 'url', $image);
                $this->uploadImage('gambar', $image, 'gallery');
            }

            $this->update(Gallery::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }
        $galery = Gallery::where('id',$id)->first();

        return view('admin.gallery.editgallery')->with(['gallery' => $galery]);
    }

    public function hapus($id)
    {
        try {
            Gallery::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
