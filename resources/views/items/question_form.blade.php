@extends('adminlte.master')

@section('content')
  <div class="mx-3 mt-3">
    <div class="card card-primary w-100">
    
      {{-- header --}}
      <div class="card-header">
        <h3 class="card-title">Pertanyaan Baru</h5>
      </div>

      {{-- isi form --}}
      <form action="/pertanyaan" method="POST" class="ml-4 mr-4">
      @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul" id="judul">
          </div>
          <div class="form-group">
            <label for="isi">Isi:</label>
            <input type="textarea" class="form-control" name="isi" placeholder="Masukkan isi" id="isi">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    
  </div>
@endsection