@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'About')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">About Your Company (Describe Stortly)</h3>
                <a href="{{ route('companyEdit', $companyDetail->slug) }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Update</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-collapse">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $companyDetail->title }}</td>
                        <td>{!! Str::limit($companyDetail->description, 100) !!}</td>
                        {{-- <td style="max-width: 100px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{!! $about->description !!}</td> --}}
                        <td>
                           <div style="width: 100px; height:50px; overflow:hidden;">
                            <img width="100%" src="{{ asset($companyDetail->image) }}" alt="">
                           </div>
                        </td>
                        <td>
                            <a href="{{ route('companyView', $companyDetail->slug) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('companyEdit', $companyDetail->slug) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">About Image Gallery</h3>
                <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Update</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th>01</th>
                    <th>Image One</th>
                    <td>
                      <div style="width: 100px; height:50px; overflow:hidden;">
                       <img width="100%" src="{{ asset($gallery->image_one ?? '') }}" alt="">
                      </div>
                   </td>
                </tr>
                <tr>
                  <th>02</th>
                    <th>Image Two</th>
                    <td>
                      <div style="width: 100px; height:50px; overflow:hidden;">
                       <img width="100%" src="{{ asset($gallery->image_two ?? '') }}" alt="">
                      </div>
                   </td>
                </tr>
                <tr>
                  <th>03</th>
                    <th>Image Three</th>
                    <td>
                      <div style="width: 100px; height:50px; overflow:hidden;">
                       <img width="100%" src="{{ asset($gallery->image_three ?? '') }}" alt="">
                      </div>
                   </td>
                </tr>
            </table>
              </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">About</h3>
                <a href="{{ route('about.create') }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-collapse">
                  <thead>
                    <tr>
                      <th style="width: 20px">Sl</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($abouts as $about)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $about->title }}</td>
                        <td>{!! Str::limit($about->description, 100) !!}</td>
                        {{-- <td style="max-width: 100px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{!! $about->description !!}</td> --}}
                        <td>
                           <div style="width: 100px; height:50px; overflow:hidden;">
                            <img width="100%" src="{{ asset($about->image) }}" alt="">
                           </div>
                        </td>
                        <td>
                            <a href="{{ route('about.show', $about->slug) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('about.edit', $about->slug) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action="{{ route('about.destroy', $about->slug) }}" method="POST">
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