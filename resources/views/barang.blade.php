@extends('layouts.app')

@section('content')
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th> Nama Barang </th>
            <th> Harga </th>
            <th> Stok </th>
        </tr>
        @foreach($brg as $item)
            <tr>
                <td> {{$item->nama_barang}} </td>
                <td> {{$item->harga}} </td>
                <td> {{$item->stok}} </td>
            </tr>
        @endforeach
    </table>
</div>
    {{ $brg->links() }}
@endsection