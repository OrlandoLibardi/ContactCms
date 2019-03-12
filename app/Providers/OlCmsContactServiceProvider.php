<?php
namespace OrlandoLibardi\ContactCms\app\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

use OrlandoLibardi\ContactCms\app\Contact;
use OrlandoLibardi\ContactCms\app\Observers\ContactObserver;

class OlCmsContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Rotas para controllador Contact
         */
        Route::namespace('OrlandoLibardi\ContactCms\app\Http\Controllers')
               ->middleware(['web', 'auth'])
               ->prefix('admin')
               ->group(__DIR__. '/../../routes/web.php');

        /**
         * Rotas publicas 
         */
        $this->loadRoutesFrom(__DIR__. '/../../routes/web-dynamic.php');
        /**
         * Publicar os arquivos 
         */
        $this->publishes( [
            __DIR__.'/../../resources/views/admin/' => resource_path('views/admin/'),
            __DIR__.'/../../resources/views/website/' => resource_path('views/website/'), 
            __DIR__.'/../../resources/views/emails/' => resource_path('views/emails/'), 
            __DIR__.'/../../database/seeds/' => database_path('seeds'),
            __DIR__.'/../../database/migrations/' => database_path('migrations/'),
            __DIR__.'/../../config/contact.php' => config_path('contact.php'),
        ],'config');
        
        /**
         * Observer Contact
         */
        Contact::observe(ContactObserver::class);
       
        
    }
}