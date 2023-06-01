<x-admin-layout>
    <x-slot name="title">
        - مدیریت کاربران
    </x-slot>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3"><i class="fa-light fa-plus"></i> کاربر جدید </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">شناسه</th>
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">ایمیل</th>
                <th scope="col">سطح کاربری</th>
                <th scope="col">تاریخ عضویت</th>
                <th scope="col">وضعیت کاربر</th>
                <th scope="col">عملیات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>تست</td>
                <td>test@gmail.com</td>
                <td>admin</td>
                <td>1402/03/11</td>
                <td>آنلاین</td>
                <td class="text-center">
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-light fa-edit"></i> </a>
                    <a href="#" class="text-decoration-none text-danger"><i class="fa-light fa-trash"></i> </a>
                </td>
            </tr>
        </tbody>
    </table>
</x-admin-layout>
