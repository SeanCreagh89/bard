	<footer>
		<div id="footer_inner_container">
			<?php if (is_active_sidebar('footer_widget_1')) { dynamic_sidebar('footer_widget_1'); } else { echo '&copy '.date("Y").'All Rights Reserved.'; } ?>
			<?php if (is_active_sidebar('footer_widget_2')) { dynamic_sidebar('footer_widget_2'); } ?>
			<?php if (is_active_sidebar('footer_widget_3')) { dynamic_sidebar('footer_widget_3'); } else { echo 'Theme Developed by <a href="http://aspiredigital.ie/">Aspire Digital</a>.'; } ?>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>