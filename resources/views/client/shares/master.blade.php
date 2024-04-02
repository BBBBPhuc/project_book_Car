<!DOCTYPE html>
<html>
<head>
@include('client.shares.css')
</head>

<body>

<div class="page-wrapper">

 	<!-- Main Header -->
    @include('client.shares.header')
    <!-- End Main Header -->

	<!-- Sidebar Cart Item -->
	@include('client.shares.sliderBar')
	<!-- END sidebar widget item -->

	<!-- Main Section -->
    @yield('noi_dung')

    @include('client.shares.footer')
</div>
<!-- Search Popup -->
<div class="search-popup">
	<div class="color-layer"></div>
	<button class="close-search"><span class="fa fa-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Search Popup -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

@include('client.shares.js')
@yield('js')
</body>
</html>
