<?php

use Illuminate\Support\Facades\Route;



//welcome
Route::get('/', function () {
    return view ('welcome');
});

//===========================================================

//home
Route::get('/home', function () {
    return view('home');
});
Route::get('/homeMy', function () {
    return view('homeMy');
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
    return view('cattle');
});
Route::get('/cattleMy', function () {
    return view('cattleMy');
});

Route::get('/dairy', function () {
    return view('dairy');
});
Route::get('/dairyMy', function () {
    return view('dairyMy');
});

Route::get('/beef', function () {
    return view('beef');
});
Route::get('/beefMy', function () {
    return view('beefMy');
});

Route::get('/draft', function () {
    return view('draft');
});
Route::get('/draftMy', function () {
    return view('draftMy');
});

//===============================================================

//breeding
Route::get('/breeding', function () {
    return view('breeding');
});
Route::get('/breedingMy', function () {
    return view('breedingMy');
});

Route::get('/breed1', function () {
    return view('breed1');
});
Route::get('/breed1My', function () {
    return view('breed1My');
});

Route::get('/breed2', function () {
    return view('breed2');
});
Route::get('/breed2My', function () {
    return view('breed2My');
});

Route::get('/breed3', function () {
    return view('breed3');
});
Route::get('/breed3My', function () {
    return view('breed3My');
});

Route::get('/breed4', function () {
    return view('breed4');
});
Route::get('/breed4My', function () {
    return view('breed4My');
});

Route::get('/breed5', function () {
    return view('breed5');
});
Route::get('/breed5My', function () {
    return view('breed5My');
});

Route::get('/breed6', function () {
    return view('breed6');
});
Route::get('/breed6My', function () {
    return view('breed6My');
});

Route::get('/breed7', function () {
    return view('breed7');
});
Route::get('/breed7My', function () {
    return view('breed7My');
});

Route::get('/breed8', function () {
    return view('breed8');
});
Route::get('/breed8My', function () {
    return view('breed8My');
});

//=================================================================

//gallery
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/galleryMy', function () {
    return view('galleryMy');
});

//=================================================================

//contact
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contactMy', function () {
    return view('contactMy');
});

//==================================================================

//tips
Route::get('/tips', function () {
    return view('tips');
});
Route::get('/tipsMy', function () {
    return view('tipsMy');
});

//==================================================================

//management
Route::get('/management', function () {
    return view('management');
});
Route::get('/managementMy', function () {
    return view('managementMy');
});

Route::get('/manage1', function () {
    return view('manage1');
});
Route::get('/manage1My', function () {
    return view('manage1My');
});

Route::get('/manage2', function () {
    return view('manage2');
});
Route::get('/manage2My', function () {
    return view('manage2My');
});

Route::get('/manage3', function () {
    return view('manage3');
});
Route::get('/manage3My', function () {
    return view('manage3My');
});

Route::get('/manage4', function () {
    return view('manage4');
});
Route::get('/manage4My', function () {
    return view('manage4My');
});

//===============================================================

//health
Route::get('/health', function () {
    return view('health');
});
Route::get('/healthMy', function () {
    return view('healthMy');
});

Route::get('/health1', function () {
    return view('health1');
});
Route::get('/health1My', function () {
    return view('health1My');
});

Route::get('/health2', function () {
    return view('health2');
});
Route::get('/health2My', function () {
    return view('health2My');
});

Route::get('/health3', function () {
    return view('health3');
});
Route::get('/health3My', function () {
    return view('health3My');
});

Route::get('/health4', function () {
    return view('health4');
});
Route::get('/health4My', function () {
    return view('health4My');
});

Route::get('/health5', function () {
    return view('health5');
});
Route::get('/health5My', function () {
    return view('health5My');
});

Route::get('/health6', function () {
    return view('health6');
});
Route::get('/health6My', function () {
    return view('health6My');
});

Route::get('/health7', function () {
    return view('health7');
});
Route::get('/health7My', function () {
    return view('health7My');
});

