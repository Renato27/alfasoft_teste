<?php

namespace App\Services\Contacto\AtualizarContacto\Contracts;

use App\Models\Contacto;
use App\Repositories\Contracts\ContactoRepository;

interface AtualizarContactoService
{
    /**
     * Seta a model de Contacto.
     *
     * @param Contacto
     * @return AtualizarContactoService
     */
    public function setContacto(Contacto $Contacto): AtualizarContactoService;

    /**
     * Seta os dados para Contacto.
     *
     * @param array $dados
     * @return AtualizarContactoService;
     */
    public function setDados(array $dados): AtualizarContactoService;

    /**
     * Seta o repositório de ContactoRepository.
     *
     * @param ContactoRepository $ContactoRepository
     * @return AtualizarContactoService
     */
    public function setContactoRepository(ContactoRepository $ContactoRepository): AtualizarContactoService;

    /**
     * Processa os dados
     *
     * @return Contacto|null
     */
    public function handle(): ?Contacto;
}
