<?php

namespace App\Services\Contacto\AtualizarContacto\Abstracts;

use App\Models\Contacto;
use App\Services\Contacto\AtualizarContacto\Base\AtualizarContactoServiceBase;

abstract class AtualizarContactoServiceAbstract extends AtualizarContactoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Contacto|null
     */
    protected function AtualizarContacto() : ?Contacto
    {
        return $this->ContactoRepository->updateContacto($this->Contacto->id, $this->dados);
    }
}
