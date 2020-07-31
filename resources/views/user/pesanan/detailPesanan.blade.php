@extends('user.base')
@section('content')

    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-teal opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">

                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Barang</h3>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card ">

                                                <!-- Light table -->
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort text-center" data-sort="name">#</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">gambar</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Nama Tour</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Jenis Tour</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Tanggal</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Quota</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">Harga /orang</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        {{--                    @foreach($produk as $p)--}}
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center"><img src="{{asset('assets/img/slider/slider1.jpg')}}"
                                                                                         style="height: 100px; width: 100px; object-fit: cover"></td>
                                                            <td class="text-center">Pantai Pasir Merah Muda</td>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Private Tour / paket Tour</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">17 Agustus 2020</th>
                                                            <td class="text-center"> 4 orang</td>
                                                            <td class="text-center"> Rp 100.000</td>
                                                            <td class="text-center"> Rp 400.000</td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/user/pemohon/update" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-1"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggalPinjam">Tanggal Pesan</label>
                                                <input type="text" id="tanggalPinjam" name="tanggalPinjam" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="status">Status</label>
                                                <input type="text" id="status" name="status" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="total">Total Harga</label>
                                                <input type="text" id="total" name="total" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>


                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <a type="submit" href="https://wa.me/62897123341?text=Saya%20ingin%20dengan%20menanyakan%20pesanan" class="btn btn-lg btn-primary">Upload Pembayaran</a>
                                            <a type="submit" href="https://wa.me/62897123341?text=Saya%20ingin%20dengan%20menanyakan%20pesanan" class="btn btn-lg btn-success">Contact Admin</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')


@endsection
