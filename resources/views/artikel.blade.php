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
            <h2 class="text-success">Artikel</h2>
            <div class="d-block bg-gradient-success ml-auto mr-auto" style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>

        <div class="row">
            {{--            @foreach($products as $v)--}}
            <a href="/detailartikel" class="col-12"><div>
                <div class="card" style="height: 200px">
                    <div style="display:  flex; height: 100%">
                <img src="{{asset('assets/img/slider/slider1.jpg')}}" style="height: 100%; object-fit: cover; width: 200px; margin-right: 20px">

                        <div class="p-3">
                        <h3>Pantai Pasir Merah Muda Yang Jarang Di Ekspose</h3>
                            <p style="overflow: hidden" class="text-black-50">Pantai pasir ini berada di...............................................</p>
                        </div>
                    </div>
                </div>
            </div></a>
            {{--            @endforeach--}}
        </div>
    </section>

@endsection

@section('script')


@endsection
