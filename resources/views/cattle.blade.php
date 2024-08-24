@extends('layout')
@section('title', 'CattleFarming-Home')
@section('content')

    <link rel="stylesheet" href="{{ url('css/health.css') }}">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 class="page-title text-center" style="margin: 10px; padding:10px;"><strong>Cattle in Myanmar</strong></h3>
                    <p class="lead">
                    <p>- Cattle in Myanmar play a pivotal role in the country's agricultural tapestry, serving diverse
                        purposes vital to local livelihoods and traditions.</p>
                    <p>- There are mostly three types of cattle in Myanmar, aslo called <a href="/dairy">Dairy Cattle</a> , <a href="/beef">Beef Cattle</a> , and
                        <a href="/draft">Draft Cattle</a>.</p>
                    <p>(1) <span style="color: #993300"> Dairy cattle </span>, including indigenous breeds and imported
                        Holsteins, contribute significantly to milk production, supporting Myanmar's burgeoning dairy
                        industry.</p>
                    <p>(2) <span style="color: #993300">Beef cattle</span>, such as indigenous breeds and imports like Angus
                        and Hereford, provide a reliable source of protein through meat consumption, catering to culinary
                        preferences across Myanmar.</p>
                    <p>(3) <span style="color: #993300">Draft cattle</span>, including Burmese indigenous breeds and oxen,
                        have historically powered agricultural activities, reflecting Myanmar's rich farming heritage.</p>
                    <p>- These cattless, adapted to Myanmar's unique climate and terrain, symbolize resilience and cultural
                        significance in the country's agricultural practices.</p>
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
                            <a href="/dairy" class="btn btn-outline-primary mt-2">Discover More...</a>
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
                            <a href="/beef" class="btn btn-outline-primary mt-2">Discover More...</a>
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
                            <a href="/draft" class="btn btn-outline-primary mt-2">Discover More...</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
