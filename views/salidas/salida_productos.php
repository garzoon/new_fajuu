<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Requisicion</title>
    </head>
    <body>
        <section>
        <h1>Requisicion</h1>
            <form action="../../php/salida_productos/salida_productos_query.php" method="post">
                <div>
                    <label for="">Id cliente</label>
                    <input name="user_id" type="number">

                    <h1>Buscar producto</h1>
                    <label>Categoría</label>
                    <select name="prod_categoria" id="prod_categoria">
                        <option value="" selected>Seleccionar</option>
                        <option value="Refrigerado">Refrigerado</option>
                        <option value="Congelado">Congelado</option>
                        <option value="Seco">Seco</option>
                    </select>
                    <label for="">Sub Categoría</label>
                    <select name="prod_subcategoria" id="prod_subcategoria"></select>

                    <label>Id Producto</label>
                    <input name="prod_id" type="number" autocomplete="off">  

                    <label>Cantidad</label>
                    <input name="prod_cantidad" type="number" autocomplete="off">
                    <input type="submit" value="Agregar">
                </div>
            </form>
            <h1>Vista requisicion</h1>
            <table border="1">
                <tr>
                    <th>Item</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>UND</th>
                    <th>Cantidad</th>
                    <th>Borrar</th>
                </tr>
                <?include("../../php/salida_productos/salida_productos_query.php");?>
            </table>
        </section>
        <script src="../../../../js/_productos/list_productos.js"></script>
    </body>
</html>