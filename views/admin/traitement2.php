<?php
include '../../entities/produit.php';
include '../../core/produitC.php';
if(isset($_FILES['image'])){
   $errors= array();
   $file_name = $_FILES['image']['name'];
   $file_size = $_FILES['image']['size'];
   $file_tmp = $_FILES['image']['tmp_name'];
   $file_type = $_FILES['image']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
   
   $extensions= array("jpeg","jpg","png");
   
   if(in_array($file_ext,$extensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }
   
   if($file_size > 2097152) {
      $errors[]='File size must be excately 2 MB';
   }
   
   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,"images/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}
if(isset($_REQUEST['nom']) and isset($_REQUEST['price']) and isset($_REQUEST['description'])  and isset($_REQUEST['category']) and isset($_REQUEST['type_animaux'])){
   //traitement des données
   //1-instance
  

   if($_REQUEST['id'] > 0){
      $p=new produit($_REQUEST['nom'],$_REQUEST['price'],$_REQUEST['description'],$_FILES['image']['name'],$_REQUEST['category'],$_REQUEST['type_animaux']);
   //2-instance
   $pcore=new produitC();
   $pcore->modifierProduit($p,$_REQUEST['id']);
   header( "Location: product.php" );
   
   
   }else{
      
   $p=new produit($_REQUEST['nom'],$_REQUEST['price'],$_REQUEST['description'],$_FILES['image']['name'],$_REQUEST['category'],$_REQUEST['type_animaux']);
   //2-instance
   $pcore=new produitC();
   $pcore->ajoutProduit($p);
   }
   header( "Location: product.php" );
}
else if(isset($_REQUEST['delete'])){
   $pcore=new produitC();
   $pcore->supprimerProduit($_REQUEST['delete']);
   header( "Location: product.php" );
}else{
   echo "aa";
}

?>