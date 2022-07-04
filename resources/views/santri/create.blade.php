@extends('master')
@section('konten')
<form class="row" action="{{ route('santri.store') }}" method="POST">
    @csrf
    @method('POST')
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
                                @error('nama_lengkap')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <input name="nama_lengkap" type="text" class="form-control" value="" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                @error('tempat_lahir')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukan Tempat Lahir">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                @error('tanggal_lahir')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <input name="tanggal_lahir" type="date" class="form-control" placeholder="Masukan Tanggal lahir">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                @error('alamat_lengkap')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <textarea class="form-control" name="alamat_lengkap" placeholder="Masukan Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    @error('jenis_kelamin')
                                    <small class="alert alert-dabger">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Peringtan</strong> {{ $message }}
                                        </div>
                                    </small>
                                    @enderror
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" checked>
                                                Laki-Laki
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Unit Sekolah <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                @error('jenjang_sekolah')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <select name="jenjang_sekolah" class="form-control">
                                    <option value="">-Pilih Unit Sekolah-</option>
                                    <option value="0">Semua Unit Sekolah</option>
                                    <option value="TAHFIZH">TAHFIZH</option>
                                    <option value="MTS">MTS</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="form-group">
                            <label>Nama Lengkap Ibu <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            @error('nama_ibu')
                            <small class="alert alert-dabger">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Peringtan</strong> {{ $message }}
                                </div>
                            </small>
                            @enderror
                            <input name="nama_ibu" type="text" class="form-control" value="" placeholder="Masukan Nama Ibu">
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap Ayah <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            @error('nama_ayah')
                            <small class="alert alert-dabger">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Peringtan</strong> {{ $message }}
                                </div>
                            </small>
                            @enderror
                            <input name="nama_ayah" type="text" class="form-control" placeholder="Masukan Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>No Telepon <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            @error('no_telp_ayah')
                            <small class="alert alert-dabger">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Peringtan</strong> {{ $message }}
                                </div>
                            </small>
                            @enderror
                            <input name="no_telp_ayah" type="number" class="form-control" placeholder="Masukan No Telepon">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pilihan Kelas</label>

                            <div class="col-sm-9">
                                @error('kelas_id')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <select name="kelas_id" class="form-control">
                                    @forelse($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->kelas_nama}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pilihan Program</label>

                            <div class="col-sm-9">
                                @error('program_id')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <select name="program_id" class="form-control">
                                    @forelse($program as $item)
                                    <option value="{{$item->id}}">{{$item->program_nama}}</option>
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
                                @error('email')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <input name="email" type="text" class="form-control" value="" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label>Username <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                @error('username')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
                                <input name="username" type="text" class="form-control" value="" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label>Password <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                                @error('password')
                                <small class="alert alert-dabger">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Peringtan</strong> {{ $message }}
                                    </div>
                                </small>
                                @enderror
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
                                <input type="radio" class="form-check-input" name="status" id="status1" value="Aktif" checked>
                                Aktif
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