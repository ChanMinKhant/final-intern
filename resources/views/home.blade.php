@extends('layout')
@section('title', 'CattleFarming-Home')
@section('content')

    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="{{ url('css/health.css') }}">

    <div class="container">
        <div class="hero text-center">
            <div class="hero-content">
                <h1>Welcome to Our Cattle Farming Website</h1>
                <p>Experience the best in cattle farming</p>
                <a href="/cattle" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:100%; height:715px;"
                        src="https://www.nativebreed.org/wp-content/uploads/2020/05/Myanmar-cattle.jpg"
                        class="d-block w-100" alt="Farm Image 1">
                    <div class="carousel-caption d-none d-md-block ">
                        <h4><strong>Welcome to Our Cattle Farming Website</strong></h4>
                        <p><strong>Experience sustainable and ethical farming practices.</strong></p>
                        <a class="btn btn-primary" href="/cattleMy">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width:100%; height:715px"
                        src="https://media.istockphoto.com/id/1193351509/photo/bullock-and-barn-bagan-myanmar.jpg?s=612x612&w=0&k=20&c=DfOq7_qjKxrhF_PnT9XFGZcWenED2rfM8_LBm3Oqc4I="
                        class="d-block w-100" alt="Farm Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Health</strong></h4>
                        <p><strong>Learn how to care about their health.</strong></p>
                        <a class="btn btn-primary" href="/healthMy">View Health</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="https://images.pond5.com/traditional-agriculture-bagan-myanmar-footage-089556034_prevstill.jpeg"
                        class="d-block w-100" alt="Farm Image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Types of Cattles</strong></h4>
                        <p><strong>Discover the different breeds we raise with care.</strong></p>
                        <a class="btn btn-primary" href="/cattleMy">View Our Cattles</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="https://img.freepik.com/premium-photo/portrait-beautiful-grazing-cows-rural-village-green-meadow-closeup-countryside-slovenia_556894-2138.jpg"
                        class="d-block w-100" alt="Farm Image 4">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Articles</strong></h4>
                        <p><strong>Give Knowledges to Farmers.</strong></p>
                        <a class="btn btn-primary" href="/generalMy">Read General Knowledges</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="https://www.theigc.org/sites/default/files/styles/max_820x461/public/2021/01/Farming_Myanmar.jpg?h=7a91d091&itok=JNJUs4Np"
                        class="d-block w-100" alt="Farm Image 5">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Gallery</strong></h4>
                        <p><strong>Give Knowledges to Farmers.</strong></p>
                        <a class="btn btn-primary" href="/galleryMy">View Photos</a>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    {{-- <div class="container1 mt-5">
        <h3 class="text-center mb-4"><strong>Introduction</strong></h3>
        <p>Welcome to our Myanmar Cattle Farming Information Website, your go-to source for reliable and up-to-date
            information on cattle farming in Myanmar. Our mission is to equip farmers and industry professionals with
            essential knowledge on best practices, including beef, draft, and dairy farming, nutrition, health management,
            and the
            economic significance of cattle farming in Myanmar.</p>
        <p>Discover expert advice on everything from breeding and nutrition to health management and the economic impact of
            cattle farming in our beautiful country.Whether you're an experienced farmer or just starting out, Myanmar
            Cattle Farming Info Hub is here to help you succeed in your cattle farming endeavors.</p>
    </div> --}}

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <a href="/dairy">
                    <img class="card-img-top"
                        src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Cow_female_black_white.jpg"
                        alt="Article Image">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Dairy Cattle</b></h5>
                        <br>
                        <button class="btn btn-link me-3"><a href="/dairy">Discover More →</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/beef">
                        <img class="card-img-top"
                            src="data:image/jpeg;base64,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"
                            alt="Article Image">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Beef Cattle</b></h5>
                        <br>
                        <button class="btn btn-link me-3"><a href="/beef">Discover More →</a></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="/draft">
                    <img class="card-img-top"
                        src="data:image/jpeg;base64,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"
                        alt="Article Image">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Draft Cattle</b></h5>
                        <br>
                        <button class="btn btn-link me-3 "><a href="/draft">Discover More →</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="con">
        <div>
            <p><strong>Whether you're interested in our website, or simply want to say hello, we'd love to hear from
                    you.</strong></p>
            <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .hero {
            background: url('https://img.freepik.com/free-photo/beautiful-asian-woman-farmer-with-cows-cowshed-dairy-farm_1150-12771.jpg?t=st=1720023080~exp=1720026680~hmac=d209679d2345185c61f60711b6cb35ed460281d72d549a4fc422edb168d596c9&w=900') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .hero h1 {
            font-size: 3.2em;
            font-weight: 700;
        }

        h4{
            font-weight: 700;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
        }

        .container1 {
            background-color: #f8f9fa;
            padding: 10px;
            margin: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container1:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        .page-title {
            font-size: 2.5em;
            font-weight: bold;
        }

        .card {
            transition: transform 0.3s;
            border-radius: 15px;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card-body {
            padding: 10px;
        }

        .btn-link a {
            text-decoration: none;
            color: #008080;
        }

        .btn-link a:hover {
            text-decoration: underline;
        }

        .con {
            background: #e9ecef;
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .btn-primary {
            background-color: #008080;
            border: none;
        }

        .btn-primary:hover {
            background-color: #006666;
        }

        .btn-link {
            font-weight: bold;
            color: #6c757d;
            text-transform: uppercase;
            text-decoration: none;
            margin-left: 35px;
        }
    </style>
@endsection
