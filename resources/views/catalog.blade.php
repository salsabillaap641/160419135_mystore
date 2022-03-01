<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Catalog</title>
</head>
<body>
  <div class="container">
      @foreach ($catalog as $item)
      <h3>
      <a href="{{$item['link_catalog']}}">{{$item['nama_catalog']}}</a><br>
    </h3>
      @endforeach
  </div>
</body>
</html>