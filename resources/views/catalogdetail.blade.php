<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Catalog Detail</title>
</head>
<body>
    <div class="div">
        <div class="row">
        @foreach ($data as $item)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($item['foto'])}}" class="card-img-top" alt="..." >
                    <div class="card-body">
                      <h5 class="card-title">{{$item['nama']}}</h5>
                      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      <a href="{{$slug.'/'.$item['id']}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
          
        @endforeach
    </div>
    </div>
</body>
</html>