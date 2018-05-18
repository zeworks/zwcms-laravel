<form action="" class="row form" enctype="multipart/form-data">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field clearfix">
                <label for="title">Nome do template</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field">
                <span>Estado</span>
                <br/>
                <br/>
                <!-- template status -->
                <input type="hidden" name="status_hidden" class="status_hidden">
                <div class="switch">
                    <input type="checkbox" class="btsp-check" name="status_item">
                    <span class="toggle toggle--round"></span>
                </div>
                <!-- /template status -->
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