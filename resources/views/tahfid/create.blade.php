@extends('master')
@section('konten')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Tahfidz</h4>
               
                <form class="forms-sample">
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleInputName1">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleInputEmail3">Kehadiran</label>
                        <div class="col-sm-9">
                            <select name="role_id" class="form-control">
                                <option value="">-Pilih Kehadiran-</option>
                                 
                                    <option value="1" >Hadir</option>
                                 
                                    <option value="2" >Alpha</option>
                                 
                                    <option value="3" >Izin</option>
                                    <option value="4" >Sakit</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleInputPassword4">Kategori</label>
                        <div class="col-sm-9">
                            <select name="role_id" class="form-control">
                                <option value="">-Pilih Kategori-</option>
                                 
                                    <option value="1" >Setoran</option>
                                 
                                    <option value="2" >Mengulang</option>
                                    <option value="2" >Murojaah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3" for="exampleSelectGender">Jml halaman</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Contoh 1 juz, 4 halaman">
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-warning">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection