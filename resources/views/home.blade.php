@extends('navbar')
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider1.jpg')}}" alt="First slide"
                     style="height: 500px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider2.jpeg')}}" alt="Second slide"
                     style="height: 500px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Third slide"
                     style="height: 500px; object-fit: cover">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section class="container card mt--6" style="z-index: 100; background-color: #dadada">

        <div style="height: 100px" class="text-center mt-5 ">
            <h2 class="text-success">Private Tour</h2>
            <div class="d-block bg-gradient-success ml-auto mr-auto"
                 style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>

        <div class="row">
            @foreach($private as $v)
                <div class="col-3">
                    <div class="card" style="height: 350px">
                        <img class="card-img-top" src="{{asset('/uploads/image')}}/{{$v->url}}" alt="Card image cap"
                             style="height: 150px; object-fit: cover; width: 100%">
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                            <h4 class="card-title text-primary mt-0 mb-1 text-success">
                                Rp. {{ number_format($v->harga, 0, ',', '.') }} /Orang</h4>
                            <p class="card-text text-sm text-black-50"
                               style="height: 50px; overflow: hidden">{{ $v->deskripsi }}</p>
                            <a href="/product/{{ $v->id }}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="height: 100px" class="text-center mt-5 ">
            <h2 class="text-success">Paket Tour</h2>
            <div class="d-block bg-gradient-success ml-auto mr-auto"
                 style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>

        <div class="row">
            @foreach($open as $v)
                <div class="col-3">
                    <div class="card" style="height: 350px">
                        <img class="card-img-top" src="{{asset('/uploads/image')}}/{{$v->url}}" alt="Card image cap"
                             style="height: 150px; object-fit: cover; width: 100%">
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                            <h4 class="card-title text-primary mt-0 mb-1 text-success">
                                Rp. {{ number_format($v->harga, 0, ',', '.') }} /Orang</h4>
                            <p class="card-text text-sm text-black-50"
                               style="height: 50px; overflow: hidden">{{ $v->deskripsi }}</p>
                            <a href="/product/{{ $v->id }}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('script')


@endsection
