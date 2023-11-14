@extends('layout.nav')
@section('contenu')
 @include('accueil')
 
 
    

 <div class="container">
  <div class="row" col-12>
  
 
  <thead>
  <table class="table table-striped table-hover">
 <tr>
      <th>#</th>
      <th>Column heading</th>
      <th>Column heading</th>
      <th>Column heading</th>
    </tr>
  </thead>
  <tbody>
</table>
  @for ($i = 0; $i < 10; $i++)
  <table class="table table-striped table-hover ">
  <tr class="danger">
      <td>5</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    </tbody>
</table>
@endfor
</div>
</div>


@endsection