<?php

$res="100%";
file_put_contents("1.txt",trim(chunk_split(base64_encode(file_get_contents("{$_GET['a']}")),1," ")));
file_put_contents("1.jpg",base64_decode(file_get_contents("1.txt")));
/**************************************************************************/
file_put_contents("2.txt",trim(chunk_split(base64_encode(file_get_contents("{$_GET['b']}")),1," ")));
file_put_contents("2.jpg",base64_decode(file_get_contents("2.txt")));



?>
<!doctype html>
<html>
		<head>
			<title>test</title>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<style>
			html {
				padding:0;
				margin:0;
				width:1920px;
				font-family: 'Poiret One', cursive;
				background:darkorange;
				overflow:hidden;
			}
			#wrapper {
				width:1600px;
				height:933px;
				background:grey;
				margin:0 auto;
				color:#d3d3d3;
			}
			img {
				width:650px;
				height:451px;
			}
			#img_1 {
				position:relative;
				top:0;
				left:0;
				width:650px;
				height:451px;
			}
			#img_2 {
				position:relative;
				left:950px;
				top:-551px;
				width:650px;
				height:451px;
			}
			#result {
				font-size:85px;
				position:relative;
				top:-300px;
				left:687px;
				width:225px;
				height:auto;
			}
			.input {
				position:relative;
				top:-350px;
				left:651px;
				padding:0;
				margin:0;
			}
			input[name=a] {
				width:294px;
				height:35px;
			}
			input[name=b] {
				width:294px;
				height:35px;
			}
			input[value=LEGO] {
				width:298px;
				height:35px;
			}
		</style>
		</head>
	<body>
		<script>
		</script>
		<div id="wrapper">
			<div id="img_1">
				<img src="1.jpg">
			</div>
			<div id="result"><?php echo $res; ?></div>
			<div id="img_2">
				<img src="2.jpg">
			</div>
			<form class="input "action="" method="get">
				<input type="text" name="a" placeholder="link to first image"><br>
				<input type="text" name="b" placeholder="link to second image"><br>
				<input type="submit" value="LEGO">
			</form>
		</div>
	</body>
</html>