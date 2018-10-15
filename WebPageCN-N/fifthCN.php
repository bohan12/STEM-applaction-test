<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="../CSS/cssquestione.css" media="screen" rel="stylesheet" type="text/css"/>
		<div class="header">
		</div>
		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="start.php">
            			<button type="submit" formaction = "startCN.php" class="buttontitle" >起始页</button>
			</form>
		</div>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		<title>Page 5</title>
	</head>
	<script>
		var creative = 0;
		var convergent = 0;
		function SetCreative()
		{
			++creative;
			SetCookies();
		}
		function SetConvergent()
		{
			++convergent;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "creative= " + creative;
			document.cookie = "convergent= " + convergent;	
		}
	</script>
	<body>	
		<h2>移动鼠标在左侧或右侧来看更多信息</h2>
		<div class="container">
			<div class="leftCard">
				<div class="leftCardFront">
					<h1>创意问题解决者</h1>
					<img src = "../images/question5/creative.jpg" width = "300px" height = "300px">
					<div class="content">
					<p>你是否是个问题解决者， 试试看</p>
					</div>
				</div>
				<div class="leftCardBack">
					<h1>信息</h1>
					<p>后面</p>
					<p>* List to help user define themselves</p>
					<p>* List to help user define themselves</p>
					<p>* List to help user define themselves<br /></p></p>
					<form action="resultsCN.php" onSubmit="JavaScript:SetCreative()">
            					<button type="submit" formaction = "resultCN.php" class="buttontitle" >下一页 ►</button>
					</form>
				</div>
			</div>
			<div class="rightCard">
				<div class="rightCardFront">
					<h1>全能的问题解决者</h1>
					<img src = "../images/question5/convergent.jpeg" width = "300px" height = "300px">
					<div class="content">
					<p>你是否是个全能问题解决者， 试试看</p>
					</div>
				</div>
				<div class="rightCardBack">
					<h1>信息</h1>
					<p>后面</p>
					<p>* List to help user define themselves</p>
					<p>* List to help user define themselves</p>
					<p>* List to help user define themselves<br /></p>
					<form action="resultsCN.php" onSubmit="JavaScript:SetConvergent()">
            					<button type="submit" formaction = "resultCN.php" class="buttontitle" >下一页 ►</button>
					</form>
				</div>
			</div>
		</div>		
	</body>
</html>
