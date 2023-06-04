<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار ارکیده</div>
    <div style="width: 250px">
        <div class="p-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-success mb-2"><i class="fa-light fa-plus"></i> بخش جدید </button>
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('users.index') }}" type="button" class="btn btn-light"><i class="fa-light fa-users"></i> لیست کاربران </a>
                @endif
                <a href="{{ route('menu.index') }}" type="button" class="btn btn-light"><i class="fa-light fa-folder-tree"></i> مدیریت منو </a>
                <div class="card text-bg-light mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 col-md-8">مدیریت منو</div>
                            <div class="col-6 col-md-4 text-center">
                                <a href="#" class="text-decoration-none text-dark" title="ویرایش"><i class="fa-light fa-edit"></i></a>
                                <a href="#" class="text-decoration-none text-dark" title="نمایش"><i class="fa-light fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card text-bg-light mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 col-md-8">مدیریت سربرگ</div>
                            <div class="col-6 col-md-4 text-center">
                                <a href="#" class="text-decoration-none text-dark" title="ویرایش"><i class="fa-light fa-edit"></i></a>
                                <a href="#" class="text-decoration-none text-dark" title="نمایش"><i class="fa-light fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
