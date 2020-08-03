@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5 card p-3">
        <div class="row ">
            <div class="col-7">
                <img src="{{asset('/uploads/image')}} / {{ $product->url }}"
                     style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3 text-success">{{ $product->nama }}</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0">Min
                    Quota: {{ $product->min_kuota }} Orang </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0">Max
                    Quota: {{ $product->max_kuota }} Orang </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0">Waktu: {{ $product->durasi }}
                    Hari </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50">{{ $product->deskripsi }} </p>
                <a style="font-size: 20px; font-weight: bold"
                   class="text-success">Rp. {{ number_format($product->harga, 0, ',', '.') }} /Orang</a>


                <div style="display: flex; align-items: center" class="mb-4 mt-3">
                    <i class="ni ni-single-02" style="font-size: 30px; margin-right: 20px"></i>
                    <a href="#" class="btn btn-white mr-0 quantity__minus text-dark"><span>-</span></a>
                    <input name="quantity" id="qty" type="number" class="text-center quantity__input" value="1"
                           style="height: 45px; width: 70px; border: 1px solid #e8e3e3">
                    <a class="btn btn-success quantity__plus"><span class="text-white">+</span></a>

                </div>

                <div class="form-group">
                    <label for="tanggal" class="form-control-label">Tentukan Tanggal</label>
                    <input class="form-control" type="date" value="2020-08-01" id="tanggal" name="tanggal">
                </div>


                <button type="button" onclick="addToCart()" class="btn btn-primary mt-0">Pesan Sekarang</button>

            </div>
        </div>


    </section>

    <section class="container">
        <div class="d-block bg-gradient-success" style="height: 3px; width: 300px; margin-top: 50px">

        </div>

        <div class="text-left mt-2 mb-5">
            <h2>Private tour kami yang lain</h2>
        </div>

        <div class="row">
            @foreach($products as $v)
                <div class="col-3">
                    <div class="card" style="height: 350px">
                        <img class="card-img-top" src="{{asset('/uploads/image')}}/{{$v->url}}" alt="Card image cap"
                             style="height: 150px; object-fit: cover; width: 100%">
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                            <h4 class="card-title text-primary mt-0 mb-1 text-success">Rp. {{ number_format($v->harga, 0, ',', '.') }} /Orang</h4>
                            <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">{{ $v->deskripsi }}</p>
                            <a href="/private/{{ $v->id }}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection

@section('script')

    <script>
        async function addToCart() {
            let data = {
                '_token': "{{ csrf_token() }}",
                id: '{{ $product->id }}',
                harga: '{{ $product->harga}}',
                qty: $('#qty').val(),
                tgl: $('#tanggal').val(),
                tipe: 'private',
            };
            try {
                let res = await $.post('/ajax/addToCart', data);
                if (res['status'] === 202) {
                    alert(res['payload']);
                }
                if(res['status'] === 200){
                    alert('Pemesanan Berhasil!')
                    window.location.href = '/payment/' + res['payload'];
                }
            } catch (e) {
                alert('Terjadi Kesalahan\nPesanan Gagal Masuk Ke Keranjang\n' + e.message);
            }
        }

        $(document).ready(function () {
            const minus = $('.quantity__minus');
            const plus = $('.quantity__plus');
            const input = $('.quantity__input');
            minus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                input.val(value);
            });

            plus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                value++;
                input.val(value);
            })
        });
    </script>
@endsection
