<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="{{ route('dashboard') }}">
        <img src="{{asset('assets/img/logo.png')}}" alt="JM Innovatech Logo" class="brand-icon" style="width: 30px; height: auto;">
        <span class="brand-name">Dashboard</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">



        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
            aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Home Page Data</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="dashboard"
            data-parent="#sidebar-menu">
            <div class="sub-menu">



              <li class="active">
                <a class="sidenav-item-link" href="{{route('home.slider')}}">
                  <span class="nav-text">Slider</span>

                </a>
              </li>
              <li class="active">
                <a class="sidenav-item-link" href="{{route('home.about')}}">
                  <span class="nav-text">About</span>

                </a>
              </li>
              <li class="active">
                <a class="sidenav-item-link" href="{{route('multi.image')}}">
                  <span class="nav-text">portfolio</span>

                </a>
              </li>
              <li class="active">
                <a class="sidenav-item-link" href="{{route('all.brand')}}">
                  <span class="nav-text">Brand</span>

                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="{{route('service.view')}}">
                  <span class="nav-text">Services</span>

                </a>
              </li>


            </div>
          </ul>
        </li>


        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
            aria-expanded="false" aria-controls="contact">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Contact</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="contact"
            data-parent="#sidebar-menu">
            <div class="sub-menu">



              <li class="active">
                <a class="sidenav-item-link" href="{{route('contact.admin')}}">
                  <span class="nav-text">Contact Profile</span>

                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="{{route('contact.message')}}">
                  <span class="nav-text">Contact message</span>

                </a>
              </li>

            </div>
          </ul>
          
        </li><li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#careers"
            aria-expanded="false" aria-controls="careers">
            <i class="mdi mdi-briefcase"></i>
            <span class="nav-text">Careers</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="careers" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('admin.careers.index') }}">
                  <span class="nav-text">All Careers</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('admin.careers.create') }}">
                  <span class="nav-text">Add Career</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#posts"
            aria-expanded="false" aria-controls="posts">
            <i class="mdi mdi-file-document"></i>
            <span class="nav-text">Posts</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="posts" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('post.index') }}">
                  <span class="nav-text">All Posts</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('post.create') }}">
                  <span class="nav-text">Add Post</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#categories"
            aria-expanded="false" aria-controls="categories">
            <i class="mdi mdi-folder-outline"></i>
            <span class="nav-text">Categories</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="categories" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('post_category.index') }}">
                  <span class="nav-text">All Categories</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('post_category.create') }}">
                  <span class="nav-text">Add Category</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tags"
            aria-expanded="false" aria-controls="tags">
            <i class="mdi mdi-tag-multiple"></i>
            <span class="nav-text">Tags</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="tags" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('post_tag.index') }}">
                  <span class="nav-text">All Tags</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('post_tag.create') }}">
                  <span class="nav-text">Add Tag</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ads"
            aria-expanded="false" aria-controls="ads">
            <i class="mdi mdi-bullhorn-outline"></i>
            <span class="nav-text">Adverts</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="ads" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('adverts.index') }}">
                  <span class="nav-text">All Adverts</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('adverts.create') }}">
                  <span class="nav-text">Add Adverts</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#videos"
            aria-expanded="false" aria-controls="videos">
            <i class="mdi mdi-video-outline"></i>
            <span class="nav-text">Videos</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="videos" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('videos.index') }}">
                  <span class="nav-text">All Videos</span>
                </a>
              </li>
              <li>
                <a class="sidenav-item-link" href="{{ route('videos.create') }}">
                  <span class="nav-text">Add Video</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#comments"
            aria-expanded="false" aria-controls="comments">
            <i class="mdi mdi-comment-multiple-outline"></i>
            <span class="nav-text">Post Comments</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="comments" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="{{ route('post_comments.index') }}">
                  <span class="nav-text">All Comments</span>
                </a>
              </li>
            </div>
          </ul>
        </li>



        <!--{{-- Services --}}-->
        <!--<li class="has-sub active expand">-->
        <!--  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Sociallinks"-->
        <!--    aria-expanded="false" aria-controls="Sociallinks">-->
        <!--    <i class="mdi mdi-view-dashboard-outline"></i>-->
        <!--    <span class="nav-text">Sociallinks</span> <b class="caret"></b>-->
        <!--  </a>-->
        <!--  <ul class="collapse show" id="Sociallinks"-->
        <!--    data-parent="#sidebar-menu">-->
        <!--    <div class="sub-menu">-->



        <!--      <li class="active">-->
        <!--        <a class="sidenav-item-link" href="{{route('social.view')}}">-->
        <!--          <span class="nav-text">Sociallinks</span>-->

        <!--        </a>-->
        <!--      </li>-->
        <!--    </div>-->
        <!--  </ul>-->
        <!--</li>-->








      </ul>

    </div>

    <hr class="separator" />

  </div>
</aside>