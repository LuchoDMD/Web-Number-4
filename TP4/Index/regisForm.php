<?php ///para usar el footer y el header respectivamente usar un require_once ?>

<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <form action="../Process/register.php" method="POST" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="userName" required class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" required class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <div class="form-group">
                    <label for="">Apellido/s</label>
                    <input type="text" name="lastName" class="form-control form-control-lg" placeholder="Ingresar Apellido/s">
               </div>
               <div class="form-group">
                    <label for="">Nombre/s</label>
                    <input type="text" name="firstName" class="form-control form-control-lg" placeholder="Ingresar Nombre/s">
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Completar Registro</button>
          </form>
     </div>
</main>
