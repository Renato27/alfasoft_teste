<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContactoRepository
{
    /**
     * Retorna Contacto baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContacto(int $id): ?Model;

    /**
     * Retorna uma coleção de Contacto.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContactos(): ?Collection;

    /**
     * Cria um novo Contacto
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContacto(array $detalhes): ?Model;

    /**
     * Atualiza um Contacto
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContacto(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contacto
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContacto(int $id): bool;
}
