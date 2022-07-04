@extends('master')
@section('konten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Data Kelas</h4>
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
                </div>
                <div class="pt-3">
                    <table class="table table-bordered" id="table-kelas">
                        <thead>
                            <tr>
                                <th>
                                    NO
                                </th>
                                <th>
                                    Kode
                                </th>
                                <th>
                                    Nama Kelas
                                </th>
                                <th>
                                    Tingkat
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ $item->kelas_kode }}</td>
                                <td>{{ $item->kelas_nama }}</td>
                                <td>{{ $item->kelas_tingkat }}</td>
                                <td>

                                    <a class="btn btn-warning" href="{{ route('kelas.edit', $item->id) }}">edit</a>
                                    <a class="btn btn-danger" href="{{ url('kelas/delete', $item->id) }}">delete</a>

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
<script>
    $(document).ready(function() {
        let documentTitle = $('.card-title').text();
        $('#table-kelas').dataTable({
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