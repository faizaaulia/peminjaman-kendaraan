@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary btn-sm my-3 float-right" href="{{ route('kendaraan.create') }}">Tambah Kendaraan</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Nama Kendaraan</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->status }}</td>
                    <td>Aksi</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data kendaraan</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection