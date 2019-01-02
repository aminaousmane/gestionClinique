<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Consulation</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   

    
     <link rel="stylesheet" href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">


   

      <script src="js/jquery-1.11.3.min.js"></script>

    

     
        
  </head>
<body>

<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Consultation</h1>
    <hr> <br>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="{{url('storeConsult')}}" method="post">
      {{ csrf_field()}} 
          
              <label class="">Nom du patient: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="malade" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
                  @foreach($malade as $c)
                     <option value="{{$c->id_malade}}"> {{$c->prenom_malade}}  {{$c->nom_malade}}</option>; 
                 @endforeach

                  </select>
              </div><br>
<label class="">nom du medecins: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="medecins" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
                  @foreach($medecin as $c)
                    <option value="{{$c->id_medecins}}"> {{$c->prenom_medecins}}  {{$c->nom_medecins}}</option>; 
                  @endforeach

                  </select>
              </div><br>
               <label class="">Observation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <textarea  class="form-control" name="observation">
                  </textarea>
              </div><br>
               <label class="">Frais de consultation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                  <input name="frais" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Date de consultation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="date" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
              <br> 

          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>     

          <hr id='success'>

      </form>
  
  </div>


        
                           
           




  </body>
</html>
