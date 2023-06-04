<x-admin-layout>
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="input1" class="form-label">عنوان</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="input1">
                            @error('name')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input2" class="form-label"> آیکون <a href="https://fontawesome.com/icons" class="text-decoration-none">مشاهده آیکون های Fontawesome</a></label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="input2" placeholder="نمونه fa-light fa-folder-tree ">
                            @error('icon')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input3" class="form-label">پیوند</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="input3">
                            @error('link')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="input3" class="form-label">ترتیب</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" id="input3">
                            @error('position')
                            <div class="text-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa-light fa-send"></i> ثبت منو </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
