<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h5 class="fw-bold">بخش جدید</h5>
            </div>
            <div class="mt-3">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="input1" class="form-label">بخش جدید</label>
                        <select id="input1" class="form-select">
                            <option selected> انتخاب کنید ... </option>
                            <option>۱</option>
                            <option>۲</option>
                            <option>۳</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">ترتیب</label>
                        <input type="number" class="form-control" id="input2">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa-light fa-check"></i> ایجاد بخش </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
