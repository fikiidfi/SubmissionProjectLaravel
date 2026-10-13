
@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

    <h2>Detail Mahasiswa</h2>

    <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>

    <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>

    <p><strong>IPK:</strong> {{ number_format($mhs['ipk'], 2, ',', '.') }}</p>

    <p>
        <strong>Keterangan:</strong>
        @if ($mhs['ipk'] >= 3.5)
            Cum Laude
        @elseif ($mhs['ipk'] >= 3.0)
            Baik
        @else
            Perlu ditingkatkan
        @endif
    </p>

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke Daftar Mahasiswa
    </a>

@endsection
