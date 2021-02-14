@extends('layout.master')
@section('content')
    <h1>รายการผู้ใช้งาน</h1>
    <a href="/post/create">เพิ่มข่าวใหม่</a>
    <table>
        <thead>

            <tr>
                <td>ลำดับ</td>
                <td>หัวข้อ</td>
                <td>รูปประจำข่าว</td>
                <td>หมวดหมู่ข่าว</td>

            </tr>
            </thead>

            <thead>
                <tbody>
                    @foreach($posts as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->title}}</td>
                    <td>$iitem->thumbnail</td>
                    <td>{{$item->user->name}}</td>
                    <td><a href="User/edit/{{$item->id}}"> แก้ไข</a> </td>
                    <td><a href="User/delete/{{$item->id}}">ลบ</a> </td>
                </tr>
                @endforeach
                </thead>
                </tbody>
    </table>


    @endsection
