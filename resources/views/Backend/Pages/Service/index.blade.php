@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Service')
@section('master-content')  
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Service</h3>
                <a href="{{ route('service.create') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-plus mr-1"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
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
                    @forelse ($services as $service)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $service->title }}</td>
                        @php
                          $strippedContent  = strip_tags($service->description)
                        @endphp
                        <td> {!! Str::limit($strippedContent, 100) !!}</td>
                        <td>
                           <div style="width: 100px; height:50px; overflow:hidden;">
                            <img style="object-fit:cover" src="{{ asset($service->image) }}" alt="">
                           </div>
                        </td>
                        <td>
                            {{-- <a href="{{ route('service.show', $service->slug) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a> --}}
                            <a href="{{ route('service.edit', $service->slug) }}" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action="{{ route('service.destroy', $service->slug) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
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
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Work Process</h3>
                <a href="{{ route('process.create') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-plus mr-1"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 20px">Sl</th>
                      <th>Service</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($Processes as $process)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $process->service->title }}</td>
                        <td>{{ $process->title }}</td>
                        @php
                          $strippedContent  = strip_tags($process->description)
                        @endphp
                        <td> {!! Str::limit($strippedContent, 100) !!}</td>
                        <td>
                           <div style="width: 100px; height:50px; overflow:hidden;">
                            <img style="width:100%" src="{{ asset($process->image) }}" alt="">
                           </div>
                        </td>
                        <td>
                            <a href="{{ route('process.show', $process->slug) }}" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('process.edit', $process->slug) }}" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action="{{ route('process.destroy', $process->slug) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
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