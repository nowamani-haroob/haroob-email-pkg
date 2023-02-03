<?php
Route::namespace('Haroob\Email\Http\Controllers')->group(function (){
    Route::resource('haroob',HaroobEmailController::class);
});

