<?php
    include 'setting.php';
    include 'lib/db.php';

if( isset( $_POST['submit'] ) ){
$dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);
$sql = "INSERT INTO membersinfo( name , username , password , idcode) VALUES (?,?,?,?)";
//all informations like username, password and ... has been set in setting.php
$result = $dbc -> query ($sql, $name, $username, $pass, $idcode);
$dbc -> close();
echo 'با موفقیت درج شد';
}
else {
    include 'view/add_user.php';

}
?>