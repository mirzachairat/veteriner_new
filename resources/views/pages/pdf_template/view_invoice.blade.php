<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="images" style="margin-top:50px; margin-buttom:50px; margin-left:50px">
        @foreach($data_file as $item)
             <img src="{{asset('storage/'. $item->payment_link)}}" alt="" style="width: 50%; height: 50%;">
        @endforeach
    </div>
    <div class="tombol" style="margin-top:10px; padding:50px">
        <a class="btn btn-primary btn-lg" href="javascript:history.back()"> Back </a>
    </div>
</body>
</html>
