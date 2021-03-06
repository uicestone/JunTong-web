		<!-- Main Footer -->
		<footer class="site-footer footer-dark" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-footer.jpg);">
			<div class="footer-row">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_startapp_site_info">
								<a href="index.html">
									<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/logo-light.png"></a>

								<p>
                                    上海君桐股权投资管理有限公司（简称“君桐资本”）于2015年5月成立，是一家专注于电子信息等高新技术产业（以半导体集成电路领域为主）的私募股权投资服务机构。
                                </p>
							</section><!-- Widget END -->
						</div>

						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_nav_menu">
								<h3 class="widget-title">
									快速链接
								</h3>

								<div class="menu-footer-menu-1-container">
									<ul class="menu">
										<li class="menu-item">
											<a href="http://www.amac.org.cn/" target="_blank">中国基金业协会</a>
										</li>

                                        <li class="menu-item">
                                            <a href="http://gs.amac.org.cn/amac-infodisc/res/pof/manager/101000031277.html" target="_blank">中基协公示信息</a>
                                        </li>

                                        <li class="menu-item">
											<a href="http://www.csrc.gov.cn/pub/newsite/" target="_blank">中国证监会</a>
										</li>

										<li class="menu-item">
											<a href="http://www.cbrc.gov.cn/chinese/newIndex.html" target="_blank">中国银保监会</a>
										</li>
									</ul>
								</div>
							</section><!-- Widget END -->
						</div>

						<div class="clearfix visible-sm"></div>

						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_startapp_recent_posts">
								<h3 class="widget-title">
									最近文章
								</h3>

                                <?php foreach (get_posts(array('category_name' => 'news', 'posts_per_page' => 2)) as $recent_post): ?>
								<div class="post-item">
									<a class="post-item-thumb" href="<?=get_the_permalink($recent_post->ID)?>">
										<?=get_the_post_thumbnail($recent_post->ID, 'small')?>
									</a>

									<div class="post-item-info">
										<span class="post-item-date"><?=get_the_date('Y-m-d', $recent_post->ID)?></span>
										<h3 class="post-item-title">
											<a href="<?=get_the_permalink($recent_post->ID)?>" rel="bookmark"><?=get_the_title($recent_post->ID)?></a>
										</h3>
									</div>
								</div>
                                <?php endforeach; ?>

							</section><!-- Widget END -->
						</div>

						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_startapp_contacts">
								<h3 class="widget-title">
									建立联络
								</h3>

								<div class="contact-item">
									<div class="contact-icon">
										<i class="material-icons location_on"></i>
									</div>

									<div class="contact-info">
										<span>上海市浦东新区</span><span>春晓路439号3号楼3楼</span>
									</div>
								</div>

								<div class="contact-item">
									<div class="contact-icon">
										<i class="material-icons smartphone"></i>
									</div>

									<div class="contact-info">
										<span><a href="tel:021-68635068">021-68635068</a></span>
									</div>
								</div>

								<div class="contact-item">
									<div class="contact-icon">
										<i class="socicon-mail"></i>
									</div>

									<div class="contact-info">
										<span><a href="mailto:info@juntong-capital.com">info@juntong-capital.com</a></span>
									</div>
								</div>
							</section><!-- Widget Start -->
						</div>
					</div>
				</div>
			</div>

			<div class="footer-row second-row">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<section class="widget widget_startapp_subscribe">
								<h3 class="widget-title">
									关注微信公众号
								</h3>
                                <p class="widget-description">
                                </p>

                                <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
                                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/qrcode.jpg" width="100px">
                                </div>
							</section>
						</div>

						<div class="col-sm-9">
							<section class="widget">
								<h3 class="widget-title" style="margin-bottom:8px">
									合作机构
								</h3>

                                <!--<p class="widget-description" style="height:2px;"></p>-->

								<div class="widget-inner business-partners" style="height:110px;"><?=get_page_by_path('business-partners')->post_content?></div>
							</section>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright bg-primary text-light">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p class="copyright-text">
								君桐资本 2018 版权所有
                                <a href="https://beian.miit.gov.cn/#/Integrated/recordQuery">沪ICP备15029885号-1</a>
							</p>
						</div>

						<div class="col-sm-6 text-right"></div>
					</div>
				</div>
			</div>
		</footer><!-- Main Footer END -->
	</main>

	<a class="scroll-to-top-btn" href="#"><i class="material-icons keyboard_arrow_up"></i></a>
	<div class="site-backdrop"></div>
	<?php wp_footer(); ?>
</body>
</html>
