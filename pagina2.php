<?PHP
// Aqui sanitizamos los datos de nombre y edad
if (isset($_POST["nombre"])) {
    $Nombre = filter_input(INPUT_POST, "nombre",
     FILTER_SANITIZE_SPECIAL_CHARS);
    $Nombre = ucfirst(trim($Nombre)); //Usamos los dos metodos para 
                                      //darle mayus a la primera letra y quitar espacios al nombre
     $Edad = filter_input(INPUT_POST, "edad", 
                    FILTER_SANITIZE_NUMBER_INT);
    if (!empty($Edad) and $Edad >18){

    //Acciones
        echo "usted puede votar en las próximas elecciones 2028";
    }else echo "Usted no es mayor de edad";

}


