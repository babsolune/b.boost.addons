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
					<li class="active"><a href="class-AbstractCategoriesManageController.php" class="cssmenu-title">AbstractCategoriesManageController</a></li>
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
<span>Class</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section id="content" class="class">
	<header>
		<h1>Class</h1>
	</header>
	<article>
		<header><h2>AbstractCategoriesManageController</h2></header>
		<div class="content">

			<div class="options infos">
				<span class="infos-options"><b>Abstract</b></span>
				
				
				<span class="infos-options"><b>Package:</b> <a href="package-Content.php">Content</a>\<a href="package-Content.Category.php">Category</a>\<a href="package-Content.Category.controllers.php">controllers</a></span>

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
							Kevin MASSY <a href="&#109;&#x61;&#x69;&#108;&#x74;&#x6f;&#58;&#x72;&#x65;&#105;&#x64;&#x6c;&#111;&#x73;&#x40;&#112;&#x68;&#x70;&#98;&#x6f;&#x6f;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;">&#x72;&#x65;&#105;&#x64;&#x6c;&#111;&#x73;&#x40;&#112;&#x68;&#x70;&#98;&#x6f;&#x6f;&#115;&#x74;&#x2e;&#99;&#x6f;&#x6d;</a>
						</span>
						<span class="infos-options">
							<b>Version:</b>
							PHPBoost 5.2 - last update: 2017 08 22
						</span>
						<span class="infos-options">
							<b>Since:</b>
							PHPBoost 4.0 - 2013 02 11
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
							<b>Contributor:</b>
							janus57 <a href="&#109;&#x61;&#105;&#x6c;&#116;&#x6f;&#58;&#x6a;&#97;&#x6e;&#117;&#x73;&#53;&#x37;&#64;&#x6a;&#97;&#x6e;&#117;&#x73;&#53;&#x37;&#46;&#x66;&#114;">&#x6a;&#97;&#x6e;&#117;&#x73;&#53;&#x37;&#64;&#x6a;&#97;&#x6e;&#117;&#x73;&#53;&#x37;&#46;&#x66;&#114;</a>
						</span>
					<span class="infos-options"><b>Located at:</b> <a href="source-class-AbstractCategoriesManageController.php#3-214" title="Go to source code">AbstractCategoriesManageController.class.php</a></span>
			</div>


			<dl class="tree">
				<dd style="padding-left:0px">
ModuleController
					
					
				</dd>
				<dd style="padding-left:30px">
					<img src="resources/inherit.png" alt="Extended by">
<b><span>AbstractCategoriesManageController</span></b>					
					
					
				</dd>
			</dl>







		</div>

		<div class="content">


			<div class="responsive-table">
				<table class="summary methods" id="methods">
					<caption>Methods summary</caption>
			<tr data-order="execute" id="_execute">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_execute">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#21-32" title="Go to source code">execute</a>( <span>HTTPRequestCustom <var>$request</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_title" id="_get_title">

				<td class="attributes">
					<code>
						 protected 

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_title">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#136-142" title="Go to source code">get_title</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									string<br>Page title
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_delete_confirmation_message" id="_get_delete_confirmation_message">

				<td class="attributes">
					<code>
						 protected 

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_delete_confirmation_message">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#144-150" title="Go to source code">get_delete_confirmation_message</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									string<br>Delete category confirmation message
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="generate_response" id="_generate_response">

				<td class="attributes">
					<code>
						 protected 

						Response
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_generate_response">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#152-170" title="Go to source code">generate_response</a>( <span>View <var>$view</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$view</var></dt>
									<dd></dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									Response
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_categories_manager" id="_get_categories_manager">

				<td class="attributes">
					<code>
						abstract protected 

						CategoriesManager
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_categories_manager">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#172-175" title="Go to source code">get_categories_manager</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									CategoriesManager
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_display_category_url" id="_get_display_category_url">

				<td class="attributes">
					<code>
						abstract protected 

						Url
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_display_category_url">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#177-181" title="Go to source code">get_display_category_url</a>( <span>Category <var>$category</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$category</var></dt>
									<dd>Category</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									Url
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_edit_category_url" id="_get_edit_category_url">

				<td class="attributes">
					<code>
						abstract protected 

						Url
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_edit_category_url">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#183-187" title="Go to source code">get_edit_category_url</a>( <span>Category <var>$category</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$category</var></dt>
									<dd>Category</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									Url
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_delete_category_url" id="_get_delete_category_url">

				<td class="attributes">
					<code>
						abstract protected 

						Url
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_delete_category_url">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#189-193" title="Go to source code">get_delete_category_url</a>( <span>Category <var>$category</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$category</var></dt>
									<dd>Category</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									Url
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_categories_management_url" id="_get_categories_management_url">

				<td class="attributes">
					<code>
						abstract protected 

						Url
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_categories_management_url">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#195-198" title="Go to source code">get_categories_management_url</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									Url
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_module_home_page_url" id="_get_module_home_page_url">

				<td class="attributes">
					<code>
						abstract protected 

						Url
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_module_home_page_url">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#200-203" title="Go to source code">get_module_home_page_url</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									Url
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_module_home_page_title" id="_get_module_home_page_title">

				<td class="attributes">
					<code>
						abstract protected 

						string
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_module_home_page_title">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#205-208" title="Go to source code">get_module_home_page_title</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									string<br>module home page title
								</div>




						</div>
					</div>
				</td>
			</tr>
			<tr data-order="check_authorizations" id="_check_authorizations">

				<td class="attributes">
					<code>
						abstract protected 

						boolean
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_check_authorizations">#</a>
						<code>
<a href="source-class-AbstractCategoriesManageController.php#210-213" title="Go to source code">check_authorizations</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									boolean<br>Authorization to manage categories
								</div>




						</div>
					</div>
				</td>
			</tr>
				</table>
			</div>

			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>


			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>




			<div class="responsive-table">
			</div>



			<div class="responsive-table">
				<table class="summary properties" id="properties">
					<caption>Properties summary</caption>
			<tr data-order="lang" id="$lang">
				<td class="attributes">
					<code>
						protected  
						
					</code>
				</td>

				<td class="name">
						<a href="source-class-AbstractCategoriesManageController.php#18" title="Go to source code"><var>$lang</var></a>

					<div class="description short">
						
					</div>

					<div class="description detailed hidden">
						

					</div>
				</td>
				<td class="value">
					<div>
						<a href="#$lang" class="anchor">#</a>
						<code></code>
					</div>
				</td>
			</tr>
			<tr data-order="tpl" id="$tpl">
				<td class="attributes">
					<code>
						protected  
						
					</code>
				</td>

				<td class="name">
						<a href="source-class-AbstractCategoriesManageController.php#19" title="Go to source code"><var>$tpl</var></a>

					<div class="description short">
						
					</div>

					<div class="description detailed hidden">
						

					</div>
				</td>
				<td class="value">
					<div>
						<a href="#$tpl" class="anchor">#</a>
						<code></code>
					</div>
				</td>
			</tr>
				</table>
			</div>

			<div class="responsive-table">
			</div>

			<div class="responsive-table">
			</div>


			<div class="responsive-table">
			</div>

			<div class="responsive-table">
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
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>