@extends('tamplate')

@section('title_tamplate')
<title>Contact</title>
@endsection

@section('body_tamplate')

<!--================Contact Area =================-->
<section class="contact_area">
	<div class="container">
		<!--Google map-->
		<div id="map-container-google-3" class="z-depth-1-half map-container-3">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.946954619355!2d105.25608971476537!3d-5.425030496065447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da49085b072b%3A0xded2229dc6987030!2sBestnet%20Computer!5e0!3m2!1sid!2sid!4v1685716225031!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6>Bandar Lampung, Indonesia</h6>
						<p>Teluk Betung Barat</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">+62 8979636864</a></h6>
						<p>Senin - Sabtu 08:30 - 17:00</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">sabdaadjie@gmail.com</a></h6>
						<p>Tanyakan Produk Kapan pun!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9 section_gap_bottom">
				<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" value="submit" class="primary-btn">Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->
@endsection