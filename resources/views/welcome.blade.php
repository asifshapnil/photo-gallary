@extends('layouts.mastar')

@section('content')

    <body id="page-top">
      <nav class="navbar navbar-expand-lg navbar-dark card bg-faded card-header fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">Start Bootstrap</span>
          <span class="d-none d-lg-block">
            {{-- <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('image/' . $user->image)}}" alt=""> --}}
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Compition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#skills">Exibition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/userLogout">Online</a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container-fluid p-0">

        <section class="resume-section p-2 p-lg-5 " id="about">
          <div class="background">
            <div class="my-auto float-right" style="">
              <h1 class="mb-0 landing">
                <span class="text-primary landing1"></span>
              </h1>

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
              <a href="/login" class="btn btn-xs btn-info">SIGN IN</a>
              <a href="/register" class="btn btn-xs btn-info">SIGN UP</a>

            </div>
          </div>
     <br> <br>
        <center>
          <div class="header">
              <h1>PHOTO <span class="text-primary">GALLARY</span></h1>
              <p>Resize the browser window to see the responsive effect.</p>
          </div>
        </center> <hr>
<!-- Photo Grid -->
<div class="row l">
  <div class="column lc">
    <img src="http://www.wentrupgallery.com/media/gallery.jpg" style="width:100%">
    <img src="https://courtauld.ac.uk/wp-content/uploads/2015/06/693A9633.jpg" style="width:100%">
    <img src="http://www.evbooks.net/wp-content/uploads/2017/11/VAG-Landon-Mackenzie-1001_b7ca39cb-5056-b3a8-49387b313d5abd16.jpg" style="width:100%">
    <img src="https://static1.squarespace.com/static/585a04473e00be7e29c5db53/585a0cbd414fb5eed20fab6b/5a5e893f71c10b3c9184ac77/1516145014798/MrMusicheadGallery-Center.jpg?format=1500w" style="width:100%">
    <img src="http://www.saulgallery.com/thumbs/63eaa993894347046e61776e2596ec00.985.680.1.1.0.75.jpg?1468608418" style="width:100%">
    <img src="http://www.weekender.co.uk/wp-content/uploads/2017/02/galleryoxo.jpg" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6By_MFM9N-Ip1TOnFU2TCQCarMa7dz8982Qxr_HemIDKsf8ne" style="width:100%">
  </div>
  <div class="column lc">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPC-dvthktaeop7Ts4O5XhqpKdCDmgru9f1UAZhsV01jTbnfY" style="width:100%">
    <img src="http://name-foundation.org/wp-content/uploads/2016/04/PLATUX_Gallery.jpg" style="width:100%">
    <img src="https://www.arc.unsw.edu.au/generated/hero-large/sf-gallery-shot-jpg.jpg?1453082710" style="width:100%">
    <img src="https://media.timeout.com/images/103086201/630/472/image.jpg" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqpc-7ivPc7XFXEb7McDZ3d9o10ptdhkkWGWA9DI5NWpZ9anLM" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJwtJ6YHKG5xvsJo9gWohvN_pCCVY7lsaHzcxrFHLv2SglWpeV" style="width:100%">
  </div>
  <div class="column lc">
    <img src="http://art.ku.edu/sites/art.ku.edu/files/styles/slideshow-1180/public/images/slideshow/gallery-660x400.jpg?itok=PzMeixtD" style="width:100%">
    <img src="http://www.mainlands6.org/wp-content/uploads/2017/11/photo-gallery.jpg" style="width:100%">
    <img src="http://www.staedelmuseum.de/sites/default/files/styles/col-4/public/gallery/ausstellungsansichten_monet_8_web.jpg?itok=G43zQ3y2" style="width:100%">
    <img src="https://www.the-soc.org.uk/images/TheDonaldWatsonArtGallerybySteveCox3.jpg" style="width:100%">
    <img src="https://www.ditocker.nz/images/1728/large/ThePainterandtheGlassmaker-VISIT-exhibition7.jpg" style="width:100%">
    <img src="http://www.pssportowe.org/wp-content/uploads/art-gallery-framing-art-gallery-picture-framing-in-boulder-co-15th-street-gallery.jpg" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS918A_KObNQTOfsCvmkEAnThwmH9KDsYN34Z_ohN8TPpWJ4DD13g" style="width:100%">
  </div>
  <div class="column lc">
    <img src="http://www.pssportowe.org/wp-content/uploads/art-gallery-framing-art-gallery-picture-framing-in-boulder-co-15th-street-gallery.jpg" style="width:100%">
    <img src="https://courtauld.ac.uk/wp-content/uploads/2015/06/693A9633.jpg" style="width:100%">
    <img src="http://www.evbooks.net/wp-content/uploads/2017/11/VAG-Landon-Mackenzie-1001_b7ca39cb-5056-b3a8-49387b313d5abd16.jpg" style="width:100%">
    <img src="https://static1.squarespace.com/static/585a04473e00be7e29c5db53/585a0cbd414fb5eed20fab6b/5a5e893f71c10b3c9184ac77/1516145014798/MrMusicheadGallery-Center.jpg?format=1500w" style="width:100%">
    <img src="http://www.saulgallery.com/thumbs/63eaa993894347046e61776e2596ec00.985.680.1.1.0.75.jpg?1468608418" style="width:100%">
    <img src="http://www.weekender.co.uk/wp-content/uploads/2017/02/galleryoxo.jpg" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6By_MFM9N-Ip1TOnFU2TCQCarMa7dz8982Qxr_HemIDKsf8ne" style="width:100%">
  </div>
</div>



        </section>


        {{--  inc fin --}}





      </div>

      <!-- Bootstrap core JavaScript -->

    </body>

@endsection
