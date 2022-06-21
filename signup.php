<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/logo.png">

    <title>Regístrate</title>

</head>

<body>
    <?php

    //learn from w3schools.com
    //Unset all the server side variables

    session_start();

    $_SESSION["user"] = "";
    $_SESSION["usertype"] = "";

    // Set the new timezone
    date_default_timezone_set('America/Bogota');
    $date = date('Y-m-d');

    $_SESSION["date"] = $date;



    if ($_POST) {



        $_SESSION["personal"] = array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'address' => $_POST['address'],
            'nic' => $_POST['nic'],
            'dob' => $_POST['dob']
        );


        print_r($_SESSION["personal"]);
        header("location: create-account.php");
    }

    ?>


    <center>
        <div class="container">
            <table border="0">
                <tr>
                    <td colspan="2">
                        <p class="header-text">Empecemos acá</p>
                        <p class="sub-text">Agregue sus datos personales para continuar</p>
                    </td>
                </tr>
                <tr>
                    <form action="" method="POST">
                        <td class="label-td" colspan="2">
                            <label for="name" class="form-label">Nombre: </label>
                        </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="text" name="fname" class="input-text" placeholder="Nombre" required>
                    </td>
                    <td class="label-td">
                        <input type="text" name="lname" class="input-text" placeholder="Apellido" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <label for="address" class="form-label">Dirección: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <input type="text" name="address" class="input-text" placeholder="Dirección" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <label for="nic" class="form-label">Documento de Identificación: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <input type="text" name="nic" class="input-text" placeholder="Documento de Identificación" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <label for="dob" class="form-label">Fecha de Nacimiento: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                        <input type="date" name="dob" class="input-text" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" colspan="2">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="reset" value="Resetear Valores" class="login-btn btn-primary-soft btn">
                    </td>
                    <td>
                        <input type="submit" value="Siguiente" class="login-btn btn-primary btn">
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <label for="" class="sub-text" style="font-weight: 280;">Ya tienes una cuenta&#63; </label>
                        <a href="login.php" class="hover-link1 non-style-link">Ingresar</a>
                        <br><br><br>
                    </td>
                </tr>

                </form>
                </tr>
            </table>

        </div>
    </center>
</body>

</html>