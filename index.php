<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		/* header{
			width: 100%;
			height: auto;
			background: green;
		} */
		.main{
			width: 100%;
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
		}
		.main input{
			width: 70%;
			height: 20px;
			font-size: 20px;
		}
		.top1{
			width: 100%;
			height: 60px;
			display: flex;
			flex-direction: row;
			outline: none;
			background: #FEFFA9;
			color: black;
			justify-content: center;
			align-items: center;
		}
		.top1 h2{
			padding: 10px;
			text-transform: uppercase;
			letter-spacing: 1.5px;
			font-family: 'Pacifico', cursive;
		}
		.menu1{
			width: 100%;
			height: 35px;
			display: flex;
			flex-direction: row;
			align-items: left;	
		}
		.menu1 button{
			padding: 0.7rem;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
  			border: none;
			width: 25%;
			background-color: green;
			color: white;
			font-size: 15px;
			outline: none;
			font-weight: bolder;
		}
		.menu1 button:hover{
			transition: 1s ease;
			text-transform: uppercase;
			width: 27%;
		}
		.main button{
			padding: 0.7rem;
			border: none;
			width: 100px;
			background: transparent;
			color: white;
			font-weight: bolder;
		}
		.content{
			border: 0px solid red;
			text-align: center;
		}
		.row1{
			display: grid;
			border: 1px solid red;
			column-gap: 10px;
			grid-template-columns: repeat(3, 1fr);
		}/*
		.row1:hover{
			scale: 1.5;
		}*/
		.img img{
			width: 100%;
			margin: 10px 10px;
			margin-right: 10px;
		}
		.content .row1 .img:hover{
			scale: 1.1;
			transition: 1s ease;
			margin-left: 10px;
		}
		.btn:hover{
			background: orange;
		}
		.btn:active{
			background: red;
		}

		.footer-content{
			display: flex;
			flex-direction: row;
			border: 0px solid red;
			width: 100%;
			height: auto;
			background: #755590;
			color: white;
		}
		.sub-footer{
			display: flex;
			flex-direction: column;
			border: 0px solid red;
			width: 33.33%;
			height: 300px;
			color: white;
			padding-left: 10px;
		}
		.footer-content .sub-footer h2{
			color: black;
			font-size: 30px;
			color: white;
		}
		.footer-content .sub-footer p{
			font-weight: bolder;
			margin-top: 10px;
			padding-right: 5px;
			padding-left: 5px;
			color: white;
		}
		.input-box{
			display: flex;
			align-items: center;
			height: 40px;
			width: 80%;
			margin-top: 20px;
			border-radius: 10px;
			border: 2px solid red;
		}
		.footbtn{
			padding: 0.7rem;
			border: none;
			width: 100px;
			background: green;
			border-radius: 15px;
			margin-top: 10px;
			color: white;
			font-weight: bolder;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type: 'GET',
				url: 'getData.php',
				success: function(data){
					document.getElementById("photu").innerHTML += data;
				}
			});
		});
	</script>

	<script type="text/javascript">
		function blogFun(e){
			var a = e.id;
			location.href = "http://localhost/subham/website/blog/?p="+a;
		}
	</script>

</head>
<body>
	<header>
		<div class="top1">
			<div>
				<img src="logo.png" width="40px;">
			</div>
			<h2>Ghotala News</h2>
		</div>
		<div class="main">
			<button class="btn" onclick="">Home</button>
			<input type="text" name="search" placeholder="Search Here" autocomplete="off" style="padding: 8px;">
			<button class="btn">Login</button>
			<button class="btn">Registration</button>
		</div>
		<div class="menu1">
			<button class="btn">Politics</button>
			<button class="btn">Sports</button>
			<button class="btn">National</button>
			<button class="btn">Local</button>
		</div>
	</header>

	<div class="content">
		<div class="row1" id="photu">
			</div>
		</div>
	</div>


<footer>
	<div class="footer-content">
		<div class="sub-footer">
			<center><h2>About us</h2></center>
			<p>lorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hj lorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu h lorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu hlorem ojiuds iuhf kjdfnk ouhd uh duhi udfhiu dsy hoih iuhF IUGASF uhuh eiouh edu h</p>
		</div>
		<div class="sub-footer">
			<center><h2>Contact us</h2></center>
			<a href="">dstg</a>
			<a href="">dfgh</a>
			<a href="">hdfhd</a>
			<a href="">fhdfsh</a>
			<a href="">hfd</a>
		</div>
		<div class="sub-footer">
			<center>
				<h2>Be one of the member</h2>
				<input type="text" name="subs-email" placeholder="Enter your email" class="input-box">
				<button class="footbtn">Subscribe</button>
			</center>
		</div>
	</div>
</footer>
</body>
</html>
