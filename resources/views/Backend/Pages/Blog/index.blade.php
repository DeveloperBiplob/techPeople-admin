@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Blog')
@section('master-content')   
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Blogs</h3>
                <a href="{{ route('post.create') }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 20px">Sl</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tbody>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop-> index + 1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <div style="width: 100px; height:50px; overflow:hidden;">
                                 <img width="100%" src="{{ asset($post->image) }}" alt="">
                                </div>
                             </td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <span class="badge badge-{{ $post->status == 'Active' ? 'success': 'danger' }} p-2">{{ $post->status == 'Active' ? 'Active': 'Inactive' }}</span>
                            </td>
                            <td>
                                <a href="{{ route('post-status', $post->slug) }}" id="postStatus" data-status="{{ $post->status }}" class="btn btn-sm btn-{{ $post->status == 'Active' ? 'success': 'danger' }} "><i class="fa fa-arrow-{{ $post->status == 'Active' ? 'up': 'down' }}"></i></a>

                                <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('post.destroy', $post->slug) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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