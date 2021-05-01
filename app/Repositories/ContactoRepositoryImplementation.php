<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContactoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContactoRepositoryImplementation implements ContactoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Contacto baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContacto(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Contactos.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContactos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Contacto
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContacto(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Contacto
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContacto(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Contacto
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContacto(int $id): bool
    {
        return $this->delete($id);
    }
}
