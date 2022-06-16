@extends('layout/main')
@section('title', 'Mahasiswa')
@section('k1', 'ID')
@section('k2', 'NIM')
@section('k3', 'Nama')
@section('k4', 'Gender')
@section('k5', 'Jurusan')
@section('k6', 'Bidang Minat')
@section('k7', 'Edit Data')
@section('content')
    @foreach ($mahasiswa as $no => $mhs)
        <tr>
            <th scope="row">{{ $mahasiswa->firstitem() + $no }}</th>
            <td>{{ $mhs -> nim }}</td>
            <td>{{ $mhs -> nama }}</td>
            <td>{{ $mhs -> gender }}</td>
            <td>{{ $mhs -> jurusan }}</td>
            <td>{{ $mhs -> bidang_minat }}</td>
            <td>
                {{-- tombol untuk edit data --}}
                <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                <a href="/mahasiswa/delete/{{ $mhs->id }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
    @endforeach
@endsection