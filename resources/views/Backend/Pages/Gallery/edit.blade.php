@extends("Backend.Layouts.master")
@section('title', 'About Gallery/Update')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Update About Gallery</h3>
                <a href="{{ route('about.index') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="">Image One</label>
                        <div class="custom-file">
                            <input type="file" name="image_one" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image_one')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img id="ImagePreview" style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_one) }}" alt="">
                      </div>
                      <div class="mb-3">
                        <label for="">Image Two</label>
                        <div class="custom-file">
                            <input type="file" name="image_two" class="custom-file-input" id="image2">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image_two')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img id="ImagePreview2" style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_two) }}" alt="">
                      </div>
                      <div class="mb-3">
                        <label for="">Image Three</label>
                        <div class="custom-file">
                            <input type="file" name="image_three" class="custom-file-input" id="image3">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image_three')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img id="ImagePreview3" style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_three) }}" alt="">
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

      function readURL2(input) {
      if (input.files && input.files[0]) {
        var reader2 = new FileReader();
            
        reader2.onload = function (e) {
        $('#ImagePreview2').attr('src', e.target.result);
        }
            
          reader2.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image2").change(function(){
        readURL2(this);
    });

      function readURL3(input) {
      if (input.files && input.files[0]) {
        var reader3 = new FileReader();
            
        reader3.onload = function (e) {
        $('#ImagePreview3').attr('src', e.target.result);
        }
            
          reader3.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image3").change(function(){
        readURL3(this);
    });


    $('#description').summernote({
    placeholder: 'Enter a descripton for your new about section',
    tabsize: 2,
    height: 400
  });
</script> 
@endpush