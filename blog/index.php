<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<title>Blogs</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		header{
			width: 100%;
			height: auto;
			background: green;
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
			outline: none;
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
		.btn:hover{
			background: orange;
		}
		.btn:active{
			background: red;
		}
		.newsbox{
			display: flex;
			flex-direction: column;
			height: auto;
			min-height: 200px;
			width: 100%;
			border: 0px solid red;
		}
		.article-info{
			display: flex;
			flex-direction: column;
			height: auto;
			width: 100%;
			border: 0px solid blue;
		}
		.main_article{
			margin: 0 3rem;
			/*flex-wrap: wrap;
			display: flex;
			flex-direction: column;
			border: 0px solid green;
			height: auto;
			min-height: 200px;
			width: 100%;*/
		}
		.article_img{
			float: left;
			margin: 1rem;
			/*padding-left: 10px;*/
			/*height: 300px;
			width: 400px;
			border: 2px solid red;*/
		}
		.main_article .article_img img{
			height: 400px;
			width: 600px;
			margin-top: 20px;
			float: left;
		}
		.written_article{
			/*display: flex;
			flex-direction: column;
			height: auto;
			width: 100%;
			padding-left: 5px;
			margin-top: 10px;
			margin-bottom: 10px;*/
			padding: 2rem; 
			text-align: justify;
			font-size: 25px;
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
		.go-to-top{
			width: 100%;
			height: 20px;
			background: green;
			color: red;
			outline: none;
			border: 0px solid red;
			cursor: pointer;
			font-weight: bolder;
		}
		.go-to-top:hover{
			background: transparent;
		}
		.go-to-top:active{
			background-color: red;
		}
	</style>

<!-- ================= TITLE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'title.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('title').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= SUBTITLE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'subTitle.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('subTitle').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= POST TIME ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'postTime.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('postTime').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= POST DATE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'postDate.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('postDate').innerHTML = data;
				}
			});
		});
	</script><!-- ================= CONTENT ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'content.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('content').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= CATEGORY ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'category.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('category').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= CAPTION ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'caption.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('caption').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= AUTHOR ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'author.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('author').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= IMG ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'img.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('img').innerHTML = data;
				}
			});
		});
	</script>

	
 		<!-- rediected from main index -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'img.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('img').src = "http://localhost/subham/website/"+data;
				}
			});
		});
	</script>

</head>
<body>
	<header>
		<div class="top1">
			<div>
				<img src="http://localhost/subham/website/logo.png" width="40px;">
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


	<!-- main content starts from here -->

	<div class="newsbox">
		<div class="article-info">
			<h1 id="title">TITLE</h1>
			<h2 id="subTitle">Sub-Title</h2>
			<h3 id="category">Category:</h3>
			<h3 id="author">Author:</h3>
			<h3 id="postDate">Date:</h3>
			<h3 id="postTime">Time:</h3>
			<hr>
		</div>
		<div class="main_article">
			<div class="article_img">
				<img src="./fifa.jpg" id="img" height="auto">
				<div id="caption" style="font-size: 20px; color: blue;"></div>
			</div>
			<p class="written_article" id="content"></p>
			
		</div>
		
	</div>

	<center>
		<div><a href="#">Back to top</a></div>
	</center>
	


	<!-- footer starts from here -->
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
	<center><button class="go-to-top"><a href="#">Go to top</a></button></center>
</footer>
</body>
</html>