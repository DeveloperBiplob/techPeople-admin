@extends("Backend.Layouts.master")
@section('title', 'Testimonial/View')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Testimonial</h3>
                <a href="{{ route('testimonial.index') }}" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <div style="display: flex;gap:2em">
                <div style="flex: 1; background:#ddd; width:fit-content;height:500px;overflow:hidden">
                    <img width="100%" src="{{ asset($testimonial->image) }}" alt="">
                </div>
                <div style="flex: 1">
                    <h3 style="font-size: 35px;margin-bottom:10px;font-weight:500">{{ $testimonial->name }}</h3>
                    <h3 style="font-size: 25px;margin-bottom:10px;font-weight:500">{{ $testimonial->designation }}</h3>
                    <div style="font-size: 22px">
                        {!! $testimonial->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection