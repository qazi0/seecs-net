@extends('layouts.app')

@section('content')
            <div class="card" style="padding: 1%">
                <div class="card-header text-center">
                    <h4>{{ __('Create a new Channel') }}</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('channels.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <input type="text" name="channel" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Save Channel</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection