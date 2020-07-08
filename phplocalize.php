<?php
    
    //Bahasa Indonesia
    function translateId(){
        tt("Home", "Beranda");
        tt("Dashboard", "Dasbor");
        tt("Logout", "Keluar");
        tt("Login", "Masuk");
        tt("Site language", "Bahasa Situs");
    }
	
	//Bahasa French
    function translateFr(){
        tt("Home", "Accueil");
        tt("Dashboard", "Tableau de bord");
        tt("Logout", "Se déconnecter");
        tt("Login", "S'identifier");
		tt("Site language", "Langue du site");
    }
	
	
    
    $rawword;
    function uilang($txt){
        global $sitelang;
        global $rawword;
        $rawword = $txt;
        switch($sitelang){
			//In case it is Bahasa Indonesia
            case "id" :
                translateId();
                break;
			//In case it is French
            case "fr" :
                translateFr();
                break;
            default :
                echo $txt;
                break;
        }
    }
    
    function tt($txt1, $txt2){
        global $sitelang;
        global $rawword;
        if($rawword == $txt1){
            echo $txt2;
        }
    }
    
?>