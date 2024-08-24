@extends('layoutMy')
@section('title', 'ခြံစီမံခန့်ခွဲမှု')
@section('content')
    <link rel="stylesheet" href="{{ url('css/management.css') }}">

    <h3 class="page-title mt-3" style="padding-top: 25px; margin-bottom: 30px;"><strong><b>ခြံစီမံခန့်ခွဲမှု</b></strong></h3>

    <div class="container">

        <div>
            <div class="d-flex justify-content-center">
                <img style="border-radius:0px; width:450px; height:300px; padding:10px; image-shadow:20px;"
                    src="https://www.iaea.org/sites/default/files/styles/basic_page_section_original_ratio/public/myanmar3467_1140x640.jpg?itok=0FOypC9r"
                    alt="Cattle Herd" class="support-image">
            </div>
            <p class="lead">
                &nbsp;&nbsp;&nbsp;&nbsp; မြန်မာနိုင်ငံတွင် ကျွဲနွားမွေးမြူရေးလုပ်ငန်းသည် မိသားစုများစွာအတွက်
                မရှိမဖြစ်လိုအပ်သော
                လုပ်အား၊ မြေဩဇာနှင့် အမဲသားကို ပံ့ပိုးပေးသည့် ကျေးလက်စီးပွားရေးအတွက် အဓိကအချက်ဖြစ်သည်။ အမဲသားနှင့်
                နို့ထွက်ပစ္စည်း ၀ယ်လိုအား မြင့်တက်လာသည်နှင့်အမျှ ကမ္ဘာနှင့် ဒေသဆိုင်ရာ နွားမွေးမြူရေးခြံ စီမံခန့်ခွဲမှုသည်
                အရေးကြီးပါသည်။ မိရိုးဖလာပညာကို ခေတ်မီ၊ ရေရှည်တည်တံ့သော အလေ့အကျင့်များနှင့် ပေါင်းစပ်ခြင်းဖြင့်
                ကုန်ထုတ်စွမ်းအားနှင့် နွားများ၏ ကောင်းကျိုးချမ်းသာကို မြှင့်တင်ပေးသည်။ မြန်မာနိုင်ငံ၏ မတူကွဲပြားသော
                ရာသီဥတုများ—ရှမ်းပြည်နယ်၏ စိမ်းလန်းသော ကျက်စားရာများမှ ဧရာဝတီမြစ်ဝကျွန်းပေါ်ဒေသ၏ မြေသြဇာကောင်းသော
                လွင်ပြင်များအထိ—တိရစ္ဆာန်များ သန်မာရန်အတွက် စံပြအခြေအနေများကို ပေးဆောင်သည်။ ရောဂါထိန်းချုပ်ရေး၊
                အစာအရည်အသွေးနှင့် မွေးမြူမှုထိရောက်မှုကဲ့သို့သော စိန်ခေါ်မှုများသည်
                အလုံးစုံလယ်ယာစီမံခန့်ခွဲမှုဗျူဟာများအတွက် လိုအပ်မှုကို မီးမောင်းထိုးပြနေသည်။
            </p>
            <div>
                <p class="lead" style="padding-top: 10px; margin:5px;"><span style="color: #993300">လယ်သမားများကို
                        ပံ့ပိုးကူညီခြင်း</span></p>
                <p class="lead">
                    - မြန်မာနိုင်ငံရှိ နွားမွေးမြူသူများကို ပံ့ပိုးကူညီရန်အတွက် ဤဆောင်းပါးသည် လယ်ယာစီမံခန့်ခွဲမှုကို
                    မြှင့်တင်ရန် လက်တွေ့ကျသော အကြံဉာဏ်များနှင့် သက်သေပြထားသော နည်းဗျူဟာများကို ပေးပါသည်။
                    <br> - ဤသည်မှာ ဆောင်းပါးအချို့ဖြစ်သည်။

                </p>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenwaymyanmar.com/uploads/post_covers/0acd05a47067ae812b673124e9a1790f.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small style="color: #333;">နို့စားနွားမွေးမြူရေးခြံတွင် အဓိကထား
                                    လုပ်ဆောင်ရမည့် ဦးတည်ချက်များ </small>
                            </h5>
                            <p class="card-text">
                                <small>ဆောင်းပါးသည် ကုန်ထုတ်စွမ်းအားနှင့် အမြတ်အစွန်းကို ပိုမိုကောင်းမွန်စေရန်အတွက်
                                    နို့ထွက်ပစ္စည်းမွေးမြူခြင်းတွင် စေ့စပ်သေချာစွာ မှတ်တမ်းတင်ထိန်းသိမ်းခြင်း၏
                                    အရေးကြီးသောအခန်းကဏ္ဍကို အလေးပေးဖော်ပြပါသည်။...
                                </small>
                            </p>
                            <a href="/manage4My" class="read-more"> ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/f6e4c897a0fd675b944c200fbaac93cf.png"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small> <br>နွားမများထုတ်ပယ်ရောင်းချခြင်း</small></h5> <br>
                            <p class="card-text">
                                <small>
                                    နွားမများကို ရောင်းချရန် ဆုံးဖြတ်ခြင်းသည် လယ်ယာအမြတ်အစွန်းအတွက် မရှိမဖြစ်လိုအပ်ပါသည်။
                                    မွေးမြူသူများသည် ၎င်းတို့၏ ရည်မှန်းချက်များ၊ နွားမများ၏ အရည်အသွေးနှင့် ပမာဏ၊
                                    နို့ထွက်နှုန်း၊ နွားကျန်းမာရေးနှင့်...
                                </small>
                            </p>
                            <a href="/manage1My" class="read-more"> ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" style="height:100%;"
                            src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/cae3418bc5f4da1ab9134d23c2d3fcc6.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small> <br>နွားခြံဖွဲ့စည်းခြင်း</small></h5> <br>
                            <p class="card-text">
                                <small>
                                    နို့စားမွေးမြူရေးခြံများတွင် မည်သည့်နွားမရောင်းရန် မွေးမြူသူများ ဆုံးဖြတ်ပုံအကြောင်း
                                    စာသားက
                                    ဆွေးနွေးသည်။
                                    ကုန်ကျစရိတ်နှင့် အလုပ်ဝန်ကို လျှော့ချရန်အတွက် နွားတစ်ကောင်ချင်းစီထုတ်လုပ်မှု၏
                                    အရေးပါမှုကို...
                                </small>
                            </p>
                            <a href="/manage2My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/943bd1cc41b206e6fb921adfbb06b31a.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>နွားမများ၏မျိုးအောင်နှုန်းနှင့် <br>
                                    ခြံအကျိုးအမြတ်ရရှိခြင်:</small>
                            </h5> <br>
                            <p class="card-text">
                                <small>
                                    နို့စားမွေးမြူရေးခြံများတွင် ပုံမှန်နှင့် ထိရောက်စွာမွေးနိုင်သော နွားများမွေးရန်
                                    မည်မျှအရေးကြီးကြောင်း စာသားက မီးမောင်းထိုးပြသည်။ ကောင်းစွာမွေးမြူနိုင်သောစွမ်းရည်ရှိသည့်
                                    နွားမများသည် မွေးမြူရေးခြံရှိ နွားအရေအတွက်ကို...
                                </small>
                            </p>
                            <a href="/manage3My" class="read-more">ပိုမိုသိရှိရန် →</a>
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
