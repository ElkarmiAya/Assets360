<?php
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\blogcontroller;
use illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('auth.login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'dologin']);
Route::delete('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('auth.logout');
Route::prefix('/')->controller(blogcontroller::class)->group(function(){
         Route::get('acceuil','indexx')->name('acceuil');

        Route::get('first','entrerarticle');
        Route::post('first','store');


});
//Route::prefix('/blog')->name('blog.')->group(function(){});

 /*Route::prefix('/blog')->controller(blogcontroller::class)->group(function(){

    Route::get('proo','index')->name('blog.show');

    Route::get('welcom/{slug}-{id}','show')->where(
        [
            'slug'=>'[a-z0-9/-/%]+',
            'id'=>'[0-9]+'
        ]
    )->name('hello.show');
    Route::get('link',function(){
        
        return["link" => \route('hello.show', ['id'=>'12','slug'=>'hello'])];
    });
    
    Route::get('new','create')->name('create');
    Route::post('new','store');
Route::get('{post}/edit','edit');
Route::post('{post}/edit','update');

});

    
   
     

/*Route::get('/hello/{nom}', function ($nom) {
        $post= \app\Models\Post::paginate(12);
        /*dd($post);
        return $post;
        /*
    });
     Route::get('/{slug}-{id}', function (string $slug ,string $id ) {
         return "voici la recette:";
      })->name('show');*/
