@extends('layout')

@section('content')


<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-md-8 mb-4">

    <!--Featured Image-->
    <div class="card mb-4 wow fadeIn">

      <img src="{{ asset('images/'.$post->featured) }}" class="img-fluid" alt="">

    </div>
    <!--/.Featured Image-->

    <!--Card-->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body text-center">

        <p class="h5 my-4">{{ $post->title }}</p>

        <div class="row">
            <div class="col-md-3"><small>Category: <a class="badge badge-primary">{{ $post->category->name }}</a></small></div>

            <div class="col-md-3"><small>Tag:
                @foreach($post->tags as $t)
                <a class="badge badge-primary">{{ $t->name }}</a>
                @endforeach
            </small></div>

            <div class="col-md-3"><small>Author: <a class="badge badge-primary">Admin</a></small></div>

            <div class="col-md-3"><small>Date: <a class="badge badge-primary">{{ $post->created_at->diffForHumans() }}</a></small></div>

        </div>

        <p>{{ $post->content }}</p>



      </div>
    </div>
    <!--/.Card-->





    <!--Comments-->
    <div class="card card-comments mb-3 wow fadeIn">

            <!-- Count Comments-->
    <div class="card-header font-weight-bold">@php  echo count($comments) ." Comments" @endphp</div>

   <div class="card-body">

    @foreach($comments as $com)
    <!-- Comment Box -->
     <div class="media d-block d-md-flex mt-4">

           <!--Profile picture Pepole on Comment-->
          <img class="d-flex mb-3 mx-auto " src="{{ asset('images/'.$com->user->profile->profile_image) }}" alt="Generic placeholder image">

          <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <!--Username Pepole on Comment-->
            <h5 class="mt-0 font-weight-bold">{{ $com->user->name }}</h5>

            <!--Comment Text -->
            {{ $com->comment }}


                    <!--Reply Comment Box -->
                 @if($com->ReplyUser)
                    <div class="media d-block d-md-flex mt-3">
                            <!--Reply Comment profile picture -->

                    <img class="d-flex mb-3 mx-auto " src="{{ asset('images/'.$com->ReplyUser->profile->profile_image) }}"
                        alt="Generic placeholder image">

                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <!--Reply Comment Username -->

                        <h5 class="mt-0 font-weight-bold">{{ $com->ReplyUser->name }}</h5>

                        <!--Reply Comment Text -->
                        {{ $com->Reply_comment }}
                    </div>
                 </div>
                 @endif

         </div>
     </div>
     @endforeach
     <!-- /Comment Box -->


                                    <!-- Quick Reply ****
                                        <div class="form-group mt-4">
                                        <label for="quickReplyFormComment">Your comment</label>
                                        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>
                                        <div class="text-center">
                                            <button class="btn btn-info btn-sm" type="submit">Post</button>
                                        </div>
                                        </div>
                                        -->

  </div>
</div>
    <!--/.Comments-->

    <!--New Comment-->
    @if (auth::check())


    <div class="card mb-3 wow fadeIn">
      <div class="card-header font-weight-bold">Comment</div>
      <div class="card-body">

        @include('layouts.error')

        <!-- Default form reply -->
        <form action="{{ route('comment.store',$post->id) }}" method="POST" >
            @csrf
          <!-- Comment -->
          <div class="form-group">
            <label for="replyFormComment">Your comment</label>
            <textarea class="form-control" id="NewComment" name="NewComment" rows="5"></textarea>
          </div>

          <div class="text-center">
                <button class="btn btn-info btn-sm" type="submit">Post</button>
            </div>

        </form>
        <!-- Default form reply -->

      </div>
    </div>

    @else

    @include('layouts.inlineLoginForm')

    @endif
    <!--/.Reply-->




  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-4 mb-4">

    <!--Card: Jumbotron-->
    <div class="card blue-gradient mb-4 wow fadeIn">

      <!-- Content -->
      <div class="card-body text-white text-center">

        <h4 class="mb-4">
          <strong>Learn Bootstrap 4 with MDB</strong>
        </h4>
        <p>
          <strong>Best & free guide of responsive web design</strong>
        </p>
        <p class="mb-4">
          <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
            and written versions available. Create your own, stunning website.</strong>
        </p>
        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md">Start
          free tutorial
          <i class="fas fa-graduation-cap ml-2"></i>
        </a>

      </div>
      <!-- Content -->
    </div>
    <!--Card: Jumbotron-->

    <!--Card : Dynamic content wrapper-->
    <div class="card mb-4 text-center wow fadeIn">

      <div class="card-header">All Tag Lists</div>

      <!--Card content-->
      <div class="card-body">
        @foreach($tags as $t)
        <a class="badge badge-success m-1" href="{{ route('post.tag',$t->slug) }}">#{{ $t->name }}</a>
        @endforeach
      </div>

    </div>
    <!--/.Card : Dynamic content wrapper-->

    <!--Card-->
    <div class="card mb-4 wow fadeIn">

      <div class="card-header">Related articles</div>

      <!--Card content-->
      <div class="card-body">

        <ul class="list-unstyled">
         @foreach($relatedPosts as $r)
            <li class="media">
            <img class="d-flex mr-3" src="{{ asset('images/'.$r->featured) }}" width="100" alt="Generic placeholder image">
            <div class="media-body">
              <a href="">
                <h5 class="mt-0 mb-1 font-weight-bold">{{ $r->title }}</h5>
              </a>
              {{ substr($r->content,0,15) }}
            </div>
          </li>
     @endforeach
        </ul>

      </div>

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->







</div>
<!--Grid row-->



@endsection
