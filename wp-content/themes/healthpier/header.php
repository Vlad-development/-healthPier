<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthpier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/media.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="mobMenu">
        <button type="button" class="btn mobMenu__close">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.09668 21.2397L21.012 6.87441" stroke="#009A93" stroke-width="2"/>
            <path d="M21.5566 20.8574L7.1913 6.94207" stroke="#009A93" stroke-width="2"/>
            </svg>
        </button>

        <?php wp_nav_menu( array(
            'theme_location'  => '',
            'menu'            => 'Menu 1',
            'container'       => false,
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'mobMenu__list',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
        ) ); ?>

        <a href="tel:<?php the_field('telefon'); ?>" class="mobMenu__tel"><?php the_field('telefon'); ?></a>
        <div class="mobMenu__adress">
        <?php the_field('adress'); ?>
        </div>
    </div>


	<header class="header">
        <div class="container">
            <div class="navigation">
                <div class="navigation__logo">
                    <?php the_custom_logo();?>
                </div>

                <div class="navigation__block">
                    <?php wp_nav_menu( array(
                        'theme_location'  => '',
                        'menu'            => 'Menu 1',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'navigation__menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) ); ?>
                    

                    <a href="tel:<?php the_field('telefon'); ?>" class="btn btn-mob openModal">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.7098 21.7043C26.7992 20.9383 25.7593 20.3004 24.8487 19.662C22.8976 18.2581 21.0771 18.2581 19.6465 20.428C18.8659 21.7043 17.6954 21.7043 16.5255 21.194C13.2738 19.6626 10.6727 17.4927 9.11216 14.174C8.46159 12.7702 8.46159 11.3663 10.0227 10.3451C10.8033 9.83484 11.7133 9.19639 11.5833 7.92008C11.4533 6.38864 7.68163 1.15585 6.12109 0.644969C5.47052 0.389828 4.82055 0.389828 4.16997 0.644969C0.658321 1.7937 -0.902211 4.72902 0.528327 8.04765C4.68995 18.2581 12.2332 25.2781 22.3776 29.6172C23.0276 29.8724 23.6781 29.8724 23.9381 30C26.2792 30 29.0103 27.8301 29.7909 25.6608C30.5715 23.6184 29.0103 22.7254 27.7098 21.7043Z" fill="#235189"/>
                            <path d="M16.2643 1.53876C17.453 1.72297 18.5306 1.97334 19.5244 2.28273C19.6927 2.33519 19.8689 2.38228 20.0317 2.43832C20.09 2.45859 20.1428 2.48303 20.2005 2.50389C21.2532 2.88064 22.1966 3.33608 23.0264 3.88809C25.9445 5.82848 27.5294 8.90985 28.0986 13.5364C28.0986 14.3018 27.8386 15.323 28.8791 15.323C28.8791 15.323 28.8791 15.323 28.8797 15.323C29.9203 15.323 29.6603 14.3018 29.6603 13.664C29.7332 9.71522 27.79 5.96857 24.8025 3.40046C23.0142 1.86365 20.8517 0.751283 18.524 0.268421C18.2591 0.213578 17.9925 0.164099 17.724 0.125351C17.2854 0.0627581 16.8419 0.0228177 16.3949 0.00731846C16.3305 0.0234138 16.2558 0.0293751 16.1744 0.0293751C15.9763 0.0299712 15.7449 -0.00281567 15.5244 0.000761086C15.0961 0.000164961 14.7068 0.109852 14.7043 0.767378C14.7043 0.769166 14.7037 0.770955 14.7031 0.773339C14.7037 1.53876 15.6143 1.41119 16.2643 1.53876Z" fill="#235189"/>
                            <path d="M17.566 3.70799C16.916 3.58042 15.8755 3.19711 15.7455 4.21828C15.6155 5.23944 16.6554 5.11187 17.306 5.23944C21.9876 6.2606 23.5482 7.91962 24.3287 12.387C24.4587 13.0248 24.1987 14.046 25.3693 13.9184C26.2792 13.7909 25.8893 12.8973 26.0192 12.387C26.0192 8.04778 22.2476 4.21887 17.566 3.70799Z" fill="#235189"/>
                            <path d="M17.9553 7.28091C17.4347 7.28091 16.9147 7.28091 16.7847 7.7912C16.5247 8.55722 17.1753 8.68479 17.6953 8.81236C19.6458 9.0681 20.6864 10.0887 20.8164 12.0034C20.9464 12.5143 21.207 12.897 21.7269 12.897C22.5075 12.7694 22.5075 12.131 22.5075 11.6207C22.5075 9.4514 20.1664 7.15394 17.9553 7.28091Z" fill="#235189"/>
                        </svg>
                    </a>

                    <button type="button" class="btn btn-mob openMenu">
                        <svg width="37.000000" height="26.000000" viewBox="0 0 37 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector 5" d="M1 1L36 1" stroke="#235189" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linecap="round"/>
                            <path id="Vector 7" d="M1 13L36 13" stroke="#235189" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linecap="round"/>
                            <path id="Vector 6" d="M1 25L36 25" stroke="#235189" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linecap="round"/>
                        </svg>

                    </button>

                    <button type="button" class="navigation__btn btn-main openModal">
						Заказать звонок

						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
							<g clip-path="url(#clip0_3485_35)">
							  <path d="M27.7098 22.4487C26.7992 21.6826 25.7593 21.0448 24.8487 20.4063C22.8976 19.0025 21.0771 19.0025 19.6465 21.1724C18.8659 22.4487 17.6954 22.4487 16.5255 21.9384C13.2738 20.4069 10.6727 18.237 9.11216 14.9184C8.46159 13.5145 8.46159 12.1107 10.0227 11.0895C10.8033 10.5792 11.7133 9.94077 11.5833 8.66447C11.4533 7.13302 7.68163 1.90023 6.12109 1.38935C5.47052 1.13421 4.82055 1.13421 4.16997 1.38935C0.658321 2.53809 -0.902211 5.47341 0.528327 8.79204C4.68995 19.0025 12.2332 26.0224 22.3776 30.3616C23.0276 30.6168 23.6781 30.6168 23.9381 30.7443C26.2792 30.7443 29.0103 28.5745 29.7909 26.4052C30.5715 24.3628 29.0103 23.4698 27.7098 22.4487Z" fill="white"/>
							  <path d="M16.2643 2.28315C17.453 2.46735 18.5306 2.71772 19.5244 3.02711C19.6927 3.07957 19.8689 3.12667 20.0317 3.1827C20.09 3.20297 20.1428 3.22741 20.2005 3.24828C21.2532 3.62503 22.1966 4.08047 23.0264 4.63248C25.9445 6.57287 27.5294 9.65424 28.0986 14.2808C28.0986 15.0462 27.8386 16.0674 28.8791 16.0674C28.8791 16.0674 28.8791 16.0674 28.8797 16.0674C29.9203 16.0674 29.6603 15.0462 29.6603 14.4083C29.7332 10.4596 27.79 6.71296 24.8025 4.14485C23.0142 2.60804 20.8517 1.49567 18.524 1.01281C18.2591 0.957963 17.9925 0.908484 17.724 0.869736C17.2854 0.807143 16.8419 0.767202 16.3949 0.751703C16.3305 0.767799 16.2558 0.77376 16.1744 0.77376C15.9763 0.774356 15.7449 0.741569 15.5244 0.745146C15.0961 0.74455 14.7068 0.854237 14.7043 1.51176C14.7043 1.51355 14.7037 1.51534 14.7031 1.51772C14.7037 2.28315 15.6143 2.15558 16.2643 2.28315Z" fill="white"/>
							  <path d="M17.566 4.45238C16.916 4.32481 15.8755 3.9415 15.7455 4.96266C15.6155 5.98382 16.6554 5.85625 17.306 5.98382C21.9876 7.00499 23.5482 8.664 24.3287 13.1314C24.4587 13.7692 24.1987 14.7904 25.3693 14.6628C26.2792 14.5352 25.8893 13.6416 26.0192 13.1314C26.0192 8.79217 22.2476 4.96326 17.566 4.45238Z" fill="white"/>
							  <path d="M17.9553 8.0253C17.4347 8.0253 16.9147 8.0253 16.7847 8.53558C16.5247 9.3016 17.1753 9.42917 17.6953 9.55674C19.6458 9.81248 20.6864 10.833 20.8164 12.7478C20.9464 13.2587 21.207 13.6414 21.7269 13.6414C22.5075 13.5138 22.5075 12.8754 22.5075 12.3651C22.5075 10.1958 20.1664 7.89832 17.9553 8.0253Z" fill="white"/>
							</g>
							<defs>
							  <clipPath id="clip0_3485_35">
								<rect width="30" height="30" fill="white" transform="translate(0 0.744385)"/>
							  </clipPath>
							</defs>
						  </svg>
					</button>
                </div>


            </div>

        </div>
    </header>

