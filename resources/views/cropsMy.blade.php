@extends('layoutMy')
@section('title', 'နွားစာပင်စိုက်ပျိုးခြင်း')
@section('content')
    <link rel="stylesheet" href="{{ url('css/management.css') }}">

    <h3 class="page-title mt-3" style="padding-top: 25px; margin-bottom: 30px;">
        <strong><b>နွားစာပင်စိုက်ပျိုးခြင်း</b></strong>
    </h3>

    <div class="container">

        <div>
            <div class="d-flex justify-content-center">
                <img style="border-radius:0px; width:550px; height:400px; padding:10px; image-shadow:20px;"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlJoJjjXFOfXoR86jwWxhhkQ-W98PsOZoGPg&s"
                    alt="Cattle Herd" class="support-image">
            </div>
            <p class="lead">
                မွေးမြူရေး သီးနှံများ စိုက်ပျိုးခြင်းသည် မြန်မာနိုင်ငံရှိ ကျွဲနွားမွေးမြူရေးတွင် အရေးပါသော အခန်းကဏ္ဍမှ
                ပါဝင်နေပြီး ကျန်းမာရေးနှင့် ညီညွတ်သော မွေးမြူရေးတိရစ္ဆာန်များအတွက် မရှိမဖြစ် လိုအပ်သော အာဟာရများ
                မြက်များကဲ့သို့သော မြက်မျိုးစုံတို့ ပါဝင်ပြီး မြန်မာ့ရာသီဥတုနှင့် လိုက်ဖက်မှုရှိသည်။ ဤသီးနှံများ
                ပံ့ပိုးပေးပါသည်။ အသုံးများသော အစာစားသီးနှံများတွင် ပြောင်း၊ ဂျုံ၊ နှင့် နှမ်းမြက် နှင့်
                ဆူဒန်မြက်များကဲ့သို့သော
                မြက်မျိုးစုံတို့ ပါဝင်ပြီး မြန်မာ့ရာသီဥတုနှင့် လိုက်ဖက်မှုရှိသည်။
                ဤသီးနှံများစိုက်ပျိုးခြင်းသည် တစ်နှစ်ပတ်လုံး အရည်အသွေးမြင့် အစားအစာများ ဆက်တိုက်ရရှိစေကာ နို့နှင့်
                အသားထွက်ရှိမှု
                တိုးတက်စေရန် ကူညီပေးပါသည်။ မြန်မာနိုင်ငံရှိ တောင်သူလယ်သမားများသည် မြေဆီဩဇာကို မြှင့်တင်ပေးပြီး
                ကျွေးမွေးစရိတ်များကို လျှော့ချပေးသောကြောင့် ၎င်းတို့၏ မွေးမြူရေးအလေ့အထတွင် ကောက်ပဲသီးနှံများ
                ပေါင်းစပ်ခြင်းမှ အကျိုးကျေးဇူးများ ရရှိကြသည်။ မှန်ကန်သော စိုက်ပျိုးနည်းစနစ်ဖြင့် အစားအစာသီးနှံများသည်
                မြန်မာနိုင်ငံတွင် ကျွဲနွားမွေးမြူခြင်း၏ ရေရှည်တည်တံ့မှုနှင့် အကျိုးအမြတ်ကို သိသိသာသာ မြှင့်တင်ပေးနိုင်ပါသည်။
            </p>
            <div>
                <p class="lead" style="padding-top: 10px; margin:5px;"><span style="color: #993300">လယ်သမားများကို
                        ပံ့ပိုးပေးခြင်း</span></p>
                <p class="lead">
                    - မြန်မာနိုင်ငံရှိ နွားမွေးမြူသူများကို ပံ့ပိုးကူညီရန်အတွက် ဤဆောင်းပါးသည် နွားစာ-ကောက်ပဲသီးနှံများ
                    စိုက်ပျိုးခြင်းကဲ့သို့ ကျွဲနွားအစာကျွေးခြင်း တိုးတက်စေရန် လက်တွေ့ကျသော အကြံဉာဏ်များနှင့်
                    သက်သေပြနည်းဗျူဟာများကို ပေးနိုင်ပါသည်။
                    <br> - ဤသည်မှာ ဆောင်းပါးများအချို့ဖြစ်သည်။
                </p>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px; "
                            src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/cd1dba94cc1ef503e572e075313a852b.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>နွားစား-နှံစားပြောင်း/ဖူးပြောင်း <br>စိုက်​ပျိုးခြင်း</small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    နွားအစာအတွက် အာဟာရတန်ဖိုးကို ထိန်းသိမ်းရန် အပင်သက်တမ်း ၇၀ မှ ၈၀
                                    တွင် စပါးအထွက်နှုန်း မှန်ကန်စွာ စိုက်ပျိုးပါ။ လုံလောက်သောရေပေးဝေမှုကို
                                    သေချာစေပြီးအထွက်နှုန်းကောင်းစေရန်နှင့် ကုန်ကျစရိတ်သက်သာရန်အတွက် ရာသီအလိုက်
                                    စိုက်ခင်းအများအပြားကို...
                                </small>
                            </p>
                            <a href="/crop1My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px; "
                            src="https://greenwaymyanmar.com/uploads/post_covers/11031171cb8a208d98817eaff8648e41.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>နို့စားနွားများအတွက် မြက်မျိုးနွယ်ဝင်စားကျက်ပင် (၁)</small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    Greenleaf Desmodium၊ Mulato II နှင့် Gatton တို့သည် ကျွဲနွားများအတွက်
                                    အထွက်နှုန်းကောင်းပြီး အာဟာရပြည့်ဝသော အစားအစာများဖြစ်သည်။ Greenleaf သည် အေးသော
                                    တောင်တန်းဒေသများတွင် ပေါက်သည်။ Mulato II သည် နို့စားနွားများနှင့်...
                                </small>
                            </p>
                            <a href="/crop2My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px; "
                            src="https://greenwaymyanmar.com/uploads/post_covers/4c4a32c89369979724b481a217e05741.jpeg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>နို့စားနွားများအတွက် မြက်မျိုးနွယ်ဝင်စားကျက်ပင်(၂)</small>
                            </h5>
                            <p class="card-text">
                                <small>

                                    442 / 5,000
                                    Splenda Setaria နှင့် Rhodes မြက်များသည် စွယ်စုံရနှင့် ဖြစ်ထွန်းသော
                                    အစားအစာရွေးချယ်မှုများဖြစ်သည်။ Splenda Setaria သည် စိုစွတ်သောနေရာများအပါအဝင်
                                    မြေအမျိုးအစားအမျိုးမျိုးတွင် ပေါက်ရောက်ပြီး မိုးခေါင်ရေရှားသော်လည်း အရိပ်ရရန်...
                                </small>
                            </p>
                            <a href="/crop3My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px; "
                            src="https://greenwaymyanmar.com/uploads/post_covers/2594202e625f2af7295cf7ec3670b8b1.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>စားကျက်ပင်အတွက် Arachis Pantoi(ပဲပန်းပင်)စိုက်ပျိုးခြင်း</small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    မြန်မာနိုင်ငံတွင် လူသိများသော Arachis Pantoi သည် အပူပိုင်း၊ စိုစွတ်ပြီး
                                    အရိပ်ရသော အခြေအနေတွင် ပေါက်ရောက်နိုင်သော နက်ရှိုင်းသော အမြစ်များရှိသည့်
                                    မြေစိုက်အပင်ဖြစ်သည်။ မြေဆီလွှာထိန်းသိမ်းခြင်းနှင့် တိရစ္ဆာန်အစာအဖြစ်
                                    မြက်များနှင့်...
                                </small>
                            </p>
                            <a href="/crop4My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;"
                            src="https://greenwaymyanmar.com/uploads/post_covers/037666551e5a002fc518602b97c7a2f6.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>စားကျက်မြေအတွက် <br> styloမြက်စိုက်ပျိုးနည်း </small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    မြန်မာ-နယူးဇီလန် နို့စားနွားမွေးမြူရေးစီမံကိန်းသည် Ubon၊ Shrubby နှင့် Hamata stylo
                                    အပင်များကို မိတ်ဆက်ပေးခဲ့သည်။ ဤနှစ်ရှည်ပင်များသည် မတူညီသော မြေအမျိုးအစားများတွင်
                                    ရှင်သန်ကြပြီး မိုးခေါင်မှုကို တွန်းလှန်နိုင်ပြီး မြေဆီလွှာတိုက်စားမှုကို...
                                </small>
                            </p>
                            <a href="/crop5My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;"
                            src="https://greenwaymyanmar.com/uploads/post_covers/f18c11b381a72310b4c5c9f4c50e451f.jpeg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>စားကျက်ပင်နှင့် ပဲနွယ်ပင်များ</small>
                            </h5> <br>
                            <p class="card-text">
                                <small>
                                    Centuriion Centro နှင့် Monbaca Guinea အပါအဝင် မတူညီသော
                                    အခြေအနေများအတွက် အမျိုးမျိုးသော အစားအစာများကိုမီးမောင်းထိုးပြထားသည်။ Bambatsi Panic
                                    နှင့် Buffel Grass ကဲ့သို့သော အပင်များသည် စွယ်စုံရ၊ ကျယ်ပြန့်သောပတ်ဝန်းကျင်နှင့်...
                                </small>
                            </p>
                            <a href="/crop6My " class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8FXjfr5YX3jfcpDgjkbT9u3YSPRBZxkp0cY0W-0mQ6kZ5dB6F"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>မွန်ဘားဆားမြက် <br> ( Mombaca guinea )</small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    ဤအပင်သည် ဖြတ်တောက်ခြင်း နှင့် စားကျက် နှစ်မျိုးလုံးအတွက် သင့်လျော်သော စွယ်စုံ ၊
                                    ကြာရှည်ခံ အစားအစာဖြစ်သည်။အစိုဓာတ်ကောင်းသောမြေဆီလွှာတွင် ဖြစ်ထွန်းပြီး အက်စစ်ဓာတ်ကို
                                    ခံနိုင်ရည်ရှိသည်။ ဆားငန် သို့မဟုတ် ရေစိမ့်သောမြေများအတွက်...
                                </small>
                            </p>
                            <a href="/crop7My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="card card-container">
                        <img style="height: 200px;" src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/ec47a108b22ab60257d87fa491811ac3.jpg"
                            class="card-img-top img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><small>မွေးမြူသူများ ဆောင်ရွက်သင့်သောအချက်များ</small>
                            </h5>
                            <p class="card-text">
                                <small>
                                    နို့စားနွားမွေးမြူရေးလုပ်ငန်းအောင်မြင်ရန်အတွက် အာဟာရဓာတ်မြင့်မားသော သီးနှံများကို
                                    ရွေးချယ်၍ မြေကို ကောင်းမွန်စွာပြင်ဆင်ကာ စိုက်ပျိုးရေသွင်းခြင်းနှင့်
                                    ရိတ်သိမ်းခြင်းတို့ကို ထိရောက်စွာ စီမံခန့်ခွဲပါ။ တစ်နှစ်ပတ်လုံး နို့ထွက်ရှိမှုကိုထိန်းသိမ်းရန်...
                                </small>
                            </p>
                            <a href="/crop8My" class="read-more">ပိုမိုသိရှိရန် →</a>
                        </div>
                    </div>
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
        .lead{
            font-size: 0.9em;
        }
    </style>


@endsection
