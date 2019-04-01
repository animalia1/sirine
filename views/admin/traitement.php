<?php
    
    include "../../core/livreurC.php";
    include "../../entities/livreur.php";    
    include "../../core/livraisonC.php";
    include "../../entities/livraison.php";
    if(isset($_REQUEST['first_name']) and isset($_REQUEST['last_name']) and isset($_REQUEST['address']) and isset($_REQUEST['zip_code']) and isset($_REQUEST['phone_number']) and isset($_REQUEST['email_address']) and isset($_REQUEST['prix']) ){
        if(empty($_REQUEST['first_name']) || empty($_REQUEST['last_name']) || empty($_REQUEST['address']) || empty($_REQUEST['zip_code']) || empty($_REQUEST['phone_number']) || empty($_REQUEST['email_address']) || empty($_REQUEST['prix']) ){
            
            $url = '../shipping.php?error=1'; 
        }else{
        $livraison = new Livraison($_REQUEST['first_name'],$_REQUEST['last_name'],$_REQUEST['address'],$_REQUEST['phone_number'],$_REQUEST['prix'],$_REQUEST['orderid'],$_REQUEST['date'],"pending",$_REQUEST['zip_code'],$_REQUEST['livreur']);
        LivraisonC::ajouterLivraison($livraison);
                $url = '../shipping.php?ajout=1'; }
    }

    if(isset($_REQUEST['name']) and isset($_REQUEST['emailAddress']) and isset($_REQUEST['phoneNumber']) and isset($_REQUEST['adresse']) and isset($_REQUEST['code']) and isset($_REQUEST['date']) and isset($_REQUEST['salary']) ){
        if(empty($_REQUEST['name']) || empty($_REQUEST['emailAddress']) || empty($_REQUEST['phoneNumber']) || empty($_REQUEST['adresse']) || empty($_REQUEST['code']) || empty($_REQUEST['date']) || empty($_REQUEST['salary'])){
            echo "nice";
            $url = 'contact-card.php?error'; // this can be set based on whatever
        }
        else{
            if($_REQUEST['id'] > 0){
                $livreurr = new Livreur($_REQUEST['name'],$_REQUEST['emailAddress'],$_REQUEST['phoneNumber'],$_REQUEST['adresse'],$_REQUEST['code'],$_REQUEST['date'],$_REQUEST['salary']);
                livreurC::modifierLivreur($livreurr,$_REQUEST['id']);
                $url = 'contact-card.php?modif=1'; 

            }else{
                $url = 'contact-card.php?ajouter=1'; 
                $livreur = new Livreur($_REQUEST['name'],$_REQUEST['emailAddress'],$_REQUEST['phoneNumber'],$_REQUEST['adresse'],$_REQUEST['code'],$_REQUEST['date'],$_REQUEST['salary']);
                livreurC::ajouterLivreur($livreur);

            }
            // this can be set based on whatever
        }
    }

?>