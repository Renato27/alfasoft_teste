<?php

namespace App\Services\Contacto\AtualizarContacto\Base;

use App\Services\Contacto\AtualizarContacto\Contracts\AtualizarContactoService;
use App\Models\Contacto;
use App\Repositories\Contracts\ContactoRepository;

abstract class AtualizarContactoServiceBase implements AtualizarContactoService
{
    /**
     * Model de Contacto.
     *
     * @var Contacto
     */
    protected Contacto $Contacto;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de ContactoRepository.
     *
     * @var Contacto
     */
    protected ContactoRepository $ContactoRepository;

   /**
     * Seta a model de Contacto.
     *
     * @param Contacto
     * @return AtualizarContactoService
     */
    public function setContacto(Contacto $Contacto): AtualizarContactoService
    {
        $this->Contacto = $Contacto;
        return $this;
    }

    /**
     * Seta os dados para Contacto.
     *
     * @param array $dados
     * @return AtualizarContactoService;
     */
    public function setDados(array $dados): AtualizarContactoService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de ContactoRepository.
     *
     * @param ContactoRepository $ContactoRepository
     * @return AtualizarContactoService
     */
    public function setContactoRepository(ContactoRepository $ContactoRepository): AtualizarContactoService
    {
        $this->ContactoRepository = $ContactoRepository;
        return $this;
    }
}
