@include('accueil')
@extends('layout.nav')
@section('contenu')

@for ($i = 0; $i < 5; $i++)
<div class="container col-12 col-md-2 ">
    <div class="row d-flex justify-content-around align-items-center ">

    <div class="panel panel-default">
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
  Nom
  </div>
  <div class="panel-body">
    prenom
  </div>
  <div class="panel-body">
    date de naissance
  </div>
  <div class="panel-body">
    classe
  </div>
  <div class="panel-body">
   sexe 
 </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Modifier</button>
        <button type="button" class="btn btn-primary">Supprimer</button>
      </div>
</div>


</div>
</div>
@endfor
@endsection