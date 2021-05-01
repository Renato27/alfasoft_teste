<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactoRequest;
use App\Http\Requests\ContactoRequestUpdate;
use App\Models\Contacto;
use App\Services\Contacto\AtualizarContacto\Contracts\AtualizarContactoService;
use App\Services\Contacto\CadastrarContacto\Contracts\CadastrarContactoService;
use Exception;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::get();

        return view('contacto.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        $contactoService = app(CadastrarContactoService::class);
        try {
            $contactoService->setDados($request->all())->handle();

            return redirect()->route('contactos.index')->with('success', 'Contacto cadastrado com sucesso.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao cadastrar o contacto: ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoRequestUpdate $request, Contacto $contacto)
    {
        $contactoService = app(AtualizarContactoService::class);
        try {

            $contactoService->setContacto($contacto);
            $contactoService->setDados($request->all())->handle();

            return redirect()->back()->with('success', 'Contacto atualizado com sucesso.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao atualizar o contacto: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        try {
            $contacto->delete();

            return redirect()->route('contactos.index')->with('success', 'Contacto excluído com sucesso.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Houve um erro ao atualizar o contacto: ' . $th->getMessage());
        }
    }
}
