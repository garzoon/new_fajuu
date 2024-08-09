<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis facturas</title>

    <!-- Link accesos a archivos css internos -->
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/footer.css">

    <link rel="stylesheet" href="/styles/stylesPages/misFacturas/misFacturasProveedor.css">
</head>
<body>
    <main>
        <section>
            <h1>Buscar Entrada</h1>
            <form method="post" action="../../php/facturas/fact_entrada_query.php">
                <label>Número Factura</label>
                <input name="fact_numero" type="text" autocomplete="off">

                <label>Id Proveedor</label>
                <input name="prov_id" type="text" autocomplete="off">

                <label>Fecha de ingreso</label>
                <input name="fact_fecha_entrada" type="date" autocomplete="off">
            </form>

            <h1>Relación de facturas</h1>
            <div class="table">
                <table border="1">
                    <tr>
                        <th>Numero Factura</th>
                        <th>Id Proveedor</th>
                        <th>Proveedor</th>
                        <th>Fecha de entrada</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php include("../../php/facturas/fact_entrada_query.php")?>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer - buttons action -->
    <a href="./facturas.html">Volver</a>
</body>
</html>
