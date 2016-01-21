@extends('home.base')

@section('title', '联系我们')

@section('content')
	<div class="banner-in">
		<div class="container">
			<!-- <h6>HOME / <span>SERVICES</span></h6> -->
		</div>
	</div>
	 <div class="container">
		<div class="contact">
		<h3>CONTACT FORM</h3>
		<form>
				<div class="contact-grid">
					<div class="col-md-6 contact-us">
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
					</div>
					<div class="col-md-6 contact-us">
						<input type="text" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="contact-grid">
					<div class="col-md-6 contact-us">
						<input type="text" value="URL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'URL';}">
					</div>
					<div class="col-md-6 contact-us">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				<div class="send ">
					<input type="submit" value="SEND" >
				</div>
			</form>
			</div>
		</div>
@endsection