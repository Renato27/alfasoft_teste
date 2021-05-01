<div class="modal fade" id="deletar_contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="form_excluir_contacto" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="tokenExcluir" name="_token" value="{{ csrf_token() }}">
                    <p>Você está prestes a excluir o contacto <span class="contacto_nome" style="font-weight:bold"></span>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger submit_excluir">Excluir</button>
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
                $('.deletar').on('click', function(){
                    let contacto = $(this).val();

                    if(contacto){
                       let data = JSON.parse(contacto);
                        $('.contacto_nome').html(data.nome);

                        $('#form_excluir_contacto').attr('action', `deletar-contacto/${data.id}`)

                        $('.submit_excluir').on('click', function(){
                            $('#form_excluir_contacto').submit();

                        })
                    }

                })
            });
        })(jQuery);
</script>

@endpush
