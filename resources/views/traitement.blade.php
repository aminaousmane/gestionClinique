@extends('layouts.app1')

@section('content')


<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Traitement</h1>
    <hr> <br>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="{{url('storeTraitement')}}" method="post">
      {{ csrf_field()}}

              <label class="">Nom du patient: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="malade" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
                  @foreach($malade as $t)
                  <option value="{{$t->id_malade}}"> {{$t->nom_malade}}  {{$t->prenom_malade}}</option>;
                  @endforeach
                  </select>
              </div><br>
     <label class="">Nom de la maladie : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <textarea  class="form-control" name="nom_maladie">
                  </textarea>
              </div><br>
    <label class="">Date debut traitement : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="date_debut" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
       <label class="">Date Fin traitement : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="date_fin" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Frais du traitement : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                  <input name="frais" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
              <label class="">Etat du patient : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                  <input name="etat" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
           <label class="">Les medicaments prescrits : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <textarea  class="form-control" name="medicament">
                  </textarea>
              </div><br>
              <br>

          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>

          <hr id='success'>

      </form>

  </div>

<div class="clear"></div>
<!--suppression categorie-->


    <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Numero</th>
            <th>Description</th>
            <th colspan="2">Operation</th>
          </tr>
          <!--Selection-->
            <tr>
              <td></td>
              <td></td>
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-pencil large"></i></a></td>

        </tr>
      </table>

      <br>

</div>


@endsection
