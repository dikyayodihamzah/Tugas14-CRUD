@extends('adminlte.master')

@section('content')
  <table id="index-table" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach($questions as $key => $question)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{ $question->isi }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection