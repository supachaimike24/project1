@extends('layout.master')
@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/User/update/{{$User->id}}"method="post">
        @csrf
  name:  <input type="text"name="name"value="{{$User->name}}"required><br>
   suaname: <input type="text"name="suaname"value="{{$User->suaname}}"required><br>
   email: <input type="text"name="email"value="{{$User->email}}"required><br>
   password: <input type="text"name="password"value="{{$User->password}}"required><br>
    <button type="submit">บันทึก</button>
    </form>


    @endsection
