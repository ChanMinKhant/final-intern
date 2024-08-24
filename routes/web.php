<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome.welcome');
});

// change language

Route::get('/lang/{locale}', function ($locale, Request $request) {
    $supportedLocales = ['en', 'my'];
    $redirectRoute = $request->query('redirect', 'home'); // Default redirect to 'home' if not specified
    if (in_array($locale, $supportedLocales)) {
        Session::put('locale', $locale);
    }
    return redirect()->route($redirectRoute);
})->name('lang.change');

//home
//===========================================================

Route::get('/home', function () {
    $locale = Session::get('locale');
    echo $locale;
    if ($locale == 'en') {
        return view('home.home');
    } else {
        return view('home.homeMy');
    }
})->name('home');

//=================================================================

//about
Route::get('/about', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('about');
    } else {
        return view('aboutMy');
    }
})->name('about');

//=============================================================

//ourcattle
Route::get('/cattle', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('cattle.cattle');
    } else {
        return view('cattle.cattleMy');
    }
})->name('cattle');

Route::get('/dairy', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('cattle.dairy.dairy');
    } else {
        return view('cattle.dairy.dairyMy');
    }
})->name('dairy');

Route::get('/beef', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('cattle.beef.beef');
    } else {
        return view('cattle.beef.beefMy');
    }
})->name('beef');

Route::get('/draft', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('cattle.draft.draft');
    } else {
        return view('cattle.draft.draftMy');
    }
})->name('draft');

//===============================================================

//breeding

Route::get('/breeding', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('breeding.breeding');
    } else {
        return view('breeding.breedingMy');
    }
    return view('breeding.breeding');
})->name('breeding');

Route::get('/breeding/{id}', function ($id) {
    $locale = Session::get('locale');
    // if ($locale == 'en') {
    //     return view('breeding.breed1');
    // } else {
    //     return view('breeding.breed1My');
    // }
    if($id == 1) {
        return view('breeding.breed1');
    } else {
        return view('breeding.breed2');
    }
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
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('management.management');
    } else {
        return view('management.managementMy');
    }
})->name('management');

Route::get('/management/{$id}', function () {
    return view('management.management');
});

Route::get('/managementMy/{$id}', function () {
    return view('management.managementMy');
});

//===============================================================

//health

Route::get('/health', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('health.health');
    } else {
        return view('health.healthMy');
    }
    return view('health.health');
})->name('health');


// Route::get('/health/{$id}', function () {
//     return view('health.health');
// });

// Route::get('/healthMy/{$id}', function () {
//     return view('health.healthMy');
// });

//===============================================================

//crops

Route::get('/crops', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('crops.crops');
    } else {
        return view('crops.cropsMy');
    }
})->name('crops');


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
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('calf.calf');
    } else {
        return view('calf.calfMy');
    }
})->name('calf');

// Route::get('/calf/{$id}', function () {
//     return view('calf.calf');
// });

// Route::get('/calfMy/{$id}', function () {
//     return view('calf.calfMy');
// });

//===============================================================

//nutrition

Route::get('/nutrition', function () {
    $locale = Session::get('locale');
    if ($locale == 'en') {
        return view('nutrition.nutrition');
    } else {
        return view('nutrition.nutritionMy');
    }
})->name('nutrition');

// Route::get('/nutrition/{$id}', function () {
//     return view('nutrition.nutrition');
// });

// Route::get('/nutritionMy/{$id}', function ($id) {
//     return view('nutrition.nutritionMy');
// });

//===============================================================
