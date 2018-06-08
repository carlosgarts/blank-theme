			<!-- footer -->
			<footer class="footer" role="contentinfo">
                <div class="footer-grid">
                    <div class="footer-column">
                        <div class="footer-title">ABOUT US</div>
                        <div>Logo</div>
                        <div class="footer-p">This teme is specialized in flexible magazine WordPress theme for modern online magazines, dynamic news websites, professional blogs and other editorial websites from any content genre.</div>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">RECENT POSTS</div>
                        <div>
                            This teme is specialized in flexible magazine WordPress theme for modern online magazines, dynamic news websites, professional blogs and other editorial websites from any content genre.
                        </div>
                        <div class="footer-title">SEARCH POST...</div>
                        <?php get_template_part('searchform'); ?>
                    </div>
                    <div class="footer-column">
                        <div class="footer-title">OUR TEAM</div>
                        <!--Team tags-->
                        <div class="team-tag">
                            <div class="tt-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/member.jpg" alt="Logo">
                            </div>
                            <div class="tt-info">
                                <a class="tt-name">Name Second</a>
                                <div class="tt-detail">my position</div>
                            </div>
                        </div>
                    </div>
                </div>

                
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Designed by', 'html5blank'); ?> <a href="https://ve.linkedin.com/in/carlos-fernando-gamez-pi%C3%B1a-4b87a8161?trk=prof-samename-name" title="HTML5 Blank">Carlos Gamez</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
