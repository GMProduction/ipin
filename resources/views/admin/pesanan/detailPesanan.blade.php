@extends('admin.base')
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
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-5">

                            <h5 class="mb-3">Data Penyewa</h5>
                            <div class="text-left">
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->no_identitas }}--}}
                                </h6>
                                <p class="mb-1">email</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->nama_pemohon }}--}}
                                </h6>

                                <p class="mb-1">Phone</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->tempat_lahir }}--}}
                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->tanggal_lahir }}--}}
                                </h6>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Tour</h3>
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

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Pembayaran</h3>
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
                                                            <th scope="col" class="sort" data-sort="name">#</th>
                                                            <th scope="col" class="sort" data-sort="budget">Nama
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Vendor
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Bukti
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        <tr>

                                                            <td class="budget">
                                                                1
                                                            </td>

                                                            <td class="budget">
                                                               Juh
                                                            </td>

                                                            <td class="budget">
                                                               BCA
                                                            </td>

                                                            <td class="budget">
                                                                <img src="{{asset('assets/img/brand/logo.jpg')}}"  href="{{asset('assets/img/brand/logo.jpg')}}" style="height: 100px">
                                                            </td>
                                                            <td class="budget">
                                                                <a class="btn btn-sm btn-success text-white">Terima</a>
                                                                <a class="btn btn-sm btn-danger text-white">Tolak</a>
                                                            </td>
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
                                            <button type="submit" class="btn btn-lg btn-success">Tombol Status</button>
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
