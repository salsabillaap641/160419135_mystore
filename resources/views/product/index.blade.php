<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Medicines</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th>Generin Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes Tk 1</th>
        <th>Faskes Tk 2</th>
        <th>Faskes Tk 3</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
         <tr>
            <td>{{$li->generic_name}}</td>
            <td>{{$li->form}}</td>
            <td>{{$li->restriction_formula}}</td>
            <td>{{$li->description}}</td>
            <td>{{$li->tk1}}</td>
            <td>{{$li->tk2}}</td>
            <td>{{$li->tk3}}</td>
        </tr>
      @endforeach
    </tbody>
  </table> --}}
  <div class="row row-cols-3">
      @foreach ($listdata as $li)
    <div class="col-sm-3">
      <div class="card" style="height:30rem" >
          <img src="{{asset('image/'.$li->image)}}" width="100%">
        <div class="card-body">
          <h5 class="card-title">{{$li->generic_name}}</h5>
          <p class="card-text">{{$li->form}}</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</body>
</html>
