<div class="col-xs-12">
    <div class="table-items">
        <div class="form-field clearfix">
            <label for="title">Título da Notificação</label>
            <br>
            <small>Será mostrado no
                <strong>subject / assunto</strong> do email recebido pelo destinatátio</small>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <br>
        <div class="form-field">
            <span>Conteudo da Notificação</span>
            <br/>
            <br/>
            <textarea name="desc_product" class="text-editor"></textarea>
        </div>
        <br>
        <div class="form-field">
            <label for="observacoes_notification">{{ __('Observações de Notificação') }}</label>
            <textarea name="observacoes_notification" rows="9" id="observacoes_notification" class="form-control"></textarea>
                                    
        </div>
    </div>
</div>
<div class="buttons-top buttons-top-absolute">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-lg-10">
                <span id="status-info">Dados por guardar</span>
            </div>
            <div class="col-sm-2 col-lg-1">
                <a href="#" title="Cancelar" class="btn btn-default decline">Cancelar</a>
            </div>
            <div class="col-sm-2 col-lg-1">
                <button type="submit" title="Guardar" name="save_data" class="btn btn-primary save">Guardar</button>
            </div>
        </div>
    </div>
</div>