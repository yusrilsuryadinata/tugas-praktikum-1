@extends('layout0104')
@section('judul','Contact')
@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
img{
	background-image: url(P1.jpg);
	background-color: #eaeaea;
	background-size: cover;
	width: 350px;
	height: 350px;
	margin: 0 auto;
	border: 1px solid #eaeaea;
}
.container{
    margin: 0 auto;
}
</style>
<img src="{{url('img/1.jpg')}}">
<p>Nama         : Yusril Surya Dinata</p>
<p>Nomer        : 085853942767</p>
<p>Email        : yusrilsurya29@gmail.com</p>
<p>Sosial Media : @suryayusril</p>
</body>
</html>
@endsection