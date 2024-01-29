@extends("Backend.Layouts.master")
@section('title', 'slider')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Sliders</h3>
                <a href="{{ route('slider.edit', $slider->slug) }}" class="btn btn-md btn-success">Update Slider</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-collapse table-bordered">
                        <tr>
                            <td><b>Sub Title :</b> {{ $slider->sub_title }}</td>
                        </tr>
                        <tr>
                            <td><b>Tile :</b> {{ $slider->title }}</td>
                        </tr>
                        <tr>
                            <td><b>Description :</b> {{ $slider->description }}</td>
                        </tr>
                        <tr>
                            <th><img style="max-width: 100%" src="{{ asset($slider->image) }}" alt=""></th>
                        </tr>
                    </table>
                  </div>
            </div>
        </div>
    </div>
@endsection