@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('chuyenmuc.store') }}" enctype="multipart/form-data">
       
        <div class='form-group'>
            <label for='TenChuyenMuc'>Tên Chuyên Mục</label>
            <input type='text' class='form-control' id='TenChuyenMuc' name='TenChuyenMuc' placeholder='Tên' value="{{ old('TenChuyenMuc') }}">
        </div>
        <div class="form-group">
    <label for="MoTa">Mô tả</label>
    <textarea class="form-control" id="MoTa" name="MoTa" placeholder="MoTa " rows="5">{{ old('MoTa') }}</textarea>
    <div class='form-group'>
            <label for='DacBiet'> Đặc biệt</label>
            <input type='text' class='form-control' id='DacBiet' name='DacBiet' placeholder='DacBiet' value="{{ old('DacBiet') }}">
    </div>
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
