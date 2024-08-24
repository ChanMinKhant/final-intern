@extends('layoutMy')
@section('title', 'ဆက်သွယ်ရန်')
@section('content')
    <link rel="stylesheet" href="{{ url('css/contact.css') }}">

    <div class="container mt-5">
        <h3 class="page-title text-center mb-4"><strong>Contact Us</strong></h3>

        {{-- <div class="row">
            <div class="col-md-6">

                <img style="margin-left:50px; border-radius:10px; "
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxRHfUgMrg7OVKiIvItOo-eEgFXp4vJHCnHA&s"
                    class="img-fluid rounded contact-image" alt="Contact Us ">
            </div>
            <div class="col-md-6 mt-4">

                <p>
                    <i class="fa-solid fa-thumbs-up"></i> &nbsp; ကျွန်ုပ်တို့၏ဝဘ်ဆိုဒ်သို့လာရောက်ကြည့်ရှုသည့်အတွက်
                    ကျေးဇူးတင်ပါသည်။
                    ကျွန်ုပ်တို့သည် သင်၏စိတ်ဝင်စားမှုကို တန်ဖိုးထားကာ သင့်တွင်ရှိနိုင်သည့် စုံစမ်းမေးမြန်းမှုများ သို့မဟုတ်
                    စိုးရိမ်ပူပန်မှုများကို ကူညီပေးရန် စိတ်အားထက်သန်ပါသည်။
                    သင့်တွင်ကျွန်ုပ်တို့၏ဝဘ်ဆိုက်နှင့်ပတ်သက်သည့်မေးခွန်းများရှိပါက သို့မဟုတ် အကြံပြုချက်ပေးလိုသည်ဖြစ်စေ
                    ကျွန်ုပ်တို့အဖွဲ့သည် ကူညီရန် ဤနေရာတွင်ရှိပါသည်။
                    သင့်လိုအပ်ချက်များကို ကျွန်ုပ်တို့၏ဖော်ရွေသောဝန်ထမ်းများနှင့် ဆွေးနွေးရန် သင့်အား ကြိုဆိုပါသည်။

                <p>
                    <i class="fa-solid fa-thumbs-up"></i> &nbsp;ထို့အပြင်၊ နောက်ဆုံးထွက်မွမ်းမံမှုများနှင့် promotion
                    များအတွက် ကျွန်ုပ်တို့၏လူမှုမီဒီယာ စာမျက်နှာများတွင် ကျွန်ုပ်တို့ကို သင် follow ထားနိုင်ပါသည်။
                    Twitter၊ Instagram နှင့် စသည်တို့တွင် ကျွန်ုပ်တို့နှင့် ချိတ်ဆက်ပါ။
                </p>
                <p>
                    <i class="fa-solid fa-thumbs-up"></i> &nbsp; သင့်ထံမှကြားသိရပြီး ကျွန်ုပ်တို့နှင့် သင့်အတွေ့အကြုံသည်
                    ထူးခြား ကြောင်း သေချာစေရန် ကျွန်ုပ်တို့ မျှော်လင့်ပါသည်။
                </p>
                </strong>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxRHfUgMrg7OVKiIvItOo-eEgFXp4vJHCnHA&s"
                    class="img-fluid rounded contact-image" alt="Contact Us">
            </div>

            <div class="col-md-6">
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
                    style="display:none;">
                    Your message has been sent successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Contact Form -->
                <section class="mb-5">
                    <form id="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <button type="reset" class="btn btn-secondary btn-block">Cancel</button>
                    </form>

            </div>
        </div>

        <div class="mt-5 p-4" style="background-color: #f9f9f9; border-radius: 10px;">
            <div class="row">
                <div class="col-md-4 text-center mb-3">
                    <div><strong><span style="color: #993300;">Email:</span></strong>
                        <a style="text-decoration: none;color:black;"
                            href="mailto:cattlefarming@gmail.com">cattlefarming@gmail.com</a>
                    </div>
                    <div class="mt-4"><strong><span style="color: #993300;">Open Hours:</span></strong></div>
                    <div>Mon-Fri: 9am-6pm</div>
                    <div>Sat: 7am-6pm</div>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <div><strong><span style="color: #993300;">Telephone:</span></strong></div>
                    <a style="text-decoration: none;color:black;" href="tel:+959969070898">
                        <div>+959-969-070-898</div>
                    </a>
                    <a style="text-decoration: none;color:black;" href="tel:+959671917898">
                        <div>+959-671-917-898</div>
                    </a>
                    <div class="mt-4"><strong><span style="color: #993300;">Address:</span></strong></div>
                    <div>AungSan, Pyay, Bago, Myanmar</div>
                </div>
                <div class="col-md-4 text-center">
                    <h6><strong><span style="color: #993300;">Follow Us:</span></strong></h6>
                    <div class="social-icons mt-4">
                        <a href="#" class="mr-3"><i class="fab fa-facebook-f"
                                style="font-size: 1.5em; color: #993300;"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"
                                style="font-size: 1.5em; color: #993300;"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-tumblr"
                                style="font-size: 1.5em; color: #993300;"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"
                                style="font-size: 1.5em; color: #993300;"></i></a>
                        <a href="#"><i class="fab fa-youtube" style="font-size: 1.5em; color: #993300;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('success-alert').style.display = 'block';
            this.reset();
        });
    </script>



    <style>
        .page-title {
            font-size: 2.5em;
            font-weight: bold;
        }

        .contact-image {
            width: 80%;
            border: 2px solid #009688;
            border-radius: 10px;
        }

        .social-icons i {
            transition: transform 0.3s ease;
        }

        .social-icons i:hover {
            transform: scale(1.2);
        }

        p {
            font-size: 1.1em;
            line-height: 1.6em;
            color: #333;
        }

        form .form-group {
            margin-bottom: 20px;
        }

        form .btn-primary {
            background-image: linear-gradient(to right, #28a745, #218838);
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
        }

        form .btn-primary:hover {
            background-image: linear-gradient(to right, #218838, #28a745);
        }

        form .btn-secondary {
            background-color: #6c757d;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
        }

        form .btn-secondary:hover {
            background-color: #5a6268;
        }

        #success-alert {
            position: absolute;
            top: 20px;
            /* left: 50%; */
            transform: translateX(-50%);
            width: 100%;
            z-index: 1000;
        }
    </style>
@endsection
