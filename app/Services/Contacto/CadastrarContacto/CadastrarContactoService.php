<?php

namespace App\Services\Contacto\CadastrarContacto;

use App\Models\Contacto;
use App\Services\Contacto\CadastrarContacto\Abstracts\CadastrarContactoServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarContactoService extends CadastrarContactoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return Contacto|null
     */
    public function handle(): ?Contacto
    {
        return DB::transaction(function () {
            return $this->CadastrarContacto();
        });
    }
}
