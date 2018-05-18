<form action="" class="row form" enctype="multipart/form-data">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field clearfix">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-field">
                <span>Descrição</span>
                <br/>
                <br/>
                <textarea name="editor_content" class="text-editor" required></textarea>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field tree">
                <span>Página</span>
                <!-- templates -->
                <select name="page_template" id="page_template" class="form-control">
                    <?php //get_templates(); ?>
                    <!-- end templates -->
                </select>
            </div>
            <br>
            <br>
            <div class="form-field">
                <span>Imagem de Destaque
                    <strong>1920x520</strong>
                </span>
                <br>
                <br>
                <!-- previewed image -->
                <img class="image-previewer">
                <div class="buttons-top fleft">
                    <input type="file" name="upload_banner[]" id="upload_photo" class="hidden">
                    <a href="#" class="btn btn-default upload" data-target="upload_photo">Enviar Ficheiro</a>
                </div>
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
</form>