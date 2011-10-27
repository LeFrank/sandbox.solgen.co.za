<!DOCTYPE html>
<!-- saved from url=(0065)http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html -->
<html class="ui-mobile"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--<base href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html">--><base href=".">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile Docs - Theming Pages</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.css">
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.0rc1/docs/_assets/css/jqm-docs.css">
	<script src="./jQuery Mobile Docs - Theming Pages_files/jquery-1.6.4.min.js"></script>
	<script src="./jQuery Mobile Docs - Theming Pages_files/jquery.mobile.themeswitcher.js"></script>
	<script src="./jQuery Mobile Docs - Theming Pages_files/jqm-docs.js"></script>
	<script src="./jQuery Mobile Docs - Theming Pages_files/jquery.mobile-1.0rc1.min.js"></script>
<style type="text/css"></style></head>
<body class="ui-mobile-viewport">

	<div data-role="page" class="type-interior ui-page ui-body-c" data-url="/demos/1.0rc1/docs/pages/page-transitions.html" tabindex="0" style="min-height: 979px; ">

		<div data-role="header" data-theme="f" class="ui-header ui-bar-f" role="banner">
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Transitions</h1>
		<a href="http://jquerymobile.com/demos/1.0rc1/" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home ui-btn ui-btn-up-f ui-btn-icon-notext ui-btn-corner-all ui-shadow" title="Home" data-theme="f"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow"></span></span></a>
	</div><!-- /header -->

	<div data-role="content" class="ui-content" role="main">
		<div class="content-primary">
		<h2>Page transitions</h2>

		<p>The jQuery Mobile framework includes a set of six CSS-based transition effects that can be applied to any object or page change event, which apply the chosen transition when navigating to a new page and the reverse transition for the Back button. By default, the framework applies the right to left slide transition.</p>

		<p>To set a custom transition effect, add the <code>data-transition</code> attribute to the link. Possible values include: </p>

<code><code>
&lt;a href="index.html" data-transition="pop"&gt;I'll pop&lt;/a&gt;
</code></code>

		<p>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="slide" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">slide</span></span></a>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="slideup" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">slideup</span></span></a>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="slidedown" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">slidedown</span></span></a>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="pop" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">pop</span></span></a>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="fade" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">fade</span></span></a>
		<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#dialog" data-role="button" data-rel="dialog" data-transition="flip" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">flip *</span></span></a>
		</p>

        <p>NOTE: The flip transition isn't rendered correctly on most versions of Android because it lacks 3D CSS transform capabilities. Unfortunately, instead of ignoring the flip, Android makes the page "cartwheel" away by rotating instead of flipping. We recommend using this transition sparingly until support improves.</p>
		<p>In addition, you can also force a "backwards" transition by specifying <code>data-direction="reverse"</code> on your link. Note: (this was formerly <code>data-back="true"</code>, which will remain supported until 1.0)</p>

		<div class="ui-body ui-body-e">
			<p><strong>Transitions from <a href="http://www.jqtouch.com/" class="ui-link">jQtouch</a></strong> (<em>with small modifications</em>): Built by David Kaneda and maintained by Jonathan Stark.</p>
		</div>


				</div><!--/content-primary -->

				<div class="content-secondary">

					<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d" class="ui-collapsible ui-collapsible-collapsed"><h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-collapsible-heading-toggle ui-btn ui-btn-up-b ui-btn-icon-left ui-corner-top ui-corner-bottom" data-theme="b"><span class="ui-btn-inner ui-corner-top ui-corner-bottom"><span class="ui-btn-text">More in this section<span class="ui-collapsible-heading-status"> click to expand contents</span></span><span class="ui-icon ui-icon-plus ui-icon-shadow"></span></span></a></h3><div class="ui-collapsible-content ui-body-d ui-collapsible-content-collapsed" aria-hidden="true">



							<ul data-role="listview" data-theme="c" data-dividertheme="d" class="ui-listview">

								<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-d ui-btn-up-undefined">Pages &amp; Dialogs</li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-anatomy.html" class="ui-link-inherit">Anatomy of a page</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-template.html" data-ajax="false" class="ui-link-inherit">Single page template</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/multipage-template.html" data-ajax="false" class="ui-link-inherit">Multi-page template</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-titles.html" class="ui-link-inherit">Page titles</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-links.html" class="ui-link-inherit">Linking pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="a" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-a"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-transitions.html" data-ajax="false" class="ui-link-inherit">Page transitions</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-dialogs.html" class="ui-link-inherit">Dialogs</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-cache.html" class="ui-link-inherit">Prefetching &amp; caching pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-navmodel.html" class="ui-link-inherit">Ajax, hashes &amp; history</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-dynamic.html" class="ui-link-inherit">Dynamically Injecting Pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-scripting.html" class="ui-link-inherit">Scripting pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="./jQuery Mobile Docs - Theming Pages_files/jQuery Mobile Docs - Theming Pages.htm" class="ui-link-inherit">Theming pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>

							</ul>
					</div></div>
				</div>

			</div><!-- /content -->

			<div data-role="footer" class="footer-docs ui-footer ui-bar-c" data-theme="c" role="contentinfo">
					<p>© 2011 The jQuery Project</p>
			</div>

			</div><!-- /page -->





			<div data-role="page" id="dialog" data-url="dialog"><!-- dialog-->

				<div data-role="header" data-theme="e">
					<h1>Ta-da!</h1>
				</div><!-- /header -->

				<div data-role="content" data-theme="e">
					<p>That was an animated page transition effect that we added with a <code>data-transition</code> attribute on the link.</p>
					<p>Since it uses CSS transforms, this should be hardware accelerated on many mobile devices.</p>
					<p>What do you think?</p>
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/docs-transitions.html" data-role="button" data-theme="b" data-rel="back">I like it</a>
				</div>
			</div>



