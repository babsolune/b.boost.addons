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
					<li><a href="class-TextHelper.php" class="cssmenu-title">TextHelper</a></li>
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
					<li class="active"><a href="function-load_module_lang.php" class="cssmenu-title deprecated">load_module_lang</a></li>
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
					<li class="active">
<span>Function</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section id="content" class="function">
	<header>
		<h1 class="deprecated">Function</h1>
	</header>
	<article>
		<header><h2>load_module_lang</h2></header>
		<div class="content">

			<div class="options infos">
				
				<span class="infos-options"><b>Package:</b> <a href="package-Helper.php">Helper</a></span>
						<span class="infos-options">
							<b>Deprecated:</b>
							<p>Loads a module lang file. It will load alone the file corresponding to the user lang, but if it doesn't exist, another lang will be choosen.
An error will be displayed on the page and the script execution will be stopped if no lang file is found for this module.</p>
						</span>
						<span class="infos-options">
							<b>Category:</b>
							Framework
						</span>
						<span class="infos-options">
							<b>Copyright:</b>
							&copy; 2005-2019 PHPBoost
						</span>
						<span class="infos-options">
							<b>License:</b>
							<a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU/GPL-3.0</a>
						</span>
						<span class="infos-options">
							<b>Author:</b>
							Regis VIARRE <a href="&#109;&#x61;&#x69;&#108;&#116;&#x6f;&#x3a;&#99;&#114;&#x6f;w&#107;&#x61;&#x69;&#116;&#64;&#x70;h&#112;&#x62;&#x6f;&#111;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;">&#99;&#114;&#x6f;w&#107;&#x61;&#x69;&#116;&#64;&#x70;h&#112;&#x62;&#x6f;&#111;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;</a>
						</span>
						<span class="infos-options">
							<b>Version:</b>
							PHPBoost 5.2 - last update: 2018 10 26
						</span>
						<span class="infos-options">
							<b>Since:</b>
							PHPBoost 3.0 - 2010 01 22
						</span>
						<span class="infos-options">
							<b>Contributor:</b>
							Julien BRISWALTER <a href="&#x6d;&#x61;&#x69;&#108;&#116;&#111;:&#x6a;&#x31;&#x2e;&#115;&#101;&#116;h&#x40;&#x70;&#x68;&#112;&#98;&#111;o&#x73;&#x74;&#x2e;&#99;&#111;&#109;">&#x6a;&#x31;&#x2e;&#115;&#101;&#116;h&#x40;&#x70;&#x68;&#112;&#98;&#111;o&#x73;&#x74;&#x2e;&#99;&#111;&#109;</a>
						</span>
						<span class="infos-options">
							<b>Contributor:</b>
							Arnaud GENET <a href="&#109;a&#x69;l&#x74;&#111;&#x3a;&#101;&#x6c;&#101;&#x6e;&#119;&#x69;&#105;&#x40;&#112;&#x68;&#112;&#x62;&#111;&#x6f;&#115;&#x74;&#46;&#x63;&#111;m">&#101;&#x6c;&#101;&#x6e;&#119;&#x69;&#105;&#x40;&#112;&#x68;&#112;&#x62;&#111;&#x6f;&#115;&#x74;&#46;&#x63;&#111;m</a>
						</span>
						<span class="infos-options">
							<b>Depre</b>
							
						</span>
					<span class="infos-options">
						<b>Located at</b>
						<a href="source-function-load_module_lang.php#167-207" title="Go to source code">
							deprecated_helper.inc.php
						</a>
				</span>
			</div>



			<div class="responsive-table">
				<table class="summary" id="parameters">
					<caption>Parameters summary</caption>
					<tr id="$module_name">
						<td class="name"><code>string</code></td>
						<td class="value"><code><var>$module_name</var></code></td>
						<td>The identifier of the module for which you want to load the lang file.</td>
					</tr>
					<tr id="$path">
						<td class="name"><code>string</code></td>
						<td class="value"><code><var>$path</var> = PATH_TO_ROOT</code></td>
						<td>of the folder in which is the file. This path mustn't finish by the / character.</td>
					</tr>
				</table>
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
	<script>jQuery("#cssmenu-functions").menumaker({ title: "Functions navigation", format: "multitoggle", breakpoint: 768 }); </script>
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>