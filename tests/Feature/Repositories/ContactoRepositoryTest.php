<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContactoRepository;

class ContactoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContactoRepository
     */
    protected ContactoRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContactoRepository::class);
    }

    /**
     * Retorna Contacto baseado no ID.
     *
     */
    public function testGetContacto()
    {

    }

    /**
     * Retorna uma coleção de Contacto baseado em uma associação.
     *
     */
    public function testGetContactos()
    {

    }

    /**
     * Cria um novo Contacto
     *
     */    
    public function testCreateContacto()
    {

    }

    /**
     * Atualiza um Contacto
     *
     */ 
    public function testUpdateContacto()
    {

    }

    /**
     * Deleta um Contacto
     *
     */ 
    public function testDeleteContacto()
    {

    }
}
