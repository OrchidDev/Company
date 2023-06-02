<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script>
    window.addEventListener('toastr:success', event => {
        toastr.success(event.detail.message);
    })
    window.addEventListener('toastr:warning', event => {
        toastr.warning(event.detail.message);
    })
    window.addEventListener('toastr:info', event => {
        toastr.info(event.detail.message);
    })
    toastr.options = {
        "progressBar": true,
        "positionClass": "toast-top-left"
    };
</script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
