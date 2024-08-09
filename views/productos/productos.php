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
                <h1>Productos</h1>
                <form method="post">
                    <label>Id Producto</label>
                    <input name="prod_id" type="number" autocomplete="off">

                    <label for="">Und. Medida</label>
                    <select name="prod_unidad_medida">
                        <option value="" selected>Seleccionar</option>
                        <option value="kilogramo">Kilogramo</option>
                        <option value="litro">Litro</option>
                        <option value="libra">Libra</option>
                        <option value="unidad">Unidad</option>
                    </select>

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

                    <label for="">Estado</label>
                    <select name="prod_estado" id="">
                        <option value="" selected>Seleccionar</option>
                        <option value="disponible">Disponible</option>
                        <option value="noDisponible">No Disponible</option>
                    </select>

                    <input type="submit" value="Filtrar">
                </form>
                <button onclick="redireccionar('./producto_create.php')">Nuevo Producto</button>

                <h1>Stock</h1>
                <div>
                    <table border="1">
                        <tr>
                            <th>Id Producto</th>
                            <th>Descripción</th>
                            <th>Categoría</th>
                            <th>Sub Categoría</th>
                            <th>Und. Medida</th>
                            <th>Stock</th>
                            <th>Estado</th>
                            <th>Precio Unidad</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        
                        <?php include("../../php/productos/producto_query.php")?>
                        
                    </table>
                </div>
            </section>
        </main>
        <script src="../../../../js/redireccionar.js"></script>
        <script src="../../../../js/_productos/list_productos.js"></script>

        <script>
            
        </script>
    </body>
</html>