@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/manage.css')}}">
@endsection
@section('mainbar')
    <div class="search">
        <form action="/dashboard/manage" method="GET">
            <input type="text" name="search" placeholder="Masukkan slug">
            <button type="submit"><img src="{{asset('svg/other/search.svg')}}"></button>
        </form>
    </div>
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
    <div class="show-entries">
        <label for="entries">Show</label>
        <select id="entries" name="entries" class="show-entries-select" onchange="this.form.submit()">
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <label>entries</label>
    </div>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Customer</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $data->id_transaksi }}</td>
                    <td>{{ $data->id_customer }}</td>
                    <td>{{ $data->tanggal_transaksi }}</td>
                    <td>{{ $data->jumlah_transaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection


    