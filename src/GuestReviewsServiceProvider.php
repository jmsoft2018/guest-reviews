<?php

namespace GuestReviews;

use Illuminate\Support\ServiceProvider;

class GuestReviewsServiceProvider extends ServiceProvider {

    public function boot(){
        $this->publishes([__DIR__ . '/../guest-reviews' => base_path().'/guest-reviews']);

        //Подключаем конфигурация
//        if(file_exists(base_path('guest-reviews/config/app.php'))){
//            $this->mergeConfigFrom(base_path('config/guest-reviews.php'), 'guest-reviews');
//        }

        //Подключаем роуты
        if(file_exists(base_path('guest-reviews/routes/web.php'))){
            $this->loadRoutesFrom(base_path('guest-reviews/routes/web.php'));
        }

        //Загружаем View
        if(is_dir(base_path('guest-reviews/views'))) {
            $this->loadViewsFrom(base_path('guest-reviews/views'), 'guest-reviews');
        }

        //Подгружаем миграции
        if(is_dir(base_path('guest-reviews/migrations'))) {
            $this->loadMigrationsFrom(base_path('guest-reviews/migrations'));
        }
    }

    public function register(){

    }
}