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
            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
