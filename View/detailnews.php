<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:11:30 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


	<script>
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400' ] }
		};
		( function ( d ) {
			var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore( wf, s );
		} )( document );
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
<?php
        $tt=new tintuc;
		$new = $tt->gettintuc($_GET['id_new'])->fetch();
		$news = $tt->getAlltintuc();
        ?>


		<main class="main">	
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<article class="post single">
							

							<div class="post-body">
								<div class="post-date">
									<span class="day">22</span>
									<span class="month">Jun</span>
								</div><!-- End .post-date -->

								<h2 class="post-title"><?php echo $new['name_new']?></h2>

								<div class="post-meta">
									<a href="#" class="hash-scroll">0 Comments</a>
								</div><!-- End .post-meta -->

								<div class="post-content">
								<p><?php echo $new['content_new'];?></p>
								</div><!-- End .post-content -->

								<div class="post-share">
									<h3 class="d-flex align-items-center">
										<i class="fas fa-share"></i>
										Share this post
									</h3>

									<div class="social-icons">
										<a href="#" class="social-icon social-facebook" target="_blank"
											title="Facebook">
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon social-linkedin" target="_blank"
											title="Linkedin">
											<i class="fab fa-linkedin-in"></i>
										</a>
										<a href="#" class="social-icon social-gplus" target="_blank" title="Google +">
											<i class="fab fa-google-plus-g"></i>
										</a>
										<a href="#" class="social-icon social-mail" target="_blank" title="Email">
											<i class="icon-mail-alt"></i>
										</a>
									</div><!-- End .social-icons -->
								</div><!-- End .post-share -->

							
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						<hr class="mt-2 mb-1">

						<div class="related-posts">
							<h4>Related <strong>Posts</strong></h4>

							<div class="owl-carousel owl-theme related-posts-carousel" data-owl-options="{
								'dots': false
							}">
							<?php
							while ($blog = $news->fetch()) {
							?>
								<article class="post">
									<div class="post-media zoom-effect">
									<a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>">
												<img src="assets/images/blog/thoitrang/<?php echo $blog['img_new'] ?>" alt="Post" width="225" height="280">
											</a>
									</div><!-- End .post-media -->

									<div class="post-body">
										<div class="post-date">
											<span class="day">29</span>
											<span class="month">Jun</span>
										</div><!-- End .post-date -->

										<h2 class="post-title">
										<a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>"><?php echo $blog['name_new'] ?></a>
										</h2>

										<div class="post-content">
										<p><?php echo substr($blog['content_new'], 0, 100); ?>...</p>

											<a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>" class="read-more">read more <i
													class="fas fa-angle-right"></i></a>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article>
								<?php } ?>
								
							</div><!-- End .owl-carousel -->
						</div><!-- End .related-posts -->
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-categories">
								<h4 class="widget-title">Blog Categories</h4>

								<ul class="list">
									<li>
										<a href="#">All about clothing</a>

										<ul class="list">
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li><a href="#">Make-up &amp; beauty</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Fashion trends</a></li>
									<li><a href="#">Haircuts &amp; hairstyles</a></li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Recent Posts</h4>

								<ul class="simple-post-list">
									<?php
									$tt = new tintuc;
									$new = $tt->gettintucindex();
									$i=0;
									while ($blog = $new->fetch()) {
										$i++;
										if($i>3){
											break;
										}
										else{
									?>
									
									<li>
										<div class="post-media">
										<a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>">
												<img src="assets/images/blog/thoitrang/<?php echo $blog['img_new'] ?>" alt="Post" width="225" height="280">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
										<a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>"><?php echo $blog['name_new'] ?></a>
											<div class="post-meta">February 26, 2024</div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>

									<?php }} ?>
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">ARTICLES</a>
									<a href="#">CHAT</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->

		
	</div><!-- End .page-wrapper -->

	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	

	



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.min.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'82caebf2dc495f4b',t:'MTcwMTA5Mzg4MS4yMzEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:11:46 GMT -->
</html>