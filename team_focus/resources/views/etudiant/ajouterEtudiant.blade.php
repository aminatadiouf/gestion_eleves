@include('accueil')
@extends('layout.nav')
@section('contenu')

@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  


@foreach($errors->all() as $error)
<strong>Oh claquement ! </strong>  
</div> {{$error}}

    
@endforeach
@endif

    <div class="container">
    <div class="row  d-flex justify-content-center align-items-center col-md-10 ">
      <form action="/etudiant/ajouterEtudiant" method="post">
      @csrf
<form class="form-horizontal m-3 ">
  <fieldset>
    <legend>Formulaire d'ajout des etudiants</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nom</label>
      <div class="col-lg-10">
        <input type="text" name="nom_etudiant" class="form-control" id="inputEmail" placeholder="saissisez votre nom">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Prenom</label>
      <div class="col-lg-10">
        <input type="text" name="prenom_etudiant" class="form-control" id="inputEmail" placeholder="saissisez votre prenom">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">date de naissance</label>
      <div class="col-lg-10">
        <input type="date" name="date_de_naissance" class="form-control" id="inputEmail" placeholder="saissisez votre date de naissance">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">classe</label>
      <div class="col-lg-10">
        <input type="text" name="classe" class="form-control" id="inputEmail" placeholder="saissisez votre classe">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">sexe</label>
      <div class="col-lg-10">
        <input type="text"  name="sexe" class="form-control" id="inputEmail" placeholder="saissisez ">
      </div>
    </div>


<div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
    </fieldset>
    </form>
</div>
</div>





</form>
@endsection