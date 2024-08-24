@extends('layout')
@section('title', 'General-Knowledge')
@section('content')

    <h3 class="page-title text-center" style="padding-top: 30px; padding-bottom: 10px;">
        <strong>General Knowledge in Cattle Farming</strong>
    </h3>

    <div class="container">
        <p class="card-text">Cattle farming in Myanmar is integral to agriculture, providing essential resources like
            milk, meat, and draft power. Gain essential knowledge in cattle farming for a successful and sustainable
            operation. Below are the key areas you should be familiar with:</p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/nutrition">Basic-Nutrition</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/calf">Calf-Care</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/crops">Fodder-Crops-Cultivation</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/breeding">Breeding</a>
        </p>
        <p class="card-text">
            &nbsp; &nbsp; &nbsp; - <a href="/health">Health</a>
        </p>
        <p class="card-text">
        &nbsp; &nbsp; &nbsp; - <a href="/management">Farm-Management</a>
        </p>
        <p class="card-text">By adopting these practices, cattle farmers in Myanmar can enhance their herd's
            well-being and productivity. They also can read and view details of each content by clicking links because
            we add to explanations and many detailed articles on our information website.
        </p>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');

        .card-text {
            font-size: 1rem;
            color: #666;
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
