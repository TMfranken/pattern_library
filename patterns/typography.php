<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Typography</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				    	<li><a href="#typefaces">Typefaces</a></li>
				    	<li><a href="#headings">Headings</a></li>
				        <li><a href="#byline">Byline</a></li>
				        <li><a href="#blockquotes">Blockquotes</a></li>
				        <li><a href="#body-content">Body Content</a></li>
				        <li><a href="#address">Address</a></li>
				        <li><a href="#buttons">Buttons</a></li>
				    </ul>
				</div>

				<div id="typefaces" class="l-container l-margin-tm">

				    <div class="l-container l-margin-bm">
					    <h2>Typefaces</h2>
						<p>We're utilizing Google Fonts sitewide; <a href="https://www.google.com/fonts/specimen/Merriweather" target="_blank">Merriweather</a> for headline text, and <a href="https://www.google.com/fonts/specimen/Open+Sans" target="_blank">Open Sans</a> for body copy.</p>
						
						<div class="row l-margin-tm">
							<div class="three columns">
							<h3 class="l-margin-tn">Merriweather</h3>
							</div>
							<div class="nine columns text-accent">
							<p style="font-family:'Merriweather'">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z<br>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>1 2 3 4 5 6 7 8 9 0</p>
							</div>
						</div>
						<div class="row">
							<div class="three columns">
							<p class="h3 l-margin-tn" style="font-family:'Open Sans'">Open Sans</p>
							</div>
							<div class="nine columns text-accent">
							<p>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z<br>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>1 2 3 4 5 6 7 8 9 0</p>
							</div>
						</div>
					</div>
				</div>

				<div id="headings" class="l-container">

				    <div class="l-container l-margin-bm">
					    <h2>Headings</h2>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h1 class="l-margin-an">Main Headline</h1>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">36px / 47px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h2 class="l-margin-an">Sub Headline</h2>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">27px / 35px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">600 / Bold</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h3 class="l-margin-an">Section Headline</h3>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">24px / 31px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h4 class="l-margin-an">Section Sub Headline</h4>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">16px / 21px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">600 / Bold</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an subheading">Card or Teaser Title</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">20px / 30px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an">General body copy</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray"> 16px / 24px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="six columns">
					    		<p class="l-margin-an">Button text / Meta text</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">Font size/line height</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
				    </div>

				    <div class="row l-margin-vl">
				    	<div class="six columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="type-code-1" name="code">
<p class="h1">This is actually a &lt;p&gt;.</p>
<h4 class="h2">This is actually a &lt;h4&gt;.</h4></textarea> </form> </div>
                        </div>
                        <div class="six columns">
                            <p class="l-margin-bn"><strong>Notes</strong></p>
                            <p>Helper classes are available to style typographic tags as header elements. This is helpful if you want the style of, say, an &lt;h2&gt;, but the placement of an &lt;h2&gt; doesn't make semantic sense on the page.</p>
                            <p class="h1">This is actually a &lt;p&gt;.</p>
                        	<h4 class="h2">This is actually a &lt;h4&gt;.</h4>
                        </div>
                    </div>

                    <div class="row l-margin-vl">
                        <div class="six columns">
                            <p class="l-margin-bn"><strong>Notes</strong></p>
                        	<p>Additional helper classes available for headings:</p>
                        	<ul>
								<li><strong>.heading--center</strong> for centered headings</li>
								<li><strong>.heading--right</strong> for right aligned headings</li>
								<li><strong>.heading--trim</strong> for no margins</li>
								<li><strong>.heading--snug</strong> for no top margin</li>
								<li><strong>.heading--light</strong> for white heading text</li>
								<li><strong>.heading--normal</strong> for no text-transform</li>
							</ul>
							<p>Lastly, the <strong>.subheading</strong> class is ideally used on an &lt;h2&gt; or &lt;p&gt; directly beneath an &lt;h1&gt;.</p>
                        </div>
                        <div class="six columns">
                        	<h1 class="heading--trim">Main Page Title</h1>
							<p class="subheading">Supporting Sub-Title</p>
                            <div class="code__examples">
                                <form><textarea class="pattern" id="type-code-2" name="code">
<h1 class="heading--trim">Main Page Title</h1>
<p class="subheading">Supporting Sub-Title</p></textarea> </form> </div>
                        </div>
                        <div class="twelve columns">
                        	<p class="fine-print">These classes, along with default heading styles, are located in <em>typography.scss</em>.</p>
                        </div>
                    </div>


				    <div id="byline" class="l-container l-margin-vm">
					    <h2>Byline</h2>
					    <div class="four columns">
					    	<div class="post__meta">
		                        <span class="post__date">23 July 2015</span>
		                        |
		                        <span class="post__author"><a href="">by Name Lastname</a></span>
		                    </div>
					    </div>
					    <div class="eight columns">
					    	<p class="l-margin-bn"><strong>Notes</strong></p>
					    	<p>Wrap article information within a <strong>.post__meta</strong> container. Additional information, such as social sharing icons, is also appropriate in this area.</p>
					    	<div class="code__examples">
                                <form><textarea class="pattern" id="type-code-3" name="code">
