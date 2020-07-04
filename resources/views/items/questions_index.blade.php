@extends('adminlte.master')

@section('content')
  {{-- header --}}
  <div class="ml-3">
    <h1>Daftar Pertanyaan</h1>
    <a href="/pertanyaan/create" type="submit" class="btn btn-primary">Tanyakan sesuatu</a>
  </div>

  {{-- tabel --}}
  <div class="mt-4 mx-3">
     @foreach($questions as $key => $question)
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $question->judul }}</h5>
            <p class="card-text">{{ $question->isi }}</p>
            <footer class="blockquote-footer">{{$question->user_id}}</footer><br>
            <a href="/pertanyaan/{{$question->id}}" type="submit" class="btn btn-primary btn-sm">Tampilkan Rincian</a>
            <a href="/pertanyaan/{{$question->id}}/edit" type="submit" class="btn btn-secondary btn-sm">Edit</a>
            <form action="/pertanyaan/{{$question->id}}" method="POST" style="display: inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            </form>
          </div>
        </div>
      @endforeach
  </div>
  
@endsection