@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header text-center">Create a new discussion</div>

                <div class="card-body">
                <form action="{{ route('discussion.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input name="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="channel">Pick a channel:</label>
                        <select name="channel_id" id="channel_id" class="form-control">
                            @foreach($channels as $channel)
                                <option value=" {{ $channel->id }}"> {{ $channel->title }} </option> 
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="content">Ask a question:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Create discussion</button>
                    </div>
                
                </form>
                </div>
</div>
@endsection