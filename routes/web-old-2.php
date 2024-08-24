<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome.welcome');
});

//home
//===========================================================

Route::get('/homeMy', function () {
    return view('home.homeMy');
});

Route::get('/home', function () {
    return view('home.home');
});

//=================================================================

//about
Route::get('/about', function () {
    return view('about');
});
Route::get('/aboutMy', function () {
    return view('aboutMy');
});

//=============================================================

//ourcattle
Route::get('/cattle', function () {
    return view('cattle.cattle');
});

Route::get('/cattleMy', function () {
    return view('cattle.cattleMy');
});

Route::get('/dairy', function () {
    return view('cattle.dairy.dairy');
});

Route::get('/dairyMy', function () {
    return view('cattle.dairy.dairyMy');
});

Route::get('/beef', function () {
    return view('cattle.beef.beef');
});

Route::get('/beefMy', function () {
    return view('cattle.beef.beefMy');
});

Route::get('/draft', function () {
    return view('cattle.draft.draft');
});

Route::get('/draftMy', function () {
    return view('cattle.draft.draftMy');
});

//===============================================================

//breeeding

Route::get('/breeding', function () {
    return view('breeding.breeding');
});

Route::get('/breedingMy', function () {
    return view('breeding.breedingMy');
});

// Route::get('/breeding/{$id}', function () {
//     return view('breeding.breeding');
// });

// Route::get('/breedingMy/{$id}', function () {
//     return view('breeding.breedingMy');
// });

//===============================================================

//gallery


//===============================================================

//contact

//===============================================================

//tips

//===============================================================

//management

Route::get('/management', function () {
    return view('management.management');
});

Route::get('/managementMy', function () {
    return view('management.managementMy');
});

// Route::get('/management/{$id}', function () {
//     return view('management.management');
// });

// Route::get('/managementMy/{$id}', function () {
//     return view('management.managementMy');
// });

//===============================================================

//health

Route::get('/health', function () {
    return view('health.health');
});

Route::get('/healthMy', function () {
    return view('health.healthMy');
});

// Route::get('/disease/{$id}', function () {
//     return view('health.disease.disease');
// });

// Route::get('/diseaseMy/{$id}', function () {
//     return view('health.disease.diseaseMy');
// });

//===============================================================

//crops

Route::get('/crops', function () {
    return view('crops.crops');
});

Route::get('/cropsMy', function () {
    return view('crops.cropsMy');
});

// Route::get('/crops/{$id}', function () {
//     return view('crops.crops');
// });

// Route::get('/cropsMy/{$id}', function () {
//     return view('crops.cropsMy');
// });

//===============================================================

//general


//===============================================================

//calf 

Route::get('/calf', function () {
    return view('calf.calf');
});

Route::get('/calfMy', function () {
    return view('calf.calfMy');
});

// Route::get('/calf/{$id}', function () {
//     return view('calf.calf');
// });

// Route::get('/calfMy/{$id}', function () {
//     return view('calf.calfMy');
// });

//===============================================================

//nutrition

Route::get('/nutrition', function () {
    return view('nutrition.nutrition');
});

Route::get('/nutritionMy', function () {
    return view('nutrition.nutritionMy');
});

// Route::get('/nutrition/{$id}', function () {
//     return view('nutrition.nutrition');
// });

// Route::get('/nutritionMy/{$id}', function () {
//     return view('nutrition.nutritionMy');
// });

//===============================================================