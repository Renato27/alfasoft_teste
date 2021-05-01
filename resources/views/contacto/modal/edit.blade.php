<div class="modal fade" id="editar_contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" id="form_editar">
            @method('PUT')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Contacto <span id="contacto_nome"></span> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="hidden" id="tokenEditar" name="_token" value="{{ csrf_token() }}">
                <div class="row form-group">
                    <div class="col-md-4">
                        <label for="nome" class=" form-control-label">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Nome do contacto" value="" class="form-control">
                        <small class="form-text text-muted">Digite o nome do contacto</small>
                    </div>

                    <div class="col-md-4">
                        <label for="contacto" class=" form-control-label">Contacto</label>
                        <input type="text" id="contacto" name="contacto" placeholder="Número de contacto" value="" class="form-control">
                        <small class="form-text text-muted">Digite o número de contacto</small>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite o email" value="" class="form-control">
                        <small class="help-block form-text">Digite o email</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary submit">Salvar</button>
            </div>
        </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    jQuery.noConflict();
        (function( $ ) {
            $(function() {
                $('.editar').on('click', function(){
                    let contacto = $(this).val();

                    if(contacto){
                       let data = JSON.parse(contacto);
                       $('#contacto').val(data.contacto);
                        $('#nome').val(data.nome);
                        $('#email').val(data.email);
                        $('#contacto_nome').val(data.nome);
                        $('#form_editar').attr('action', `editar-contacto/${data.id}`)

                        $('.submit').on('click', function(){
                            $('#form_editar').submit();

                        })
                    }

                })
            });
        })(jQuery);
</script>

@endpush
