@extends('layouts.app')

@section('content')
@if (!(Auth::user()->admin))

<div class="alert alert-danger" role="alert">
        <div class="container">
          <div class="alert-icon">
            <i class="now-ui-icons objects_support-17"></i>
          </div>
          <strong>Authentication Error!</strong> Please log in as administrator to continue.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
          </button>
        </div>
      </div>
      <div style="float: right">
            <a class="btn btn-danger btn-xs" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout 
            </a>
        </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
@else

<div class="card" style="padding: 1%">
        <div class="card-header text-center">
            <h4>{{ __('Channels') }}</h4>
            <a href="{{ route('channels.create') }}" class="btn btn-primary btn-xs" style="font-size: 17px">Create a new channel</a><br>
        </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                    <thead>
                        <th>    
                            Name
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                    </thead>

                    <tbody>
                         @foreach ($channels as $channel)
                            <tr>
                                <td>
                                    {{ $channel->title }}
                                </td>

                                <td>
                                    <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                </td>

                                <td>
                                <form action="{{ route('channels.destroy', [ 'channel' => $channel->id])}}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                             
                         @endforeach
                    </tbody>
                </table>
                </div>
            </div>

    @endif
@endsection