<div class="post__meta">
	<span class="post__date">23 July 2015</span> |
    <span class="post__author"><a href="">by Name Lastname</a></span>
</div></textarea> </form> </div>
					    </div>
					</div>

				    <div id="blockquotes" class="l-container l-margin-vm">
				    	<div class="row">
				    		<div class="twelve columns">
				    			<h2>Blockquotes</h2>
				    			<blockquote>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round. <span class="author">Mayor Kevin Faulconer</span></blockquote>
				    		</div>
				    	</div>
				    </div>

				    <div id="body-content" class="l-container l-margin-vm">
				    	<div class="row">
				    		<div class="twelve columns">
				    			<h2>Intro</h2>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    	</div>
				    	<div class="row l-margin-vd">
				    		<div class="six columns">
				    			<p class="subheading">Sub Section</p>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    		<div class="six columns">
				    			<p class="subheading">Sub Section</p>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    	</div>
				    </div>

				    <div id="address" class="l-container l-margin-vm">
				    	<div class="row">
				    		<div class="twelve columns">
				    			<h2>Address</h2>
				    		</div>
				    		<div class="four columns">
							    <address>
									<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
										<span itemprop="streetAddress">2600 Golf Course Drive <br></span>
										<span itemprop="addressLocality">San Diego</span>,
										<span itemprop="addressRegion">CA</span>
										<span itemprop="postalCode">92102</span>
									</div>
									<span itemprop="telephone">(619) 123-4567</span>
							    </address>	
					    	</div>
					    	<div class="eight columns">
					    		<p class="l-margin-bn"><strong>Notes</strong></p>
					    		<p>When displaying addresses and contact information, it is good practice to include <a href="http://schema.org/" target="_blank">schema.org</a> metadata for search engine utility.</p>

					    		<div class="code__examples">
                                <form><textarea class="pattern" id="type-code-4" name="code">
<address>
	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<span itemprop="streetAddress">2600 Golf Course Drive <br></span>
		<span itemprop="addressLocality">San Diego</span>,
		<span itemprop="addressRegion">CA</span>
		<span itemprop="postalCode">92102</span>
	</div>
	<span itemprop="telephone">(619) 123-4567</span>
</address>	</textarea> </form> </div>
                        </div>
					    	</div>
				    	</div>
				    </div>

				    <div id="buttons" class="l-container l-margin-vm">
				    	<h2>Buttons</h2>
						<div class="row l-padding-vm">
							<div class="six columns">
								<a class="btn btn--primary l-margin-vs" href="#">Primary</a>
								<a class="btn btn--secondary l-margin-vs" href="#">Secondary</a>
								<a class="btn btn--tertiary l-margin-vs" href="#">Tertiary</a>
								<a class="btn btn--outline l-margin-vs" href="#">Outline</a>
								<div class="row l-margin-td">
									<div class="six columns">
										<a class="btn btn--primary l-margin-vs" href="#">Primary with Wrapping Content</a>
									</div>
								</div>
							</div>
							<div class="six columns">
	                            <p class="l-margin-bn"><strong>Notes</strong></p>
	                            <p>Numerous <strong>.btn</strong> modifiers provide access to many button choices for (hopefully) any scenario that should arise. Here are primary modifiers:</p>

	                            <div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn" name="code">
<a class="btn btn--primary" href="#">Primary</a>
<a class="btn btn--secondary" href="#">Secondary</a>
<a class="btn btn--tertiary" href="#">Tertiary</a>
<a class="btn btn--outline" href="#">Outline</a></textarea> </form> </div>
							</div>
						</div>

						<div class="row l-padding-vm">
							<div class="six columns">
								<a class="btn--icon btn--half btn btn--primary btn--icon-right l-margin-vs" href="#"><i class="icon-dribbble"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
								<a class="btn--icon btn--half btn btn--secondary l-margin-vs" href="#"><i class="icon-flickr"></i> Icon Button</a><br>
								<a class="btn--icon btn--half btn btn--tertiary btn--icon-right l-margin-vs" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
								<a class="btn--icon btn--half btn btn--outline btn--icon-left l-margin-vs" href="#"><i class="icon-chevron-left"></i> Icon Button <i class="icon-twitter"></i></a>
							</div>
							<div class="six columns">
	                            <p>Default modifiers with icons</p>

	                            <div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-2" name="code">
<a class="btn btn--primary" href="#"><i class="icon-dribbble"></i> Icon Button <i class="icon-chevron-right"></i></a>
<a class="btn btn--secondary" href="#"><i class="icon-flickr"></i> Icon Button</a>
<a class="btn btn--tertiary" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-chevron-right"></i></a></textarea> </form> </div>
							</div>

						</div>

						<div class="row l-padding-vm">
							<div class="six columns">
								<a class="btn btn--xs l-margin-vs" href="#">Extra Small</a>
								<a class="btn btn--sm l-margin-vs" href="#">Small</a>
								<a class="btn btn--md l-margin-vs" href="#">Medium</a>
								<a class="btn btn--lg l-margin-vs" href="#">Large</a>
								<a class="btn btn--xl l-margin-vs" href="#">Extra Large</a>
							</div>
							<div class="six columns">
								<p>Font size variations</p>

								
					<div class="row l-margin-vd">
					
					
						<div id="font-vars-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#font-vars-tab-item-1">Code</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#font-vars-tab-item-2">Notes</a></li>
							</ul>

							<div class="tabs-container">

								<div id="font-vars-tab-item-1" class="tabs__bucket is-active">
									<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-3" name="code">
