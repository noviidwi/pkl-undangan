@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/create.css') }}">
@endsection
@section('mainbar')
    @if (session('success'))
        <div class="alertSuccess">
            {{session('success')}}
        </div>
    @endif
<form action="/dashboard/create" method="post" enctype="multipart/form-data" id="post">
        @csrf
        <div class="mainInput grid">
            <div>
                <label for="id_transaksi">Id Transaksi</label>
                <input type="text" name="id_transaksi" id="id_transaksi" value="{{ old('id_transaksi') }}" required>
            </div>
            @error('slug')
                {{ $message }}
            @enderror
            <div>
                <label for="id_customer">Id Customer</label>
                <input type="text" name="id_customer" id="id_customer" value="{{ old('id_customer') }}" required>
            </div>
            @error('id_customer')
                {{ $message }}
            @enderror  
            <div>
                <label for="tanggal_transaksi">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}" required>
            </div>
            @error('tanggal-transaksi')
                {{ $message }}
            @enderror          
            <div>
                <label for="jumlah_transaksi">Jumlah Transaksi</label>
                <input type="text" name="jumlah_transaksi" id="jumlah_transaksi" value="{{ old('jumlah_transaksi') }}" required>
            </div>
            @error('jumlah_transaksi')
                {{ $message }}
            @enderror            
            <h3>Resepsi</h3>
            <div>
                <label for="tempat_resepsi">Tempat</label>
                <input type="text" name="tempat_resepsi" id="tempat_resepsi" value="{{ old('tempat_resepsi') }}" required>
            </div>
            @error('tempat_resepsi')
                {{ $message }}
            @enderror
        
        </div>
        <button type="submit" class="mb">Send</button>
    </form>
@endsection
@section('script')
    <script src="{{ asset('js/admin/create.js') }}"></script>
@endsection
