@extends('adminlte.master')

@section('content')
  @foreach($answers as $key => $answer)
    <div class="card w-100">
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p class="card-text">{{ $answer->isi }}</p>
          <footer class="blockquote-footer">{{$answer->user_id}}</footer>
        </blockquote>
        <a href="/pertanyaan/{{$question->id}}" type="submit" class="btn btn-primary btn-sm">Tampilkan Rincian</a>
        <a href="/pertanyaan/{{$question->id}}/edit" type="submit" class="btn btn-secondary btn-sm">Edit</a>
        <a href="#" type="submit" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  @endforeach
@endsection