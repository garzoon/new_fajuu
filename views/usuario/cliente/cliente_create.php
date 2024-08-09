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
                <h1>Nuevo Cliente</h1>
                <form method="post" action="../../../php/usuarios/cliente/cliente_create.php">
                    <label>Nit de Cliente</label>
                    <input name="clien_nit" type="number" autocomplete="off" required>

                    <label for="">Nombre/s</label>
                    <input name="clien_nombre" type="text" autocomplete="off" required>

                    <label for="">Apellido/s</label>
                    <input name="clien_apellido" type="text" autocomplete="off" required>

                    <label for="">Ciudad</label>
                    <input name="clien_ciudad" type="text" autocomplete="off" required>

                    <label for="">Dirección</label>
                    <input name="clien_direccion" type="text" autocomplete="off" required>
                    
                    <label for="">Email</label>
                    <input name="clien_email" type="text" autocomplete="off" required>

                    <label for="">Telefono</label>
                    <input name="clien_telefono" type="number" autocomplete="off" required>

                    <input id="submitButton" type="submit" onclick="" value="Crear">
                </form>
            </section>
        </main>
        <button id="btnCerrar" onclick="closeContent()">Cerrar</button>
    </body>
</html>