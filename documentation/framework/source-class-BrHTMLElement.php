<?php require_once('../documentation_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">
			<a href="index.php"><span>PHPBoost A.P.I.</span></a>


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul clas="level-0">
					<li>
						<a class="cssmenu-title" href="package-Ajax.php">
							Ajax<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Ajax.Controllers.php">
							Controllers						</a>

							</li>
								</ul></li>
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Builder.Element.php">
							Element						</a>

							</li>
								</ul></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>
			</div>


			<div id="elements">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Classes</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-classes" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li><a href="class-AjaxImagePreviewController.php" class="cssmenu-title">AjaxImagePreviewController</a></li>
					<li><a href="class-AjaxRequest.php" class="cssmenu-title">AjaxRequest</a></li>
					<li><a href="class-AjaxSearchUserAutoCompleteController.php" class="cssmenu-title">AjaxSearchUserAutoCompleteController</a></li>
					<li><a href="class-AjaxUrlValidationController.php" class="cssmenu-title">AjaxUrlValidationController</a></li>
					<li><a href="class-AjaxUserAutoCompleteController.php" class="cssmenu-title">AjaxUserAutoCompleteController</a></li>
					<li><a href="class-BrHTMLElement.php" class="cssmenu-title">BrHTMLElement</a></li>
					<li><a href="class-DivHTMLElement.php" class="cssmenu-title">DivHTMLElement</a></li>
					<li><a href="class-ImgHTMLElement.php" class="cssmenu-title">ImgHTMLElement</a></li>
					<li><a href="class-LinkHTMLElement.php" class="cssmenu-title">LinkHTMLElement</a></li>
					<li><a href="class-SpanHTMLElement.php" class="cssmenu-title">SpanHTMLElement</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>





			</div>
		</div>
		<div id="inside-main" class="main-with-left">
			<nav id="inside-breadcrumb">
				<ol>
					<li>
						<a href="index.php"><span>PHPBoost A.P.I.</span></a>
					</li>
					<li>
<span>Package</span>					</li>
					<li>
<span>Class</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section>
	<header>
		<h1>File builder/element/BrHTMLElement.class.php</h1>
	</header>
	<article>
		<header><h2>File builder/element/BrHTMLElement.class.php</h2></header>
		<div class="content">
            <pre class="numbers"><code><span class="l"><a href="#1"> 1: </a></span><span class="l"><a href="#2"> 2: </a></span><span class="l"><a href="#3"> 3: </a></span></span><span class="l"><a href="#4"> 4: </a></span></span><span class="l"><a href="#5"> 5: </a></span></span><span class="l"><a href="#6"> 6: </a></span></span><span class="l"><a href="#7"> 7: </a></span></span><span class="l"><a href="#8"> 8: </a></span></span><span class="l"><a href="#9"> 9: </a></span></span><span class="l"><a href="#10">10: </a></span></span><span class="l"><a href="#11">11: </a></span></span><span class="l"><a href="#12">12: </a></span></span><span class="l"><a href="#13">13: </a></span><span class="l"><a href="#14">14: </a></span><span class="l"><a href="#15">15: </a></span><span class="l"><a href="#16">16: </a></span><span class="l"><a href="#17">17: </a></span><span class="l"><a href="#18">18: </a></span><span class="l"><a href="#19">19: </a></span><span class="l"><a href="#20">20: </a></span><span class="l"><a href="#21">21: </a></span><span class="l"><a href="#22">22: </a></span><span class="l"><a href="#23">23: </a></span></code></pre>
            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l">
</span><span id="3" class="l"><span class="php-comment">/**
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Builder
</span></span><span id="5" class="l"><span class="php-comment"> * @subpackage  Element
</span></span><span id="6" class="l"><span class="php-comment"> * @category    Framework PHP
</span></span><span id="7" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="8" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="9" class="l"><span class="php-comment"> * @author      Kevin MASSY &lt;reidlos@phpboost.com&gt;
</span></span><span id="10" class="l"><span class="php-comment"> * @author      Julien BRISWALTER &lt;j1.seth@phpboost.com&gt;
</span></span><span id="11" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2015 11 12
</span></span><span id="12" class="l"><span class="php-comment"> * @since       PHPBoost 4.1 - 2015 01 19
</span></span><span id="13" class="l"><span class="php-comment"> */</span>
</span><span id="14" class="l">
</span><span id="15" class="l"><span class="php-keyword1">class</span> BrHTMLElement <span class="php-keyword1">extends</span> AbstractHTMLElement
</span><span id="16" class="l">{
</span><span id="17" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> display()
</span><span id="18" class="l">    {
</span><span id="19" class="l">        <span class="php-keyword1">return</span> <span class="php-quote">'&lt;br/&gt;'</span>;
</span><span id="20" class="l">    }
</span><span id="21" class="l">}
</span><span id="22" class="l"><span class="xlang">?&gt;</span>
</span><span id="23" class="l"></span></code></pre>
		</div>
	</article>
	<footer></footer>
</section>

				<div id="apigen-footer">
					 API documentation generated by <a href="http://apigen.org">ApiGen</a>
				</div>
			</div>
		</div>
	</div>

	<script>jQuery("#cssmenu-package").menumaker({ title: "Packages navigation", format: "multitoggle", breakpoint: 768 }); </script>
	<script>jQuery("#cssmenu-classes").menumaker({ title: "Classes navigation", format: "multitoggle", breakpoint: 768 }); </script>
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>