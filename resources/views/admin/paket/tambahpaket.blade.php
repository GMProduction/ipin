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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Tour</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/paket">Data Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="/admin/produk/adddata" enctype="multipart/form-data">
                            @csrf
                            <input id="tipe" name="tipe" value="open" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tour">Nama Paket Tour</label>
                                            <input type="text" required id="tour" name="nama"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label for="kota">Kota Tujuan</label>
                                        <select class="form-control" id="kota" name="kota">
                                            <option value="solo">Solo</option>
                                            <option value="jogja">Jogja</option>
                                            <option value="bandung">Bandung</option>
                                            <option value="surabaya">Surabaya</option>
                                            <option value="bali">Bali</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="wisata">Tempat Wisata</label>
                                            <input type="text" required id="wisata" name="wisata"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="jadwal" class="form-control-label">Jadwal</label>
                                            <input class="form-control" type="date" value="2020-11-23" id="jadwal" name="tgl_berangkat">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="maxquota">Min. Quota</label>
                                            <input type="number" required id="minquota" name="minquota"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="maxquota">Max. Quota</label>
                                            <input type="number" required id="maxquota" name="maxquota"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="harga">Harga /Orang</label>
                                            <input type="number" required id="harga" name="harga"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="waktu">Waktu /hari</label>
                                            <input type="number" required id="waktu" name="durasi"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="fasilitas">Fasilitas</label>
                                            <input type="text" required id="fasilitas" name="fasilitas"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <a>Gambar</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar"
                                                   name="gambar" lang="en">
                                            <label class="custom-file-label" for="gambar">Select file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection

@section('script')


@endsection
