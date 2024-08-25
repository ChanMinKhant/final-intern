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
                        src="\image\Myanmar-cattle.jpg"
                        class="d-block w-100" alt="Farm Image 1">
                    <div class="carousel-caption d-none d-md-block ">
                        <h4><strong>Welcome to Our Cattle Farming Website</strong></h4>
                        <p><strong>Experience sustainable and ethical farming practices.</strong></p>
                        <a class="btn btn-primary" href="/cattleMy">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width:100%; height:715px"
                        src="\image\istockphoto-1193351509-612x612.jpg"
                        class="d-block w-100" alt="Farm Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Health</strong></h4>
                        <p><strong>Learn how to care about their health.</strong></p>
                        <a class="btn btn-primary" href="/healthMy">View Health</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="\image\traditional-agriculture-bagan-myanmar-footage-089556034_prevstill.jpg"
                        class="d-block w-100" alt="Farm Image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Types of Cattles</strong></h4>
                        <p><strong>Discover the different breeds we raise with care.</strong></p>
                        <a class="btn btn-primary" href="/cattleMy">View Our Cattles</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="\image\portrait-beautiful-grazing-cows-rural-village-green-meadow-closeup-countryside-slovenia_556894-2138.jpg"
                        class="d-block w-100" alt="Farm Image 4">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>Articles</strong></h4>
                        <p><strong>Give Knowledges to Farmers.</strong></p>
                        <a class="btn btn-primary" href="/generalMy">Read General Knowledges</a>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img style="width:100%; height:715px"
                        src="\image\Farming_Myanmar.jpg"
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
                        src="\image\Cow_female_black_white.jpg"
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
                            src="\image\homecow223.jpg"
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
                        src="\image\homepage1233.jpg"
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
            background: url('\image\beautiful-asian-woman-farmer-with-cows-cowshed-dairy-farm_1150-12771.jpg') no-repeat center center;
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
