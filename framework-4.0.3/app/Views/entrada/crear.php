<section class="content mx-3">
        <!-- Default box -->
        <div class="card mt-3" style="width:100%">
            <div class="card-header">
                <h3 class="card-title" >Crear entrada</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse2">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" style="display: block;">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- jquery validation -->
                                <!-- form start -->
                                <?php
                                    echo  form_open( base_url() . '/entrada/guardar') .
                                    '<div class="container mb-4 mt-3">
                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>'
                                        . form_input(array('type'=>'text','class'=>'form-control','id'=>'titulo','placeholder'=>'Titulo ...','name'=>'titulo')) .
                                        '<!-- textarea -->
                                    </div>
                                    <div class="form-group">
                                        <label for="cont">Contenido</label>
                                        '. form_textarea(array('rows'=>'3','class'=>'form-control','id'=>'cont','placeholder'=>'Contenido ...','name'=>'contenido')) .'
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>' .
                                form_close();
                                ?>
                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>