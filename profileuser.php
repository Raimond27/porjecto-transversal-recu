<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
</head>

<body>
    <a href="index.php">home</a>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>correo: <?php echo $_SESSION['email']; ?></p>
    <p>Rol: <?php echo $_SESSION['rol']; ?></p>
    <p>number phone: <?php echo $_SESSION['number']; ?></p>

    <form action="php/usercontroller.php" method="POST">
        <button type="submit" name="logout" class="button">Cerrar Sesión</button>
    </form>

    <a href="updateUserData.html">Actualizar Datos</a><br>
    <a href="updatePassword.html">Actualizar Contraseña</a>



    <!-- Redirige a la página de confirmación -->
    <form action="confirm_delete.php" method="GET">
        <button type="submit" class="button">Eliminar Cuenta</button>
    </form>
</body>

</html>