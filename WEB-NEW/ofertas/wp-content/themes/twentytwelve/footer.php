<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<center>
				<h2><span>Hoy es:</span><br>
<script type="text/javascript">
var d = new Date();
document.write(d.getDate(),' ',' / '+d.getMonth(),' / '+d.getFullYear(),' '+d.getHours(),':'+d.getMinutes());
</script>
				</h2>
				<strong><p>Diseñado por <a href="http://disain.co/">DisainCo</a> y <a href="mailto:computacionejecutiva@hotmail.com" target="_blank">Computación Ejecutiva</a></p></strong>
			</center>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>