<?php theme_include('header.php'); ?>

<header>
	<figure class="logo">
		<svg x="0px" y="0px" width="64px" height="64px" viewBox="0 0 25 25">
		<path ill-rule="evenodd" clip-rule="evenodd" fill="#3A4145" stroke="none" d="M23.965,11.622l0.004,4.392L22.26,15.3
	C20.483,19.251,16.635,22,12,22c-4.635,0-8.482-2.749-10.259-6.7l-1.709,0.714l0.004-4.392c-0.072-0.267,0.087-0.541,0.354-0.612
	l4.654,1.962l-1.646,1.329c1.324,3.052,4.161,5.248,7.603,5.614V7.858C9.278,7.413,8,5.862,8,4c0-2.209,1.791-4,4-4
	c2.209,0,4,1.791,4,4c0,1.862-1.277,3.413-3,3.858v12.057c3.444-0.367,6.264-2.572,7.579-5.633l-1.623-1.311l4.656-1.962
	C23.877,11.081,24.036,11.355,23.965,11.622z M14,4c0-1.104-0.896-2-2-2c-1.104,0-2,0.896-2,2s0.896,2,2,2C13.104,6,14,5.104,14,4z"/>
		</svg>
	</figure>
	<h1><?php echo site_name(); ?></h1>
	<p><?php echo site_description(); ?></p>

	<nav>
		<?php while(menu_items()): ?>
		<a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a>
		<?php endwhile; ?>
	</nav>
</header>

<?php echo $body; ?>

<?php theme_include('footer.php'); ?>