<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <meta name="description" content="Best car relocation company in India">
    <link rel="shortcut icon" href="<?php echo base_url('image/favicon.ico')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-grid.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-utilities.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/location.css')  ?>">
</head>
<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <section class="banner">
            <div class="text-container">
                <h1>Best Car Relocation in Mumbai</h1>
                <p>Simplify car relocation with us! Trust our dedicated team for safe, efficient transport. Say goodbye to stress, hello to peace of mind!</p>
            </div>
            <form class="p-2">
                <div class="col-10 col-lg-4 p-2">
                    <label for="origin" class="form-label d-none">Origin</label>
                    <input type="text" name="origin" id="origin" class="form-control" placeholder="Enter Origin">
                </div>
                <div class="col-10 col-lg-4 p-2">
                    <label for="destination" class="form-label d-none">Destination</label>
                    <input type="text" name="destination" id="destination" class="form-control" placeholder="Enter Destination">
                </div>
                <div class="col-10 col-lg-4 p-2">
                    <label for="date" class="form-label d-none">Date</label>
                    <input type="date" name="date" id="date" class="form-control" placeholder="Enter Model">
                </div>
                <div class="col-10 col-lg-4 p-2">
                    <label for="name" class="form-label d-none">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="col-10 col-lg-4 p-2">
                    <label for="mobile" class="form-label d-none">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile">
                </div>
                <div class="col-10 col-lg-4 p-2">
                    <button class="theme_btn w-100 rounded-2 border border-2">Submit</button>
                </div>
            </form>
        </section>

        <article class="py-50 container">
            <h3 class="text-center fw-bold">Your Seamless Car Transport Solutions</h3>
            <p class="text_justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto vel soluta eveniet quis quam sunt itaque similique quo quos. Et totam error corporis quaerat ipsa sed, aliquam assumenda ut quas autem neque porro omnis est architecto? Blanditiis voluptates exercitationem voluptatem facere id. Magnam distinctio saepe ab molestiae accusantium praesentium ipsum quis sit enim corrupti, nulla officia nesciunt mollitia at. Explicabo reiciendis iusto eum reprehenderit at, enim quas? Recusandae voluptates rem sapiente laboriosam ipsam? Officia autem amet odit iusto. Deleniti vero quod sit. Eos ad tempora perspiciatis voluptatum officiis, quidem maxime, quae enim saepe cupiditate quis, doloribus libero vero suscipit doloremque.</p>
        </article>

        <article class="review py-50 px-4 d-flex flex-wrap">
            <h3 class="text-center fw-bold col-12 mb-5">Some words from our happy customers!</h3>
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="d-flex px-3">
                    <div class="col-3 review_img">A</div>
                    <div class="col-9 ps-3 fs-4">Alpha</div>
                </div>
                <p class="p-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit assumenda corrupti debitis minus ex doloribus sed provident? Quas excepturi illum laborum,"</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="d-flex px-3">
                    <div class="col-3 review_img">B</div>
                    <div class="col-9 ps-3 fs-4">Beta</div>
                </div>
                <p class="p-2 review_txt">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ab nulla quae quam officia esse, quisquam sequi necessitatibus quidem elige"</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="d-flex px-3">
                    <div class="col-3 review_img">C</div>
                    <div class="col-9 ps-3 fs-4">Charli</div>
                </div>
                <p class="p-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga accusantium ducimus, nobis expedita quae dignissimos. Sint voluptatum quos aspernatur tenetur"</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="d-flex px-3">
                    <div class="col-3 review_img">D</div>
                    <div class="col-9 ps-3 fs-4">Delta</div>
                </div>
                <p class="p-2 review_txt">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore commodi suscipit impedit! Consequatur rerum architecto ipsam culpa voluptatem nemo qui a"</p>
            </div>
        </article>
        <section class="container py-50 border-top">
            <h3 class="fw-bold">Car Relocation Services Near You</h3>
            <p class="ps-2 mt-3">Relocation at your Locality</p>
            <div class="d-flex flex-wrap ps-2">
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Bandra</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Bhandup</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Borivali</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Chembur</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Colaba</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Dadar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Dahisar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Ghatkopar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Jogeshwari</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kalwa</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kanjurmarg</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon East</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali East</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kurla</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Lower Parel</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Juhu</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Vile Parle</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Virar West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Malad East</div>
            </div>

            <p class="ps-2 mt-5">Relocation at other Cities</p>
            <div class="d-flex flex-wrap ps-2">
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Bandra</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Bhandup</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Borivali</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Chembur</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Colaba</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Dadar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Dahisar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Ghatkopar</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Jogeshwari</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kalwa</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kanjurmarg</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon East</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Goregaon West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali East</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kandivali West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Kurla</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Lower Parel</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Juhu</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Vile Parle</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Virar West</div>
                <div class="col-lg-3 col-md-6 col-12 location">Packers And Movers In Malad East</div>
            </div>
        </section>
        
        <!-- faq -->
		<section class="container d-flex flex-column align-items-center py-50">
			<h2 class="text-center theme_text col-sm-6">Frequently Asked Questions</h2>
			<div class="text-center col-sm-8">Discover the perfect fit for your budget! Our Transportation Rates section lays out all the details you need to know about moving your car hassle-free.</div>

			<div>
				<div class="faq_card">
					<div class="questions">Why would I need car relocation services?</div>
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
					<div class="questions">What is car relocation?</div>
					<div class="ans">Car relocation typically involves hiring a professional auto transport company. Once you provide details about your car and desired destination, the company will give you a quote and schedule a pickup. They'll transport your car using either an open or enclosed trailer, depending on your preference and budget.</div>
				</div>
				<div class="faq_card">
					<div class="questions">How long does car relocation take?</div>
					<div class="ans">The time it takes to relocate a car depends on several factors, including the distance, the transport company's schedule, and any unforeseen delays like weather or road conditions. Generally, it can take anywhere from a few days to a couple of weeks for domestic shipments. International shipments may take longer due to customs clearance and other logistical factors.</div>
				</div>
				<div class="faq_card">
					<div class="questions">Is my car insured during relocation?</div>
					<div class="ans">Most reputable auto transport companies provide insurance coverage for the vehicles they transport. However, it's essential to clarify the extent of coverage with the company before shipping your car and consider purchasing additional insurance if necessary.</div>
				</div>
				<div class="faq_card">
					<div class="questions">How should I prepare my car for relocation?</div>
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
					<div class="questions">How much does car relocation cost?

					</div>
					<div class="ans">The cost of car relocation varies depending on factors such as the distance, the type of vehicle, the transport method (open or enclosed trailer), and the time of year. You can request quotes from multiple auto transport companies to compare prices and services.
					</div>
				</div>
				<div class="faq_card">
					<div class="questions">Can I track my car during relocation?</div>
					<div class="ans">Many auto transport companies offer tracking services that allow you to monitor the progress of your car shipment online or via mobile app. This provides peace of mind and allows you to stay informed about your car's whereabouts throughout the relocation process.</div>
				</div>
				<div class="faq_card">
					<div class="questions">Can I ship multiple cars at once?</div>
					<div class="ans">Yes, most auto transport companies can accommodate shipping multiple cars at once, either on the same trailer or on separate trailers depending on your needs and the company's capabilities. However, shipping multiple cars together may affect the overall cost and delivery timeline.</div>
				</div>
				<div class="faq_card">
					<div class="questions">What should I do if there are issues with my car upon delivery?</div>
					<div class="ans">Upon delivery, carefully inspect your car for any new damage or discrepancies compared to the documentation you provided before shipment. If you notice any issues, document them thoroughly and report them to the auto transport company immediately. They should work with you to resolve any concerns and, if necessary, initiate an insurance claim for damages incurred during transit.</div>
				</div>
			</div>
		</section>
    </main>
    <footer class="text-center theme_bg">all copyright reserved @2024</footer>
    <script>
        const ques = document.querySelectorAll(".questions");
        ques.forEach( e => {
            e.addEventListener('click', () =>{
                if(e.classList[1] !== 'open'){
                    e.nextElementSibling.style.height = e.nextElementSibling.scrollHeight+25 +'px';
                }else{
                    e.nextElementSibling.style.height = 0 +'px';
                }
                e.classList.toggle('open');
                e.nextElementSibling.classList.toggle('open');
            })
        })
    </script>
</body>
</html>