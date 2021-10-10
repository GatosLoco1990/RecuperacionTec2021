<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Venta</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrar venta</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Documento empleado</label>
                                    <select class="custom-select">
                                        <option>1091354158 - RG</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Documento cliente</label>
                                    <select class="custom-select">
                                        <option>60255264 - MS</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Producto</label>
                                    <select class="custom-select">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cantidad</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Cantidad">
                                </div>
                                <div class="form-group">
                                    <label>Modo de pago</label>
                                    <select class="custom-select">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM `modopago`");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores['id_modopago'].'">' . utf8_encode($valores['metodo']). '</option>';

                                        }
                                        ?>

                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos de venta</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Valor unitario</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subtotal</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" disabled>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->



                        </form>


                    </div>
                </div>
    </section>
</div>