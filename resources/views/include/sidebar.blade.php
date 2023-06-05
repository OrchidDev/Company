<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار ارکیده</div>
    <div style="width: 250px">
        <div class="p-3">
            <div class="d-grid gap-2">
                <a href="{{ route('sections.create') }}" type="button" class="btn btn-success mb-2"><i class="fa-light fa-plus"></i> بخش جدید </a>
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('users.index') }}" type="button" class="btn btn-light"><i class="fa-light fa-users"></i> لیست کاربران </a>
                @endif
                <a href="{{ route('menu.index') }}" type="button" class="btn btn-light"><i class="fa-light fa-folder-tree"></i> مدیریت منو </a>
                <a href="" type="button" class="btn btn-light"><i class="fa-light fa-header"></i> مدیریت سربرگ </a>
                <a href="" type="button" class="btn btn-light"><i class="fa-light fa-page"></i> مدیریت پابرگ </a>
                <div class="btn-group">
                    <a href="#" class="btn btn-light active rounded-0" aria-current="page">مدیریت منو</a>
                    <a href="#" class="text-decoration-none text-dark btn btn-light rounded-0" title="ویرایش"><i class="fa-light fa-edit"></i></a>
                    <a href="#" class="text-decoration-none text-dark btn btn-light rounded-0" title="نمایش"><i class="fa-light fa-eye"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
