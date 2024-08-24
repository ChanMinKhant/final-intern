@extends('layout')
@section('title', 'Gallery')
@section('content')

    <div class="container">
        <h3 class="page-title text-center" style="padding-top: 30px; padding-bottom: 10px;">
            <strong><b>Gallery</b></strong>
        </h3> <br>
        <p class="text-center mb-5 lead">"Discover the Beauty of Our Cattle Farm Through Pictures and Videos"</p>
    </div>
    <br>

    <!-- Gallery Categories -->
    <div class="container mt-3">

        <!-- Cattle Breeds -->
        <div class="row mb-5">
            <div class="text-center mb-4">
                {{-- <h3 class="category-title">Cattle Breeds</h3> --}}
                <h3 class="category-title">Pictures</h3>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d1.jpg">
                        <img src="\image\d1.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d2.jpg">
                        <img src="\image\d2.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d3.jpg">
                        <img src="\image\d3.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <!-- Second row of Cattle Breeds -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d11.jpg">
                        <img src="\image\d11.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d4.jpg">
                        <img src="\image\d4.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d5.jpg">
                        <img src="\image\d5.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <!-- Third row of Cattle Breeds -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d6.jpg">
                        <img src="\image\d6.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d7.jpg">
                        <img src="\image\d7.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d8.jpg">
                        <img src="\image\d8.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <!-- Fourth row of Cattle Breeds -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d9.jpg">
                        <img src="\image\d9.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d10.jpg">
                        <img src="\image\d10.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\d12.jpg">
                        <img src="\image\d12.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h3 class="category-title">Housing and Facilities</h3>
            </div>
            <!-- First row -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h1.jpg">
                        <img src="\image\h1.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h2.jpg">
                        <img src="\image\h2.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h3.jpg">
                        <img src="\image\h3.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <!-- Second row -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h4.jpg">
                        <img src="\image\h4.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h5.jpg">
                        <img src="\image\h5.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h6.jpg">
                        <img src="\image\h10.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <!-- Third row -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h7.jpg">
                        <img src="\image\h7.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h8.jpg">
                        <img src="\image\h8.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="\image\h9.jpg">
                        <img src="\image\h9.jpg" class="card-img-top gallery-thumbnail">
                    </a>
                </div>
            </div>
        </div>

        <!-- Videos -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h3 class="category-title">Videos</h3>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="800" height="450"
                        src="https://www.youtube.com/embed/juusa7FOEoY"
                        title="ရိုးရာဓလေ့မှ ခွဲထွက်လာသူ နို့စားနွားမွေးမြူရေးခြံပိုင်ရှင် ဦးအောင်မြင့်" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 1</div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="670" height="377"
                        src="https://www.youtube.com/embed/yH4aMMh8ykY" title="Myanmar cows farming" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 2</div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="670" height="377"
                        src="https://www.youtube.com/embed/7T9WWwzyoAI" title="စနစ်တကျ နို့စားနွားမွေးမြူရေး"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 3</div>
                    </div> --}}
                </div>
            </div>
            <!-- Second row of Videos -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="670" height="377"
                        src="https://www.youtube.com/embed/hCXGfNbfRik" title="Dairy cow nutrition in Myanmar"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 4</div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="670" height="377"
                        src="https://www.youtube.com/embed/mPjE3mW-REc"
                        title="Farmer U Kyaw Moe talks about changes to his farm" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 5</div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <iframe class="card-img-top gallery-thumbnail" width="670" height="377"
                        src="https://www.youtube.com/embed/wjSod8aoJjM" title="Myanmar&#39;s working cattle | SPANA"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <div class="overlay">
                        <div class="text">Video 6</div>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>

    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor"
            class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 1-.5-.5V3.707L3.354 8.854a.5.5 0 1 1-.708-.708l5-5a.5.5 0 0 1 .708 0l5 5a.5.5 0 0 1-.708.708L8.5 3.707V14.5a.5.5 0 0 1-.5.5z" />
        </svg>
    </button>

    <script>
        // Get the button
        var mybutton = document.getElementById("backToTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <style>
        .gallery-thumbnail {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-thumbnail:hover {
            transform: scale(1.05);
        }

        .card {
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        img:hover .overlay {
            opacity: 1;
        }

        .text {
            font-size: 1.2rem;
            padding: 10px;
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            border-bottom: 2px solid black;
            display: inline-block;
            padding-bottom: 10px;
        }

        #backToTopBtn {
            position: fixed;
            bottom: 55px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #ffc95e;
            color: white;
            cursor: pointer;
            padding: 20px;
            border-radius: 50%;
            display: none;
            /* Hidden by default */
            font-size: 18px;
        }

        #backToTopBtn:hover {
            background-color: #555;
        }
    </style>

@endsection
