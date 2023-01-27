@extends('layout.main')
@section('title','Home')

@section('content')
 <p></p>
  <p></p>
<h1 style="text-align: center;">Lista de usuarios:</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
      <tr>
        <th scope="row">{{$users->id}}</th>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
      @endforeach
    </tbody>
  </table>



    
@endsection