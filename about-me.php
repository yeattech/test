<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Jonathan">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Gundam Nation">
	<link rel="stylesheet" href="style/style.css" />
	<script src="script/main.js" defer></script>
	<script src="script/script.js"></script>
	<title>Gundam Nation | About Me</title>
</head>

<body>
	<div class="scrollTop" onclick="scrollToTop();">Back To Top</div>
	<?php include 'header.php'; ?>

	<div class="container-about">
		<h1>About Me</h1>
	</div>

	<div class="container-1-1">
		<div class="container-1-2">
			<div>
				<h2 class="Who_am_i">Who am I ?</h2>
			</div>
			<div>
				<img class="mepic" src="image/mepic.jpg" alt="me-pic">
			</div>

			<div class="description">
				<h3>Name: <strong>Jonathan Tang Zuo Sheng</strong></h3>
				<h4>Student ID: 101233823</h4>
			</div>

			<div class="description">
				<p>Hi! I'm Jonathan Tang Zuo Sheng. A 19-year-old teen from Malaysia. Currently, I'm taking <span>Bachelor of Computer Science</span> at Swinburne University of Technology Sarawak Campus.</p>
			</div>


			<table id="about-me-table">
				<tr class="about-me-table0">
					<th><strong>Information</strong></th>
					<th><strong>Description</strong></th>
				</tr>
				<tr>
					<td class="about-me-table2">My Name</td>
					<td class="about-me-table1">Jonathan Tang Zuo Sheng</td>
				</tr>
				<tr>
					<td class="about-me-table1">My Age</td>
					<td class="about-me-table2">19</td>
				</tr>
				<tr>
					<td class="about-me-table2">Date of birth</td>
					<td class="about-me-table1">January,14,2002</td>
				</tr>
				<tr>
					<td class="about-me-table1">Student number</td>
					<td class="about-me-table2">101233823</td>
				</tr>
				<tr>
					<td class="about-me-table2">Country</td>
					<td class="about-me-table1">Malaysia</td>
				</tr>
				<tr>
					<td class="about-me-table1">City</td>
					<td class="about-me-table2">Sibu,Sarawak</td>
				</tr>
				<tr>
					<td class="about-me-table2">My Hometown</td>
					<td class="about-me-table1">I'm from one of the foodie heaven of Malaysia, Sibu. At Sibu, we have tons of delicious food such as Kompia and Kampua. We also have the Sibu Central Market, which is the largest and most interesting market in Sarawak. It's like a combination of a wet market and a native Lembangan market.</td>
				</tr>
				<tr>
					<td class="about-me-table1">My Hobby</td>
					<td class="about-me-table2">
						<ul>
							<li>Doing exercise workouts</li>
							<li>Listening to nusic</li>
							<li>Playing video game</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<?php include 'footer.php'; ?>