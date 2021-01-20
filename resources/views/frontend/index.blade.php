@extends('frontend.app')
@section('content')
<div id="page-contents">
    <div class="container">
        <div class="row">

      <!-- Newsfeed Common Side Bar Left
      ================================================= -->
        <div class="col-md-3 static">
            @if(Auth::check())
                <div class="profile-card">
                    <img src="/frontend/images/users/{{Auth::user()->image}}" alt="user" class="profile-photo" />
                    <h5><a href="/profile/{{Auth::id()}}" class="text-white">{{Auth::user()->name}}</a></h5>
                </div><!--profile card ends-->
                <ul class="nav-news-feed">
                  <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.html">My profile</a></div></li>
                  <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.html">People</a></div></li>
                  <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.html">Friends</a></div></li>
                  <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.html">Messages</a></div></li>
                  <li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Images</a></div></li>
                  <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>
                </ul><!--news-feed links ends-->
            @endif
        <div id="chat-block">
          <div class="title">Users</div>
          <ul class="online-users list-inline">
            @foreach($data['users'] as $user)
                <li><a href="/profile/{{$user['id']}}" title="{{$user['name']}}"><img src="/frontend/images/users/{{$user['image']}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            @endforeach
          </ul>
        </div><!--chat block ends-->
      </div>
            <div class="col-md-7">
        @if(Auth::check())
        <!-- Post Create Box
        ================================================= -->
       <form method="post" action="" enctype="multipart/form-data" id="form_post">
         @csrf
        <div class="create-post">
            <div class="row">
                <div class="col-md-7 col-sm-7">
              <div class="form-group">
                <img src="/frontend/images/users/{{Auth::user()->image}}" alt="" class="profile-photo-md" />
                <textarea id="text" name="text" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
              </div>
            </div>
                <div class="col-md-5 col-sm-5">
              <div class="tools">
                <ul class="publishing-tools list-inline">
                  <li><i class="ion-images" id="upimage" style="cursor:pointer"></i></li>
                  <li><i class="ion-ios-videocam" id="upvideo" style="cursor:pointer"></i></li>

                  <input type="file" id="image" name="image" accept="image/png, image/jpeg" style="display: none">
                  <input type="file" id="video" name="video" accept="video/*" style="display: none">
                </ul>
                <div id="spinner" class="pull-right" style="color:blue;display:none;font-size: 30px;">
                  <i class="fas fa-spinner fa-spin"></i>
                </div>
                <button class="btn btn-primary pull-right" type="submit" id="submit">Publish</button>
              </div>
            </div>
            </div>
        </div><!-- Post Create Box End-->
      </form>
        @else
         <h4 style="color:red">Please register to post something!</h4>
        @endif
        <!-- Post Content
        ================================================= -->
        @foreach($data['posts'] as $post)
          <div class="post-content">
            @if($post['post_image'] !== null)
              <img src="/frontend/images/post-images/{{$post['post_image']}}" alt="post-image" class="img-responsive post-image" />
            @endif
            @if($post['video'] !== null)
              <div class="video-wrapper">
                <video class="post-video" controls> <source src="/frontend/images/post-videos/{{$post['video']}}" type="video/mp4"> </video>
              </div>
            @endif
            <div class="post-container">
              <img src="/frontend/images/users/{{$post['us_image']}}" alt="user" class="profile-photo-md pull-left" />
              <div class="post-detail">
                <div class="user-info">
                  <h5><a href="/profile/{{$post['user_id']}}" class="profile-link">{{$post['name']}}</a></h5>
                  <p class="text-muted">Published at {{$post['created_at']->format('d F, Y')}}</p>
                </div>
                <div class="line-divider"></div>
                <div class="post-text">
                  <p>{{$post['text']}}</p>
                </div>
                <!-- COMMENTS -->
                <div class="line-divider"></div>
                  @foreach($data[$post['post_id']] as $comment)
                    @if($comment['comment_id'] == 0)
                      <div class="post-comment">
                        <img src="/frontend/images/users/{{$comment['image']}}" alt="" class="profile-photo-sm" />
                        <p><a href="/profile/{{$comment['user_id']}}" class="profile-link">{{$comment['name']}}</a>  {{$comment['comment']}}</p>
                      </div>

                      <!-- FORM FOR SUBCOMMENT -->
                      @if(Auth::check())
                        <a style="margin-left:50px;cursor:pointer" id="reply{{$comment['commentid']}}" onclick="reply('{{$comment['commentid']}}')"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>

                        <form method="post" action="/comment" id="form{{$comment['commentid']}}" style="display:none">
                          @csrf
                            <div class="post-comment" style="margin-left: 45px; width: 440px;">
                              <img src="/frontend/images/users/{{Auth::user()->image}}" alt="" class="profile-photo-sm" />
                              <input type="text" class="form-control" style="max-width: 73%;" id="comment" placeholder="Post a comment" name="comment">
                              <input type="hidden" value="{{$post['post_id']}}" name="post_id">
                              <input type="hidden" value="{{$comment['commentid']}}" name="comment_id">
                              <div id="spinner_comment" class="pull-right" style="color:blue;display:none;font-size: 30px;">
                                <i class="fas fa-spinner fa-spin"></i>
                              </div>
                              <button class="btn btn-primary pull-right" type="submit" id="submit_comment" style="padding: 10px;height: 40px;">Comment</button>
                            </div>
                        </form>
                      @endif
                      <!-- FORM FOR SUBCOMMENT End-->
                    @endif

                    <!-- SUBCOMMENTS -->
                    @foreach($data[$post['post_id']] as $subcomment)
                      @if($subcomment['comment_id'] == $comment['commentid'])
                        <div class="post-comment" style="margin-left: 45px;max-width: 460px;">
                          <img src="/frontend/images/users/{{$subcomment['image']}}" alt="" class="profile-photo-sm" />
                          <p><a href="/profile/{{$subcomment['user_id']}}" class="profile-link">{{$subcomment['name']}}</a>  {{$subcomment['comment']}}</p>
                        </div>
                      @endif
                    @endforeach
                    <div id="newsubcomment{{$comment['commentid']}}"></div>
                    <!-- SUBCOMMENTS END -->
                  @endforeach
                  <div id="newcomment{{$comment['post_id']}}"></div>
                <!-- COMMENTS END -->

                <!-- FORM FOR COMMENT -->
                  @if(Auth::check())
                    <form method="post" action="/comment" id="form_comment">
                      @csrf
                        <div class="post-comment">
                          <img src="/frontend/images/users/{{Auth::user()->image}}" alt="" class="profile-photo-sm" />
                          <input type="text" class="form-control" style="max-width: 73%;" id="comment" placeholder="Post a comment" name="comment">
                          <input type="hidden" value="{{$post['post_id']}}" name="post_id">
                          
                          <div id="spinner_comment" class="pull-right" style="color:blue;display:none;font-size: 30px;">
                            <i class="fas fa-spinner fa-spin"></i>
                          </div>
                          <button class="btn btn-primary pull-right" type="submit" id="submit_comment" style="padding: 10px;height: 40px;">Comment</button>
                        </div>
                    </form>
                  @else
                    <h4 style="color:red">Please register to post comment!</h4>
                  @endif
                <!-- FORM FOR COMMENT END-->
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <!-- Newsfeed Common Side Bar Right
      ================================================= -->
        <div class="col-md-2 static">
          <div class="suggestions" id="sticky-sidebar">
            <h4 class="grey">You know</h4>
            @foreach($data['users'] as $user)
              <div class="follow-user">
                <img src="/frontend/images/users/{{$user['image']}}" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="/profile/{{$user['id']}}">{{$user['name']}}</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
            @endforeach
          </div>
      </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/frontend/js/index.js"></script>
@endsection
@section('css')
<link rel="stylesheet" href="/css/sweetalert3.min.css">
@endsection