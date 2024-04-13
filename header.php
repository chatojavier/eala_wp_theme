<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EALA
 */
  
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header w-full bg-blue h-16 lg:h-32">
		<div class="max-w-8xl mx-auto py-6 px-7.5 text-white flex justify-between relative">
			<div class="site-header_left">
				<?php
				$logo1x = get_field('logo_header_1x', 'option');
				$logo2x = get_field('logo_header_2x', 'option');
				?>
				<div class="container-logo">
					<a class="" href="<?php echo home_url(); ?>"><img class="logo h-10 lg:h-20 w-auto block" src="<?php echo $logo1x; ?>" srcset="<?php echo $logo2x; ?>" alt="EALA Logo"></a>
				</div>
			</div><!-- .site-branding -->
			<div class="site-header_right flex justify-end">
				<?php
				if(have_rows('phone_numbers', 'option')) :
					while(have_rows('phone_numbers', 'option')) : the_row();
					$wpIcon = get_sub_field('whatsapp_icon');
					$wpNumber = get_sub_field('whatsapp_number');
					?>
					<div class="site-header_phones text-lg">
						<a href="https://wa.me/<?php echo $wpNumber; ?>" target="_blank">
							<i class="<?php echo $wpIcon; ?> text-5xl align-middle mr-2"></i>
						</a>
						<?php
						if(have_rows('phone')) :
							while(have_rows('phone')) : the_row();
							$number = get_sub_field('number');
							?>
							<a href="tel:<?php echo $number; ?>" target="_blank">
								<?php echo $number; ?>
							</a>
							<span> | </span>
							<?php endwhile; ?>
							<span class="font-bold">
								Asesoría Gratuita
							</span>
						<?php endif; ?>
					</div>

					<?php endwhile;
				endif; ?>

				<?php
				if(have_rows('social_media', 'option')) : ?>
				<div class="site-header_social-icons flex text-5xl space-x-4 ml-15">
					<?php 
					while(have_rows('social_media', 'option')) : the_row();
					$icon = get_sub_field('icon');
					$name = get_sub_field('name');
					$url  = get_sub_field('url');
					?>
					<div class="site-header_social-icons_icon">
						<a href="<?php echo $url; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo $name; ?>">
							<i class="<?php echo $icon; ?>"></i>
						</a>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				<!-- <div class="site-header_menu-burger text-5xl ml-15">
					<i class="fas fa-bars"></i>
				</div> -->
				<div class="menu-btn ml-15">
					<div class="menu-btn__burger"></div>
				</div>
				<?php if(have_rows('menu', 'option')) : ?>
				<nav class="nav">
					<div class="nav__btn w-26 h-32 bg-red float-right"></div>
					<ul class="menu-nav clear-right divide-y divide-black divide-opacity-20 shadow-xl">
						
					<?php while(have_rows('menu', 'option')) : the_row();
						
						// Case: Item Grande layout.
						if( get_row_layout() == 'grande' ) :
							$icon 		= get_sub_field('icono');
							$title 		= get_sub_field('texto')['titulo'];
							$subtitle 	= get_sub_field('texto')['subtitulo'];
							$link 		= get_sub_field('link');
							?>
							<li class="menu-nav__item px-8 py-5 hover:bg-red-dark">
								<a href="<?php echo $link; ?>" class="flex items-center">
									<i class="<?php echo $icon; ?> text-6xl mr-8"></i>
									<div>
										<div class="text-7xl font-black uppercase">
											<?php echo $title; ?>
										</div>
										<div class="menu_subtitle text-2xl">
											<?php echo $subtitle; ?>
										</div>
									</div>
								</a>
							</li>
						<?php elseif( get_row_layout() == 'pequeno' ) :
							$title 			= get_sub_field('titulo');
							$complement 	= get_sub_field('complemento');
							$link 			= get_sub_field('link');
							?>
							<li class="menu_small menu-nav__item px-8 py-5 hover:bg-red-dark">
								<a href="<?php echo $link; ?>" class="text-4xl font-black">
								<?php echo $title; ?> <span class="font-medium ml-2"><?php echo $complement; ?></span>
								</a>
							</li>
						<?php endif;
					endwhile; ?>

					</ul>
				</nav>
				<?php endif;?>
			</div>
		</div>
	</header><!-- #masthead -->
