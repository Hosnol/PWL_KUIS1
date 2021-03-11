@extends('layouts.app')

@section('content')
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th> Nama pegawai </th>
            <th> Jenis kelamin </th>
            <th> Jabatan </th>
            <th> No telepon </th>
            <th> Alamat </th>
        </tr>

        @foreach($pgi as $item)
            <tr>
                <td> {{$item->nama_pegawai}} </td>
                <td> {{$item->jk}} </td>
                <td> {{$item->jabatan}} </td>
                <td> {{$item->no_telepon}} </td>
                <td> {{$item->alamat}} </td>
            </tr>
        @endforeach
    </table>
</div>
{{$pgi->links()}}
@endsection