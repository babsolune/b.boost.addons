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
					<li><a href="function-load_module_lang.php" class="cssmenu-title deprecated">load_module_lang</a></li>
					<li class="active"><a href="function-retrieve.php" class="cssmenu-title deprecated">retrieve</a></li>
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
		<header><h2>retrieve</h2></header>
		<div class="content">

			<div class="options infos">
				
				<span class="infos-options"><b>Package:</b> <a href="package-Helper.php">Helper</a></span>
						<span class="infos-options">
							<b>Deprecated:</b>
							Retrieves an input variable. You can retrieve any parameter of the HTTP request which launched the execution of this page.
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
						<b>Located at</b>
						<a href="source-function-retrieve.php#38-145" title="Go to source code">
							deprecated_helper.inc.php
						</a>
				</span>
			</div>



			<div class="responsive-table">
				<table class="summary" id="parameters">
					<caption>Parameters summary</caption>
					<tr id="$var_type">
						<td class="name"><code>integer</code></td>
						<td class="value"><code><var>$var_type</var></code></td>
						<td>&lt;p&gt;The origin of the variable: GET if it's a parameter in the request URL, POST if the variable was in a formulary,
COOKIE if the variables come from a cookie and FILES if it's a file.&lt;/p&gt;</td>
					</tr>
					<tr id="$var_name">
						<td class="name"><code>string</code></td>
						<td class="value"><code><var>$var_name</var></code></td>
						<td>Name of a HTTP variable you want to retrieve.</td>
					</tr>
					<tr id="$default_value">
						<td class="name"><code>mixed</code></td>
						<td class="value"><code><var>$default_value</var></code></td>
						<td>The value you want the variable you retrieve has if the HTTP parameter doesn't exist.</td>
					</tr>
					<tr id="$force_type">
						<td class="name"><code>string</code></td>
						<td class="value"><code><var>$force_type</var> = <span class="php-keyword1">NULL</span></code></td>
						<td>&lt;p&gt;Type of the variable you want to retrieve. If you don't use this parameter, the returned variable will have the same type as the default value you imposed.
When you force the variable type, a cast operation will be made from string (it's a string in the HTTP request) to the type you choosed.
The types you can use are numerous:&lt;/p&gt;

&lt;ul&gt;
    &lt;li&gt;TINTEGER to retrieve an integer value.&lt;/li&gt;
    &lt;li&gt;TSTRING to retrieve a string. The HTML code in this string is protected (XSS protection) and the dangerous MySQL characters are escaped. You can use this variable directly in a MySQL query.
It you want to use it now without inserting it in a data base, use the stripslashes PHP function.&lt;/li&gt;
    &lt;li&gt;TSTRING_UNCHANGE if you want to retrieve the value of a string without any processing (no quotes escaping and no HTML protection).&lt;/li&gt;
    &lt;li&gt;TSTRING_PARSE if you want to parse the value you retrieved. The HTML code is protected, it parses with the user parser and the quotes are escaped. Ready to be inserted in a MySQL query !&lt;/li&gt;
    &lt;li&gt;TBOOL to retrieve a boolean value.&lt;/li&gt;
    &lt;li&gt;TUNSIGNED_INT if you expect an unsigned integer.&lt;/li&gt;
    &lt;li&gt;TUNSIGNED_DOUBLE to retrieve an unsigned double value.&lt;/li&gt;
    &lt;li&gt;TSTRING_HTML if you don't want to protect the HTML code of the content but you want to escape the quotes.&lt;/li&gt;
    &lt;li&gt;TSTRING_AS_RECEIVED if you want to retrieve the string variable as it was in the HTTP request. &lt;/li&gt;
    &lt;li&gt;TARRAY to retrieve an array. The values it contains aren't processed.&lt;/li&gt;
    &lt;li&gt;TDOUBLE to retrieve a double value&lt;/li&gt;
    &lt;li&gt;TNONE if you want to get the input variable as it has been recieved (the return value will be a string because HTTP parameters are all strings).&lt;/li&gt;
&lt;/ul&gt;</td>
					</tr>
					<tr id="$flags">
						<td class="name"><code>integer</code></td>
						<td class="value"><code><var>$flags</var> = <span class="php-num">0</span></code></td>
						<td>You can change the behaviour of this method: USE_DEFAULT_IF_EMPTY will allow you to retrieve the default value even if the parameter exists but its value is empty (to know if the var is empty, we use the empty() PHP function).</td>
					</tr>
				</table>
			</div>

			<div class="responsive-table">
				<table class="summary" id="returns">
					<caption>Return value summary</caption>
					<tr>
						<td class="name"><code>
							mixed
						</code></td>
						<td>
							The value of the variable you wanted to retrieve. Its type is either the same as the default value or the type you forced.
						</td>
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