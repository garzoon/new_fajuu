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
                <h1>Proveedores</h1>
                <form method="POST">
                    <label>Id proveedor</label>
                    <input name="prov_id" type="text" autocomplete="off">
                    
                    <label for="">Ciudad</label>
                    <input name="prov_ciudad" type="text">

                    <label>Estado</label>
                    <select name="prov_estado">
                        <option selected value="">Seleccionar</option>
                        <option value="activo">Activo</option>
                        <option value="bloqueado">Bloqueado</option>
                    </select>

                    <input type="submit" value="Filtrar">
                </form>
                <button id="btnEnviar" onclick="sendRequest('proveedor_create.php')">Nuevo Proveedor</button>
                <div id="resultadoAjax"></div>
                
                <table border="1">
                    <tr>
                        <th>Id proveedor</th>
                        <th>Nit</th>
                        <th>Razon Social</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php include("../../../php/usuarios/proveedor/proveedor_query.php");?>
                </table>    
            </section>
        </main>
        <script src="../../../../../js/_ajax/create.js.js"></script>
    </body>
</html>