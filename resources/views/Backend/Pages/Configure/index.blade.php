@extends("Backend.Layouts.master")
@push('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endpush
@section('title', 'Configuration')
@section('master-content')   
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Website Configuration </h3>
                <a href="{{ route('configer.edit', $configer->id ?? 1) }}" class="btn btn-md btn-success"><i class="fa-solid fa-plus mr-1"></i> Update</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                    <th>Logo:</th>
                    <td>
                      <div style="width: 100px; height:50px; overflow:hidden;">
                       <img width="100%" src="{{ asset($configer->logo ?? '') }}" alt="">
                      </div>
                   </td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $configer->phone ?? '' }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $configer->email ?? '' }}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{ $configer->address ?? '' }}</td>
                </tr>
                <tr>
                    <th>Facebook:</th>
                    <td>{{ $configer->facebook ?? '' }}</td>
                </tr>
                <tr>
                    <th>Twitter:</th>
                    <td>{{ $configer->twitter ?? '' }}</td>
                </tr>
                <tr>
                    <th>YouTube:</th>
                    <td>{{ $configer->youtube ?? '' }}</td>
                </tr>
                <tr>
                    <th>Instagram:</th>
                    <td>{{ $configer->instagram ?? '' }}</td>
                </tr>
                <tr>
                    <th>Companydetail:</th>
                    <td>{{ $configer->companydetail ?? '' }}</td>
                </tr>
                <tr>
                    <th>Video:</th>
                    <td>
                        <span>autoplay=1&mute=1</span>
                        <iframe style="min-height: 300px" width="100%" height="100%" src="{{ $configer->video ?? 'https://www.youtube.com/embed/Vb0dG-2huJE?autoplay=1&mute=1' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </td>
                </tr>
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