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
                <h1>Nuevo Proveedor</h1>
                <form method="post" action="../../../php/usuarios/proveedor/proveedor_create.php">
                    <label>Nit de Proveedor</label>
                    <input name="prov_nit" type="number" autocomplete="off" required>

                    <label for="">Razón Social</label>
                    <input name="prov_razonsocial" type="text" autocomplete="off" required>

                    <label for="">Ciudad</label>
                    <input name="prov_ciudad" type="text" autocomplete="off" required>

                    <label for="">Dirección</label>
                    <input name="prov_direccion" type="text" autocomplete="off" required>
                    
                    <label for="">Email</label>
                    <input name="prov_email" type="text" autocomplete="off" required>

                    <label for="">Telefono</label>
                    <input name="prov_telefono" type="number" autocomplete="off" required>

                    <input id="submitButton" type="submit" onclick="" value="Crear">
                </form>
            </section>
        </main>
        <button id="btnCerrar" onclick="closeContent()">Cerrar</button>
    </body>
</html>