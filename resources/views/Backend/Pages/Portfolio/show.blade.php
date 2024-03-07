@extends("Backend.Layouts.master")
@section('title', 'Portfolio/View')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Portfolio Details</h3>
                <a href="{{ route('portfolio.index') }}" class="btn btn-md btn-outline-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <div style="display: flex;gap:2em">
                <div style="flex: 1; background:#ddd; width:fit-content;height:500px;overflow:hidden">
                    <img width="100%" src="{{ asset($portfolio->image) }}" alt="">
                </div>
                <div style="flex: 1">
                    <h3 style="font-size: 35px;margin-bottom:10px;font-weight:500">{{ $portfolio->title }}</h3>
                    <div style="font-size: 22px">
                        {!! $portfolio->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection