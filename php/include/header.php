<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CarNex</title>
  <link rel="shortcut icon" href="../images/favicon.ico" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/common.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/jquery-1.12.4.min.js"></script>
	<script src="../scrollout-splitting/splitting.js"></script>
  <script src="../scrollout-splitting/scroll-out.min.js"></script>
  <script src="../js/common.js"></script>
</head>
<body>
	<header>
		<a href="../index.php" class="hd-logo"><img src="../images/top-logo.png" alt="메인로고"></a>
		<a id="trigger" href="#">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<ul class="top-menu">
			<li><a href="#"><p>로그인</p><i class="bi bi-person-check-fill"></i></a></li>
			<li><a href="#"><p>회원가입</p><i class="bi bi-person-plus-fill"></i></a></li>
		</ul>

		<nav>
			<div id="menu" class="menu">
				<div class="search-wrap">
					<div class="search-box">
						<input type="search" name="keyword" placeholder="Search..." class="inputform">
						<button><i class="bi bi-mic-fill"></i></button>
					</div>
					<button class="top-btn"><i class="bi bi-search"></i></button>
				</div>
				
				<ul class="menu-list">
					<li>
						<a href="#">About Us</a>
						<ul class="sub-menu">
							<li><a href="../aboutus.php">C o m p a n y</a></li>
							<li><a href="../campaign.php">C a m p a i g n</a></li>
							<li><a href="#">C E O</a></li>
						</ul>
					</li>
					<li>
						<a href="#">How To Deal</a>
						<ul class="sub-menu">
							<li><a href="../deal.php">R e g i s t e r &nbsp;&nbsp;C a r</a></li>
							<li><a href="#">F o r &nbsp;&nbsp;S a l e</a></li>
						</ul>
					</li>
					<li>
						<a href="#">How To Pay</a>
						<ul class="sub-menu">
							<li><a href="../pay.php">C a r d</a></li>
							<li><a href="#">C a s h</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Model</a>
						<ul class="sub-menu">
							<li><a href="../model.php">M o d e l</a></li>
							<li><a href="#">D o m e s t i c</a></li>
							<li><a href="#">I m p o r t e d</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>