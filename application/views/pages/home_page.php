<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico') ?>" type="image/x-icon">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/home.css')  ?>">
</head>

<body>
	<header>
		<?php include 'nav.php'; ?>
	</header>

	<!-- hero section -->
	<section class="hero_section px-50">
		<div class="mt-4 text-center">
			<h1 class="home_heading f_bold theme_text">Best Car Relocation <br> in India</h1>
		</div>
		<div class="col-12 align-self-end">
			<form action="" class="header_form pb-3">
				<div class="col-12 text-center mt-3 border-bottom">
					<h3 class="text-white fw-bolder">Get a Quote</h3>
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="name" class="d-none">Name</label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="email" class="d-none">E-mail</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your E-mail">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="mobile" class="d-none">Mobile</label>
					<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Contact Number">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="car" class="d-none">Car Type</label>
					<input type="text" name="car" id="car" class="form-control" placeholder="Enter Car Type">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="origin" class="d-none">Origin</label>
					<input type="text" name="origin" id="origin" class="form-control" placeholder="Enter Origin">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="destination" class="d-none">Destination</label>
					<input type="text" name="destination" id="destination" class="form-control" placeholder="Enter Destination">
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3">
					<label for="desc" class="d-none">Description</label>
					<textarea name="desc" id="desc" rows="1" class="form-control" placeholder="Enter Description"></textarea>
				</div>
				<div class="px-lg-3 px-1 mt-3 col-12 col-md-6 col-lg-3 text-center">
					<button type="submit" class="theme_btn rounded-pill w-100">Submit</button>
				</div>
			</form>
		</div>
	</section>
	<main>
		<!-- how we work -->
		<article class="d-flex flex-column align-items-center py-50 px-50">
			<h2 class="text-center col-sm-6 theme_heading mb-3">How we work at <span class="theme_text">Relocate My Car.</span></h2>
			<div class="text-center col-sm-8 theme_sub_heading">We’re a professional local moving company created to move more than just your boxes. We’ll move you with our hard work and genuine smiles.</div>
			<div class="steps">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3>Step 1</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos possimus saepe obcaecati et repudiandae tenetur.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3>Step 2</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsa illum est facilis, necessitatibus laboriosam!</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3>Step 3</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamu sequi architecto quis voluptas aperiam maxime.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="step_img">
						<img src="<?php echo base_url('image/maintenance.png') ?>" alt="img">
					</div>
					<h3>Step 4</h3>
					<p class="step_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam minima maiores sunt.</p>
				</div>
			</div>
		</article>

		<!-- intro -->
		<article style="background-color: #f6f6f6;">
			<div class="d-flex flex-column align-items-center py-50 px-50">
				<h2 class="text-center col-sm-6 theme_heading mb-3">Why Choose <span class="theme_text">Relocate My Car.</span></h2>
				<div class="text-center col-sm-8 theme_sub_heading">We’re a professional local moving company created to move more than just your boxes. We’ll move you with our hard work and genuine smiles.</div>
				<p class="mt-5 article_first_letter">
					At Car relocation, we take pride in our dedication to excellence and commitment to customer satisfaction. With years of experience in the industry, we've perfected the art of transporting vehicles safely and efficiently, whether it's across town or across the nation.
					From the moment you choose us, you'll experience our personalized approach to car relocation. Our team of professionals will work closely with you to understand your specific needs and tailor our services accordingly. Whether you're a seasoned car enthusiast, a busy professional, or a family embarking on a new adventure, we've got you covered.
					<br><br>
					<span class="ms-5"></span>With state-of-the-art equipment and a meticulous attention to detail, we ensure that your vehicle arrives at its destination in the same pristine condition as when it left. From luxury cars to classic collectibles, we handle each vehicle with the utmost care and professionalism.
					But our commitment doesn't stop there. We strive to provide transparent communication every step of the way, keeping you informed and reassured throughout the entire relocation process. With [Company Name], you can trust that your vehicle is in capable hands.
					So why stress over the logistics of car relocation when you can leave it to the experts? Let [Company Name] take the wheel and turn your relocation journey into a seamless experience. Contact us today to learn more about our services and embark on your next adventure with confidence!
				</p>
			</div>
		</article>

		<!-- rate chart -->
		<article class="d-flex flex-column align-items-center py-50 px-50">
			<h2 class="theme_heading text-center col-sm-6 mb-3">Get Moving: Check Out Our <span class="theme_text">Rates</span></h2>
			<div class="text-center col-sm-8 theme_sub_heading">Discover the perfect fit for your budget! Our Transportation Rates section lays out all the details you need to know about moving your car hassle-free.</div>

			<div class="col-12 mt-5 table-responsive">
				<table class="table table-striped table-hover shadow">
					<thead>
						<tr class="table-primary">
							<td><b>Distance</b></td>
							<td><b>Type of vehicle</b></td>
							<td><b>Mode of transportation</b></td>
							<td><b>Estimated car transportation charges</b></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p style="font-weight: 400">Up to 400 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 3,000 - Rs. 5,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">Up to 400 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 5,000 - Rs. 9,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">Up to 400 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 7,000 - Rs. 12,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">Up to 400 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 15,000 - Rs. 20,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">800-1,300 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 5,000 - Rs. 9,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">800-1,300 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 9,000 - Rs. 15,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">800-1,300 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 12,000 - Rs. 17,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">800-1,300 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 20,000 - Rs. 25,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">1,300-1,900 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 9,000 - Rs. 15,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">1,300-1,900 km</p>
							</td>
							<td>
								<p style="font-weight: 400">Hatchback/sedan</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 15,000 - Rs. 20,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">1,300-1,900 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Open carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 17,000 - Rs. 23,000</p>
							</td>
						</tr>
						<tr>
							<td>
								<p style="font-weight: 400">1,300-1,900 km</p>
							</td>
							<td>
								<p style="font-weight: 400">SUV/luxury car</p>
							</td>
							<td>
								<p style="font-weight: 400">Enclosed carrier</p>
							</td>
							<td>
								<p style="font-weight: 400">Rs. 25,000 - Rs. 30,000</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</article>
		<hr>
		<!-- services -->
		<article>
			<div class="d-flex flex-column align-items-center py-50 px-50">
				<h2 class="theme_heading text-center theme_text col-sm-6 mb-3">Ours Services</h2>
				<div class="text-center col-sm-8 theme_sub_heading">We’re a professional local moving company created to move more than just your boxes. We’ll move you with our hard work and genuine smiles.</div>
				<div class="services">
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="service_card">
							<img src="<?php echo base_url('image/car-oil.png') ?>" alt="service image" class="service_img">
							<div class="service_desc">
								<h4>Service Heading</h4>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum ducimus qui dignissimos quos officia esse hic quidem, facere quae repudiandae ex totam mollitia, dolorem animi labore autem, dicta nihil officiis dolorum laboriosam. Magnam veritatis nulla quia perspiciatis enim mollitia provident in quos obcaecati, vitae deleniti accusantium natus ducimus, possimus odit?</p>
								<button type="button" class="more_btn border-0 align-self-start">Learn More</button>
							</div>
						</div>
					</div>
				</div>
			</div>

		</article>

		<!-- faq -->
		<section class="d-flex flex-column align-items-center py-50 px-50"  style="background-color: #f1f7fd;">
			<h2 class="text-center theme_heading mb-3"><span class="theme_text">F</span>requently <span class="theme_text">A</span>sked <span class="theme_text">Q</span>uestions</h2>
			<div class="text-center col-sm-8 theme_sub_heading">Discover the perfect fit for your budget! Our Transportation Rates section lays out all the details you need to know about moving your car hassle-free.</div>

			<div>
				<div class="faq_card">
					<div class="questions"><p>Why would I need car relocation services?</p></div>
					<div class="ans">
						There are several reasons why you might need to relocate a car:
						<ul>
							<li>1. Moving to a new city or state.</li>
							<li>2. Purchasing a car from a distant seller.</li>
							<li>3. Transporting a classic or luxury vehicle safely.</li>
							<li>4. Shipping a car for a temporary stay, such as a vacation or a seasonal residence.</li>
						</ul>
					</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>What is car relocation?</p></div>
					<div class="ans">Car relocation typically involves hiring a professional auto transport company. Once you provide details about your car and desired destination, the company will give you a quote and schedule a pickup. They'll transport your car using either an open or enclosed trailer, depending on your preference and budget.</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>How long does car relocation take?</p></div>
					<div class="ans">The time it takes to relocate a car depends on several factors, including the distance, the transport company's schedule, and any unforeseen delays like weather or road conditions. Generally, it can take anywhere from a few days to a couple of weeks for domestic shipments. International shipments may take longer due to customs clearance and other logistical factors.</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>Is my car insured during relocation?</p></div>
					<div class="ans">Most reputable auto transport companies provide insurance coverage for the vehicles they transport. However, it's essential to clarify the extent of coverage with the company before shipping your car and consider purchasing additional insurance if necessary.</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>How should I prepare my car for relocation?</p></div>
					<div class="ans">Here are some essential steps to prepare your car for relocation:
						<ul>
							<li>1. Wash your car and document any existing damage with photographs.</li>
							<li>2. Remove personal belongings and valuables from the car.</li>
							<li>3. Ensure that your car has no more than a quarter tank of gas.</li>
							<li>4. Disable the car alarm system if it's active.</li>
							<li>5. Check for any fluid leaks and address them if necessary.</li>
							<li>6. Retract or remove any custom attachments like spoilers or antennas.</li>
						</ul>
					</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>How much does car relocation cost?</p></div>
					<div class="ans">The cost of car relocation varies depending on factors such as the distance, the type of vehicle, the transport method (open or enclosed trailer), and the time of year. You can request quotes from multiple auto transport companies to compare prices and services.
					</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>Can I track my car during relocation?</p></div>
					<div class="ans">Many auto transport companies offer tracking services that allow you to monitor the progress of your car shipment online or via mobile app. This provides peace of mind and allows you to stay informed about your car's whereabouts throughout the relocation process.</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>Can I ship multiple cars at once?</p></div>
					<div class="ans">Yes, most auto transport companies can accommodate shipping multiple cars at once, either on the same trailer or on separate trailers depending on your needs and the company's capabilities. However, shipping multiple cars together may affect the overall cost and delivery timeline.</div>
				</div>
				<div class="faq_card">
					<div class="questions"><p>What should I do if there are issues with my car upon delivery?</p></div>
					<div class="ans">Upon delivery, carefully inspect your car for any new damage or discrepancies compared to the documentation you provided before shipment. If you notice any issues, document them thoroughly and report them to the auto transport company immediately. They should work with you to resolve any concerns and, if necessary, initiate an insurance claim for damages incurred during transit.</div>
				</div>
			</div>
		</section>

		<div class="col-12 border-bottom"></div>
		<!-- locations -->
		<section class="d-flex flex-column align-items-center py-50 px-50">
			<h2 class="theme_heading text-center col-sm-6 mb-3">Where We <span class="theme_text">Transport</span> Vehicles</h2>
			<div class="text-center col-sm-8 col-12 theme_sub_heading">We transport vehicles nationwide, covering major cities, specialized routes, and remote areas for comprehensive relocation.</div>
			<div class="d-flex flex-wrap mt-5">
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Mumbai</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Delhi</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Kolkata</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Chennai</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Bangalore</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Hyderabad</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Ahmedabad</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Pune</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Surat</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Jaipur</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Lucknow</a>
				</div>
				<div class="location col-lg-3 col-md-6 col-12">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
						<path fill="#0d6f8b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
					</svg>
					<a href="<?php echo base_url('pages/location') ?>">packers and movers Kanpur</a>
				</div>
			</div>
		</section>
		<!-- blog -->
        <section class="blog py-50 px-50">
            <h2 class="theme_heading text-center">Check out our latest <span class="theme_text">blog</span>!</h2>
            <div class="d-flex flex-wrap row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="py-5 px-md-2 px-lg-3">
                    <a href="<?php echo base_url('blog/get-your-car-relocated');?>" class="blog_card">
                        <div class="blog_thumbnail mb-3">
                            <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        </div>
                        <small class="theme_text ps-3">Location</small>
                        <p class="blog_heading ps-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                        <div class="author_info">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                <p class="ms-1">Blog Writer</p>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                <p class="ms-1">01/Jan/2000</p>
                            </span>
                        </div>
                        <button type="button" class="more_btn">Read More</button>
                    </a>
                </div>
                <div class="py-5 px-md-2 px-lg-3">
                    <a href="<?php echo base_url('blog/get-your-car-relocated');?>" class="blog_card">
                        <div class="blog_thumbnail mb-3">
                            <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        </div>
                        <small class="theme_text ps-3">Location</small>
                        <p class="blog_heading ps-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                        <div class="author_info">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                <p class="ms-1">Blog Writer</p>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                <p class="ms-1">01/Jan/2000</p>
                            </span>
                        </div>
                        <button type="button" class="more_btn">Read More</button>
                    </a>
                </div>
                <div class="py-5 px-md-2 px-lg-3">
                    <a href="<?php echo base_url('blog/get-your-car-relocated');?>" class="blog_card">
                        <div class="blog_thumbnail mb-3">
                            <img src="<?php echo base_url('image/blog.png') ?>" alt="blog_thumbnail" >
                        </div>
                        <small class="theme_text ps-3">Location</small>
                        <p class="blog_heading ps-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed.</p>
                        <div class="author_info">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                <p class="ms-1">Blog Writer</p>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21" width="12" viewBox="0 0 448 512"><path fill="#4f6173" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                <p class="ms-1">01/Jan/2000</p>
                            </span>
                        </div>
                        <button type="button" class="more_btn">Read More</button>
                    </a>
                </div>
            </div>
        </section>
	</main>
	<?php include 'footer.php'; ?>
	<script>
		const ques = document.querySelectorAll(".questions");
		ques.forEach(e => {
			e.addEventListener('click', () => {
				ques.forEach(e2 => {
					if (e2 !== e) {
						e2.classList.remove('open');
						e2.nextElementSibling.style.height = 0 + 'px';
					}
				});
				if (e.classList[1] !== 'open') {
					e.nextElementSibling.style.height = e.nextElementSibling.scrollHeight + 20 + 'px';
				} else {
					e.nextElementSibling.style.height = 0 + 'px';
				}
				e.classList.toggle('open');
			})
		})
	</script>
</body>

</html>