Route::get('/health8', function () {
    return view('health8');
});
Route::get('/health8My', function () {
    return view('health8My');
});



//=================================================================

//crops
Route::get('/crops', function () {
    return view('crops');
});
Route::get('/cropsMy', function () {
    return view('cropsMy');
});

Route::get('/crop1', function () {
    return view('crop1');
});
Route::get('/crop1My', function () {
    return view('crop1My');
});

Route::get('/crop2', function () {
    return view('crop2');
});
Route::get('/crop2My', function () {
    return view('crop2My');
});

Route::get('/crop3', function () {
    return view('crop3');
});
Route::get('/crop3My', function () {
    return view('crop3My');
});

Route::get('/crop4', function () {
    return view('crop4');
});
Route::get('/crop4My', function () {
    return view('crop4My');
});

Route::get('/crop5', function () {
    return view('crop5');
});
Route::get('/crop5My', function () {
    return view('crop5My');
});

Route::get('/crop6', function () {
    return view('crop6');
});
Route::get('/crop6My', function () {
    return view('crop6My');
});

Route::get('/crop7', function () {
    return view('crop7');
});
Route::get('/crop7My', function () {
    return view('crop7My');
});

Route::get('/crop8', function () {
    return view('crop8');
});
Route::get('/crop8My', function () {
    return view('crop8My');
});

//=================================================================

//general
Route::get('/general', function () {
    return view('general');
});
Route::get('/generalMy', function () {
    return view('generalMy');
});


//=================================================================

//calve-care
Route::get('/calf', function () {
    return view('calf');
});
Route::get('/calfMy', function () {
    return view('calfMy');
});

Route::get('/calf1', function () {
    return view('calf1');
});
Route::get('/calf1My', function () {
    return view('calf1My');
});

Route::get('/calf2', function () {
    return view('calf2');
});
Route::get('/calf2My', function () {
    return view('calf2My');
});

Route::get('/calf3', function () {
    return view('calf3');
});
Route::get('/calf3My', function () {
    return view('calf3My');
});

Route::get('/calf4', function () {
    return view('calf4');
});
Route::get('/calf4My', function () {
    return view('calf4My');
});

Route::get('/calf5', function () {
    return view('calf5');
});
Route::get('/calf5My', function () {
    return view('calf5My');
});

Route::get('/calf6', function () {
    return view('calf6');
});
Route::get('/calf6My', function () {
    return view('calf6My');
});

Route::get('/calf7', function () {
    return view('calf7');
});
Route::get('/calf7My', function () {
    return view('calf7My');
});

Route::get('/calf8', function () {
    return view('calf8');
});
Route::get('/calf8My', function () {
    return view('calf8My');
});

//=================================================================

//nutrition
Route::get('/nutrition', function () {
    return view('nutrition');
});
Route::get('/nutritionMy', function () {
    return view('nutritionMy');
});

Route::get('/nutrition1', function () {
    return view('nutrition1');
});
Route::get('/nutrition1My', function () {
    return view('nutrition1My');
});

Route::get('/nutrition2', function () {
    return view('nutrition2');
});
Route::get('/nutrition2My', function () {
    return view('nutrition2My');
});

Route::get('/nutrition3', function () {
    return view('nutrition3');
});
Route::get('/nutrition3My', function () {
    return view('nutrition3My');
});

Route::get('/nutrition4', function () {
    return view('nutrition4');
});
Route::get('/nutrition4My', function () {
    return view('nutrition4My');
});

Route::get('/nutrition5', function () {
    return view('nutrition5');
});
Route::get('/nutrition5My', function () {
    return view('nutrition5My');
});

Route::get('/nutrition6', function () {
    return view('nutrition6');
});
Route::get('/nutrition6My', function () {
    return view('nutrition6My');
});

Route::get('/nutrition7', function () {
    return view('nutrition7');
});
Route::get('/nutrition7My', function () {
    return view('nutrition7My');
});

Route::get('/nutrition8', function () {
    return view('nutrition8');
});
Route::get('/nutrition8My', function () {
    return view('nutrition8My');
});

//=================================================================


