@extends("Backend.Layouts.master")
@push('css')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Blog Category')
@section('master-content')   
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bolder">Category</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-collapse">
                          <thead>
                            <tr>
                              <th style="width: 20px">Sl</th>
                              <th>Name</th>
                              <th style="width: 200px">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('blogcategory.destroy', $category->slug) }}" method="POST">
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
                        <h3 class="fw-bolder">Add New Category</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('blogcategory.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                          <label for="sub-title" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="sub-title" placeholder="Entr a Category Name">
                          @error('name')
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