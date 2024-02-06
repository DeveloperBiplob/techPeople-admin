@extends("Backend.Layouts.master")
@section('title', 'Contact/View')
@section('master-content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fw-bolder">Request by - {{ $contact->name }}</h3>
                <a href="{{ route('contactContent') }}" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-left mr-1"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Name:</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $contact->phone }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td>{{ ucwords($contact->message) }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection