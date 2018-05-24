{{-- @extends('layouts.app') --}}
@extends('layouts.mastar')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <body id="page-top">

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Start Bootstrap</span>
                <span class="d-none d-lg-block">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('image/'.$user->image)}}" alt="">
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/register">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/login">Sign In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Documentation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">Updates</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
            <div class="container-fluid p-0">

              <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
                <div class="my-auto">
                  <h1 class="mb-0">{{strtoupper($user->fname)}}
                    <span class="text-primary">{{strtoupper($user->lname)}}</span>
                  </h1>
                  <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                    <a href="mailto:name@email.com">name@email.com</a> </br> </br>
            <div class="card">
              @if (session('status'))
                {{session('status')}}
              @endif
                <div class="card-header">{{ __('Edit Info') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('editprofile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{$user->fname}}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{$user->lname}}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$user->password}}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Your Photo') }}</label>

                            <div class="col-md-6">
                              <i class="fa fa-file file " style="margin-right:10px;"></i><span class="name1"style="margin-right:10px;">No file selected</span>
                              <input id="image" type="file" class="pic" name="image">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Info') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
