<?php

namespace App\Console\Commands;

use App\Services\Automatizacoes\Repositorios\CriarRepositorioService;
use Illuminate\Console\Command;

class MakeRepositoryCommand extends Command
{
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um repositório baseado no Eloquent;
                              Criar repositório = (Referência) ex.: Cliente';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $model = $this->argument('model');
        $recurso = $model;
        $repositoryName = $model.'Repository';

        $repositoryCommand = new CriarRepositorioService();
        $repositoryCommand->handle($repositoryName, $recurso, $model);
    }
}
