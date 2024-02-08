@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/create.css') }}">
@endsection

@section('mainbar')
    <form action="/dashboard/transaksi/{{ $transaksi->id }}/update" method="post">
        @method('patch')
        @csrf
        <div class="mainInput grid">
            <div>
                <label for="id_transaksi">ID Transaksi</label>
                <input type="text" name="id_transaksi" id="id_transaksi" value="{{ old('id_transaksi', $transaksi->id_transaksi) }}" readonly>
            </div>
            @error('id_transaksi')
                <div class="error">{{ $message }}</div>
            @enderror
            <div>
                <label for="id_customer">ID Customer</label>
                <input type="text" name="id_customer" id="id_customer" value="{{ old('id_customer', $transaksi->id_customer) }}" required>
            </div>
            @error('id_customer')
                <div class="error">{{ $message }}</div>
            @enderror
            <div>
                <label for="tanggal_transaksi">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ old('tanggal_transaksi', $transaksi->tanggal_transaksi) }}" required>
            </div>
            @error('tanggal_transaksi')
                <div class="error">{{ $message }}</div>
            @enderror
            <div>
                <label for="total_transaksi">Total Transaksi</label>
                <input type="number" name="total_transaksi" id="total_transaksi" value="{{ old('total_transaksi', $transaksi->total_transaksi) }}" required>
            </div>
            @error('total_transaksi')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class=button-container>
            <button type="submit" class="mb">Update</button>
        </div>
    </form>
@endsection