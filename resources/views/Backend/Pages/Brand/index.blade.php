@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Brand')
@section('master-content')   
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bolder">Brand</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-collapse">
                          <thead>
                            <tr>
                              <th style="width: 20px">Sl</th>
                              <th>Image</th>
                              <th style="width: 200px">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($brands as $brand)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <div style="width: 100px; height:50px; overflow:hidden;">
                                     <img width="100%" src="{{ asset($brand->image) }}" alt="">
                                    </div>
                                 </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('brand.destroy', $brand->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-sm btn-danger show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <span>Data Not Found</span>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bolder">Add New Brand</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="image">Choose Brand Image</label>
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
    </div>
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endpush