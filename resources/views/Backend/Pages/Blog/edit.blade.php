@extends("Backend.Layouts.master")
@section('title', 'Blog/Update')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Update Blog</h3>
                <a href="{{ route('post.index') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Title</label>
                                <textarea id="name_field" name="title" class="form-control" rows="1" >{{ $post->title }}</textarea>
                                <span id="NameError"></span>
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select class="form-control" name="category_id" id="category">
                                    <option value="">Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected': '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea id="description" name="description">{!! $post->description !!}</textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <label for="">Image</label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input" id="image">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>
                              @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="ImagePreview" style="border: 1px solid #ddd; padding:5px; width:100px; margin:10px 0" src="{{ asset($post->image) }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="mb-2">
                                    <label for="">Tags :</label>
                                </div>
                                @foreach ($tags as $tag)
                                {{-- <span>{{ $tag->name }}</span>
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"> | --}}

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="{{ $tag->slug }}" name="tags[]" value="{{ $tag->id }}" @if (in_array($tag->id, $postTags)) checked @endif >
                                    <label class="form-check-label" for="{{ $tag->slug }}">{{ $tag->name }}</label>
                                  </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary btn-block">Update Post</button>
                            </div>
                        </div>
                    </div>
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



    $('#description').summernote({
    placeholder: 'Enter a descripton for your new about section',
    tabsize: 2,
    height: 400
  });
</script> 
@endpush