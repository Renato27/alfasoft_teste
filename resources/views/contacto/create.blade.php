@extends('layout.suffe')
@section('title', 'Cadastro de Contacto')

@push('breacrumb')
<ol class="breadcrumb text-right">
    <li><a style="text-decoration:none; color: #fff" href="{{route('contactos.index')}}">Lista de Contactos</a></li>
    <li><a>/Create Contacto</a></li>
</ol>
@endpush

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  method="post" action="{{route('contactos.store')}}">
    {{ csrf_field() }}
    <div class="row form-group">
        <div class="col-md-4">
            <label for="nome" class=" form-control-label">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome do contacto"class="form-control">
            <small class="form-text text-muted">Digite o nome do contacto</small>
        </div>

        <div class="col-md-4">
            <label for="contacto" class=" form-control-label">Contacto</label>
            <input type="text" id="contacto" name="contacto" placeholder="Número de contacto" class="form-control">
            <small class="form-text text-muted">Digite o número de contacto</small>
        </div>
        <div class="col-md-4">
            <label for="email" class=" form-control-label">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite o email" class="form-control">
            <small class="help-block form-text">Digite o email</small>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-outline-primary rounded" style="float: right !important">Salvar</button>
        </div>
    </div>
</form>
@endsection
