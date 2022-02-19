<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding:0px;
	margin:0px;
 }
    body{
	   background:#2ec194;
	   padding:100px 0px;
	}
	#form{
	   height:300px;
	   width:400px;
	   background:#2ec194;
	   margin:0px auto;
	   border-radius:5px;
	   box-shadow:-15px -15px 15px rgba(255,255,255,0.2),
	               15px 15px 15px rgba(0,0,0,0.1),
				   inset -5px -5px 5px rgba(255,255,255,0.2),
				   inset 5px 5px 5px rgba(0,0,0,0.1);
	}
	input{
	 width:300px;
	 height:30px;
	}
	#tg1{
	 margin-left:50px;
	 margin-top:20px;
	 margin-bottom:10px;
	}
	#btn{
	   height:30px;
	   margin-left:50px;
	   width:300px;
	}
    </style>
</head>
<body>
    <form action="LoginController.php" method="POST">
    <div id="form">
        <div id="tg1"><br/><br/>Email :<br/><input type="email" name="email"/><br/></div>
        <div id="tg1">Password :<br/><input type="password" name="password"/><br/></div><br/>
        <input type="submit" value="Submit" id="btn">
    </div>
    </div>
    </form>
</body>
</html>