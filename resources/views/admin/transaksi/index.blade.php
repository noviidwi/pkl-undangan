@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/transaksi.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
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
        </div>
    </div>
    @endsection



    