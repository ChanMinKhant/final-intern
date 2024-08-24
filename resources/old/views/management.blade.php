@extends('layout')
@section('title', 'Farm-Management')
@section('content')
    <link rel="stylesheet" href="{{ url('css/management.css') }}">

    <h3 class="page-title mt-3" style="padding-top: 25px; margin-bottom: 30px;"><strong><b>Farm-Management</b></strong></h3>

    <div class="container">

        <div>
            <div class="d-flex justify-content-center">
                <img style="border-radius:0px; width:450px; height:300px; padding:10px; image-shadow:20px;"
                    src="https://www.iaea.org/sites/default/files/styles/basic_page_section_original_ratio/public/myanmar3467_1140x640.jpg?itok=0FOypC9r"
                    alt="Cattle Herd" class="support-image">
            </div>
            <p class="lead">Cattle farming in Myanmar is pivotal to its rural economy, providing draught power, manure,
                and
                beef
                essential for many families. As global and local demand for beef and dairy products rises,
                effective cattle farm management is critical. Integrating traditional wisdom with modern,
                sustainable practices enhances productivity and herd welfare. Myanmar's diverse climates—from Shan
                State's green pastures to Ayeyarwady Delta's fertile plains—offer ideal conditions for robust
                cattle. Challenges like disease control, feed quality, and breeding efficiency underscore the need
                for holistic farm management strategies.
            </p>
            <div>
                <p class="lead" style="padding-top: 10px; margin:5px;"><i><span style="color: #993300">Supporting
                            Farmers</span></i></p>
                <p class="lead">
                    - To support cattle farmers in Myanmar, this article offers practical advice and proven strategies
                    to
                    improve farm management.
                    <br> - Here are some <strong>articles</strong>:

                </p>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <a style="text-decoration: none; " href="/manage4">
                            <img style="height: 200px;" src="https://greenwaymyanmar.com/uploads/post_covers/0acd05a47067ae812b673124e9a1790f.jpg"
                                class="card-img-top img-fluid" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title"><small style="color: #333;">Points to focus <br>on dairy farming
                                    </small>
                                </h5>
                                <p class="card-text">
                                    <small>The article emphasizes the crucial role of meticulous record-keeping in dairy
                                        farming for optimizing productivity and profitability. It underscores monitoring
                                        essential
                                        metrics such as daily milk yield per cow, lactation periods,...
                                    </small>
                                </p>
                                <a href="/manage4" class="read-more">Read more →</a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/f6e4c897a0fd675b944c200fbaac93cf.png"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>Selling Heifers</small></h5> <br>
                            <p class="card-text">
                                <small>
                                    Deciding when to sell heifers is essential for farm profitability. Breeders
                                    should consider their goals, the quality and quantity of heifers, milk yield, cow
                                    health,
                                    and
                                    market conditions. Proper breeding is crucial, with about 20% of heifers...
                                </small>
                            </p>
                            <a href="/manage1" class="read-more">Read more →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" style="height:200px;"
                            src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/cae3418bc5f4da1ab9134d23c2d3fcc6.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>Forming A Cattle Farm</small></h5> <br>
                            <p class="card-text">
                                <small>
                                    The text talks about how breeders decide which heifers to sell on dairy farms.
                                    It stresses the importance of each cow being productive to reduce costs and workload.
                                    Managing
                                    the herd well means having mostly milking cows,...
                                </small>
                            </p>
                            <a href="/manage2" class="read-more">Read more →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/943bd1cc41b206e6fb921adfbb06b31a.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>Fertility rates and <br> farm profitability
                                    of cows</small></h5>
                            <p class="card-text">
                                <small>
                                    The text highlights how important it is for dairy farms to have cows that
                                    give
                                    birth regularly and efficiently. It explains that heifers with good calving abilities
                                    help
                                    increase the number of calves...
                                </small>
                            </p>
                            <a href="/manage3" class="read-more">Read more →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
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
        .lead {
            font-size: 0.9em;
        }

        h4 {
            font-size: 1em;
        }
    </style>

@endsection
