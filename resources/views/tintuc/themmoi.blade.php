@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('tintuc.store') }}" enctype="multipart/form-data">
       
        <div class='form-group'>
            <label for='TenSanPham'>Tiêu Đề</label>
            <input type='text' class='form-control' id='TenSanPham' name='TenSanPham' placeholder='Tên' value="{{ old('TenSanPham') }}">
        </div>
        <div class="form-group">
    <label for="Gia">Nội Dung</label>
    <textarea class="form-control" id="Gia" name="Gia" placeholder="Nội Dung" rows="5">{{ old('Gia') }}</textarea>
</div>

      <br>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        @csrf
    </form>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
