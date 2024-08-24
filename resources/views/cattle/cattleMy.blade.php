@extends('layoutMy')
@section('title', 'နွားအမျိုးအစားများ')
@section('content')

    <link rel="stylesheet" href="{{ url('css/health.css') }}">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 class="page-title text-center" style="margin: 10px; padding:10px;"><strong>မြန်မာနိုင်ငံရှိ
                            နွားအမျိုးအစားများ</strong></h3>
                    <p class="lead">
                    <p>- မြန်မာနိုင်ငံရှိ ကျွဲနွားများသည် ဒေသတွင်း အသက်မွေးဝမ်းကြောင်းနှင့် ဓလေ့ထုံးတမ်းစဉ်လာများအတွက်
                        အရေးပါသော ရည်ရွယ်ချက်အမျိုးမျိုးဖြင့် ဆောင်ရွက်လျက်ရှိပြီး မြန်မာနိုင်ငံ၏ စိုက်ပျိုးရေးဆိုင်ရာ
                        တိပ်ထိုးခြင်းတွင် အဓိကအခန်းကဏ္ဍမှ ပါဝင်ပါသည်။</p>
                    <p>- မြန်မာနိုင်ငံတွင် <a href="/dairyMy">နို့စားနွား</a>၊ <a
                            href="/beefMy">အသားစားနွား</a> နှင့်
                        <a href="/draftMy">ခိုင်းနွား</a> ဟုခေါ်သော  နွားအမျိုးအစား(၃)မျိုး ရှိသည်။
                    </p>
                    <p>(1) <span style="color: #993300"> နို့စားနွား</span> တွင်ပါဝင်သော ပြည်တွင်းမျိုးကွဲများနှင့်
                        တင်သွင်းထားသော ဖရစ်ရှန်တို့သည် နို့ထွက်ရှိမှုတွင် သိသိသာသာ အထောက်အကူဖြစ်ပြီး ဖွံ့ဖြိုးဆဲ
                        နို့ထွက်ပစ္စည်းလုပ်ငန်းကို ကူညီပံ့ပိုးပေးပါသည်။</p>
                    <p>(2) <span style="color: #993300">အသားစားနွား </span>ဖြစ်သော Angus နှင့် Hereford ကဲ့သို့ ဌာနေမျိုးကွဲများနှင့်
                        တင်သွင်းမှုများကဲ့သို့ အသားစားသုံးခြင်းမှတစ်ဆင့် ယုံကြည်စိတ်ချရသော ပရိုတင်းအရင်းအမြစ်ကို
                        ပံ့ပိုးပေးသည်။</p>
                    <p>(၃) <span style="color: #993300">ခိုင်းနွား</span> သည် မြန်မာ့တိုင်းရင်း သားမျိုးစိတ်များနှင့် နွားများ
                        အပါအဝင် မြန်မာ့လယ်ယာလုပ်ငန်း အမွေအနှစ်များ ပေါများသော သမိုင်းကြောင်းကို ရောင်ပြန်ဟပ်သည့်
                        စိုက်ပျိုးရေး လုပ်ငန်းများ ရှိသည်။</p>
                    <p>- မြန်မာနိုင်ငံ၏ ထူးခြားသော ရာသီဥတုနှင့် မြေပြင်အနေအထားနှင့် လိုက်လျောညီထွေရှိသော ဤတိရစ္ဆာန်များသည်
                        နိုင်ငံ၏ စိုက်ပျိုးရေးအလေ့အကျင့်များတွင် ခံနိုင်ရည်ရှိမှုနှင့် ယဉ်ကျေးမှုဆိုင်ရာ အရေးပါမှုကို
                        ကိုယ်စားပြုပါသည်။</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">

                <div class="col-md-4">

                    <div class="card">
                        <img style="height: 300px;" class="card-img-top"
                            src="https://greenway.sgp1.digitaloceanspaces.com/post_covers/8552706c0c3b32f8b558fbcc5bf35421.jpg"
                            alt="Article Image">
                        <div class="card-body">
                            <h5 class="card-title">Dairy Cattles(နို့စားနွား)</h5>
                            <br>
                            <a href="/dairyMy" class="btn btn-outline-primary mt-2">ပိုမိုလေ့လာရန်...</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img style="height: 300px;" class="card-img-top"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY7h8zKZLfzsorkjrq7C5N7-yW5N2xAsv4Qg&s"
                            alt="Article Image">
                        <div class="card-body">
                            <h5 class="card-title">Beef Cattles(အသားစားနွား)</h5>
                            <br>
                            <a href="/beefMy" class="btn btn-outline-primary mt-2">ပိုမိုလေ့လာရန်...</a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img style="height: 300px;" class="card-img-top"
                            src="https://st2.depositphotos.com/2480945/7169/i/450/depositphotos_71690123-stock-photo-amazing-rural-landscape-in-myanmar.jpg"
                            alt="Article Image">
                        <div class="card-body">
                            <h5 class="card-title">Draft Cattles(ခိုင်းနွား)</h5>
                            <br>
                            <a href="/draftMy" class="btn btn-outline-primary mt-2">ပိုမိုလေ့လာရန်...</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
