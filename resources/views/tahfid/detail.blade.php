@extends('master')
@section('konten')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Daftar Hafalan</h4>
                    <a href="{{ route('tahfid.index') }}" class="btn btn-danger">Kembali</a>
                </div>
                <div class="table-responsive pt-3">
                
                    <table class="table table-bordered" id="table-tahfid">
                        <thead>
                            <tr>
                                <th>
                                    NO
                                </th>
                                <th>
                                    Absensi
                                </th>
                                <th>
                                    Kategori
                                </th>
                                <th>
                                    Halaman
                                </th>
                                <th>
                                    Skor
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Waktu
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ $item->kehadiran }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->jml_halaman }}</td>
                                <td>{{ $item->skor_hafalan }}</td>
                                <td>{{ date('Y-m-d',strtotime($item->tanggal)) }}</td>
                                <td>{{ date('H:i:s',strtotime($item->tanggal)) }}</td>

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
<script>
    $(document).ready(function() {
        let documentTitle = $('.card-title').text();
        $('#table-tahfid').dataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle,
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle,
                    orientation: 'landscape',
                    pageSize: 'LEGAL',

                }
            ]
        });
    });
</script>
@endsection