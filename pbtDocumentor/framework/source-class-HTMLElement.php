<?php require_once('../api_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul class="level-0">
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder						</a>

							</li>
					<li>
						<a class="cssmenu-title" href="package-Content.php">
							Content<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-Content.Category.php">
							Category<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-Content.Category.controllers.php">
							controllers						</a>

							</li>
								</ul></li></ul></li>
					<li>
						<a class="cssmenu-title" href="package-Helper.php">
							Helper						</a>

							</li>
					<li>
						<a class="cssmenu-title" href="package-PHPBoost.php">
							PHPBoost<span></span>
						</a>

							<ul class="level-1">
					<li>
						<a class="cssmenu-title" href="package-PHPBoost.Langs.php">
							Langs						</a>

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
					<li><a href="class-AbstractCategoriesManageController.php" class="cssmenu-title">AbstractCategoriesManageController</a></li>
					<li><a href="class-LangConfiguration.php" class="cssmenu-title">LangConfiguration</a></li>
					<li><a href="class-TextHelper.php" class="cssmenu-title">TextHelper</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>

				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Interfaces</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-interfaces" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li><a href="class-HTMLElement.php" class="cssmenu-title">HTMLElement</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>




				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Functions</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-functions" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li><a href="function-find_require_dir.php" class="cssmenu-title deprecated">find_require_dir</a></li>
					<li><a href="function-load_ini_file.php" class="cssmenu-title deprecated">load_ini_file</a></li>
					<li><a href="function-load_module_lang.php" class="cssmenu-title deprecated">load_module_lang</a></li>
					<li><a href="function-retrieve.php" class="cssmenu-title deprecated">retrieve</a></li>
					<li><a href="function-url.php" class="cssmenu-title deprecated">url</a></li>
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
		<h1>File HTMLElement.class.php</h1>
	</header>
	<article>
		<header><h2>File HTMLElement.class.php</h2></header>
		<div class="content">
			<div class="code-capsule">
	            <pre class="numbers"><code><span class="l"><a href="#1"> 1: </a></span><span class="l"><a href="#2"> 2: </a></span></span><span class="l"><a href="#3"> 3: </a></span></span><span class="l"><a href="#4"> 4: </a></span></span><span class="l"><a href="#5"> 5: </a></span></span><span class="l"><a href="#6"> 6: </a></span></span><span class="l"><a href="#7"> 7: </a></span></span><span class="l"><a href="#8"> 8: </a></span></span><span class="l"><a href="#9"> 9: </a></span></span><span class="l"><a href="#10">10: </a></span></span><span class="l"><a href="#11">11: </a></span></span><span class="l"><a href="#12">12: </a></span><span class="l"><a href="#13">13: </a></span><span class="l"><a href="#14">14: </a></span><span class="l"><a href="#15">15: </a></span><span class="l"><a href="#16">16: </a></span></span><span class="l"><a href="#17">17: </a></span></span><span class="l"><a href="#18">18: </a></span></span><span class="l"><a href="#19">19: </a></span><span class="l"><a href="#20">20: </a></span><span class="l"><a href="#21">21: </a></span><span class="l"><a href="#22">22: </a></span><span class="l"><a href="#23">23: </a></span></code></pre>
	            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l"><span class="php-comment">/**
</span></span><span id="3" class="l"><span class="php-comment"> * This class allows you to manage easily html elements.
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Builder
</span></span><span id="5" class="l"><span class="php-comment"> * @category    Framework
</span></span><span id="6" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="7" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="8" class="l"><span class="php-comment"> * @author      Loic ROUCHON &lt;horn@phpboost.com&gt;
</span></span><span id="9" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2015 01 19
</span></span><span id="10" class="l"><span class="php-comment"> * @since       PHPBoost 3.0 - 2009 12 21
</span></span><span id="11" class="l"><span class="php-comment"> * @contributor Kevin MASSY &lt;reidlos@phpboost.com&gt;
</span></span><span id="12" class="l"><span class="php-comment">*/</span>
</span><span id="13" class="l">
</span><span id="14" class="l"><span class="php-keyword1">interface</span> HTMLElement
</span><span id="15" class="l">{
</span><span id="16" class="l">     <span class="php-comment">/**
</span></span><span id="17" class="l"><span class="php-comment">     * Return the element
</span></span><span id="18" class="l"><span class="php-comment">     * @return string
</span></span><span id="19" class="l"><span class="php-comment">     */</span>
</span><span id="20" class="l">    <span class="php-keyword1">function</span> display();
</span><span id="21" class="l">}
</span><span id="22" class="l"><span class="xlang">?&gt;</span>
</span><span id="23" class="l"></span></code></pre>
			</div>
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
	<script>jQuery("#cssmenu-interfaces").menumaker({ title: "Interfaces navigation", format: "multitoggle", breakpoint: 768 }); </script>
	<script>jQuery("#cssmenu-functions").menumaker({ title: "Functions navigation", format: "multitoggle", breakpoint: 768 }); </script>
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>