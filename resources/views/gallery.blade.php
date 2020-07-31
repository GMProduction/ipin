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
                     style="height: 300px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider2.jpeg')}}" alt="Second slide"
                     style="height: 300px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Third slide"
                     style="height: 300px; object-fit: cover">
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
            <h2 class="text-success">Gallery Kami</h2>
            <div class="d-block bg-gradient-success ml-auto mr-auto" style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>

        <div class="row">
            {{--            @foreach($products as $v)--}}
            <div class="col-4">
                <div class="card" style="height: 350px">
                   <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 350px">
                    <a style="display: block; height: 100%" href="{{asset('assets/img/slider/slider1.jpg')}}" ><img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 350px; "></a>
                </div>
            </div>
            {{--            @endforeach--}}
        </div>
    </section>

@endsection

@section('script')


@endsection
