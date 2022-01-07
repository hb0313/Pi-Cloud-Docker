<html>
	<head>
		<title>Online Compiler for Off-Campus Students</title>
			<meta name="keywords" content="BITS,OffCampus" />
			<link rel="stylesheet" type="text/css" href="../styles/style.css" />		
		
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/compile.js"></script>
			<script type="text/javascript" src="../js/tab.js"></script>
			<script type="text/javascript" src="../js/jquery.form.js"></script>
			<script type="text/javascript">
				$(document).ready(function() { 
					$('#form2').ajaxForm(function(msg) { 
						$('#output2').html(msg); 
					}); 
				});
			</script>
	</head>

	<body>
	<div id="whole">
		<div id="header">
			
		</div>
		<div id="content">
			<p id="logout">Click <a href="../logout.php">Here</a> to logout!!</p>
			<table class="code">
				<td class="code">	
				<form action="compile.php" method="post" id="form">
					Select Language of Interest:
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							<option value="python2.7">Python</option>
							<option value="python3.2">Python3</option>
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>
					<textarea name="code" rows=15 cols=160 onkeydown=insertTab(this,event) id="code"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=160 id="input"></textarea><br/><br/>
					<input type="submit" value="Submit" id="submit">
					<input type="reset" value="Reset"><br/>
				</form>
				</td>
				<!--<td class="code">
				<p>
				For Multiple file implementation of C code, upload your tar.gz or zip or rar file that contains your makefile.</p>
				<form action="compile.php" method="post" enctype="multipart/form-data" id="form2"> -->
			<tr>
			<td class="code"><strong>Output:</strong>
			<span id="output"></span><br/></td>
			<!--<td class="code"><strong>Output:</strong>
			<span id="output2"></span><br/></td>
			</tr>-->
		</div>
		<table>
		<div id="bottom">
			
		</div>
		</table>
	</div>
	
	</body>
</html>
