<?php
	/* Loading of SEO scripts, tags etc.. */

add_action('genesis_before', 'add_rvsolar_tag_manager');
function add_rvsolar_tag_manager() {
	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2CC295" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php
}
