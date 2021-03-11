@extends('layouts.app')

@section('content')
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th> Nama pelanggan </th>
            <th> Jenis kelamin </th>
            <th> No telepon </th>
            <th> Alamat </th>
        </tr>

        @foreach($plgn as $item)
            <tr>
                <td> {{$item->nama_pelanggan}} </td>
                <td> {{$item->jk}} </td>
                <td> {{$item->no_telepon}} </td>
                <td> {{$item->alamat}} </td>
            </tr>
        @endforeach
    </table>
</div>
{{$plgn->links()}}
@endsection