@extends('layouts.principal')
	@section('content')
	<div class="menu">
				<ul>
					<li><a href="/"><i class="home"></i></a></li>
					<li><a href="reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a class="active" href="contact"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="/"><img src="images/logo.png" alt="" /></a>
					<p>JJNotify</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTO</h3>
		 <p>ESTAMOS PARA AYUDARTE SIEMPRE</p>
		 <div class="contact-form">
			 <form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="Name" required/>
					  <input type="text" placeholder="E-mail" required/>
					  <input type="text" placeholder="Phone" required/>
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="Message"></textarea>
					 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
</div>
	@endsection	