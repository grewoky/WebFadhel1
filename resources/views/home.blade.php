@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->username}}</b>, Anda Login sebagai <b>{{Auth::user()->username}}</b>.</h4>
@endsection