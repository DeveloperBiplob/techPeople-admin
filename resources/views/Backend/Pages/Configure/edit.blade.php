@extends("Backend.Layouts.master")
@section('title', 'Congituration/Update')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Update Configuration</h3>
                <a href="{{ route('configer.index') }}" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('configer.update', $configer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="logo" class="form-label">Choose a Logo</label>
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="logo">
                            <label class="custom-file-label" for="image">Choose webiste logo</label>
                        </div>
                        @error('logo')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                        <img style="border: 1px solid #ddd; padding:5px; width:100px; margin-top:10px" src="{{ asset($configer->logo) }}" alt="">
                      </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="number" name="phone" class="form-control" id="phone" value="{{ $configer->phone }}">
                      @error('phone')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="{{ $configer->email }}">
                      @error('email')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                      @enderror
                    </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" class="form-control" id="address" rows="3">{!! $configer->address !!}</textarea>
                        @error('address')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="companydetail" class="form-label">Companydetail (Footer)</label>
                        <textarea name="companydetail" class="form-control" id="companydetail" rows="3">{!! $configer->companydetail !!}</textarea>
                        @error('companydetail')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" value="{{ $configer->facebook }}">
                        @error('facebook')
                          <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" value="{{ $configer->twitter }}">
                        @error('twitter')
                          <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="youtube" class="form-label">YouTube</label>
                        <input type="text" name="youtube" class="form-control" id="youtube" value="{{ $configer->youtube }}">
                        @error('youtube')
                          <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" value="{{ $configer->instagram }}">
                        @error('instagram')
                          <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
                        <input type="text" name="video" class="form-control" id="video" value="{{ $configer->video }}">
                        @error('video')
                          <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
