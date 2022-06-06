<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form class="form-register"> 

        
        <h1>Sign Up <span class="fas fa-user-plus" ></span> </span> </h1>
        <div class="conten">
            <label for="username">Nombres:</label>
            <input type="text" name="username" id="username" placeholder="Ingrese Su Nombre">
        </div>
        <div class="conten">
            <label for="username">Apellidos:</label>
            <input type="text" name="surnames" id="surnames" placeholder="Ingrese Sus Apellidos
            ">
        </div>
        <div class="conten">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Ingrese Su Correo">
        </div>
        <div class="conten">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Digite su contraseña">
        </div>
        <div class="conten">
        <label for="quantity">ID_Cedula</label>
            <input type="number" name="quantity" id="quantity" placeholder="Digite su numero de identificacion">
        </div>
        <div class="Fecha De Nacimiento">
            <label>Fecha De Nacimiento</label>
            <input  class="controls" type="date" name="Birth_date" id="txt_fecha de nacimiento_Reg" placeholder="Ingrese Su Fecha De Nacimiento">
        </div>
        <br/>
        <div>
            <input  class="botons" type="submit" id="txt_Genero_Reg" value="Seleccione Su Genero">
            <br>
            <br>
            <input  class="checkbox" type="radio" name="sexo" id="txt_sexo_Reg" value="Masculino">Masculino
            <br>
            <br>
            <input  class="checkbox" type="Radio" name="sexo" id="txt_sexo_Reg" value="Femenino">Femenino
            </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="Login.php">Login here</a></footer>
    </form>
</main>
</body>
<script src="https://kit.fontawesome.com/7efd9e34c5.js"></script>
</html>
</body>
</html>