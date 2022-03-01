<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
</head>
<body>
    <div class="div">
        <h5 style="font-size: 50px">{{$data['nama']}}</h5>
        <img src="{{asset($data['foto'])}}" alt="" width="500px">
        <h5 style="font-size: 40px">{{$data['deskripsi']}}</h5>
    </div>
</body>
</html>