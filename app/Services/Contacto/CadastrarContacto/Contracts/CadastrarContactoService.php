<?php

namespace App\Services\Contacto\CadastrarContacto\Contracts;

use App\Models\Contacto;
use App\Repositories\Contracts\ContactoRepository;

interface CadastrarContactoService
{
    /**
     * Seta os dados para Contacto.
     *
     * @param array $dados
     * @return CadastrarContactoService;
     */
    public function setDados(array $dados): CadastrarContactoService;

    /**
     * Seta o repositório de ContactoRepository.
     *
     * @param ContactoRepository $ContactoRepository
     * @return CadastrarContactoService
     */
    public function setContactoRepository(ContactoRepository $ContactoRepository): CadastrarContactoService;

    /**
     * Processa os dados
     *
     * @return Contacto|null
     */
    public function handle(): ?Contacto;
}
