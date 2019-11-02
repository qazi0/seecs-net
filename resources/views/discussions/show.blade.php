@extends('layouts.app')

@section('content')

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
                    <a class="nav-link"  href="{{ route('forum') }}" role="tab">
                      <i class="now-ui-icons shopping_cart-simple"></i> Back to forums
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
                    <p>{!! Markdown::convertToHtml($d->content)!!} </p>
                  </div>
                </div>

                @if($best_answer)
                    <div class="panel-heading" style="padding: 20px">
                        <h3>  BEST ANSWER </h3>
                         <span class="now-ui-icons users_circle-08"> {{ $best_answer->user->name}}</>
                    </div>

                    <div class="panel-body" style="padding: 20px">
                        {!! Markdown::convertToHtml($best_answer->content)!!} 
                    </div>
                @endif
            
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
    @foreach($d->replies as $r)
    <div class="card" style="margin-left: 8%">
            <div class="card-header">
              <ul class="nav nav-tabs justify-content-left" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#" role="tab">
                    <i class="now-ui-icons users_circle-08"></i> {{$r->user->name}} Replied:
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{ route('forum') }}" role="tab">
                    <i class="now-ui-icons shopping_cart-simple"></i> Back to forums
                  </a>
                </li>
              </ul>

              @if(!$best_answer)
                    @if(Auth::id()==$d->user->id)
                        <a href="{{ route('discussion.best.answer',['id' => $r->id ]) }}" class="btn btn-xs btn-info" style="float: right">Mark as best answer</a>
                    @endif  
              @endif
            </div>
            <div class="card-body">
              <!-- Tab panes -->
              <div class="tab-content" style="padding: 2%">
                <div class="tab-pane active">
                  <p>{!! Markdown::convertToHtml($r->content)!!}</p>
                </div>
              </div>
          
              <div class="card-footer" style="height: 40px">
                
                    @if ($r->is_liked())
                        <a href="{{ route('reply.unlike',['id'=>$r->id]) }}" class="btn btn-danger btn-xs">Unlike </a><span class="badge">{{$r->likes->count()}} likes</span>
                        
                    @else
                        <a href="{{ route('reply.like',['id'=>$r->id]) }}" class="btn btn-success btn-xs">Like </a><span class="badge">{{$r->likes->count()}} likes</span>
                    @endif
             </div>

          </div>
          </div>
         </div> 

    <!-- --------------------->
    @endforeach


    <div class="panel panel-default">
        <div class="panel-body">
       @if (Auth::check())
       <form action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="reply">Leave a Reply</label>
                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>

            </div>
            <div class="form-group">
                <button class="btn pull-right" type="submit">Reply</button>
            </div>
        
        </form>
           
       @else
            <div class="text-center">
            <h4><a href="{{ route('login') }}"> Sign in</a> to leave a reply.</h4>
            </div>
           
       @endif
        </div>
    </div>

@endsection