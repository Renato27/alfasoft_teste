@extends('layout.suffe')
@section('title', 'Lista de Contactos')

@push('breacrumb')
	<ol class="breadcrumb text-right">
		<li><a style="text-decoration:none; color: #fff" href="{{url('/')}}">Lista de Contactos</a></li>
	</ol>
@endpush

@push('button')
<div class="container">
    <a href="{{route('contactos.create')}}" class="btn btn-outline-primary rounded">Novo Contacto</a>
</div>
@endpush

@section('content')
<div class="table-responsive">
	<table id="contactos" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="example_info">
		<thead style="background:#485a6e !important; color:#fff; border:1px solid #485a6e">
			<tr role="row" style="text-align: center !important">
				<th>Nome</th>
				<th>Contacto</th>
				<th>Email</th>
				<th>Ações</th>
			</tr>
		</thead>
        <tbody>
			@foreach($contactos as $contacto)
				<tr role="row" style="text-align: center !important">
					<td>
                       <a href="{{route('contactos.show', $contacto->id)}}">{{$contacto->nome}}</a>
                    </td>
                    <td>{{$contacto->contacto}}</td>
                    <td>{{$contacto->email}}</td>
                    <td>
                        <button class="btn btn-outline-warning rounded btn-sm editar" data-bs-toggle="modal" data-bs-target="#editar_contacto" value="{{$contacto}}">Editar</button>
						<button class="btn btn-outline-danger rounded btn-sm deletar" data-bs-toggle="modal" data-bs-target="#deletar_contacto" value="{{$contacto}}">Excluir</button>
                    </td>
				</tr>
			@endforeach
		<tbody>
	</table>
</div>
@endsection

@push('modal')
    @include('contacto.modal.edit')
    @include('contacto.modal.delete')
@endpush

@push('styles')
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
    <style>
        .dataTables_wrapper .dt-buttons {
            float:none;
            text-align:center;
        }
    </style>
@endpush

@push('scripts')
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    jQuery.noConflict();
    (function( $ ) {
        $(function() {
            $('#contactos').dataTable({
                "order": [[ 0, "desc" ]],
                "autoWidth": false,
                "pageLength": 25,
                "oLanguage": {
                    "sProcessing": "Aguarde enquanto os contactos são carregados ...",
                    "sLengthMenu": "Mostrar _MENU_ contactos por pagina",
                    "sZeroRecords": "Nenhum contacto correspondente ao criterio encontrado",
                    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ contactos",
                    "sInfoFiltered": "",
                    "sSearch": "Procurar",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Próximo",
                        "sLast":     "Último"
                    }
                }
            });
        });
	})(jQuery);

</script>

@endpush

