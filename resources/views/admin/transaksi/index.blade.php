@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/manage.css')}}">
@endsection
@section('mainbar')
    <div class="add">
        <button class="btn-success"><a href="/dashboard/transaksi/create">Tambah Transaksi</a></button>
    </div>
    <div class="search">
        <form action="/dashboard/manage" method="GET">
            <input type="text" name="search" placeholder="Masukkan Nomor Transaksi">
            <button type="submit"><img src="{{asset('svg/other/search.svg')}}"></button>
        </form>
    </div>    
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
    <table cellspacing="0">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Customer</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $data->id_transaksi }}</td>
                    <td>{{ $data->id_customer }}</td>
                    <td>{{ $data->tanggal_transaksi }}</td>
                    <td>{{ $data->formatRupiah('jumlah_transaksi') }}</td>
                    <td class="action">
                        <a href="/dashboard/manage/{{$data->id_transaksi}}/edit" class="edit"><img src="{{asset('svg/other/edit.svg')}}"></a>
                        <form action="/dashboard/manage/{{$data->id_transaksi}}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Delete?')"><img src="{{asset('svg/other/delete.svg')}}"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection


    