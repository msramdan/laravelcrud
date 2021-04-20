@extends('template.template')
@section('title','Halaman Home')
@section('content')
    <h1>Halaman Home</h1>
    <h1>Nama : <?= $nama ?></h1>
    <h1>Kelas : {{$kelas}}</h1>
@endsection
