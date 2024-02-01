@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Testimonial')
@section('master-content')   
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Testimonial</h3>
                <a href="{{ route('testimonial.create') }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-collapse">
                  <thead>
                    <tr>
                      <th style="width: 20px">Sl</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->designation }}</td>
                        <td>{!! Str::limit($testimonial->description, 100) !!}</td>
                        {{-- <td style="max-width: 100px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{!! $about->description !!}</td> --}}
                        <td>
                           <div style="width: 100px; height:50px; overflow:hidden;">
                            <img width="100%" src="{{ asset($testimonial->image) }}" alt="">
                           </div>
                        </td>
                        <td>
                            <a href="{{ route('testimonial.show', $testimonial->slug) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('testimonial.edit', $testimonial->slug) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action="{{ route('testimonial.destroy', $testimonial->slug) }}" method="POST">
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