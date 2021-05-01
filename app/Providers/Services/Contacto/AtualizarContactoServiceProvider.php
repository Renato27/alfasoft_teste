<?php

namespace App\Providers\Services\Contacto;

use App\Repositories\Contracts\ContactoRepository;
use App\Services\Contacto\AtualizarContacto\AtualizarContactoService;
use App\Services\Contacto\AtualizarContacto\Contracts\AtualizarContactoService as ContractsAtualizarContactoService;
use Illuminate\Support\ServiceProvider;

class AtualizarContactoServiceProvider extends ServiceProvider
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
        $service = new AtualizarContactoService();
        $service->setContactoRepository(app(ContactoRepository::class));

        $this->app->bind(ContractsAtualizarContactoService::class, function() use($service){
            return $service;
        });
    }
}
