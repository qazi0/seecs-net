@extends('layouts.app')

@section('content')
            <div class="card" style="padding: 1%">
                    <div class="card-header text-center">
                        <h4>Edit channel ' {{ $channel->title }} '</h4>
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                        <input type="text" name="channel" value="{{ $channel->title }}" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Update Channel</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection