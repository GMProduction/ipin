<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Artikel;
use App\Models\Gallery;
use Illuminate\Support\Arr;

class ArtikelController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $artikel = Artikel::all();

        return view('admin.artikel.artikel')->with(['artikel' => $artikel]);
    }

    public function addForm()
    {
        if ($this->request->isMethod('POST')) {
            $image = $this->generateImageName('gambar');
            $data  = [
                'judul' => $this->postField('judul'),
                'isi'   => $this->postField('isi'),
                'url'   => $image,
            ];
            $this->uploadImage('gambar', $image, 'artikel');
            $this->insert(Artikel::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }

        return view('admin.artikel.tambahartikel');
    }

    public function editForm($id)
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'judul' => $this->postField('judul'),
                'isi'   => $this->postField('isi'),
            ];
            if ($this->request->hasFile('gambar')) {
                $image = $this->generateImageName('gambar');
                $data  = Arr::add($data, 'url', $image);
                $this->uploadImage('gambar', $image, 'artikel');
            }
            $this->update(Artikel::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }
        $artikel = Artikel::where('id', $id)->first();

        return view('admin.artikel.editartikel')->with(['artikel' => $artikel]);
    }

    public function hapus($id)
    {
        try {
            Artikel::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
