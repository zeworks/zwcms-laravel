<form action="" class="row form" enctype="multipart/form-data">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-items">
                    <div class="form-field clearfix">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <br>
                    <div class="form-field">
                        <span>Descrição do Produto</span>
                        <br/>
                        <br/>
                        <textarea name="desc_product" class="text-editor"></textarea>
                    </div>
                    <br>
                    <div class="form-field">
                        <span>Detalhes do Produto</span>
                        <br/>
                        <br/>
                        <textarea name="detail_product" class="text-editor"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="table-items">
                    <p>
                        <strong>Imagens Adicionais</strong>
                    </p>
                    <br>
                    <div class="form-field">
                        <div class="row">
                            <div class="aditional-images"></div>
                        </div>
                        <div class="buttons-top fleft">
                            <input type="file" name="upload_images[]" id="upload_images" class="hidden" multiple>
                            <a href="#" class="link upload" data-target="upload_images">Enviar Ficheiros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if($websitesettings[0]->website_mode_store)
            <div class="col-sm-4">
                <div class="table-items">
                    <p>
                        <strong>Características do Produto</strong>
                    </p>
                    <br>
                    <div class="form-field">
                        <div class="row match-height">
                            <div class="col-xs-12 col-sm-6" data-mh="produt">
                                <label for="price_noiva">Preço
                                    <strong>S/IVA</strong>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="price_noiva" id="price_noiva" class="form-control">
                                    <span class="input-group-addon">€</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6" data-mh="produt">
                                <label for="price_iva">Preço
                                    <strong>C/IVA</strong>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="price_iva" id="price_iva" class="form-control">
                                    <span class="input-group-addon">€</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6" data-mh="produt">
                                <label for="price_old">Preço
                                    <strong>Antigo</strong>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="price_old" id="price_old" class="form-control">
                                    <span class="input-group-addon">€</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6" data-mh="produt">
                                <label for="imposto">Imposto</label>
                                <div class="input-group">
                                    <input type="text" name="imposto" id="imposto" class="form-control">
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6" data-mh="produt">
                                <label for="shipping">Preço
                                    <strong>Envio</strong>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="shipping" id="shipping" class="form-control">
                                    <span class="input-group-addon">€</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-sm-4">
                <div class="table-items">
                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <br>
                    <div class="form-field">
                        <div class="row match-height">
                            <div class="col-xs-12" data-mh="produt">
                                <label for="sku">Referência do Produto</label>
                                <input type="text" name="sku" id="sku" class="form-control">
                            </div>
                            <div class="col-xs-12" data-mh="produt">
                                <label for="weight_product">Peso do Produto</label>
                                <input type="text" name="weight_product" id="weight_product" class="form-control">
                            </div>
                            <div class="col-xs-12" data-mh="produt">
                                <label for="size_product">Medidas do Produto</label>
                                <input type="text" name="size_product" id="size_product" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="table-items">
                    <p>
                        <strong>Cores do Produto</strong>
                    </p>
                    <br>
                    <div class="form-field">
                        <input type="text" placeholder="ex: #000 ..." onchange="insertColorProduct($(this).val())" class="form-control" name="available_color_product_text"
                            id="available_color_product_text">
                        <!-- available colors -->
                        <div class="available-colors"></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-items">
                    <div class="form-field fleft">
                        <span>Estado</span>
                        <br/>
                        <br/>
                        <!-- product status -->
                        <input type="hidden" name="status_hidden" class="status_hidden">
                        <div class="switch">
                            <input type="checkbox" class="btsp-check" name="status_item">
                            <span class="toggle toggle--round"></span>
                        </div>
                        <!-- /product status -->
                    </div>
                    <div class="fright form-field">
                        <input type="checkbox" name="new_product" id="new_product">
                        <label for="new_product">Produto Novo?</label>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="form-field tree">
                        <span>Página</span>
                        <!-- templates -->
                        <select name="page_template" id="page_template" class="form-control">
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