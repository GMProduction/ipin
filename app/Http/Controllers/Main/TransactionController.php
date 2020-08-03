<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Products;
use App\Models\Produk;
use App\Models\Transaction;
use App\Models\Vendor;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
            $product = Products::findOrFail($this->postField('id'));
            $min = $product->min_kuota;
            $max = $product->max_kuota;
            $kuota = $this->postField('qty');
            if ($kuota < $min) {
                return $this->jsonResponse('Kuota Minimal Kurang!', 202);
            }
            if ($kuota > $max) {
                return $this->jsonResponse('Kuota Melebihi Maksimal!', 202);
            }
            $data = [
                'user_id' => auth()->id(),
                'status' => '0',
                'no_transaksi' => 'TR-' . date('YmdHis'),
                'harga' => $this->postField('harga'),
                'kuota' => $kuota,
                'product_id' => $this->postField('id')
            ];
            $tgl = $product->tgl_berangkat;
            if ($this->postField('tipe') === 'private'){
                $tgl = $this->postField('tgl');
            }

            $data = Arr::add($data, 'tgl_berangkat', $tgl);
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
