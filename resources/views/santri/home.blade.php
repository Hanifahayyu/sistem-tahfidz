@extends('master')
@section('konten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <h4 class="card-title">Data Santri</h4>
                <a href="{{ route('santri.create') }}"  class="btn btn-primary">Tambah Santri</a>
                </div>
                <div class="pt-3">
                    <table class="table table-bordered" id="table-santri">
                        <thead>
                            <tr>
                                <th>
                                    NO
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Program
                                </th>
                                <th>
                                    Kelas
                                </th>
                                <th>
                                    Jenis Kelamin
                                </th>
                                <th>
                                    Telepon
                                </th>
                               
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->program_nama }}</td>
                                <td>{{ $item->kelas_nama }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->no_telp_ayah }}</td>

                                <td>

                                   
                                    <a class="btn btn-warning" href="{{ route('santri.edit', $item->id) }}">edit</a>
                                    <a class="btn btn-danger" href="{{ url('santri/delete', $item->id) }}">delete</a>

                    

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
        $('#table-santri').dataTable({
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