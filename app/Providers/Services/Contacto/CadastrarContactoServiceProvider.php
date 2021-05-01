<?php

namespace App\Providers\Services\Contacto;

use App\Repositories\Contracts\ContactoRepository;
use App\Services\Contacto\CadastrarContacto\CadastrarContactoService;
use App\Services\Contacto\CadastrarContacto\Contracts\CadastrarContactoService as ContractsCadastrarContactoService;
use Illuminate\Support\ServiceProvider;

class CadastrarContactoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $service = new CadastrarContactoService();
        $service->setContactoRepository(app(ContactoRepository::class));

        $this->app->bind(ContractsCadastrarContactoService::class, function() use($service){
            return $service;
        });
    }
}
