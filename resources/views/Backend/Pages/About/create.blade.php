@extends("Backend.Layouts.master")
@section('title', 'About/Create')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Add About</h3>
                <a href="{{ route('about.index') }}" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                      <label for="sub-title" class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" id="sub-title" placeholder="Entr a Title">
                      @error('title')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Entr your description"></textarea>
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
                      </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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