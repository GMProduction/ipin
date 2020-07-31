@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5 card p-3">
        <div class="row ">
            <div class="col-12">
                <img src="{{asset('assets/img/slider/slider1.jpg')}}" style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-12">
                <p style="font-size: 30px; font-weight: bold" class="mb-3 text-success">Pantai Pasir Merah Muda</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0" >Pasir merah muda adalah ......................................................</p>

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
