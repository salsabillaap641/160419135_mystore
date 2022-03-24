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
  <table class="table" border="1">
    <thead>
      <tr>
        <th>data</th>
        <th>hasil</th>
      </tr>
    </thead>
    <tbody>
         <tr>
            <td>ID</td>
            <td>{{$message->id}}</td>
        </tr>
        <tr>
            <td>nama</td>
            <td>{{$message->generic_name}}</td>
        </tr>
        <tr>
            <td>form</td>
            <td>{{$message->form}}</td>
        </tr>
        <tr>
            <td>kategori</td>
            <td>{{$message->category->name}}</td>
        </tr>
   
    </tbody>
  </table>
  {{-- <div class="row row-cols-3">
      @foreach ($listdata as $li)
    <div class="col-sm-3">
      <div class="card" style="height:30rem" >
          <img src="{{asset('image/'.$li->image)}}" width="100%">
        <div class="card-body">
          <h5 class="card-title">{{$li->generic_name}}</h5>
          <p class="card-text">{{$li->form}}</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        {{-- </div>
      </div>
    </div>
    @endforeach
  </div>
</div> --}} 

</body>
</html>
