@extends('adminlte.master')

@section('content')
  <table id="index-table" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($questions as $key => $question)
        <tr>
          <td>{{$key + 1}}</td>
          <td>
            <h6>{{ $question->judul }}</h6><br>
            <p>{{ $question->isi }}</p>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection