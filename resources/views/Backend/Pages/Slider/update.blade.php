@extends("Backend.Layouts.master")
@section('title', 'slider/Update')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Update Slider</h3>
                <a href="{{ route('slider.index') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('slider.update', $slider->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="sub-title" class="form-label">Sub Title</label>
                      <input type="text" name="sub_title" class="form-control" id="sub-title" value="{{ $slider->sub_title }}">
                      @error('sub-title')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="sub-title" class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" id="sub-title" value="{{ $slider->title }}">
                      @error('title')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{ $slider->description }}</textarea>
                        @error('description')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img id="ImagePreview" style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($slider->image) }}" alt="">
                      </div>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
      function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
            
        reader.onload = function (e) {
        $('#ImagePreview').attr('src', e.target.result);
        }
            
          reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image").change(function(){
        readURL(this);
    });

</script>
@endpush
