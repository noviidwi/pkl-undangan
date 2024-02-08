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
            
            <h3>Identitas Wanita</h3>
            <div>
                <label for="nama_wanita">Nama</label>
                <input type="text" name="nama_wanita" id="nama_wanita" value="{{ old('nama_wanita') }}" required>
            </div>
            @error('nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="slug_nama_wanita">Nama sebutan</label>
                <input type="text" name="slug_nama_wanita" id="slug_nama_wanita" value="{{ old('slug_nama_wanita') }}" required>
            </div>
            @error('slug_nama_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="bapa_wanita">Nama Ayah</label>
                <input type="text" name="bapa_wanita" id="bapa_wanita" value="{{ old('bapa_wanita') }}" required>
            </div>
            @error('bapa_wanita')
                {{ $message }}
            @enderror
            <div>
                <label for="ibu_wanita">Nama Ibu</label>
                <input type="text" name="ibu_wanita" id="ibu_wanita" value="{{ old('ibu_wanita') }}" required>
            </div>
            @error('ibu_wanita')
                {{ $message }}
            @enderror
            <h3>Akad</h3>
            <div>
                <label for="tempat_akad">Tempat</label>
                <input type="text" name="tempat_akad" id="tempat_akad" value="{{ old('tempat_akad') }}" required>
            </div>
            @error('tempat_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="tanggal_akad">Tanggal</label>
                <input type="date" name="tanggal_akad" id="tanggal_akad" value="{{ old('tanggal_akad') }}" required>
            </div>
            @error('tanggal_akad')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_akad">waktu</label>
                <input type="text" name="jam_akad" id="jam_akad" value="{{ old('jam_akad') }}" required>
            </div>
            @error('jam_akad')
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
            <div>
                <label for="tanggal_resepsi">Tanggal</label>
                <input type="date" name="tanggal_resepsi" id="tanggal_resepsi" value="{{ old('tanggal_resepsi') }}" required>
            </div>
            @error('tanggal-resepsi')
                {{ $message }}
            @enderror
            <div>
                <label for="jam_resepsi">waktu</label>
                <input type="text" name="jam_resepsi" id="jam_resepsi" value="{{ old('jam_resepsi') }}" required>
            </div>
            @error('jam_resepsi')
                {{ $message }}
            @enderror
        </div>
        <div hidden>
            <label for="model" hidden>Model</label>
            <select name="model" id="model" hidden>
                <option value="simplify">Simplify</option>
            </select>
        </div>
        <button type="submit" class="mb">Send</button>
    </form>
@endsection
@section('script')
    <script src="{{ asset('js/admin/create.js') }}"></script>
@endsection
