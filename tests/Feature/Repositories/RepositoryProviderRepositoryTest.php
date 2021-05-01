<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\RepositoryProviderRepository;

class RepositoryProviderRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var RepositoryProviderRepository
     */
    protected RepositoryProviderRepository $repository;

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(RepositoryProviderRepository::class);
    }

    /**
     * Retorna RepositoryProvider baseado no ID.
     *
     */
    public function testGetRepositoryProvider()
    {

    }

    /**
     * Retorna uma coleção de RepositoryProvider baseado em uma associação.
     *
     */
    public function testGetRepositoryProviders()
    {

    }

    /**
     * Cria um novo RepositoryProvider
     *
     */    
    public function testCreateRepositoryProvider()
    {

    }

    /**
     * Atualiza um RepositoryProvider
     *
     */ 
    public function testUpdateRepositoryProvider()
    {

    }

    /**
     * Deleta um RepositoryProvider
     *
     */ 
    public function testDeleteRepositoryProvider()
    {

    }
}
