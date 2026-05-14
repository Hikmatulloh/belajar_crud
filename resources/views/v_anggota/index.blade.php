@extends('layout')
@section('content')
    <h3 class="mb-3">{{ $judul }}</h3>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($index as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->hp }}</td>
                    <td>
                        <a href="{{ route('anggota.edit', $row->id) }}" class="btn btn-success btn-sm">Ubah</a>
                        <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin dihapus?')">Hapus</button>
                        </form>
                        <a href="{{ route('anggota.show', $row->id) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
