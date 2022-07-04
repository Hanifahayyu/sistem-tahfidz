@extends('master')
@section('konten')
<form class="row" action="{{ route('santri.update', $items->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Tambah Santri</h4>
                <!-- /.box-header -->
                <br>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Data Santri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Data Orang Tua</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Program</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Akun Login</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama Lengkap <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="nama_lengkap" type="text" class="form-control" value="{{ old('nama_lengkap') ?? $items->nama_lengkap }}" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="tempat_lahir" type="text" class="form-control" value="{{ old('tempat_lahir') ?? $items->tempat_lahir }}" placeholder="Masukan Tempat Lahir">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="tanggal_lahir" type="date" class="form-control" value="{{ old('tanggal_lahir') ?? $items->tanggal_lahir }}" placeholder="Masukan Tanggal lahir">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat_lengkap" placeholder="Masukan Alamat">{{ old('alamat_lengkap') ?? $items->alamat_lengkap }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" @if($items->jenis_kelamin == 'laki-laki')checked @endif>
                                                Laki-Laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan" @if($items->jenis_kelamin == 'perempuan')checked @endif>
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Unit Sekolah <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <select name="jenjang_sekolah" class="form-control">
                                    <option value="">-Pilih Unit Sekolah-</option>
                                    <option value="0" @if($items->jenis_kelamin == 'jenjang_sekolah')selected @endif>Semua Unit Sekolah</option>
                                    <option value="TAHFIZH" @if($items->jenis_kelamin == 'jenjang_sekolah')selected @endif>TAHFIZH</option>
                                    <option value="MTS" @if($items->jenis_kelamin == 'jenjang_sekolah')selected @endif>MTS</option>
                                    <option value="MA" @if($items->jenis_kelamin == 'jenjang_sekolah')selected @endif>MA</option>
                                    <option value="MI" @if($items->jenis_kelamin == 'jenjang_sekolah')selected @endif>MI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="form-group">
                            <label>Nama Lengkap Ibu <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            <input name="nama_ibu" type="text" class="form-control" value="{{ old('nama_ibu') ?? $items->nama_ibu }}" placeholder="Masukan Nama Ibu">
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap Ayah <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            <input name="nama_ayah" type="text" class="form-control"  value="{{ old('nama_ayah') ?? $items->nama_ayah }}" placeholder="Masukan Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>No Telepon <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            <input name="no_telp_ayah" type="number" class="form-control" value="{{ old('no_telp_ayah') ?? $items->no_telp_ayah }}" placeholder="Masukan No Telepon">
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pilihan Kelas</label>
                            <div class="col-sm-9">
                                <select name="kelas_id" class="form-control">
                                    @forelse($kelas as $item)
                                    
                                        <option value="{{$item->id}}" @if($items->kelas_id == $item->id)selected @endif>{{$item->kelas_nama}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pilihan Program</label>
                            <div class="col-sm-9">
                                <select name="program_id" class="form-control">
                                    @forelse($program as $item)
                                        <option value="{{$item->id}}" @if($items->program_id == $item->id)selected @endif>{{$item->program_nama}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="login-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="box-body">
                        <div class="form-group">
                                <label>Email <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="email" type="text" class="form-control" value="{{ old('email') ?? $items->email }}"  placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label>Username <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="username" type="text" class="form-control" value="{{ old('username') ?? $items->username }}"  placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label>Password <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                <input name="password" type="password" class="form-control" value="" placeholder="Masulan Password">
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">*) Kolom wajib diisi.</p>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Tidak Aktif" @if($items->status == 'Tidak Aktif')checked @endif>
                                Tidak Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Aktif"  @if($items->status == 'Aktif')checked @endif>
                                Aktif
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Tamat" @if($items->status == 'Tamat')checked @endif>
                                Tamat
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Pindah Pesantren" @if($items->status == 'Pindah Pesantren')checked @endif>
                                Pindah Pesantren
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Drop Out" @if($items->status == 'Drop Out')checked @endif>
                                Drop Out
                            </label>
                        </div>
                        <br>
                        <label>Foto Profil</label>
                       
                        <input type="file" id="student_img" name="student_img">
                        <br><br><br>
                        <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        <a href="" class="btn btn-block btn-info">Batal</a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</form>

@endsection