<!DOCTYPE html>
<html lang="en">
<head>

@include('theme.head')
</head>

<body id="body">

<!-- Header Start -->
@include('theme.header')
<!-- Slider Start -->

@include('theme.slider')

<!-- Wrapper Start -->
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="block">
					<div class="section-title">
						<h2>About Us</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
							blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
						ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
						nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
						anim id </p>
				</div>
			</div><!-- .col-md-7 close -->
			<div class="col-md-5">
				<div class="block">
					<img src="theme/images/wrapper-img.png" alt="Img">
				</div>
			</div><!-- .col-md-5 close -->
		</div>
	</div>
</section>

<section class="feature bg-2">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6">
        <h2 class="section-subtitle">WE BELIEVE IN GREAT IDEAS</h2>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <a href="portfolio.html" class="btn btn-view-works">View Works</a>
      </div>
    </div>
  </div>
</section>


<section class="call-to-action bg-1 section-sm overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="mb-3">We design delightful digital experiences.</h2>
					<p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve
						achieved for other clients, and meet our highly experienced Team who just love to design.</p>
					<a class="btn btn-main btn-solid-border" href="contact.html">Tell Us Your Story</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- footer Start -->
@include('theme.footer')
<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
	<span class="icon ion-ios-arrow-up"></span>
</div>

    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    @include('theme.script')
    </body>

    </html>
