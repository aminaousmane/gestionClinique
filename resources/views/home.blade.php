@extends('layouts.nav')

@section('content')
<div class="container main" style="margin-top: 100px;">
<?php 

$dir    = '../install/';
//si le fichier install alors le message d'erreur
if (is_dir($dir))  {
   echo "<div class='alert alert-warning' style='margin: auto;'>
    <h3>Bienvenue dans Application !</h3>
    <p>Nous vous remercions de votre choix :) Vous pouvez maintenant commencer à courir votre établissment..!</p>
    <br>
    <span style='font-size: 14px;'' class='label label-default'>Mais avant cela pour des raisons de sécurité, vous devez supprimer le dossier d'installation nommé [install] </span>
    <p>Vous le trouverez dans le dossier principal.</p>
    
</div><br><br>";
}

 ?>



<div class="row">

<?php 

  $stmt_count_produit = "SELECT * FROM `consulte`";
  /*$stmt_count_produit->execute();
  $count_produit= $stmt_count_produit->rowCount();

  $stmt_count_teachers = $connect->prepare("SELECT * FROM `traitement`");
  $stmt_count_teachers->execute();
  $count_teachers = $stmt_count_teachers->rowCount();*/

/*  $stmt_count_eleve = $connect->prepare("SELECT * FROM eleve");
  $stmt_count_eleve->execute();
  $count_eleve = $stmt_count_eleve->rowCount();*/

 /* $stmt_count_topics = $connect->prepare("SELECT * FROM topics");
  $stmt_count_topics->execute();
  $count_topics = $stmt_count_topics->rowCount();*/


   ?>
<div class="col-md-12" id="status">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="info-box yellow-bg">
            <i class="fa fa-trademark"></i>
            <div class="count"><?php echo $consulte; ?></div>
            <div class="title">Le nombre de traitement effectuez</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="info-box orange-bg">
            <i class="fa fa-contao"></i>
            <div class="count"><?php echo $consulte; ?></div>
            <div class="title">le Nombre de consultation </div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->  
        
       
</div>
 <div class="clear"></div><br>


    <div class="col-md-4">
      <a href="{{ route('malade')}}">
          <div class="link">
            <i class="fa fa-users"></i>
            <div class="clear"></div><span>Ajoutez un Patient</span>
         </div>
      </a>
    </div>
    
     <div class="col-md-4">
      <a href="{{ url('consultation')}}">">
          <div class="link">
            <i class="fa fa-plus"></i>
            <div class="clear"></div><span>Effectuez une consulation</span>
         </div>
      </a>
    </div>
    
    <div class="col-md-4">
      <a href="traitement.php">
          <div class="link">
            <i class="fa fa-ambulance"></i>
            <div class="clear"></div><span>Traitement</span>
         </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="laboratoire.php">
          <div class="link">
            <i class="fa fa-medkit"></i>
            <div class="clear"></div><span>Laboratoire</span>
         </div>
      </a>
    </div>
    
     <div class="col-md-4">
      <a href="Medecins.php">
          <div class="link">
            <i class="fa fa-user"></i>
            <div class="clear"></div><span>Ajoutez un Medecins</span>
         </div>
      </a>
    </div>
    
     <div class="col-md-4">
      <a href="operation.php">
          <div class="link">
            <i class="fa fa-cog"></i>
            <div class="clear"></div><span>Operation</span>
         </div>
      </a>
    </div>

       

    

   


    

</div>
</div>		
                     
@endsection
