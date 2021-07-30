<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wonderfull Bali</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<body>

  <nav>
    <div class="bg-img">
      <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link bg-header h6" aria-current="page" href="#destination">Destination</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-header h6" href="#culture">Culture</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-header h6" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-header h6" href="#aboutus">About Us</a>
            </li>
          </ul>
        </header>
      </div>
    </div>
  </nav>
  <br><br>
  <div class="container">
    <p class="h2" id="destination"><strong>Recommmended Destination</strong></p>
    <br>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link carousel h5" href="popular.php">Popular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link carousel h5" href="adventure.php">Adventure</a>
      </li>
      <li class="nav-item">
        <a class="nav-link carousel h5" href="beach.php">Beach</a>
      </li>
    </ul>
  </div>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="logo" src="images/bali zoo.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="logo" src="images/sekumpul.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="logo" src="images/pandawa.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br><br><br>
  <div class="container">
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>

      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top imgiconic" src="images/GWK.jpg">
                <div class="card-body">
                  <center>
                    <h4 class="card-title">Garuda Wisnu Kencana</h4>
                    <p class="card-text">
                      Jl. Raya Uluwatu, Ungasan, Kuta Selatan Badung 80364, Bali-Indonesia
                    </p>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#GWK">
                      Read More
                    </button>
                    <div class="modal fade" id="GWK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title featurette-heading" id="exampleModalLabel">GARUDA WISNU KENCANA</h5>
                          </div>
                          <div class="modal-body">
                            <img class="imgpopup" src="images/GWK.jpg">
                            <p class="lead">Garuda Wisnu Kencana (GWK) merupakan sebuah patung raksasa karya salah satu pematung kenamaan asal Bali, Nyoman Nuarta. Patung ini berbentuk Batara Wisnu yang menunggangi hewan legendaris garuda sebagai simbol Amerta, kebajikan yang abadi.
                              GWK akan menjadi patung terbesar di dunia.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top imgiconic" src="images/TanahlotV2.jpg" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h4 class="card-title">Tanah Lot</h4>
                    <p class="card-text">
                      Beraban, Kec. Kediri, Kabupaten Tabanan, Bali
                    </p>
                    <br>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#TanahLot">
                      Read More
                    </button>
                    <div class="modal fade" id="TanahLot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title featurette-heading" id="exampleModalLabel">GARUDA WISNU KENCANA</h5>
                          </div>
                          <div class="modal-body">
                            <img class="imgpopup" src="images/TanahlotV2.jpg">
                            <p class="lead">Garuda Wisnu Kencana (GWK) merupakan sebuah patung raksasa karya salah satu pematung kenamaan asal Bali, Nyoman Nuarta. Patung ini berbentuk Batara Wisnu yang menunggangi hewan legendaris garuda sebagai simbol Amerta, kebajikan yang abadi.
                              GWK akan menjadi patung terbesar di dunia.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top imgiconic" src="images/Bedugul.jpg" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h4 class="card-title">Bedugul</h4>
                    <p class="card-text">
                      Candikuning, Kec. Baturiti, Regency, Bali
                    </p>
                    <br>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Bedugul">
                      Read More
                    </button>
                    <div class="modal fade" id="Bedugul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title featurette-heading" id="exampleModalLabel">GARUDA WISNU KENCANA</h5>
                          </div>
                          <div class="modal-body">
                            <img class="imgpopup" src="images/Bedugul.jpg">
                            <p class="lead">Garuda Wisnu Kencana (GWK) merupakan sebuah patung raksasa karya salah satu pematung kenamaan asal Bali, Nyoman Nuarta. Patung ini berbentuk Batara Wisnu yang menunggangi hewan legendaris garuda sebagai simbol Amerta, kebajikan yang abadi.
                              GWK akan menjadi patung terbesar di dunia.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container">
    <div class="d-flex">
      <hr class="my-auto flex-grow-1 hr">
      <div class="px-4 text-center h2" id="culture"><strong>Culture And Traditions</strong></div>
      <hr class="my-auto flex-grow-1 hr">
    </div>
    <br><br>
  </div>
  <br>
  <div class="container">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">The Reincarnation and Karma in Bali traditions</h2>
        <p class="lead">
          The reincarnation in Bali is usually within the family, so every newborn baby is believed to have one of the ancestors’ soul. Balinese believe in karma, which is understood as a result of physical and spiritual activity of each individual.
        </p>
        <br>
        <a href="#" class="btn btn-warning" role="button" data-bs-toggle="button">Read More</a>
      </div>
      <div class="col-md-5">
        <img src="images/culture1.jpg" class="img-culture" alt="...">
      </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Ceremonies in Bali</h2>
        <p class="lead">
          Every important event in human life is always followed by particular ceremony, for example there are Balinese ceremonies for birth, puberty, maturity, marriage or death,
        </p>
        <br>
        <a href="#" class="btn btn-warning" role="button" data-bs-toggle="button">Read More</a>
      </div>
      <div class="col-md-5">
        <img src="images/culture2.jpg" class="img-culture" alt="...">
      </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Traditions in Bali</h2>
        <p class="lead">
          Tourists find Balinese traditions and beliefs very interesting, because of their uniqueness. When you visit Bali for the first time, it's a must to see at least one of the important temples. If you come during big ceremony
        </p>
        <br>
        <a href="#" class="btn btn-warning" role="button" data-bs-toggle="button">Read More</a>
      </div>
      <div class="col-md-5">
        <img src="images/culture3.jpg" class="img-culture" alt="...">
      </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Culture in Bali</h2>
        <p class="lead">
          Balinese culture is influenced by the religion beliefs; we can say that the religion and culture influenced each other and also development of every kind of art in Bali. Music, drama and dance were part of the ceremonies and temple celebrations.
        </p>
        <br>
        <a href="#" class="btn btn-warning" role="button" data-bs-toggle="button">Read More</a>
      </div>
      <div class="col-md-5">
        <img src="images/culture5.jpg" class="img-culture" alt="...">
      </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <br>
  </div>
  <br>
  <div class="container">
    <div class="d-flex">
      <hr class="my-auto flex-grow-1 hr">
      <div class="px-4 text-center h2" id="gallery"><strong>Gallery</strong></div>
      <hr class="my-auto flex-grow-1 hr">
    </div>
    <br><br>
    <img src="images/Gallery.png" alt="">
  </div>
  <br>
  <hr class="featurette-divider">
  <br>
  <div>
    <footer class="text-center text-lg-start text-muted" id="aboutus">
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <img src="images/Balinese.png" alt="">
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">Platform</a>
              </p>
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">Security</a>
              </p>
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">Help Center</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">Company</a>
              </p>
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">User Manual</a>
              </p>
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">User Stories</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">About</a>
              </p>
              <p>
                <a href="#!" class="tulisan text-uppercase fw-bold mb-4">hellouser@test.com</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: #2a2829;">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="">Team 3</a>
      </div>
    </footer>
  </div>

</body>

</html>