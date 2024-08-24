@extends('layout')
@section('title', 'CattleFarming - About')
@section('content')

    <!-- Hero Section -->
    <div class="hero1">
        <div class="container text-center">
            <h1><b>About Our Information Hub</b></h1>
            <p><b>Your comprehensive source for cattle farming knowledge</b></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">

        <!-- Intro Section -->
        <section class="mb-5 text-center">
            <h2 class="mb-4"><strong>Introduction</strong></h2>
            <p>Welcome to <b>Myanmar Cattle Farming Information Website</b>, your go-to source for reliable and up-to-date
                information on cattle farming in Myanmar. Our mission is to equip farmers and industry professionals with
                essential
                knowledge on best practices, including beef and dairy farming, nutrition, health management, and the
                economic significance of cattle farming in Myanmar.</p>
            <p>Discover expert advice on everything from breeding and nutrition to health management and the economic
                impact of cattle farming in our beautiful country. Whether you're an experienced farmer or just starting
                out,
                Myanmar Cattle Farming Info Hub is here to help you succeed in your cattle farming endeavors.</p>
        </section>

        <!-- Journey Section -->
        <section class="mb-5">
            <h2 class="text-center mb-4"><strong>Our Journey</strong></h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Established in 2024</h4>
                            <p class="card-text">Our mission is to provide farmers, enthusiasts, and researchers with
                                reliable
                                and up-to-date information on cattle farming practices, breeds, health, and management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Our Mission</h4>
                            <p class="card-text">To empower cattle farmers with the knowledge they need to succeed and to
                                promote sustainable and ethical farming practices worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Our Vision</h4>
                            <br>
                            <p class="card-text">To become the leading online resource for cattle farming information,
                                fostering
                                a global community of informed and successful cattle farmers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Our Values</h4>
                            <p class="card-text">At our Information Website, we believe in the power
                                of knowledge
                                and the importance of sharing it responsibly. Our content is driven by a commitment to
                                accuracy,
                                sustainability, and ethical farming practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        {{-- <section class="mb-5">
            <h2 class="text-center mb-4"><strong>Our Achievements</strong></h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4 class="card-title">2020</h4>
                            <p class="card-text">Website established</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4 class="card-title">2022</h4>
                            <p class="card-text">Reached 1 million visitors</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h4 class="card-title">2024</h4>
                            <p class="card-text">Awarded Best Agricultural Information Website</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Our Team -->
        <section class="mb-5 text-center">
            <h2 class="mb-4"><strong>Our Team</strong></h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-4">
                        <div class="card border-light shadow-sm">
                            <a href="\image\dev.jpg">
                            <img src="\image\dev.jpg" class="card-img-top rounded-circle mx-auto" alt="Thiri">
                        </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">Thiri Shwe Yee Wai</h5>
                                <p class="card-text">Developer: Currently pursuing a degree in Computer Science at
                                    UCS-Pyay, Thiri is contributing to building and enhancing our website's features.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        {{-- <section class="mb-5">
            <h2 class="text-center mb-4"><strong>Testimonials</strong></h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <blockquote class="blockquote text-center mb-0">
                        <p class="mb-0">"The information on <b>Cattle Farming Website: Everything You Need To Know</b> has
                            been invaluable to my farming practice. The
                            articles are well-researched and practical, helping me improve my cattle management."</p>
                        <footer class="blockquote-footer mt-2">U Zaw Oo, Small-scale Farmer</footer>
                    </blockquote>
                </div>
            </div>
        </section> --}}

        <!-- Call to Action Section -->
        <section class="text-center mb-5">
            <h2>Get in Touch</h2>
            <p>Ready to dive into the world of cattle farming? <a href="/cattle" class="btn btn-primary">Explore our
                    cattles</a> or <a href="/contact" class="btn btn-secondary">Contact us</a> to learn more and become part
                of our community.</p>
        </section>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

        body {
            font-family: 'Lato', sans-serif;
        }

        .hero1 {
            background-image: url('https://www.feednavigator.com/var/wrbm_gb_food_pharma/storage/images/_aliases/wrbm_large/publications/feed/feednavigator.com/article/2018/05/29/dutch-feed-group-confident-about-growth-opportunities-in-myanmar/8241523-3-eng-GB/Dutch-feed-group-confident-about-growth-opportunities-in-Myanmar.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .hero1 h1 {
            font-size: 3.5em;
            font-weight: 700;
        }

        .hero1 p {
            font-size: 1.2em;
            font-weight: 400;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.5em;
            font-weight: 700;
        }

        .card-text {
            font-size: 1em;
            color: #333;
        }

        section {
            text-align: center;
        }

        .card-img-top {
            width: 150px;
            /* Adjust size as needed */
            height: 150px;
            /* Ensure the image is round */
            object-fit: cover;
            /* Ensure the image maintains its aspect ratio */
        }
    </style>

@endsection
