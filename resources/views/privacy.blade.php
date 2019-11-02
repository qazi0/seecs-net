@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SEECS-Net Privacy Policy') }}</div>

                <div class="card-body">
                  There's pretty much no guarantee. Sign in at your own risk.
                </div>
            <a href="{{ url('/') }}" class="btn btn-lg"> Back to home page</a>
            </div>
        </div>
    </div>
</div>
@endsection
