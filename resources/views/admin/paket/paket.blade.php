@extends('admin.base')
@section('content')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Menyimpan Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-gradient-teal pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Paket Tour</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Paket Tour</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/paket/tambahpaket" class="btn btn-md btn-neutral">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Paket Tour</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort text-center" data-sort="name">#</th>
                                <th scope="col" class="sort text-center" data-sort="budget">Nama Paket Tour</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Kota Tujuan</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Nama Tempat Wisata</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Jadwal</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Min Quota</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Max Quota</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Harga /orang</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Waktu /hari</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Fasilitas</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Foto</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($produk as $p)
                                <tr>
                                    <td class="text-center">{{$loop->index+1}}</td>
                                    <td class="text-center">{{$p->nama}}</td>
                                    <td class="text-center">{{$p->kota}}</td>
                                    <td class="text-center">{{$p->wisata}}</td>
                                    <td class="text-center">{{$p->tgl_berangkat}}</td>
                                    <td class="text-center">{{$p->min_kuota}} Orang</td>
                                    <td class="text-center">{{$p->max_kuota}} Orang</td>
                                    <td class="text-right">Rp. {{number_format($p->harga,0,',','.')}} / orang</td>
                                    <td class="text-center">{{$p->durasi}} hari</td>
                                    <td class="text-center">{{$p->deskripsi}}</td>
                                    <td class="text-center"><img src="{{asset('/uploads/image')}}/{{$p->url}}" height="50"></td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only btn-primary text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="/admin/paket/editpaket/{{$p->id}}">Edit</a>
                                                <a class="dropdown-item" href="#!" onclick="hapus('{{$p->id}}','{{$p->nama}}')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });

        function hapus(id, name) {
            Swal.fire({
                title: 'Apa anda yakin untuk menghapus Paket Tour '+name+' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(async (result) => {
                if (result.value) {
                    let data = {
                        '_token': '{{csrf_token()}}'
                    };
                    let get = await $.post('/admin/produk/hapus/' + id, data);
                    window.location.reload();
                }
            })
        }
    </script>

@endsection
