@extends('adminlte.master')

@section('content')
  <div class="mx-3 mt-3">
    <div class="card card-primary w-100">
    
      {{-- header --}}
      <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan</h5>
      </div>

      {{-- isi form --}}
      <form action="/pertanyaan/{{$question->id}}" method="POST" class="ml-4 mr-4">
      @csrf
      @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" value="{{$question->judul}}" id="judul">
          </div>
          <div class="form-group">
            <label for="isi">Isi:</label>
            <input type="textarea" class="form-control" name="isi" value="{{$question->isi}}" id="isi">
          </div>
          <button type="submit" class="btn btn-primary">Perbarui</button>
        </div>
      </form>
    </div>
    
  </div>
@endsection