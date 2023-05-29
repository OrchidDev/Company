<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @include('include.meta')
    @include('include.style')
</head>
<body>
<div class="d-flex" id="wrapper">
    @include('include.sidebar')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        @include('include.nav')
        <div class="container">
            <div class="p-2">
                {{$slot}}
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
@include('include.script')
</body>
</html>
