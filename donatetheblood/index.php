<?php

//include header file
include('include/header.php');

?>


<div style="background-color: blanchedalmond;padding-bottom:100px" class="container-fluid header ">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate blood, save life</h1>
				<p class="text-center">Donate blood to help the others.</p>
			</div>


			<h1 class="text-center">Search Donors</h1>
			<hr class="red-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<option value="Pune">Pune</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Delhi">Delhi</option>
					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div style="padding-top: 50px;" class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio aspernatur explicabo, quisquam tenetur natus numquam ipsam placeat consequatur, quod molestias sequi dicta dolore doloribus corporis, consequuntur cumque tempora. Fugit.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div style="background-color: blanchedalmond;" class="container ">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vision</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Our Blood Center will be recognized for saving and improving lives in our community with safe and reliable blood within least possible time.
					We will continually excel in blood safety and availability.
					We continuously look for ways to provide our services more efficiently and effectively.
					We care about the well-being of everyone affected by our actions which help us to maintain quality of our work. </p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We will increase our active donor base and collection levels.
					We will manage our resources effectively and responsibly.
					We will provide outstanding service to our donors, our peers and the hospitals and patients in our region.
					We will make the work process better through employee-centered continuous improvement teams.
					We will encourage young generation to contribute this precious elexir to society.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood.
					To motivate and train the next generation youth leaders to ensure sustainability of the mission of Voluntary Blood Donation. We will provide outstanding service to our donors, our peers and the hospitals and patients in our region.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>