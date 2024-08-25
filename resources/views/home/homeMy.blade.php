@extends('layoutMy')
@section('title', 'CattleFarming-Home')
@section('content')

    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="{{ url('css/health.css') }}">

    <div class="container">
        <div class="hero text-center">
            <div class="hero-content">
                <h1>Welcome to Our Cattle Farming Website</h1>
                <p>Experience the best in cattle farming</p>
                <a href="/cattleMy" class="btn btn-primary">Learn More</a>
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
        <p> မြန်မာနိုင်ငံတွင် ကျွဲနွားမွေးမြူခြင်းနှင့်ပတ်သက်သည့် နောက်ဆုံးရသတင်းအချက်အလတ်များအတွက်
            ယုံကြည်စိတ်ချရသော
            နှင့် နောက်ဆုံးပေါ်အချက်အလက်များအတွက် သင်၏သွားရင်းမြစ်ဖြစ်သော နွားမွေးမြူခြင်းဆိုင်ရာ
            အချက်အလက်ဝဘ်ဆိုဒ်မှ ကြိုဆိုပါသည်။ ကျွန်ုပ်တို့၏ ရည်မှန်းချက်မှာ အမဲသားနှင့် နို့ထွက်ပစ္စည်း
            မွေးမြူခြင်း၊ အာဟာရ၊ ကျန်းမာရေး စီမံခန့်ခွဲမှုနှင့် မြန်မာနိုင်ငံရှိ ကျွဲနွားမွေးမြူခြင်း၏ စီးပွားရေးဆိုင်ရာ
            အရေးပါမှုများ အပါအဝင် အကောင်းဆုံး အလေ့အကျင့်များ အပါအဝင် လယ်သမားများနှင့် စက်မှုလုပ်ငန်း ကျွမ်းကျင်သူများကို
            မရှိမဖြစ် အသိပညာများ ပေးဆောင်ရန် ဖြစ်ပါသည်။ </p>
        <p> မွေးမြူခြင်းနှင့် အာဟာရမှ ကျန်းမာရေးစီမံခန့်ခွဲမှုအထိ နှင့် ကျွန်ုပ်တို့၏လှပသောနိုင်ငံရှိ
            ကျွဲနွားမွေးမြူခြင်း၏ စီးပွားရေးဆိုင်ရာ အကျိုးသက်ရောက်မှုများအပေါ် ကျွမ်းကျင်သော အကြံဉာဏ်များကို ရှာဖွေပါ။
            သင်သည် အတွေ့အကြုံရှိသော လယ်သမားတစ်ဦးဖြစ်ပါစေ စတင်လုပ်ဆောင်သည်ဖြစ်စေ ကျွဲနွားမွေးမြူခြင်းဆိုင်ရာ
            အချက်အလက်ဝဘ်ဆိုဒ်သည် သင့်အောင်မြင်မှုအတွက် ကူညီပေးရန်အတွက် ဤနေရာတွင်ရှိပါသည်။</p>
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
                        <h5 class="card-title"><b>နို့စားနွား</b></h5>
                        <br>
                        <button class="btn btn-link me-3"><a href="/dairy">ပိုမိုရှာဖွေရန် →</a>
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
                        <h5 class="card-title"><b>အသားစားနွား</b></h5>
                        <br>
                        <button class="btn btn-link me-3"><a href="/beef">ပိုမိုရှာဖွေရန် →</a></button>
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
                        <h5 class="card-title"><b>ခိုင်းနွား</b></h5>
                        <br>
                        <button class="btn btn-link me-3 "><a href="/draft">ပိုမိုရှာဖွေရန် →</a></button>
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

        h4{
            font-weight: 700;
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
