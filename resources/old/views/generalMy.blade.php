@extends('layoutMy')
@section('title', 'အ‌ထွေထွေဗဟုသုတများ')
@section('content')

    <h3 class="page-title text-center" style="padding-top: 30px; padding-bottom: 10px;">
        <strong>နွားမွေးမြူရေးဆိုင်ရာ အထွေထွေဗဟုသုတများ</strong>
    </h3>

    <div class="container">
        <p class="card-text">
            &nbsp; &nbsp; မြန်မာနိုင်ငံတွင် နွားမွေးမြူရေးလုပ်ငန်းသည် စိုက်ပျိုးရေးအတွက် မရှိမဖြစ်လိုအပ်သော နို့၊
            အသားနှင့် အလုပ်လုပ်နိုင်စွမ်းအင်ကဲ့သို့သော အရင်းအမြစ်များ ပံ့ပိုးပေးသည့် စိုက်ပျိုးရေးအတွက်
            မရှိမဖြစ်လိုအပ်ပါသည်။
            အောင်မြင်ပြီး ရေရှည်တည်တံ့သော လုပ်ငန်းတစ်ခုအတွက် နွားမွေးမြူခြင်းတွင် မရှိမဖြစ်လိုအပ်သော အသိပညာကို ရယူပါ။
            အောက်ဖော်ပြပါအချက်များသည် သင်နှင့်ရင်းနှီးသင့်သော အဓိကနယ်ပယ်များဖြစ်သည်:</p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/nutritionMy">အခြေခံအာဟာရဗေဒ</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/calfMy">နွားကလေးပြုစုခြင်း</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/cropsMy">နွားစာပင်စိုက်ပျိုးခြင်း</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/breedingMy">မျိုးပွားခြင်း</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/healthMy">ကျန်းမာရေး</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/managementMy">ခြံစီမံခန့်ခွဲမှု</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; ဤအလေ့အကျင့်များကို ကျင့်သုံးခြင်းဖြင့် မြန်မာနိုင်ငံရှိ နွားမွေးမြူရေးသမားများသည် ၎င်းတို့၏
            နွားများ၏ ကျန်းမာရေးနှင့် ကုန်ထုတ်စွမ်းအားကို မြှင့်တင်ပေးနိုင်ပါသည်။ ကျွန်ုပ်တို့သည် ကျွန်ုပ်တို့၏
            အချက်အလက်ဝဘ်ဆိုဒ်ရှိ အသေးစိတ်အချက်အလက်များတွင် ရှင်းလင်းချက်များနှင့် အသေးစိတ်ဆောင်းပါးများစွာကို
            ထည့်သွင်းထားသောကြောင့် အကြောင်းအရာတစ်ခုစီ၏အသေးစိတ်အချက်အလက်များကို လင့်ခ်များကိုနှိပ်ခြင်းဖြင့်လည်း
            ဖတ်ရှုကြည့်ရှုနိုင်မည်ဖြစ်သည်။
        </p>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');

        .card-text {
            font-size: 1rem;
            /* color: #666; */
        }

        a {
            color: #0066cc;
            /* text-decoration: none; */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

@endsection
