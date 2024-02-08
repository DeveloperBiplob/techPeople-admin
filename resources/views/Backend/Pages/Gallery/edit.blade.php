@extends("Backend.Layouts.master")
@section('title', 'About Gallery/Update')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Update About Gallery</h3>
                <a href="{{ route('about.index') }}" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
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
                        <img style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_one) }}" alt="">
                      </div>
                      <div class="mb-3">
                        <label for="">Image Two</label>
                        <div class="custom-file">
                            <input type="file" name="image_two" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image_two')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_two) }}" alt="">
                      </div>
                      <div class="mb-3">
                        <label for="">Image Three</label>
                        <div class="custom-file">
                            <input type="file" name="image_three" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @error('image_three')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($gallery->image_three) }}" alt="">
                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    $('#description').summernote({
    placeholder: 'Enter a descripton for your new about section',
    tabsize: 2,
    height: 400
  });
</script> 
@endpush