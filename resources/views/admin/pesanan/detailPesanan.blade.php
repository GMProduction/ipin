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
                        <img src="{{asset('assets/img/theme/img-1-1000x600.jpg')}}" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="{{asset('assets/img/theme/team-4.jpg')}}" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-5">

                            <h5 class="mb-3">Data Penyewa</h5>
                            <div class="text-left">
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">
                                    {{ $transaksi->user->nama }}
                                </h6>
                                <p class="mb-1">email</p>
                                <h6 class="h3 mb-4">
                                    {{ $transaksi->user->email }}

                                </h6>

                                <p class="mb-1">Phone</p>
                                <h6 class="h3 mb-4">
                                    {{ $transaksi->user->phone }}

                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">
                                    {{ $transaksi->user->alamat }}

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
{{--                                                        @foreach($transaksi->product as $p)--}}
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-center"><img src="{{asset('/uploads/image')}}/{{$transaksi->product->url}}" height="50"></td>
                                                                <td class="text-center">{{$transaksi->product->nama}}</td>
                                                                <th scope="col" class="sort text-center" data-sort="budget">{{$transaksi->product->tipe}} tour</th>
                                                                <th scope="col" class="sort text-center" data-sort="budget">{{$transaksi->tgl_berangkat}}</th>
                                                                <td class="text-center"> {{$transaksi->kuota}} orang</td>
                                                                <td class="text-center"> Rp. {{number_format($transaksi->harga/$transaksi->kuota,0,',','.')}}</td>
                                                                <td class="text-center"> Rp. {{number_format($transaksi->harga,0,',','.')}}</td>
                                                            </tr>
{{--                                                        @endforeach--}}
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
                                                            <th scope="col" class="sort" data-sort="budget">Tanggal
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
                                                        @forelse($transaksi->payment as $p)
                                                            <tr>
                                                                <td>{{ $loop->index + 1}}</td>
                                                                <td class="budget">
                                                                    {{$p->created_at}}
                                                                </td>

                                                                <td class="budget">
                                                                    {{$p->vendor->nama}}
                                                                </td>

                                                                <td class="budget">
                                                                    <a target="_blank" href="{{asset('uploads/bukti')}}/{{$p->url}}"><img
                                                                            src="{{asset('uploads/bukti')}}/{{$p->url}}"
                                                                            style="height: 75px; width: 75px; object-fit: cover"></a>
                                                                </td>
                                                                @if($p->status == '0')
                                                                    <td class="budget text-center">
                                                                        <a class="btn btn-sm btn-success" onclick="terima('{{$transaksi->id}}','{{$p->id}}')">Terima</a>
                                                                        <a class="btn btn-sm btn-danger" id="tolak" data-id="{{$p->id}}" href="#!" class="btn btn-lg btn-danger">Tolak</a>
                                                                    </td>
                                                                @else
                                                                    <td class="text-center">{{$p->status =='1' ? 'Terima':'Tolak'}} </td>
                                                                @endif
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td class="text-center" colspan="5">Belum ada data pembayaran</td>
                                                            </tr>
                                                        @endforelse
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
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-1"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggalPinjam">Tanggal Pesan</label>
                                                <input type="text" id="tanggalPinjam" name="tanggal" readonly
                                                       class="form-control" value="{{$transaksi->created_at}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="status">Status</label>
                                                <input type="text" id="status" name="status" readonly
                                                       class="form-control" value="{{$transaksi->status == '0' ? 'Menunggu' : ($transaksi->status == '1' ? 'Proses' : ($transaksi->status == '2' ? 'Selesai' : 'Tolak'))}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="total">Total Harga</label>
                                                <input type="text" id="total" name="total" readonly
                                                       class="form-control" value="Rp. {{number_format($transaksi->harga,0,',','.')}}">
                                            </div>
                                        </div>


                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            @if($transaksi->status == '0')
                                                <button type="submit" class="btn btn-lg btn-primary btn_status" data-status="1">Proses</button>
                                                <button type="submit" class="btn btn-lg btn-danger btn_status" data-status="3">Tolak</button>
                                                {{--                                                <button type="submit" class="btn btn-lg btn-danger btn_status" data-status="tolak">Tolak</button>--}}
                                            @elseif($transaksi->status == '1')
                                                <button type="submit" class="btn btn-lg btn-success btn_status" data-status="2">Selesai</button>
                                            @elseif($transaksi->status == '3')
                                                <h2>Ditolak</h2>
                                            @else
                                                <h2>Selesai</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post">
                    @csrf
                    <input id="id" name="id" value="" hidden>
                    <input id="action" name="action" value="payment" hidden>
                    <input id="status" name="status" value="2" hidden>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Alasan Menolak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="alasan" name="alasan" placeholder="Tulis alasan ..." required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        function terima(a, id) {
            Swal.fire({
                title: 'Apa anda yakin untuk menerima pembayaran ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(async (result) => {
                if (result.value) {
                    let data = {
                        '_token': '{{csrf_token()}}',
                        'action': 'payment',
                        'status': '1',
                        'id': id
                    };
                    console.log(data);
                    let get = await $.post('/admin/pesanan/detailpesanan/' + a, data);
                    console.log(get);
                    window.location.reload();
                }
            })
        }

        $(document).on('click', '.btn_status', function () {
            var status = $(this).data('status');
            var text = '';
            switch (status) {
                case 1 :
                    text = 'Proses';
                    break;
                case 2 :
                    text = 'Selesai';
                    break;
                case 3 :
                    text = 'Tolak';
                    break;
            }
            Swal.fire({
                title: 'Info',
                text: 'Apakah anda yakin merubah status pemesanan menjadi ' + text + ' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Cancel'
            }).then(async (result) => {
                if (result.value) {
                    let data = {
                        '_token': '{{csrf_token()}}',
                        'status': status,
                        'id': '{{$transaksi->id}}'
                    };
                    console.log(data);
                    let get = await $.post('/admin/pesanan/detailpesanan/{{$transaksi->id}}', data);
                    console.log(get);
                    window.location.reload();
                }
            })
        });

        $(document).on('click', 'a#tolak', function () {
            var id = $(this).data('id');
            $('#modal #id').val(id);
            $('#modal').modal('show');
        })
    </script>

@endsection
