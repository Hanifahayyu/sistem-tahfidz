@extends('master')
@section('konten')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Data user</h4>
                   <div>
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah user</a>
                   </div>
                </div>
                <div class=" pt-3">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                    <table class="table table-striped" id="table-user">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->level }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('user.edit', $item->id) }}">edit</a>
                                    <a class="btn btn-danger" href="{{ url('user/delete', $item->id) }}">delete</a>
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
    $(document).ready(function(){
        let documentTitle = $('.card-title').text();
        $('#table-user').dataTable({
        dom: 'Bfrtip',
        buttons: [
                {
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
    } );
    });
</script>
@endsection