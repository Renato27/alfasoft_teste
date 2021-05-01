<?php

namespace App\Services\Contacto\CadastrarContacto\Abstracts;

use App\Models\Contacto;
use App\Services\Contacto\CadastrarContacto\Base\CadastrarContactoServiceBase;

abstract class CadastrarContactoServiceAbstract extends CadastrarContactoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Contacto|null
     */
    protected function CadastrarContacto() : ?Contacto
    {
        return $this->ContactoRepository->createContacto($this->dados);
    }
}
