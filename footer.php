<?php
/**
 * The generic footer template.
 *
 * @package    makeblog
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Jake Spurlock <jspurlock@makermedia.com>
 * 
 */
?>
				
				<div class="footer-ad hidden-phone <?php echo ( make_is_parent_page() && ! is_category( 'maker-pro' ) ) ? 'grey' : '' ; ?>" style="clear:both;">
				
					<div style="width:728px; margin:0 auto;">
 
						<!-- Beginning Sync AdSlot 4 for Ad unit header ### size: [[728,90]]  -->
						<div id='div-gpt-ad-664089004995786621-4'>
							<script type='text/javascript'>
								googletag.cmd.push(function(){googletag.display('div-gpt-ad-664089004995786621-4')});
							</script>
						</div>
						<!-- End AdSlot 4 -->
						 
					</div></div>

				</div></div></div>
			
			</div></div></div>
			<!-- These extra closing divs are to close all the divs opened by the functions that pull in cat posts -->

		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="span12 logo" >
						<img class="footer_logo" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/make-logo.png" alt="MAKE Logo">	
						<a href="http://make-digital.com/" target="_blank"><div class="sprite sprite-digital-book-foot"></div></a>
						<h5><a href="http://make-digital.com/" target="_blank">Read Digital Edition</a></h5>
						<a href="http://www.makershed.com/" target="_blank"><div class="sprite sprite-makershed_footer1"></div></a> 
						<h5><a href="http://www.makershed.com/" target="_blank">Shop Maker Shed</a></h5>
					</div>
					<div class="clear"></div>
				<!-- END row -->
				</div>
				<div class="row">
					<div class="span3 trending">
						<h5>Trending Topics</h5>
						<?php echo wp_kses_post( make_get_cap_option( 'hot_topics' ) ); ?>
					</div>
					<div class="span3 newsletter">
						<h5>Get our Newsletters</h5>  
						<form action="http://makermedia.createsend.com/t/r/s/jrsydu/" method="post" id="subForm">
							<fieldset>
								<div class="control-group">
								<label class="control-label" for="optionsCheckbox">Sign up to receive exclusive content and offers.</label>
									<div class="controls">
										<label for="MAKENewsletter">
										<input type="checkbox" name="cm-ol-jjuylk" id="MAKENewsletter" /> MAKE Newsletter
										</label>
										<label for="MakerFaireNewsletter">
										<input type="checkbox" name="cm-ol-jjuruj" id="MakerFaireNewsletter" /> Maker Faire Newsletter
										</label>
										<label for="MakerShed-MasterList">
										<input type="checkbox" name="cm-ol-tyvyh" id="MakerShed-MasterList" /> Maker Shed
										</label> 
										<label for="MarketWireNewsletter">
										<input type="checkbox" name="cm-ol-jrsydu" id="MAKEMarketWirenewsletter" /> Maker Pro Newsletter
										</label> 
									<!-- END controls -->
									</div>
								<!-- control-group -->
								</div>
								<div class="input-append control-group email-area">
									<input class="span2" id="appendedInputButton" name="cm-jrsydu-jrsydu" id="jrsydu-jrsydu" type="text" placeholder="Enter your email">
									<button type="submit" class="btn" value="Subscribe">JOIN</button>
								<!-- control-group email-area -->
								</div>
							</fieldset>
						</form>
					<!-- END span newsletter -->
					</div>
					<div class="span3 about-us">
						<h5>About <a href="http://makermedia.com">Maker Media</a></h5>
						<div class="about-column-01">
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/how-to-get-help/' ) ); ?>">Help</a></li>
								<li><a href="http://makermedia.com/contact-us/" target="_blank">Contact</a></li>
								<li><a href="https://www.pubservice.com/MK/subscribe.aspx?PC=MK&amp;PK=M3AMZF">Subscribe</a></li>
								<li><a href="http://makermedia.com/work-with-us/advertising/" target="_blank">Advertise</a></li> 
								<li><a href="http://makermedia.com/privacy/" target="_blank">Privacy</a></li>
							</ul>
						<!-- END span about-column-01 --></div>
						<div class="about-column-02">
							<ul>
								<li><a href="http://makermedia.com" target="_blank">About Us</a></li>
								<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
								<li><a href="<?php echo esc_url( home_url( '/forums/' ) ); ?>">Forums</a></li>
								<li><a href="<?php echo esc_url( home_url( '/contribute/' ) ); ?>">Contribute to MAKE</a></li>
							</ul>
						<!-- END span about-column-02 -->
						</div>
						<div class="clearfix"></div>
						<div class="soc_icons">
							<a class="sprite sprite-twitter"  href="http://twitter.com/make" title="Twitter" target="_blank"></a>
							<a class="sprite sprite-youtube" href="http://youtube.com/make" title="Youtube" target="_blank"></a>
							<a class="sprite sprite-pinterest" href="http://pinterest.com/makemagazine/" title="Pinterest" target="_blank"></a>
							<a class="sprite sprite-flickr" href="http://www.flickr.com/groups/make/" title="Flickr" target="_blank"></a>
							<a class="sprite sprite-facebook" href="http://facebook.com/makemagazine" title="Facebook" target="_blank"></a>
							<a class="sprite sprite-stumbleupon" href="http://www.stumbleupon.com/to/stumble/stumblethru:makezine.com?utm_source=Makezine&amp;utm_medium=StumbleThru&amp;utm_campaign=StumbleThruButton" title="Stumbleupon" target="_blank"></a>
							<a class="sprite sprite-instagram" href="http://www.instagram.com/makemagazine" title="Instagram" target="_blank"></a>
							<a class="sprite sprite-google-plus" href="https://google.com/+MAKE/" rel="publisher" title="Google+" target="_blank"></a>
						<!-- END socialArea -->
						</div> 
					<!-- END span3 about-us -->
					</div>
					<div class="span3 subscribe">
						<a href="https://www.pubservice.com/MK/subscribe.aspx?PC=MK&amp;PK=M3AMZB" target="_blank">
							<img src="<?php echo wpcom_vip_get_resized_remote_image_url( make_get_cover_image(), '130', '170' ); ?>" alt="MAKE Magazine Drones" width="130" height="170" id="mag-cover">
						</a>
						<div class="sprite sprite-arrow-footer"></div>
						<h5>Subscribe<br /> to MAKE!</h5>
						<p class="p_footer">Get the print and digital versions when you subscribe</p>
						<hr />
					<!-- END span subscribe -->
					</div>
				<!-- END MAIN row (main) -->
				</div>
				<?php echo make_copyright_footer(); ?>
			<!-- END container -->
			</div>
		<!-- END new-footer -->
		</section>
	
	</div> <!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script>jQuery(".entry-content:odd").addClass('odd');</script>

		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".scroll").click(function(event){
				//prevent the default action for the click event
				event.preventDefault();
		 
				//get the full url - like mysitecom/index.htm#home
				var full_url = this.href;
		 
				//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
				var parts = full_url.split("#");
				var trgt = parts[1];
		 
				//get the top offset of the target anchor
				var target_offset = jQuery("#"+trgt).offset();
				var target_top = target_offset.top;
		 
				//goto that anchor by setting the body scroll top to anchor top
				jQuery('html, body').animate({scrollTop:target_top - 50}, 1000);

				//Style the pagination links

				jQuery('a span.badge').addClass('badge-info');
				
			});
			jQuery('.hide-thumbnail').removeClass('thumbnail');

		});
		</script>

		<script type="text/javascript">
			setTimeout(function(){var a=document.createElement("script");
			var b=document.getElementsByTagName("script")[0];
			a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0013/2533.js?"+Math.floor(new Date().getTime()/3600000);
			a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
		</script>


		<?php wp_footer(); ?>
		<?php if ( make_get_cap_option( 'survey_monkey_script' ) == true ) : ?>
			<script src="https://www.surveymonkey.com/jsPop.aspx?sm=t5CAEJmb8Kj1m5yXEHUTOg_3d_3d"> </script>
		<?php endif; ?>
		
	</body>
</html>
