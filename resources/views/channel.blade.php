@extends('layouts.app')

@section('content')
<br>

@foreach($discussions as $d)
<div class="container">
        <div class="row">
          <div class="col-md-70 ml-auto col-xl-60 mr-auto">
            <!-- Nav tabs -->
           <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs justify-content-left" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#" role="tab">
                      <i class="now-ui-icons users_circle-08"></i> Posted by {{$d->user->name}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="{{ route('discussion', ['slug' => $d->slug]) }}" role="tab">
                      <i class="now-ui-icons shopping_cart-simple"></i> View Thread
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content" style="padding: 2%">
                  <div class="tab-pane active">
                      <h3> {{ $d->title }} <br>
                          <small>
                                {{$d->created_at->diffForHumans()}}
                          </small>
                      </h3>
                    <p>{!! Markdown::convertToHtml(str_limit($d->content,300))!!} </p>
                  </div>
                </div>
            
                <div class="card-footer" >
                        <span class="badge badge-info">
                            {{ $d->replies->count() }} Replies </span>
                        <a href="{{ route('channel', ['slug' => $d->channel->slug]) }}"class="btn btn-success" style="float: right"> Category: {{ $d->channel->title }}</a>
                </div>

            </div>
            </div>
           </div> 
        </div>
      </div>

    <hr>

@endforeach
         
@endsection