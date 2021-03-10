@extends('layouts.app')

@section('content')
<div class="card-body">
    <table class="table table-bordered">
         <tr>
             <th> Nama_supplier </th>
             <th> No_telepon </th>
             <th> Alamat </th>
        </tr>

        @foreach($spr as $item)
            <tr>
                <td> {{$item->nama_supplier}} </td>
                <td> {{$item->no_telepon}} </td>
                <td> {{$item->alamat}} </td>
            </tr>
         @endforeach
    </table>
</div>
{{$spr->links()}}
@endsection