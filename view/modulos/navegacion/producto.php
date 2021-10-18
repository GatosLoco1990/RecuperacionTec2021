<?php

$sql = "SELECT * FROM `producto` WHERE id_producto = '14'";
$ejecutar = mysqli_query($conexion,$sql);
$row = $ejecutar->fetch_array(MYSQLI_ASSOC);

$nombre = $row['nom_producto'];
$marca = $row['marca'];
$precio = $row['precio'];
$descripcion = $row['desc_producto'];
$imagen = $row['ruta_imagen'];
?>


<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                        
                            <h3 class="d-inline-block d-sm-none">ss</h3>
                        
                            <div class="col-12">
                                <img src="model/<?php echo $imagen; ?>" class="product-image" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3"><?php echo $nombre;?></h3>
                            <p>Marca: <?php echo $marca;?></p>


                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                <?php 
                                echo $precio                                
                                ?>
                                </h2>
                                <h4 class="mt-0">
                                    <small>IVA: <?php ?> </small>
                                </h4>
                            </div>

                            <div class="mt-4">
                                <a href="descripcion-pago">
                                    <div class="btn btn-primary btn-lg btn-flat">
                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                        Comprar
                                    </div>
                                </a>

                            </div>

                         

                        </div>
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripci&oacute;n</a>

                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?php echo $descripcion; ?>  </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>