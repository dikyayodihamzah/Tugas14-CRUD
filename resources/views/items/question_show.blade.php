@extends('adminlte.master')

@section('content')
  <div class="card">
  <h5 class="card-header">Rincian</h5>
  <div class="card-body">
    <p>Author: {{$question->user_id}}</p>
    <p>Judul: {{$question->judul}}</p>
    <p>Isi: {{$question->isi}}</p>
    {{-- <p>Dibuat pada: {{$question->created_at}}</p>
    <p>Terakhir diedit: {{$question->edited_at}}</p> --}}
    <a href="/jawaban/{{$question->id}}" type="submit" class="btn btn-light btn-sm">Tampilkan Balasan</a>
    <a href="/pertanyaan/{{$question->id}}/edit" type="submit" class="btn btn-secondary btn-sm">Edit</a>
  </div>
</div>
@endsection