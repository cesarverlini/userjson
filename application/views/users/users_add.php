<section class="content">
    <div class="center-content ">
        <div class="row col-md-6">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo Usuario</h3>
                    </div>
                    <div class="card-body">
                        <form id="form_new_user" method="POST" action="<?php echo base_url('guardar_usuario');?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="nombre">Usuario</label>
                                            <input type="text" class="form-control" id="user" name="user"  required>
                                            <label for="nombre">Contraseña</label>
                                            <input type="text" class="form-control" id="password" name="password" required>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="btn_save" class="btn btn-primary float-right">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>