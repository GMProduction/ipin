<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Produk;
use App\Models\Transaction;
use App\Models\Vendor;
use DateTime;
use Illuminate\Http\Request;

class TransactionController extends CustomController
{
    //
    /**
     * TransactionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cartPage($id)
    {
        $products = Produk::findOrFail($id);
        return view('cart')->with(['product' => $products]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function addToCart()
    {

        try {
            $tgl1 = DateTime::createFromFormat('m/d/Y', $this->postField('sewa'));
            $tgl2 = DateTime::createFromFormat('m/d/Y', $this->postField('kembali'));
            $sewa = $tgl1->format('Y-m-d');
            $kembali = $tgl2->format('Y-m-d');
            $data = [
                'user_id' => auth()->id(),
                'tgl_mulai' => $sewa,
                'status' => 'Belum di konfirmasi',
                'tgl_akhir' => $kembali,
                'harga' => $this->postField('harga'),
                'product_id' => $this->postField('id')
            ];

            $transaction = $this->insert(Transaction::class, $data);
            return $this->jsonResponse($transaction->id, 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pagePayment($id)
    {
        $vendors = Vendor::all();
        $transaction = Transaction::with('produk')->where('id', '=', $id)->where('user_id', '=', auth()->id())->firstOrFail();
        return view('payment')->with(['transaction' => $transaction, 'vendors' => $vendors]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send()
    {
        $image = $this->generateImageName('gambar');
        $data = [
            'transactions_id' => $this->postField('id'),
            'vendors_id' => $this->postField('bank'),
            'user_id' => auth()->id(),
            'url' => $image,
            'description' => '',
            'status' => '0',
        ];

        $this->uploadImage('gambar', $image, 'bukti');
        $this->insert(Payment::class, $data);
        return redirect('/');
    }
}