<a class="btn btn--xs" href="#">Extra Small</a>
<a class="btn btn--sm" href="#">Small</a>
<a class="btn btn--md" href="#">Medium</a>
<a class="btn btn--lg" href="#">Large</a>
<a class="btn btn--xl" href="#">Extra Large</a></textarea> </form> </div>
            					</div>

								<div id="font-vars-tab-item-2" class="tabs__bucket is-active">
									<p>Default size for home page buttons is Large (btn--lg).</p>
            					</div>

							</div>

						</div>
					
					</div>
								
								
								
								
								
								
							</div>
						</div>

						<div class="row l-padding-vm">
							<div class="six columns">
								<a class="btn btn--round l-margin-vs" href="#">Rounded Corners</a>
								<a class="btn btn--oval l-margin-vs" href="#">Pill Button</a>
								<a class="btn btn--pill-right l-margin-vs" href="#">Pill Right</a>
								<a class="btn btn--pill-left l-margin-vs" href="#">Pill Left</a>
							</div>
							<div class="six columns">
								<p>Border variations</p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-4" name="code">
<a class="btn btn--round" href="#">Rounded Corners</a>
<a class="btn btn--oval" href="#">Pill Button</a>
<a class="btn btn--pill-right" href="#">Pill Right</a>
<a class="btn btn--pill-left" href="#">Pill Left</a> </textarea> </form> </div>
							</div>
						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<p><a class="btn btn--wide" href="#">Wide</a></p>
								<p><a class="btn btn--half" href="#">Half</a></p>
								<p><a class="btn btn--third" href="#">Third</a></p>
							</div>
							<div class="six columns">
								<p>Width variations</p>

					<div class="row l-margin-vd">
					
					
						<div id="btn-width-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#btn-width-tab-item-1">Code</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#btn-width-tab-item-2">Notes</a></li>
							</ul>

							<div class="tabs-container">

								<div id="btn-width-tab-item-1" class="tabs__bucket is-active">
									<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-5" name="code">
<a class="btn btn--wide" href="#">Wide</a>
<a class="btn btn--half" href="#">Half</a>
<a class="btn btn--third" href="#">Third</a></textarea> </form> </div>
            					</div>

								<div id="btn-width-tab-item-2" class="tabs__bucket is-active">
									<p>Button width is dependent on parent div's width.</p>
									<ul>
										<li>Wide takes up 100% of the parent div's width.</li>
										<li>Half takes up 50% of the parent div's width.</li>
										<li>Third takes up 33.3% of the parent div's width.</li>
									</ul>
            					</div>

							</div>

						</div>
					
					</div>
								
								
								
							</div>
						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--icon-left l-margin-vs" href="#"><i class="icon-chevron-left"></i>Previous</a>
								<a class="btn btn--icon-right l-margin-vs" href="#">Next<i class="icon-chevron-right"></i></a>
							</div>
							<div class="six columns">
								<p>Directional</p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-6" name="code">
<a class="btn btn--icon-left" href="#"><i class="icon-arrow-left"></i>Previous</a>
<a class="btn btn--icon-right" href="#">Next<i class="icon-arrow-right"></i></a></textarea> </form> </div>
							</div>
						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--success l-margin-vs" href="#">Success</a>
								<a class="btn btn--warning l-margin-vs" href="#">Warning</a>
								<a class="btn btn--error l-margin-vs" href="#">Error</a>
							</div>
							<div class="six columns">
								<p>Messaging variations</p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-7" name="code">
<a class="btn btn--success" href="#">Success</a>
<a class="btn btn--warning" href="#">Warning</a>
<a class="btn btn--error" href="#">Error</a></textarea> </form> </div>
<p class="l-margin-bn l-margin-td"><em>Colors</em></p>
<ul>
<li>Success - default: #659f13, hover: #48710e</li>
<li>Warning - default: #e28327, hover: #bd6a19</li>
<li>Error - default: #c51313, hover: #960f0f</li>
</ul>
							</div>
							
						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--disabled" href="#">Disabled</a>
							</div>
							<div class="six columns">
								<p>Disabled</p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="type-code-btn-8" name="code">
<a class="btn btn--disabled" href="#">Disabled</a></textarea> </form> </div>
							</div>
							
						</div>
				    </div>

				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>
<script type="text/javascript">
$( document ).ready(function() {
$(".tabs__bucket").removeClass("is-active");
$(".tabs-container div:first-child").addClass("is-active");
});
</script>