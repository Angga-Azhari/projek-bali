<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonderfull Bali</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/popular.css" type="text/css">
</head>

<body>
    <nav>
        <div class="bg-img">
            <div class="container">
                <header class="d-flex justify-content-center py-3">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link bg-header h6" aria-current="page" href="index.php">Home</a>
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
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/BukitCampuhan.png">
                    <div class="card-body">
                        <h4 class="card-title">Bukit Campuhan</h4>
                        <div class="card-body">
                            <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p1">
                            Read More
                        </button>
                        <div class="modal fade" id="p1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Bukit Campuhan</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/BukitCampuhan.png">
                                        <p class="lead">Perbukitan yang hijau dipenuhi dengan pepohonan tropis yang lengkap dengan area persawahan dan lembah.
                                            Karena tempatnya yang begitu romantis dan eksotis,
                                            Bukit ini juga dijuluki sebagai Bukit Cinta Campuhan.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Jl. Bangkiang Sidem, Kelusa, Payangan, Kabupaten Gianyar, Bali 80571
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/pantaipandawa.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Pantai Pandawa</h4>
                        <p class="card-text">
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <br>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p2">
                            Read More
                        </button>
                        <div class="modal fade" id="p2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Pantai Pandawa</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/pantaipandawa.jpg">
                                        <p class="lead">Pantai berpasir putih ini cukup populer akhir-akhir ini karena menawarkan pemandangan yang begitu eksotis dan mempesona.
                                            Berada di Desa Kutuh, Kec. Kuta Selatan, Kab. Badung,pantai ini memiliki hamparan garis pantainya
                                            yang landai, bersih, serta bibir pantai yang agak luas, sehingga sangat cocok untuk dijadikan wisata bersama keluarga</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                        Jl. Pantai Pandawa, Kutuh, Kec. Kuta Sel., Kabupaten Badung, Bali 80361
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/Waterbom.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Waterbom Bali</h4>
                        <p class="card-text">
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <br>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p3">
                            Read More
                        </button>
                        <div class="modal fade" id="p3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Waterbom Bali</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/Waterbom.jpg">
                                        <p class="lead">Wisata taman air di Pulau Bali ini sudah 3 tahun berturut-turut mendapatkan title sebagai waterpark terbaik yang ada di Asia serta kedua terbaik di dunia.
                                            Sehingga bisa dibayangkan bagaimana keseruan dari wahana-wahana air yang ada di waterboom bali</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Jl. Kartika Plaza, Tuban, Kuta, Kabupaten Badung, Bali 80361
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/GWK.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Garuda Wisnu Kencana</h4>
                        <p class="card-text">
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p4">
                            Read More
                        </button>
                        <div class="modal fade" id="p4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Tanah Lot</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/TanahLot.jpg">
                                        <p class="lead">Menurut sejarah Tanah Lot berdasarkan legenda Dang Hyang Nirartha memindahkan batu karang
                                            (tempat bermeditasinya) ke tengah pantai dengan kekuatan spiritual. Batu karang tersebut diberi nama
                                            Tanah Lot yang artinya batukarang yang berada di tengah lautan.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Jl. Raya Uluwatu, Ungasan, Kuta Sel., Kabupaten Badung, Bali
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/kuta.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Pantai Kuta</h4>
                        <p class="card-text">
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <br>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p5">
                            Read More
                        </button>
                        <div class="modal fade" id="p5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Tanah Lot</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/kuta.jpg">
                                        <p class="lead">Siapa yang tidak mengenal Pantai Kuta? Wisata pantai ini rasanya menjadi salah satu ikon wisata Pulau Dewata.
                                            Pesona dan keeksotisan di Pantai Kuta benar-benar tak bisa diragukan lagi.
                                            Sehingga tak heran jika setiap harinya pantai Kuta dipenuhi dengan wisatawan lokal maupun asing.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                        Jl. Pantai Kuta, Kuta, Kabupaten Badung, Bali 80361
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/PuraBesakih.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Pura Besakih</h4>
                        <div class="card-body">
                            <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p6">
                            Read More
                        </button>
                        <div class="modal fade" id="p6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Pura Besakih</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/PuraBesakih.jpg">
                                        <p class="lead">Pura terbesar umat Hindu ini berada di Desa Besakih, Kec. Rendang, Kab. Karangasem,
                                            tepatnya Pura ini berdiri kokh di kaki Gunung Agung,yang menjadi gunung tertinggi di Pulau Bali.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Jl. Gunung Mas No.Ds, Besakih, Rendang, Kabupaten Karangasem, Bali 80863
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/bedugul.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Pura Ulun Danau Bedugul</h4>
                        <p class="card-text">
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p7">
                            Read More
                        </button>
                        <div class="modal fade" id="p7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Pura Ulun Danau Bedugul</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/bedugul.jpg">
                                        <p class="lead">Bedugul adalah sebuah kawasan wisata dengan danau dan gunung di Bali, Indonesia,
                                            terletak di bagian tengah pulau di dekat Danau Bratan antara Denpasar dan Singaraja.
                                            Tempat wisata utama di Bedugul adalah Pura Ulun Danu Bratan dan Kebun Raya Bali</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Jl. Raya Bedugul, Candikuning, Kec. Baturiti, Kabupaten Tabanan, Bali 82191
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/TanahLot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Tanah Lot</h4>
                        <p class="card-text">
                            <br>
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p8">
                            Read More
                        </button>
                        <div class="modal fade" id="p8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Waterbom Bali</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/TanahLot.jpg">
                                        <p class="lead">Menurut sejarah Tanah Lot berdasarkan legenda Dang Hyang Nirartha memindahkan batu karang
                                            (tempat bermeditasinya) ke tengah pantai dengan kekuatan spiritual. Batu karang tersebut diberi nama
                                            Tanah Lot yang artinya batukarang yang berada di tengah lautan</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Beraban, Kec. Kediri, Kabupaten Tabanan, Bali 82121
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/bali zoo.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Bali Zoo</h4>
                        <p class="card-text">
                            <br>
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p9">
                            Read More
                        </button>
                        <div class="modal fade" id="p9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Bali Zoo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/bali zoo.jpg">
                                        <p class="lead">Bali Zoo Park merupakan kebun binatang yang berdiri sejak tahun 2002 dan menjadi yang pertama ada di Bali.
                                            Kebun binatang yang cocok untuk rekreasi keluarga ini memiliki koleksi lebih dari 350 spesies reptil, aneka mamalia, unggas, dan
                                            sejumlah binatang langka dari dalam maupun luar negeri
                                        <div class="modal-footer">
                                            <p class="card-text">
                                                Singapadu, Kec. Sukawati, Kabupaten Gianyar, Bali 80582
                                            </p>
                                            <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card mb-2">
                    <img class="imgiconic" src="images/Uluwatu.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Pura Uluwatu</h4>
                        <p class="card-text">
                            <br>
                        <p class="bintang">&#9733; &#9733; &#9733; &#9733; &#9734;(61)</p>
                        </p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#p10">
                            Read More
                        </button>
                        <div class="modal fade" id="p10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title featurette-heading" id="exampleModalLabel">Pura Uluwatu</h5>
                                    </div>
                                    <div class="modal-body">
                                        <img class="imgpopup" src="images/Uluwatu.jpg">
                                        <p class="lead">Pura Luhur Uluwatu atau Pura Uluwatu merupakan pura yang berada di wilayah Desa Pecatu, Kecamatan Kuta, Badung.
                                            Di depan pura terdapat hutan kecil yang disebut alas kekeran, berfungsi sebagai penyangga kesucian pura. Pura Uluwatu mempunyai beberapa pura pesanakan,
                                            yaitu pura yang erat kaitannya dengan pura induk</p>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="card-text">
                                            Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali
                                        </p>
                                        <button type="button" class="btn btn-secondary align-center" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr class="featurette-divider">
        <br>
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

</body>

</html>