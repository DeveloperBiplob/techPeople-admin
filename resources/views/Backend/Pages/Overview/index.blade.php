@extends("Backend.Layouts.master")
@push('css')
@endpush
@section('title', 'Project Overview')
@section('master-content')  
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Service</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-collapse">
                  <thead>
                    <tr>
                      <th style="width: 20px">Sl</th>
                      <th>Title</th>
                      <th>Amount</th>
                      <th>Image</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($overviews as $overview)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $overview->title }}</td>
                        <td>{{ $overview->amount }}</td>
                        <td>
                          <div style="width: 50px; height:50px; overflow:hidden;">
                           <img width="100%" src="{{ asset($overview->image) }}" alt="">
                          </div>
                       </td>
                        <td>
                            <a href="{{ route('overview.edit', $overview->slug) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
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