<div title="Gridify Settings" class="ngrid-settings-button"><div></div></div><div class="ngrid-settings-panel"><div class="ngrid-row ngrid-button-row"><div class="ngrid-button ngrid-add-hline-button" id="ngrid-add-hline"><div></div>Add Horizontal Guide</div><div class="ngrid-button ngrid-add-vline-button" id="ngrid-add-vline"><div></div>Add Vertical Guide</div></div><div class="ngrid-row ngrid-button-row"><div class="ngrid-button ngrid-clear-lines-button" id="ngrid-clear-lines"><div></div>Clear Guides</div><div class="ngrid-button ngrid-clear-all-button" id="ngrid-clear-all"><div></div>Clear All</div></div><div class="ngrid-row"><div class="ngrid-label">Show Ruler:</div><input type="checkbox" id="ngrid-show-ruler-checkbox"></div><div class="ngrid-row"><div class="ngrid-label">Set zero At Middle:</div><input type="checkbox" id="ngrid-center-zero-checkbox"></div><div class="ngrid-row"><div class="ngrid-label">Show Grid:</div><input type="checkbox" id="ngrid-show-grid-checkbox"></div><div class="ngrid-row"><div class="ngrid-label">Guide Color:</div><div class="ngrid-color-button-container" id="ngrid-marker-color-button-container"><div class="ngrid-color-button"><div class="ngrid-color-button-class-1"></div></div></div><div class="ngrid-secondary-label">Opacity:</div><select id="ngrid-marker-opacity-select"><option value="0.1">0.1</option><option value="0.2">0.2</option><option value="0.3">0.3</option><option value="0.4">0.4</option><option value="0.5">0.5</option><option value="0.6">0.6</option><option value="0.7">0.7</option><option value="0.8">0.8</option><option value="0.9">0.9</option><option value="1" selected="">1.0</option></select></div><div class="ngrid-row"><div class="ngrid-label">Grid Color:</div><div class="ngrid-color-button-container" id="ngrid-grid-color-button-container"><div class="ngrid-color-button"><div class="ngrid-color-button-class-3"></div></div></div><div class="ngrid-secondary-label">Opacity:</div><select id="ngrid-grid-opacity-select"><option value="0.1">0.1</option><option value="0.2">0.2</option><option value="0.3">0.3</option><option value="0.4">0.4</option><option value="0.5" selected="">0.5</option><option value="0.6">0.6</option><option value="0.7">0.7</option><option value="0.8">0.8</option><option value="0.9">0.9</option><option value="1">1.0</option></select></div><div class="ngrid-row"><div class="ngrid-label">Marker Snap:</div><select id="ngrid-marker-snap-select"><option value="1" selected="">1px</option><option value="2">2px</option><option value="5">5px</option><option value="10">10px</option><option value="20">20px</option><option value="50">50px</option><option value="100">100px</option></select></div><div class="ngrid-row"><div class="ngrid-label">Grid Interval:</div><select id="ngrid-grid-interval-select"><option value="10">10px</option><option value="20">20px</option><option value="50" selected="">50px</option><option value="100">100px</option></select></div><div class="ngrid-row"><div class="ngrid-label">Color Picker:</div><div class="ngrid-button ngrid-find-color-button" id="ngrid-color-finder"><div></div></div><div class="ngrid-color-button-container" id="ngrid-color-finder-button-container"><div class="ngrid-color-button"><div class="ngrid-color-button-class-4"></div></div></div></div></div><div class="ngrid-colorpicker-mask"></div><div class="ngrid-drag-mask"></div><div class="ui-loader ui-body-a ui-corner-all" style="top: 489.5px; "><span class="ui-icon ui-icon-loading spin"></span><h1>loading</h1></div><div data-role="page" class="type-interior ui-page ui-body-c ui-page-active" data-url="/demos/1.0rc1/docs/pages/pages-themes.html" data-external-page="true" tabindex="0" style="min-height: 936px; ">

		<div data-role="header" data-theme="f" class="ui-header ui-bar-f" role="banner">
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Theming pages</h1>
		<a href="http://jquerymobile.com/demos/1.0rc1/" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home ui-btn ui-btn-up-f ui-btn-icon-notext ui-btn-corner-all ui-shadow" title="Home" data-theme="f"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow"></span></span></a>
	</div><!-- /header -->

	<div data-role="content" class="ui-content" role="main">
		<div class="content-primary">
			<h2>Page Theming</h2>

			<p>jQuery Mobile has a rich <a href="http://jquerymobile.com/demos/1.0rc1/docs/api/themes.html" class="ui-link">theming system</a> that gives you full control of how pages are styled. There is detailed theming documentation within each page widget, but let's look at a few high-level examples of how theming is applied.</p>

			<p>The <code> data-theme</code> attribute can be applied to the header and footer containers to apply any of the lettered theme color swatches. While the <code> data-theme</code> attribute could be added to the content container, we recommend adding it instead to <code>div</code> or container that has been assigned the <code> data-role="page"</code> attribute to ensure that the background color is applied to the full page.</p>

			<p>The default Theme mixes styles from multiple swatches to create visual texture and present the various elements in optimal contrast to one another:</p>

			<div data-role="header" class="ui-header ui-bar-a" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Default Theme</h1>
			</div>
			<div class="ui-bar ui-bar-c">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-icon="gear" data-role="button" data-inline="true" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-btn-icon-left ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Tools</span><span class="ui-icon ui-icon-gear ui-icon-shadow"></span></span></a>
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-icon="star" data-role="button" data-inline="true" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-btn-icon-left"><span class="ui-btn-inner"><span class="ui-btn-text">Like</span><span class="ui-icon ui-icon-star ui-icon-shadow"></span></span></a>
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-icon="refresh" data-role="button" data-inline="true" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-btn-icon-left ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Refresh</span><span class="ui-icon ui-icon-refresh ui-icon-shadow"></span></span></a>
				</div><!-- /controlgroup -->
			</div>
			<div class="ui-body ui-body-c">
				<h3>Default Theme Content Header</h3>
				<p>This is the default content color swatch and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" class="ui-slider-input ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c"><div class="ui-slider  ui-btn-down-c ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow" data-theme="c" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
				     <fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-z1" id="radio-choice-y1" value="on" checked="checked"><label for="radio-choice-y1" data-theme="c" class="ui-btn ui-btn-up-c ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-z1" id="radio-choice-z1" value="off"><label for="radio-choice-z1" data-theme="c" class="ui-btn ui-btn-up-c ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-a">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>


			<p>And each of the five "swatches" applies its style consistently across all page elements, as shown below:</p>

			<h2>Swatch A</h2>
			<div data-role="header" data-position="inline" class="ui-header ui-bar-a" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Header A</h1>
			</div>
			<div class="ui-body ui-body-a">
				<h3>Header</h3>
				<p>This is content color swatch "A" and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="a" class="ui-slider-input ui-input-text ui-body-a ui-corner-all ui-shadow-inset"><div class="ui-slider  ui-btn-down-a ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-a ui-btn-corner-all ui-shadow" data-theme="a" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
				     <fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a1" id="radio-choice-a1" value="on" checked="checked"><label for="radio-choice-a1" data-theme="a" class="ui-btn ui-btn-up-a ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a1" id="radio-choice-b1" value="off"><label for="radio-choice-b1" data-theme="a" class="ui-btn ui-btn-up-a ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-a">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>


			<h2>Swatch B</h2>
			<div data-role="header" data-theme="b" class="ui-header ui-bar-b" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Header B</h1>
			</div>
			<div class="ui-body ui-body-b">
				<h3>Header</h3>
				<p>This is content color swatch "B" and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="b" class="ui-slider-input ui-input-text ui-body-b ui-corner-all ui-shadow-inset"><div class="ui-slider  ui-btn-down-b ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-b ui-btn-corner-all ui-shadow" data-theme="b" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
					<fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a2" id="radio-choice-a2" value="on" checked="checked"><label for="radio-choice-a2" data-theme="b" class="ui-btn ui-btn-up-b ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a2" id="radio-choice-b2" value="off"><label for="radio-choice-b2" data-theme="b" class="ui-btn ui-btn-up-b ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="b" class="ui-btn ui-btn-up-b ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-b">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="b" class="ui-btn ui-btn-up-b ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="b" class="ui-btn ui-btn-up-b ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="b" class="ui-btn ui-btn-up-b ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>

			<h2>Swatch C</h2>
			<div data-role="header" data-theme="c" class="ui-header ui-bar-c" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Header C</h1>
			</div>
			<div class="ui-body ui-body-c">
				<h3>Header</h3>
				<p>This is content color swatch "C" and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="c" class="ui-slider-input ui-input-text ui-body-c ui-corner-all ui-shadow-inset"><div class="ui-slider  ui-btn-down-c ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-c ui-btn-corner-all ui-shadow" data-theme="c" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
					<fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a3" id="radio-choice-a3" value="on" checked="checked"><label for="radio-choice-a3" data-theme="c" class="ui-btn ui-btn-up-c ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a3" id="radio-choice-b3" value="off"><label for="radio-choice-b3" data-theme="c" class="ui-btn ui-btn-up-c ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-c">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>

			<h2>Swatch D</h2>
			<div data-role="header" data-theme="d" class="ui-header ui-bar-d" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Header D</h1>
			</div>
			<div class="ui-body ui-body-d">
				<h3>Header</h3>
				<p>This is content color swatch "D" and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="d" class="ui-slider-input ui-input-text ui-body-d ui-corner-all ui-shadow-inset"><div class="ui-slider  ui-btn-down-d ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-d ui-btn-corner-all ui-shadow" data-theme="d" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
					<fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a4" id="radio-choice-a4" value="on" checked="checked"><label for="radio-choice-a4" data-theme="d" class="ui-btn ui-btn-up-d ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a4" id="radio-choice-b4" value="off"><label for="radio-choice-b4" data-theme="d" class="ui-btn ui-btn-up-d ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="d" class="ui-btn ui-btn-up-d ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-d">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="d" class="ui-btn ui-btn-up-d ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="d" class="ui-btn ui-btn-up-d ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="d" class="ui-btn ui-btn-up-d ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>

			<h2>Swatch E</h2>
			<div data-role="header" data-theme="e" class="ui-header ui-bar-e" role="banner">
				<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Header E</h1>
			</div>
			<div class="ui-body ui-body-e">
				<h3>Header</h3>
				<p>This is content color swatch "E" and a preview of a <a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-link">link</a>.</p>
					<label for="slider1" id="slider1-label" class="ui-slider ui-input-text">Input slider:</label>
				 	<input type="number" data-type="range" name="slider1" id="slider1" value="50" min="0" max="100" data-theme="e" class="ui-slider-input ui-input-text ui-body-e ui-corner-all ui-shadow-inset"><div class="ui-slider  ui-btn-down-e ui-btn-corner-all" role="application"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-slider-handle ui-btn ui-btn-up-e ui-btn-corner-all ui-shadow" data-theme="e" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="50" title="50" aria-labelledby="slider1-label" style="left: 50%; "><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"></span></span></a></div>
					<fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div role="heading" class="ui-controlgroup-label">Cache settings:</div><div class="ui-controlgroup-controls">

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a5" id="radio-choice-a5" value="on" checked="checked"><label for="radio-choice-a5" data-theme="e" class="ui-btn ui-btn-up-e ui-radio-on ui-btn-active ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">On</span></span></label></div>

				         	<div class="ui-radio"><input type="radio" name="radio-choice-a5" id="radio-choice-b5" value="off"><label for="radio-choice-b5" data-theme="e" class="ui-btn ui-btn-up-e ui-radio-off ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Off</span></span></label></div>

				    </div></fieldset>
				<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-role="button" data-inline="true" data-theme="e" class="ui-btn ui-btn-up-e ui-btn-inline ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Button</span></span></a>
			</div>
			<div class="ui-bar ui-bar-e">
				<div data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
					<a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="e" class="ui-btn ui-btn-up-e ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="e" class="ui-btn ui-btn-up-e ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Button</span></span></a><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" data-inline="true" data-role="button" data-theme="e" class="ui-btn ui-btn-up-e ui-btn-inline ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Button</span></span></a>
				</div><!-- /controlgroup -->
			</div>


				</div><!--/content-primary -->

				<div class="content-secondary">

					<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d" class="ui-collapsible ui-collapsible-collapsed"><h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/pages-themes.html#" class="ui-collapsible-heading-toggle ui-btn ui-btn-up-b ui-btn-icon-left ui-corner-top ui-corner-bottom" data-theme="b"><span class="ui-btn-inner ui-corner-top ui-corner-bottom"><span class="ui-btn-text">More in this section<span class="ui-collapsible-heading-status"> click to expand contents</span></span><span class="ui-icon ui-icon-plus ui-icon-shadow"></span></span></a></h3><div class="ui-collapsible-content ui-body-d ui-collapsible-content-collapsed" aria-hidden="true">



							<ul data-role="listview" data-theme="c" data-dividertheme="d" class="ui-listview">

								<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-btn ui-bar-d">Pages &amp; Dialogs</li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-anatomy.html" class="ui-link-inherit">Anatomy of a page</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-template.html" data-ajax="false" class="ui-link-inherit">Single page template</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/multipage-template.html" data-ajax="false" class="ui-link-inherit">Multi-page template</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-titles.html" class="ui-link-inherit">Page titles</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-links.html" class="ui-link-inherit">Linking pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li-has-arrow ui-li"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-transitions.html" data-ajax="false" class="ui-link-inherit">Page transitions</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-dialogs.html" class="ui-link-inherit">Dialogs</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-cache.html" class="ui-link-inherit">Prefetching &amp; caching pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-navmodel.html" class="ui-link-inherit">Ajax, hashes &amp; history</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-dynamic.html" class="ui-link-inherit">Dynamically Injecting Pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="http://jquerymobile.com/demos/1.0rc1/docs/pages/page-scripting.html" class="ui-link-inherit">Scripting pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>
								<li data-theme="a" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-a"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="./jQuery Mobile Docs - Theming Pages_files/jQuery Mobile Docs - Theming Pages.htm" class="ui-link-inherit">Theming pages</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>

							</ul>
					</div></div>
				</div>

			</div><!-- /content -->

			<div data-role="footer" class="footer-docs ui-footer ui-bar-c" data-theme="c" role="contentinfo">
					<p>© 2011 The jQuery Project</p>
			</div>

			</div></body></html>