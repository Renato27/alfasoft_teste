<?php

namespace App\Services\Contacto\AtualizarContacto;

use App\Models\Contacto;
use App\Services\Contacto\AtualizarContacto\Abstracts\AtualizarContactoServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarContactoService extends AtualizarContactoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return Contacto|null
     */
    public function handle(): ?Contacto
    {
        return DB::transaction(function () {
            return $this->AtualizarContacto();
        });
    }
}
