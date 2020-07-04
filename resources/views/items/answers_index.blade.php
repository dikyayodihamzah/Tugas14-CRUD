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
      @foreach($answers as $key => $answer)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{ $answer->isi }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection