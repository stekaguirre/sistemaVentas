

<!--                                 USUARIOS DELETE                                         -->

<!-- INCLUDE -->
 <?php
  include ("../app/config.php");
  include ("../layout/session.php");
  include ("../layout/header.php");
  include ("../app/controllers/usuarios/show_usuarios.php");
  ?>
<!-- ///INCLUDE -->


<!-- ///CONTENIDO DERECHO HEADER -->
  <div class="content-wrapper">
  <br>
          <!--
                  <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0">Eliminar Usuarios <?php echo APP_NAME; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
              -->
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
 <div class="content">
        <div class="content-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card card-danger">
                <div class="card-header">
                  <h1 class="card-title">Seguro que deseas eliminar a <?php echo $nombres;?> ??</h1>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i 
                  class="fas fa-minus"></i>
                  </button>
                  </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="../app/controllers/usuarios/create.php" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Nombre y Apellido</label>
                            <input type="text" name="nombres" 
                            value="<?php echo $nombres;?>" class="form-control" disabled >
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" 
                            value="<?php echo $email;?>" class="form-control" disabled >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Mensaje</label>
                            <input type="text" name="descripcion"  
                            value="<?php echo $descripcion;?>" disabled 
                            cols="30" rows="5" class="form-control"></input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="index.php" type="button" class="btn btn-secondary">Atras</a>
                                <a href="update.php?id=<?php echo $id_usuario ?>" type="button" class="btn btn-success">Editar</a>
                                <a href="delete.php?id=<?php echo $id_usuario ?>" type="button" class="btn btn-danger">Borrar</a>
                            </div>
                        </div>
                      </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            

<?php include ("../layout/footer.php");
        include ("../layout/mensajes.php");
?>
  



          
          
          