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
	<title>Gundam Nation | Enquiry</title>
</head>

<body>
	<div class="scrollTop" onclick="scrollToTop();">Back To Top</div>
	<?php include 'header.php'; ?>

	<div class="container-1-1">
		<div class="container-1-2">
			<div class="container-enquiry1">
				<h2 class="enquiry-h1"> Enquiry Form </h2>
			</div>
			<form id="enquiry_form" method="post" action="enquiry_process.php" /*enctype="text/plain"*/ novalidate="novalidate">

				<fieldset>
					<legend><strong><span class="enquiry-span"> Personal Information </span></strong></legend>
					<table>
						<tr>
							<td><label class="enquiry-lable">1. First Name: </label></td>
							<td><input type="text" placeholder="Your first name" maxlength="25" name="first_name" id="first_name" required="required" /></td>
						</tr>

						<tr>
							<td><label class="enquiry-lable">2. Last Name: </label></td>
							<td><input type="text" placeholder="Your last name" maxlength="25" name="last_name" id="last_name" required="required" /></td>
						</tr>

						<tr>
							<td><label class="enquiry-lable">3. Email: </label></td>
							<td><input type="text" placeholder="Your email address" name="email" id="email" required="required" /></td>
						</tr>

						<tr>
							<td><label class="enquiry-lable">4. Phone Number: </label></td>
							<td><input type="tel" placeholder="Your phone number" name="phone_number" id="phone_number" required="required" /></td>
						</tr>

					</table>
				</fieldset>

				<fieldset>
					<legend><strong><span class="enquiry-span"> Address </span></strong></legend>
					<table>

						<tr>
							<td><label class="enquiry-lable">1. State:</label></td>
							<td>
								<select name="state" id="state">
									<option value="none" selected="selected"> --- </option>
									<option value="johor">Johor</option>
									<option value="kedah">Kedah</option>
									<option value="kelantan">Kelantan</option>
									<option value="kl">Kuala Lumpur</option>
									<option value="labuan">Labuan</option>
									<option value="malacca">Malacca</option>
									<option value="ns">Negeri Sembilan</option>
									<option value="pahang">Pahang</option>
									<option value="penang">Penang</option>
									<option value="perak">Perak</option>
									<option value="perlis">Perlis</option>
									<option value="putrajaya">Putrajaya</option>
									<option value="sabah">Sabah</option>
									<option value="sarawak">Sarawak</option>
									<option value="selangor">Selangor</option>
									<option value="terengganu">Terengganu</option>
									<option value="other">Other</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label class="enquiry-lable">2. City / town: </label></td>
							<td><input type="text" placeholder="City / town" maxlength="20" required="required" id="city" name="city"></td>
						</tr>

						<tr>
							<td><label class="enquiry-lable"> 3. Street address: </label></td>
							<td><input type="text" placeholder="Street address" maxlength="40" required="required" id="address" name="address"></td>
						</tr>

						<tr>
							<td><label class="enquiry-lable">4. Postcode: </label></td>
							<td><input type="text" name="postcode" placeholder="Your postcode" maxlength="5" required="required" id="postcode"></td>
						</tr>

					</table>
				</fieldset>

				<fieldset>
					<legend><strong><span class="enquiry-span"> Enquiry Information </span></strong></legend>
					<table>

						<tr>
							<td><label for="product" class="enquiry-lable">1. Character & Mechanic: </label></td>
							<td>
								<select name="product" id="product" onchange="change()">
									<option value="Others">Others</option>
									<optgroup label="- UC -">
										<script>
											uclist()
										</script>
									</optgroup>
									<optgroup label="- CE -">
										<script>
											list2()
										</script>
									</optgroup>
									<optgroup label="- AD -">
										<script>
											list3()
										</script>
									</optgroup>
									<optgroup label="- BF -">
										<script>
											list4()
										</script>
									</optgroup>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="item" class="enquiry-lable">2. Subject: </label></td>
							<td><input type="text" id="item" name="item" size="40"></td>
						</tr>

						<tr>
							<td><label for="need-explain" class="enquiry-lable">3. Comment: </label></td>
							<td><textarea name="need-explain" placeholder="Example - Video link, which series, what type of content and name (tv/movie/OVA)" rows="3" cols="33" id="need-explain" required="required"></textarea></td>
						</tr>

					</table>
				</fieldset>

				<fieldset>
					<legend><strong><span class="enquiry-span"> Content / Website Feedback (Optional) </span></strong></legend>
					<table>
						<tr>
							<td><label for="improvement" class="enquiry-lable">1. Please rate your experience using this website (1= bad 5= good): </label></td>
							<td><textarea name="improvement" placeholder="Rating, experience for the website" rows="3" cols="27" id="improvement"></textarea></td>
						</tr>
					</table>
				</fieldset>

				<input type="submit" value="Submit" class="enquiry-btn" />
				<input type="reset" value="Reset Form" class="enquiry-btn" />
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>