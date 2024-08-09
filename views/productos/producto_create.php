<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>     
    </head>
    <body>

        <main>
            <section>
                <h1>Crear producto</h1>
                <form method="post" action="../../php/productos/producto_create.php">
                    <label for="">Descripción</label>
                    <input name="prod_descripcion" type="text" autocomplete="off">

                    <label >Categoría</label>
                    <select id="prod_categoria" name="prod_categoria">
                        <option value="" selected>Seleccionar</option>
                        <option value="Refrigerado">Refrigerado</option>
                        <option value="Congelado">Congelado</option>
                        <option value="Seco">Seco</option>
                    </select>

                    <label>Sub Categoría</label>
                    <select id="prod_subcategoria" name="prod_subcategoria">
                    </select>

                    <label for="">Und. Medida</label>
                    <select name="prod_unidad_medida">
                        <option value="" selected>Seleccionar</option>
                        <option value="kilogramo">Kilogramo</option>
                        <option value="litro">Litro</option>
                        <option value="libra">Libra</option>
                        <option value="unidad">Unidad</option>
                    </select>

                    <label for="">Precio Unidad</label>
                    <input name="prod_precio" type="number" autocomplete="off">

                    <input type="submit" value="Crear">
                </form>
            </section>
        </main>
        <script src="../../../../js/productos/list_productos.js"></script>
    </body>
</html> 