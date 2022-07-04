@extends('master')
@section('konten')
<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form method="post" action="{{ route('presensi.store') }}" enctype="multipart/form-data" accept-charset="utf-8">
			@method('post')
				@csrf
				<div class="card-body">
					<h4 class="card-title">Tambah Presensi</h4>

					<!-- /.box-header -->
					<div class="box-body">

						<div class="form-group">
							<label>Tanggal <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<input name="tanggal" type="date" class="form-control date" value="" placeholder="Tanggal">
						</div>
						<div class="form-group">
							<label>Pegawai <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<select name="pengajar_id" class="form-control">
							@forelse ($pengajar as $item)
								<option value="{{$item->id}}">{{$item->nama}}</option>
								@empty
							@endforelse
							</select>


						</div>
						<div class="form-group">
							<label>Kehadiran<small data-toggle="tooltip" title="Wajib diisi">*</small></label>
							<select name="status" class="form-control">
								<option>---Absensi---</option>
								<option>Hadir</option>
								<option>Alpha</option>
								<option>Izin</option>
								<option>Sakit</option>
							</select>

						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Simpan</button>
							<a class="btn btn-danger">Batal</a>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</form>
		</div>
	</div>
</div>

@endsection