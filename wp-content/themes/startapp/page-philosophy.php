<?php get_header(); ?>

	<div class="page-title title-size-xl text-light bg-parallax" data-parallax-speed="0.4"
		 data-parallax-type="scroll-opacity" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-7.jpg);">
		<span class="overlay" style="background-color: #000000; opacity: 0.35;"></span>

		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						关于我们
					</h1>
				</div>

				<div class="column">
					<div class="breadcrumbs">
			          <span>
			          	<a href="<?=site_url()?>">
			          		<span property="name">首页</span>
			          	</a>
			          </span>

						<i class="material-icons keyboard_arrow_right"></i>

						<span property="itemListElement" typeof="ListItem">
		          		<span property="name">关于我们</span>
		          	</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<article class="page">
		<section class="fw-section padding-top-3x padding-bottom-3x"
				 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/chip.jpg); background-size: 50%; background-position: 80% 50%;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2 class="block-title text-dark text-left">
							君桐资本概况
							<small class="h4">
                                上海君桐股权投资管理有限公司（简称“君桐资本”）于2015年5月成立，是一家专注于电子信息等高新技术产业（以半导体集成电路领域为主）的私募股权投资服务机构。
							</small>
                            <small class="h4">
                                目前已在基金业协会完成私募基金管理人备案，完成逾10个产品的发行及设立，直接管理规模逾10亿元。
                            </small>
						</h2>

						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-10">
								<div class="portfolio-posts masonry-grid col-2 filter-grid"
									 id="portfolio-04395476-grid">
									<div class="gutter-sizer">
									</div>

									<div class="grid-sizer">
									</div>
                                    <?php foreach (get_posts(array('category_name' => '产品', 'posts_per_page' => 4)) as $product): ?>
									<div class="grid-item devices media">
										<article class="portfolio-tile">
											<a class="portfolio-thumb" href="<?=get_the_permalink($product->ID)?>">
                                                <?=get_the_post_thumbnail($product->ID, 'small')?>
                                            </a>
										</article>
									</div>
                                    <?php endforeach; ?>
								</div>
								<a class="btn btn-ghost btn-rounded btn-primary btn-nl btn-block waves-effect waves-light"
								   href="<?=site_url()?>/service/">业务介绍&nbsp;<i class="material-icons trending_flat"></i></a>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section with-overlay bg-parallax padding-top-3x padding-bottom-1x" data-parallax-speed="0.4"
				 data-parallax-type="scroll" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-9.jpg);">
			<span class="overlay" style="opacity: 0.6; background-color: #000000;"></span>

			<div class="container">
				<div class="row">
					<div class="col-sm-6 padding-bottom-2x">
						<h2 class="block-title text-light text-left">
							Across All Stages
							<small class="h4">Fields we use to invest in 2016</small>
						</h2>

						<div class="progress-bars with-units animated">
							<div class="progress progress-light progress-animated" data-current-value="40">
								<div class="progress-bar">
									<span class="value text-light"><i>40</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="progress-bar-label">
									Medical
								</h4>
							</div>

							<div class="progress progress-light progress-animated" data-current-value="10">
								<div class="progress-bar">
									<span class="value text-light"><i>10</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="progress-bar-label">
									Finance
								</h4>
							</div>

							<div class="progress progress-light progress-animated" data-current-value="50">
								<div class="progress-bar">
									<span class="value text-light"><i>50</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="progress-bar-label">
									Technology
								</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-6 padding-bottom-2x">
						<h2 class="block-title text-light text-left">
							Our Mission
							<small class="h4">Most active venture capital firm</small>
						</h2>

						<ul class="list-unordered list-bordered text-lg text-light">
							<li>Growing up on Both Coasts
								<small>Mauris eget orci a justo facilisis varius. Integer id sagittis mi, vel tempus
									turpis. Nam sit amet nisl nec risus scelerisque sollicitudin. Fusce ultrices
									vestibulum ipsum, et euismod turpis vulputate a. Cum sociis natoque penatibus et
									magnis dis parturient montes, nascetur ridiculus mus. Morbi enim lectus, auctor id
									diam quis, dapibus suscipit urna.
								</small>
							</li>

							<li>Thinking Globally
								<small>Mauris eget orci a justo facilisis varius. Integer id sagittis mi, vel tempus
									turpis. Nam sit amet nisl nec risus scelerisque sollicitudin. Fusce ultrices
									vestibulum ipsum.
								</small>
							</li>
						</ul>

						<div class="row">
							<div class="col-sm-3 col-xs-3">
								<img alt="" class="single-image attachment-full size-full"
									 src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-4.png">
							</div>

							<div class="col-sm-3 col-xs-3">
								<img alt="" class="single-image attachment-full size-full"
									 src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-3.png">
							</div>

							<div class="col-sm-3 col-xs-3">
								<img alt="" class="single-image attachment-full size-full"
									 src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-2.png">
							</div>

							<div class="col-sm-3 col-xs-3">
								<img alt="" class="single-image attachment-full size-full"
									 src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-1.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-3x">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<figure class="single-image wp-caption">
							<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-philosophy-1.gif">
							<figcaption class="wp-caption-text">
								Sed at justo finibus ligula condimentum scelerisque a non dui
							</figcaption>
						</figure>
					</div>

					<div class="col-sm-6 mobile-center">
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-top-3x visible-lg visible-md"></div>
								<div class="padding-top-1x visible-sm visible-xs"></div>
							</div>
						</div>

						<div class="text-block">
							<h3>
								Significant Technology
							</h3>

							<p>
								<span class="text-gray">Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est. Morbi enim lectus, auctor id diam quis, dapibus suscipit urna. Aenean sed aliquet lacus. Pellentesque rhoncus massa nec lectus lacinia auctor. Cras aliquet pulvinar nibh eget tincidunt. Curabitur et ipsum a nulla blandit porta id eget est. Pellentesque sit amet laoreet nisl, et dapibus ante.</span>
							</p>
						</div>
						<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Learn
							More</a>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-bottom-3x">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 mobile-center">
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-top-3x visible-lg visible-md">
								</div>

								<div class="padding-top-1x visible-sm">
								</div>

								<div class="padding-top-3x visible-xs">
								</div>
							</div>
						</div>

						<div class="text-block">
							<h3>
								Large Markets, Either Existing
							</h3>

							<p>
								Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est. Morbi enim
								lectus, auctor id diam quis, dapibus suscipit urna. Aenean sed aliquet lacus.
								Pellentesque rhoncus massa nec lectus lacinia auctor. Cras aliquet pulvinar nibh eget
								tincidunt. Curabitur et ipsum a nulla blandit porta id eget est. Pellentesque sit amet
								laoreet nisl, et dapibus ante.
							</p>
						</div>
						<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Learn
							More</a>
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-bottom-2x visible-xs">
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<figure class="single-image wp-caption">
							<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-philosophy-2.jpg">
							<figcaption class="wp-caption-text">
								Sed at justo finibus ligula condimentum scelerisque a non dui
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section with-overlay padding-top-6x padding-bottom-6x"
				 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-10.jpg);">
			<span class="overlay" style="opacity: 0.25; background-color: #000000;"></span>
			<div class="container">
				<div class="text-block">
					<h1 style="text-align: center;">
						<span class="text-light">A Day In The Life</span>
					</h1>

					<p style="text-align: center;">
						<span class="text-light opacity-50">Duis enim neque, scelerisque ullamcorper pretium et, accumsan vel est. Morbi enim lectus, auctor id diam quis, dapibus suscipit urna.</span>
					</p>
				</div>

				<div class="video-popup text-light text-center">
					<a class="video-popup-btn" href="https://www.youtube.com/watch?v=wPbAewRib6M"><i
								class="material-icons play_circle_filled"></i></a>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-3x padding-bottom-3x">
			<div class="container">
				<div class="logo-carousel carousel-navs-ghost carousel-navs-top-outside carousel-dark" data-items-lg="6"
					 data-items-md="5" data-items-sm="3" data-items-xs="1"
					 data-slick='{"dots":false,"arrows":false,"infinite":true,"autoplay":true,"autoplaySpeed":3000}'>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/cloud-six/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-2.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/vedroid/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-1.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/linkedout/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-3.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/hazam/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-4.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/invato/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-5.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/looper/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-6.png">
					</a>
					<a class="logo-item" href="http://startapp.8guild.com/financial/portfolio-item/bishop/">
						<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-logo-phil-7.png">
					</a>
				</div>
			</div>
		</section>
	</article>

<?php get_footer(); ?>