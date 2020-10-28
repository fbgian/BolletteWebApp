@extends('layouts.base')

@section('title','HOMEPAGE')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bills as $bill)
    <tr>
      <th scope="row">{{ $bill -> id}} </th>
      <td>{{ $bill -> name}}</td>
      <td>{{ $bill -> price}}</td>
      <td>{{ $bill -> period}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection