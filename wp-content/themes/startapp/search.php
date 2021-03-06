<?php get_header(); ?>

	<div class="page-title title-size-normal text-dark">
		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						搜索结果
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
		          		<span property="name">搜索结果</span>
		          	</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container padding-bottom-3x">
		<div class="row">
			<div class="col-md-9 col-sm-8">
                <?php while(have_posts()): the_post(); ?>
				<!-- Tile -->
				<article class="post-tile">
					<div class="post-body">
						<header class="post-header">
							<!--<div class="column">
								<a class="post-date" href="#">October 11, 2016</a>by
								<a href="#">8guild</a>&nbsp;in
								<a href="#">Investment</a>
							</div>-->

                            <!--<div class="column">
								<a class="post-comments" href="#">3&nbsp;<i class="material-icons chat_bubble"></i></a>
							</div>-->
						</header>

						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>

						<p class="post-excerpt">
							<?php the_excerpt(); ?>
						</p>

						<footer class="post-footer">
							<div class="tags-links">
                                <?php the_tags(); ?>
							</div>
						</footer>
					</div>
					<a class="post-thumb" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
				</article><!-- Tile END -->
                <?php endwhile; ?>

			</div>

			<div class="col-md-3 col-sm-4">
				<div class="padding-top-2x visible-sm visible-xs"></div>

				<aside class="sidebar" role="complementary">
					<section class="widget widget_search">
						<form action="<?=site_url()?>" autocomplete="off" class="search-box">
							<input name="s" placeholder="搜索" type="text" value="">
							<button type="submit"><i class="material-icons search"></i></button>
						</form>
					</section>

					<section class="widget widget_startapp_recent_posts">
						<h2 class="widget-title">
							最近
						</h2>
                        <?php foreach (get_posts(array('category_name' => 'news')) as $post): ?>
						<div class="post-item">
							<a class="post-item-thumb" href="<?=get_the_permalink($post->ID)?>"><?=get_the_post_thumbnail($post->ID, 'small')?></a>
							<div class="post-item-info">
                                <!--<span class="post-item-date">October 11</span>-->
								<h3 class="post-item-title">
									<a href="<?=get_the_permalink($post->ID)?>" rel="bookmark"><?=get_the_title($post->ID)?></a>
								</h3>
							</div>
						</div>
                        <?php endforeach; ?>
					</section>

                    <!-- Widget Start -->
                    <section class="widget widget_categories">
                        <h2 class="widget-title">
                            文章分类
                        </h2>
                        <ul>
                            <?php wp_list_categories(array('title_li' => null, 'exclude' => array(get_category_by_slug('uncategorized')->term_id,get_category_by_slug('home-banner')->term_id))); ?>
                        </ul>
                    </section><!-- Widget END -->

                </aside>
			</div>
		</div>
	</div>

<?php get_footer(); ?>