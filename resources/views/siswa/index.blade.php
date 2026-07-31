@extends('siswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>REKAYASA PERANGKAT LUNAK – SMK PGRI 3 MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('siswa.create') }}"> Input siswa</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success" id="error-alert">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error" id="error-alert">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($siswa as $sw)
<tr>
    <td>{{ $sw->nis }}</td>
    <td>{{ $sw->nama }}</td>
    <td>{{ $sw->kelas }}</td>
    <td>{{ $sw->jurusan }}</td>
    <td>
        <form action="{{ route('siswa.destroy',['siswa'=>$sw->id_siswa]) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-info" href="{{ route('siswa.show',$sw->id_siswa) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('siswa.edit',$sw->id_siswa) }}">Edit</a>
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                Delete
            </button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">
        <b>Data Not Found</b>
    </td>
</tr>
@endforelse
</table>
@endsection