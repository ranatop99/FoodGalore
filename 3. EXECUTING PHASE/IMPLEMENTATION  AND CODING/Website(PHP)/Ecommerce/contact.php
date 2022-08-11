<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>

<body class="animsition">

	<!-- Header -->
	<?php 
include ("partials/header.php");
?>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92"
		style="background-image: url('https://images.pexels.com/photos/821754/pexels-photo-821754.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
		<h2 class="ltext-105 cl0 txt-center text-dark">
			Contact Us
		</h2>
	</section>


	<!-- Content page -->
	<section class="bg0 p-t-50 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="contact.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email"
								placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg"
								placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer"
							type="submit">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								FoodGalore Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	if (isset($_POST['submit']))
	
	{
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$sql = "INSERT INTO AMANSHRESTHA.CONTACT(EMAIL,MESSAGE) VALUES ('$email' , '$msg')";
		$result = oci_parse($conn,$sql);
		oci_execute($result);
	}
	
	?>

	<!-- Map -->
	<div class="map text-center">
		<h2 class="ltext-105 cl0 txt-center text-dark p-b-20">
			VISIT US
		</h2>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39965.5692027015!2d85.34737869689657!3d27.7021341591304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1625726492373!5m2!1sen!2snp"
			width="1080" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	</div>



	<!-- Footer -->
	<?php 
include ("partials/footer.php");
?>
</body>

</html>