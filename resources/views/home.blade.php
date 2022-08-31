@extends('layouts.main')
{{-- untuk yield yang ada di parent view atau template utama --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>

<style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}

/* GLOBAL STYLES
--------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 3rem;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}

/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}

.carousel-item>img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}

.marketing h2 {
  font-weight: 400;
}


.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0;
  /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
</style>


<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
</head>

@section('container')
<main>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <img src="https://source.unsplash.com/1200x400/?nature" width="100%" height="100%" ></svg>

          <div class="container-fluid">
            <div class="carousel-caption text-left">
              <h1>Slide dengan Gambar Nature</h1>
              <p>{{ ucwords('kan ku pendam sendiri kuredam teriakan ku sendiri bersumpah tak ingin lagi tak mau ke gambar yang ada di belakang antum') }}
              </p>
              <p><a class="btn btn-lg btn-primary" href="/daftar-user" role="button">Daftar user</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <img src="https://source.unsplash.com/1200x400/?architecture" width="100%" height="100%" ></svg>

          <div class="container-fluid">
            <div class="carousel-caption">
              <h1>Architecture Slide</h1>
              <p>Selama jantung ini berdetak kuakan selalu menjagamu. Hingga tua bersama</p>
              <p><a class="btn btn-lg btn-primary" href="https://music.youtube.com/watch?v=vxg4NJ6jVZs&list=RDAMVMPt4b6YUqJc0" role="button">Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <img src="https://source.unsplash.com/1200x400/?skyview" width="100%" height="100%" ></svg>

          <div class="container-fluid">
            <div class="carousel-caption text-right">
              <img src="img/" alt="">
              <h1>Sky View for Everybody</h1>
              <p>Hooh tenann. Ente ya Kadang kadang ente, istilah kata ni ye sekali sewang kita</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Cek Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container-fluid to center all the content. -->

    <div class="container-fluid marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
            <img src="https://source.unsplash.com/140x140?sports" class="bd-placeholder-img rounded-circle">
            <title>Placeholder</title>
          </svg>
          <h2>Berolahraga</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
            vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
            magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="https://source.unsplash.com/140x140?life" class="bd-placeholder-img rounded-circle">
            <title>Placeholder</title>
          </svg>
          <h2>Bersantai</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
            mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="https://source.unsplash.com/140x140?hiking" class="bd-placeholder-img rounded-circle">
          <h2>Berpetualang</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
            felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
            massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Bisa diringankan dengan. <span class="text-muted">It’ll blow your mind.</span>
          </h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="https://source.unsplash.com/500x500?technology" alt="">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="https://source.unsplash.com/500x500?interiors" alt="">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="https://source.unsplash.com/500x500?street-photography" alt="">

        </div>
      </div>

      <hr class="featurette-divider">
    </div><!-- /.container-fluid -->


    <!-- FOOTER -->
    <footer class="container-fluid">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
@endsection