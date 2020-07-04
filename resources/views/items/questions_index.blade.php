@extends('adminlte.master')

@section('content')
  <div class="ml-3">
    <h1>Daftar Pertanyaan</h1>
    <a href="/pertanyaan/create" type="submit" class="btn btn-primary">Tanyakan sesuatu</a>
  </div>
  

  <div class="mt-4 mx-3">
    <table id="questions-table" class="table table-bordered table-striped">  
      <thead class="text-center">
        <tr>
          <th>No</th>
          <th class="col-2">Pertanyaan</th>
          <th>Detail</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach($questions as $key => $question)
          <tr>
            <td class="align-middle text-center">{{$key + 1}}</td>
            <td>
              <h6 class="font-weight-bold">{{ $question->judul }}</h6><br>
              <p>{{ $question->isi }}</p>
            </td>
            <td>
              <a href="/jawaban/{{$question->id}}" type="submit" class="btn btn-primary btn-sm">Lihat balasan</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
@endsection