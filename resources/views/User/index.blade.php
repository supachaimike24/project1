@extends('layout.master')
@section('content')
    <h1>รายการผู้ใช้งาน</h1>
    <a href="/user/create">เพิ่มผู้ใช้ใหม่</a>
    <table>
        <thead>

            <tr>
                <td>name</td>
                <td>Username</td>
                <td>email</td>
                <td>password</td>
            </tr>
            </thead>

            <thead>
                <tbody>
                    @foreach($user as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td><a href="User/edit/{{$item->id}}"> แก้ไข</a> </td>
                    <td><a href="User/delete/{{$item->id}}">ลบ</a> </td>
                </tr>
                @endforeach
                </thead>
                </tbody>
    </table>


    @endsection
