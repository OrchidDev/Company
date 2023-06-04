<x-admin-layout>
    <x-slot name="title">
        - مدیریت منو
    </x-slot>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3"><i class="fa-light fa-plus"></i> افزودن منو </a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px">شناسه</th>
            <th scope="col">عنوان</th>
            <th scope="col">آیکون</th>
            <th scope="col">پیوند</th>
            <th scope="col">ترتیب</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->icon}}</td>
                <td>{{$row->link}}</td>
                <td style="width: 10px">{{$row->position}}</td>
                <td class="text-center" style="width: 30px">
                    <a href="" class="text-decoration-none text-dark"><i class="fa-light fa-edit"></i> </a>
                    <a class="text-decoration-none text-danger"><i class="fa-light fa-trash"></i> </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-admin-layout>
