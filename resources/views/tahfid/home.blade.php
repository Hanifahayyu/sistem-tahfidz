@extends('master')
@section('konten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Data Tahfidz</h4>
                    <a href="{{ route('tahfid.create') }}" class="btn btn-primary">Tambah Tahfidz</a>
                </div>
                <div class="pt-3">
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Peringtan</strong> {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kehadiran</th>
                                <th>Kategori</th>
                                <th>Total Hafalan</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td colspan="4">
                                    <form action="{{ route('tahfid.store') }}" method="POST">
                                        @csrf
                                        @method('POST')

                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="hidden" name="santri_id" value="{{$item->santri_id}}">
                                                <select name="kehadiran" class="form-control">
                                                    <option value="">-Pilih Kehadiran-</option>
                                                    <option value="Hadir">Hadir</option>
                                                    <option value="Alpha">Alpha</option>
                                                    <option value="Izin">Izin</option>
                                                    <option value="Sakit">Sakit</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="kategori" class="form-control">
                                                    <option value="">-Pilih Kategori-</option>
                                                    <option value="Setoran">Setoran</option>
                                                    <option value="Mengulang">Mengulang</option>
                                                    <option value="Murojaah">Murojaah</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" name="halaman" class="form-control" id="exampleInputName1" placeholder="1 juz, 4 halaman">
                                            </div>
                                            <div class="col-md-3">
                                                <a href="{{ url('tahfid/detail/'.$item->santri_id) }}" class="btn btn-primary mr-2">Detail</a>

                                                <button type="submit" class="btn btn-success">Simpan</a>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>

                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection