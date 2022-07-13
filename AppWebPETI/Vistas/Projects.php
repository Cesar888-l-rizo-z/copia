<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registrar Citas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <form class="form-register">
        <h1>Registrar Citas</h1>
        <div class="conten">
            <label>Nombres_Clientes</label>
            <input class="controls" type="text" name="Names" id="txt_Nombres_Reg" placeholder="Ingrese Sus Nombre">
        </div>
        <div class="conten">
            <label>Apellidos</label>
            <input class="controls" type="text" name="Surnames" id="txt_Apellidos_Reg"
                placeholder="Ingrese Sus Apellidos">
        </div>
        <div class="Fecha De Nacimiento">
            <label>Fecha De Nacimiento</label>
            <input class="controls" type="date" name="Birth date" id="txt_fecha de nacimiento_Reg"
                placeholder="Ingrese Su Fecha De Nacimiento">
        </div>
        <div class="conten">
            <label>Nombre_Mascota</label>
            <input class="controls" type="text" name="Nombre_Mascota" id="txt_Nombre_Mascota"
                placeholder="Ingrese el nombre de tu mascota">
        </div>
        <div class="conten">
            <label>Tipo_Mascota</label>
            <input class="controls" type="text" name="Confirm_Password" id="txtTipo_Mascota"
                placeholder="Ingrese el tipo de mascota">
        </div>
        <div class="conten">
            <label>Direccion</label>
            <input class="controls" type="text" name="Direccion" txt_Direccion" placeholder="Ingrese su direccion">
        </div>
        <div class="conten">
            <label>Hora</label>
            <input class="controls" type="text" name="Digita La Hora" id="txt_Hora" placeholder="Seleccione la Hora">
        </div>
        <div class="conten">
            <label>Genero</label>
            <select name="Genero">
                <option>Seleccionar</option>
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
        </div>
        <br>
        <div class="response">
            <button class="button_reg">Registrar Cita</button>
        </div>
    </form>
</body>

</html>