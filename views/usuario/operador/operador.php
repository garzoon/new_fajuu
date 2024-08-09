<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuario</title>
    </head>
    <body>
        <main>
            <section>
                <h1>Operador</h1>
                <form method="post">
                    <label>Id usuario</label>
                    <input name="user_id" type="number" autocomplete="off">

                    <label>Estado</label>
                    <select name="user_estado">
                        <option selected value="">Seleccionar</option>
                        <option value="activo">Activo</option>
                        <option value="bloqueado">Bloqueado</option>
                    </select>

                    <label>Rol</label>
                    <select name="rol">
                        <option selected value="">Seleccionar</option>
                        <option value="administrador">Administrador</option>  
                        <option value="usuario">Usuario</option>
                    </select>

                    <input type="submit" value="Filtrar">
                </form>
                <button onclick="redireccionar('operador_create.html')">Nuevo usuario</button>
                <div id="resultadoAjax"></div>

                <table border="1">
                    <tr>
                        <th>Id usuario</th>
                        <th>Nombre/s</th>
                        <th>Apellido/s</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php include("../../../php/usuarios/operador/operador_query.php");?>
                </table>    
            </section>
        </main>
        <script src="../../../../../js/redireccionar.js"></script>
    </body>
</html>