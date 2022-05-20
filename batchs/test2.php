<?php
	session_start();

$tarifs_hebdo_profil = array("MILIMA", "ANGWIN_HEBDO", "CUVFAU", "MAISOB");

$tarifs_hebdo_chemin = array("MILLESIMA", "ANGWIN_HEBDO", "CUVFAU", "MAISOB");

/*
$tarifs_hebdo_profil = array(
    "MILIMA" => "MILLESIMA",
    "ANGWIN_HEBDO" => "ANGWIN_HEBDO",
    "CUVFAU"   => "CUVFAU",
    "MAISOB"  => 100,
);*/

$chemin_fichiers_php = "/var/www/html/php/";

//$chemin_fichiers_php = "/php/";
//$chemin_fichiers_php = "./html/php/";

foreach ($tarifs_hebdo_profil as $key => $profil){

    echo "test2.php";

    echo "   ";

    $chemin_traitement = $chemin_fichiers_php . $tarifs_hebdo_chemin[$key] . "/";

    echo ($chemin_traitement . "traitement_" . $profil . ".py");

    echo "   ";

    // Execution du script python adéquate au profil du tarif.
	//$script_tarif = basename($chemin_traitement . "traitement_" . $profil . ".py");
    //$script_tarif = basename("../test.php");
    //$script_tarif = basename("/Volumes/Intranet/Tarifs/batchs/test.php");

    //$script_tarif = "/Volumes/Intranet/Tarifs/batchs/test.php";
    //$script_tarif = "/var/www/html/Tarifs/batchs/test.php";

    $script_tarif = "/var/www/html/Tarifs/batchs/test2.py";


    echo "   ";

	echo shell_exec('python3 ' . $script_tarif . ' 2>&1');
    //echo shell_exec('php -f ' . $script_tarif . ' 2>&1');

    echo "   ";

    //$chemin_fichier_sortie = $chemin_fichiers_php . "tarifs_HEBDO/";

    //echo ($chemin_fichier_sortie . "sortie_" . $profil . ".xlsx");

    //echo "   ";

	//$file_OUT=basename($chemin_fichier_sortie . "sortie_" . $profil . ".xlsx");
}

?>