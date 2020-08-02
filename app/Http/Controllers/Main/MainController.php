<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;

class MainController extends CustomController
{
    //

    /**
     * MainController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $products = Products::all();
        $open = $products->filter(function ($products){
            return $products->tipe == 'open';
        });
        $private = $products->filter(function ($products){
            return $products->tipe == 'private';
        });
        return view('home')->with(['open' => $open, 'private' => $private]);
    }

    public function detailPrivate($id)
    {
        $product = Products::where('tipe', '=', 'private')->where('id', '=', $id)->firstOrFail();
        $products = Products::where('tipe', '=', 'private')->get();
        $products->take(4);
        return view('detailprivate')->with(['product' => $product, 'products' => $products->take(4)]);
    }
    public function detailOpen($id)
    {
        $product = Products::where('tipe', '=', 'open')->where('id', '=', $id)->firstOrFail();
        $products = Products::where('tipe', '=', 'open')->get();
        $products->take(4);
        return view('detailpaket')->with(['product' => $product, 'products' => $products->take(4)]);
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function history()
    {
        $trans = Transaction::with(['produk', 'payment'])->where('user_id', '=', auth()->id())->get();
        return view('user.transaksi.transaksi')->with(['trans' => $trans]);
    }

    public function detailHistory($id)
    {
        $trans = Transaction::with('produk')->where('id', '=', $id)->firstOrFail();
        return view('user.transaksi.detailtransaksi')->with(['trans' => $trans]);
    }

    public function profile()
    {
        $user = User::findOrFail(auth()->id());
        return view('user.profil.profil')->with(['user' => $user]);
    }

    public function updateProfile()
    {
        $data = [
          'nama' => $this->postField('nama'),
          'phone' => $this->postField('phone'),
          'email' => $this->postField('email'),
          'alamat' => $this->postField('alamat'),
        ];

        $this->update(User::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
