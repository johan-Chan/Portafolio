<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/inspres.css?ver=1.6">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <header>
        <nav>
            <p>Insertar Prestamo</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="insertacionpres.php" method="POST" enctype="multipart/form-data">
            <div class="contenedor">
                <input type="text" name="id" placeholder="Digite el ID" class="auyama" required>
                <br>
                <p class="arracacha">Fecha Inicio</p>
                <input type="date" name="fechai" class="auyama" required>
                <p class="arracacha">Fecha Fin</p>
                <input type="date" name="fechaf" class="auyama" required>
                <br><br>
                <input type="number" name="cantid" placeholder="Cantidad Del Prestamo" class="auyama" required >
                <br><br>
                <input type="number" name="total" placeholder="Valor Total Préstamo" class="auyama" required >
                <br><br>
                <input type="number" name="pagado" placeholder="Valor Pagado Prestamo" class="auyama" required>
                <br>
                <p class="arracacha">Estado Del Prestamo</p>
                <select name="estadop" id="lang" class="opcion1">
                    <option value="1">Activo</option>
                    <option value="2">Vencido</option>
                    <option value="3">En Mora</option>
                    <option value="4">Proceso De Cobro</option>
                    <option value="5">Pagado</option>
                    <option value="6">Cancelado</option>
                    <option value="7">Espera De Aprobacion</option>
                </select>
                <br>
                <input type="text" name="desc" placeholder="Descripcion Prestamo" class="auyama" required>
                <br><br>
                <input type="text" name="usu" placeholder="Id Usuario" class="auyama" required>
                <br><br>
                <input type="text" name="solic" placeholder="Id Solicitante" class="auyama" required>
                <br><br>
                <input type="number" name="inte" placeholder="Tasa De Interes" class="auyama" required>
                <br><br>
                <input type="number" name="anti" placeholder="Tasa Anticipada" class="auyama" required>
                <br><br>
                <input type="number" name="venci" placeholder="Tasa Vencida" class="auyama" required>
                <p class="arracacha">Modalidad Del Prestamo</p>
                <select name="moda" id="lang" class="opcion2">
                    <option value="1">Prestamo Hipotecario</option>
                    <option value="2">Préstamos para Automóviles</option>
                    <option value="3">Línea de Crédito</option>
                    <option value="4">Préstamos para Educación</option>
                    <option value="5">Préstamos Comerciales</option>
                    <option value="6">Préstamos Personales</option>
                </select>
                <p class="arracacha">Linea Del Prestamo</p>
                <select name="linea" id="lang" class="opcion3">
                    <option value="1">Línea de Crédito Personal</option>
                    <option value="2">Línea de Crédito Hipotecaria</option>
                    <option value="3">Línea de Crédito para Tarjetas de Crédito</option>
                    <option value="4">Línea de Crédito para Inventarios</option>
                    <option value="5">Línea de Crédito para Cuentas por Cobrar</option>
                    <option value="6">Línea de Crédito para Estudiantes</option>
                </select>
                <br>
                <input type="text" name="empre" placeholder="Id Empresa" class="auyama" required>
                <br><br>
                <a href="tablapres.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
    </center>
</body>
</html>
