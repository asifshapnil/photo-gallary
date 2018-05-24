@extends('layouts.mastar')

@section('content')

    <body id="page-top">

      <nav class="navbar navbar-expand-lg navbar-dark card car-header bg-faded  fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">Start Bootstrap</span>
          <span class="d-none d-lg-block">
          <a href="/home">  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('image/' . $user->image)}}" alt="">
          </a>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/myPhotos">My Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/upload">Upload Photo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/editprofile/{{$user->email}}">Edit Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#skills">My Buddies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/userLogout">Logout</a>
            </li>

          </ul>
        </div>
      </nav>



      <div class="container-fluid p-0">
        <a href="/seeInvites" class="float-right"  style="padding:20px; margin-right: 20px;"><h3><i class="fa fa-bell"></i><span style="margin-left:-2px;"><sub>{{$invitecount}}</sub></span></h3>
        </a>

        <section class="resume-section p-2 p-lg-5 " id="about">
          {{-- <div class="background"> --}}
          <div class="row">
          <div class="homeback col-lg-6">
            <div class="my-auto" style="">

              <h2 class="mb-0">{{strtoupper($user->fname)}}
                <span class="text-primary">{{strtoupper($user->lname)}}</span>
              </h2>
              <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                <a href="mailto:name@email.com">name@email.com</a>
              </div>
              <div class="mb-0 p-0" style="margin-left:5px;">
                <form class="form-inline" action="{{route('search')}}" method="post">
                  @csrf

                <div class="input-group">
                  <input type="text" name="search" class="form-control col-lg-12" placeholder="search user...">
                  <button style="border-radius:3px;"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div> <br>
              <ul class="list-inline list-social-icons mb-0">
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="row">
              <table class="table table-stripe">
                <tr>
                  <th><h4>IVITATIONS</h4></th>
                </tr>
            @foreach ($invites as $invite)

                <tr>
                  <td><a href="/profile/{{$invite->invited_by}}"><h5 class="mb-0">{{strtoupper($invite->invited_by)}}</a>

                  </h5></td>
                  <td> <a href="/accept/{{$invite->invited_by}}">ACCEPT</a> </td>
                  <td> <a href="/decline{{$invite->invited_by}}">DECLINE</a> </td>

                </tr>

            @endforeach
          </table>


          </div>
          </div>
      </div>




</div>


        </section>


        {{--  inc fin --}}





      </div>

      <!-- Bootstrap core JavaScript -->

    </body>

@endsection
