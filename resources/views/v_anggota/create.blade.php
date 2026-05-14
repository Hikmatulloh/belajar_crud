@extends('layout')
@section('content')
    <h3 class="mb-4">{{ $judul }}</h3>
    <form action="{{ route('anggota.store') }}" method="post" class="w-50">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}"
                class="form-control @error('nama') is-invalid @enderror">

            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">HP</label>
            <input type="text" name="hp" placeholder="Masukkan Nomor HP" value="{{ old('hp') }}"
                class="form-control @error('hp') is-invalid @enderror">
            @error('hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
@endsection
