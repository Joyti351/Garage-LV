<!doctype html>
<html>
@include('user.head')
<body>
<!-- Header -->
@include('user.header')
<!--_______________________________________ Carousel__________________________________ -->
@yield('content')
<!-- ____________________Featured Section ______________________________-->
@include('user.featured')
<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
		<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
		<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>
<!-- ________________________Latest Cars Image Thumbnail________________-->
	@include('user.latest')
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="{{asset('garage/image/collectionlogo1.png')}}" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
			<li role="presentation"><a href="#/">CATEGORIES</a></li>
			<li role="presentation"><a href="#/">PREORDERS</a></li>
			<li role="presentation"><a href="#/">CONTACT US</a></li>
			<li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
		</ul>
		<p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
			eiusmod tempor incididunt </p>
		 <img src="{{asset('garage/image/line.png')}}" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a>
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="{{asset('garage/source/bootstrap-3.3.6-dist/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('garage/source/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('garage/source/js/myscript.js')}}"></script>
<script type="text/javascript" src="{{asset('garage/source/bootstrap-3.3.6-dist/js/jquery.1.11.js')}}"></script>
<script type="text/javascript" src="{{asset('garage/source/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>
</body>
</html>
