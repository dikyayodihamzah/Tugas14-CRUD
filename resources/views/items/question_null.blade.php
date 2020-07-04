@extends('adminlte.master')

@section('content')
  {{-- jika pertanyaan kosong --}}
  <div class="ml-3">
    <h1>Belum ada pertanyaan</h1>
    <a href="/pertanyaan/create" type="submit" class="btn btn-primary">Beri pertanyaan</a>
  </div>
@endsection