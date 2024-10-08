@extends('layouts.master')

@section('content')
    <h1>Daftar Pemain</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemain as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_pemain }}</td>
                    <td>{{ $p->no_punggung }}</td>
                    <td>{{ $p->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
