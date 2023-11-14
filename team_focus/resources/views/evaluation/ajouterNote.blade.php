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
    <div class="row  d-flex justify-content-center align-items-center ">
      <div class=" col-md-10 my-3">
    <form action="/evaluation/ajouterNote" method="Post">
    @csrf
<form class="form-horizontal">
  <fieldset>
    <legend>Formulaire d'ajout de note </legend>
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
      <label for="inputEmail" class="col-lg-2 control-label">note_etudiant</label>
      <div class="col-lg-10">
        <input type="number" name="note_etudiant" class="form-control" id="inputEmail" placeholder="saissisez votre date de naissance">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Matiere</label>
      <div class="col-lg-10">
        <input type="text" name="matiere" class="form-control" id="inputEmail" placeholder="saissisez votre classe">
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
</div>

</form>




@endsection