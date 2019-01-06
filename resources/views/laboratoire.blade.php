@extends('layouts.app1')

@section('content')

<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Laboratoire</h1>
    <hr> <br>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="{{url('storeLaboratoire')}}" method="post">
      {{ csrf_field()}}
      <!--code selection non geree-->
              <label class="">Nom du patient: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="malade" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
                  @foreach($malade as $l)
                  <option value="{{$l->id_malade}}"> {{$l->nom_malade}}  {{$l->prenom_malade}}</option>;
                  @endforeach
                  </select>
              </div><br>
                <label class="">Type d'examen : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                  <input name="examen" type="text" placeholder="" class="form-control validate[required]" />
              </div><br>
     <label class="">Observation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <textarea  class="form-control" name="observation">
                  </textarea>
              </div><br>
    <label class="">Date d'examen : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="date" type="date" placeholder="" class="form-control validate[required]" />
              </div><br>
       <label class="">Frais d'examen : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                  <input name="frais" type="text" placeholder="" class="form-control validate[required]" />
              </div><br><br>

          <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>
          <hr id='success'>
      </form>
  </div>

<div class="clear"></div>
      <br>
</div>

@endsection
