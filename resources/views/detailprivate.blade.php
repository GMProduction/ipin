@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5 card p-3">
        <div class="row ">
            <div class="col-7">
                <img src="{{asset('assets/img/slider/slider1.jpg')}}" style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3 text-success">Pantai Pasir Merah Muda</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0" >Min Quota: 4 Orang </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0">Max Quota: 8 Orang </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0" >Waktu: 2 Hari </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50" >Fasilitas: Minibus, Makan 6x (1 hari 3x), Free Tour Guide </p>
                <a style="font-size: 20px; font-weight: bold" class="text-success">Rp. 100.000 /Orang</a>

                <div style="display: flex; align-items: center" class="mb-4 mt-3">
                    <i class="ni ni-single-02" style="font-size: 30px; margin-right: 20px"></i>
                    <a href="#" class="btn btn-white mr-0 quantity__minus text-dark" ><span>-</span></a>
                    <input name="quantity" id="qty" type="number"  class="text-center quantity__input" value="1" style="height: 45px; width: 70px; border: 1px solid #e8e3e3">
                    <a class="btn btn-success quantity__plus"><span class="text-white">+</span></a>

                </div>

                <button type="button" class="btn btn-primary mt-0" >Pesan Sekarang</button>

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
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider1.jpg')}}" alt="Card image cap"
                         style="height: 150px; object-fit: cover; width: 100%">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Keraton Solo</h5>
                        <h4 class="card-title text-primary mt-0 mb-1 text-success">Rp. 50.000 /Orang</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Mobil terios, makan 3x, Free Tour guide</p>
                        <a href="/product/" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection

@section('script')

    <script>
        $(document).ready(function() {
            const minus = $('.quantity__minus');
            const plus = $('.quantity__plus');
            const input = $('.quantity__input');
            minus.click(function(e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                input.val(value);
            });

            plus.click(function(e) {
                e.preventDefault();
                var value = input.val();
                value++;
                input.val(value);
            })
        });
    </script>
@endsection
