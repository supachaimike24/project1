@extends('layout.master')
@section('content')
    <h1>หมวดหมู่ข่าว</h1>
    <a href="/category/create">เพิ่มหมวดหมู่ใหม่</a>
    <table>
        <thead>

            <tr>
                <td>ลำดับ</td>
                <td>ชื่อ</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
            </thead>

            <thead>
                <tbody>
                    @foreach($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td><a href="category/edit/{{$item->id}}"> แก้ไข</a> </td>
                    <td><a href="category/delete/{{$item->id}}">ลบ</a> </td>
                </tr>
                @endforeach
                </thead>
                </tbody>
    </table>


    @endsection
