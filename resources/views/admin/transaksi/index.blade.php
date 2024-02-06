@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/manage.css')}}">
@endsection
@section('mainbar')
    <div class="search">
        <form action="/dashboard/transaksi" method="GET">
            <input type="text" name="search" placeholder="Masukkan slug">
            <button type="submit"><img src="{{asset('svg/other/search.svg')}}"></button>
        </form>
    </div>
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Transaksi</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>ID Transaksi</th>
                        <th>ID Customer</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($pemasukan as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->id_transaksi }}</td>
                            <td>{{ $data->id_customer }}</td>
                            <td>{{ $data->kupon }}</td>
                            <td>{{ $data->tanggal_transaksi }}</td>
                            <td>{{ $data->total_transaksi }}</td>
                            <td>{{ $data->bukti_transaksi }}</td>
                            <td>{{ $data->status }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    @endsection



    