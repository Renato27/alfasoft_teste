<?php

namespace App\Services\Contacto\CadastrarContacto\Base;

use App\Services\Contacto\CadastrarContacto\Contracts\CadastrarContactoService;
use App\Models\Contacto;
use App\Repositories\Contracts\ContactoRepository;

abstract class CadastrarContactoServiceBase implements CadastrarContactoService
{
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
     * Seta os dados para Contacto.
     *
     * @param array $dados
     * @return CadastrarContactoService;
     */
    public function setDados(array $dados): CadastrarContactoService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de ContactoRepository.
     *
     * @param ContactoRepository $ContactoRepository
     * @return CadastrarContactoService
     */
    public function setContactoRepository(ContactoRepository $ContactoRepository): CadastrarContactoService
    {
        $this->ContactoRepository = $ContactoRepository;
        return $this;
    }
}
