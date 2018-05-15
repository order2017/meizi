<?php

namespace App\Providers;

use App\Common\Common;
use App\Common\PublicFunction;
use App\Common\SearchKey;
use App\Common\TransForm;
use App\Common\Upload;
use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 自定义ICO容器绑定文件上传
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('common',function (){

            return new Common(new Upload(),new SearchKey(),new PublicFunction(),new TransForm());

        });
    }
}
