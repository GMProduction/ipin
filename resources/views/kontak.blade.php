@extends('navbar')
@section('content')

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-7">
                <img src="{{asset('assets/img/slider/slider1.jpg')}}" style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3">CV. Berkat Abadi Makmur</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-2" >Jl. P. Sudirman No.35
                    RT/RW 01/02 Jarakan - Sidoharjo
                    Tanjunganom - Nganjuk, Jatim
                    Kode pos 64482 - Indonesia</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-2" >berkatabadi@gmail.com</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-2" >0814 3123 5512</p>


            </div>
        </div>

        <div class="d-block bg-gradient-success" style="height: 3px; width: 300px; margin-top: 50px">

        </div>

        <div class="text-left mt-2 mb-3">
            <h2>Lokasi</h2>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8318731778872!2d111.98374061415454!3d-7.807616079676966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7856db5fb406ad%3A0xde450cbf2d8a0455!2sJl.%20Margo%20Tani%2C%20Bujel%2C%20Kec.%20Mojoroto%2C%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1596144759295!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </section>

@endsection

@section('script')


@endsection
