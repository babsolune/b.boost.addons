<?php require_once('../documentation_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul clas="level-0">
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Builder.Form.php">
							Form						</a>

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
					<li class="active"><a href="class-HTMLForm.php" class="cssmenu-title">HTMLForm</a></li>
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
		<header><h2>HTMLForm</h2></header>
		<div class="content">

			<div class="options infos">
				
				
				
				<span class="infos-options"><b>Package:</b> <a href="package-Builder.php">Builder</a>\<a href="package-Builder.Form.php">Form</a></span>

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
					<span class="infos-options"><b>Located at:</b> <a href="source-class-HTMLForm.php#15-453" title="Go to source code">HTMLForm.class.php</a></span>
			</div>

			<div class="description">
				<p>This class enables you to handle all the operations regarding forms. Indeed, you build a
form using object components (fieldsets, fields, buttons) and it's able to display, to retrieve
the posted values and also validate the entered data from constraints you define. The validation
is done in PHP when the form is received, but also in live thanks to Javascript (each field is
validated when it looses the focus and the whole form is validated when the user submits it).</p>
			</div>

			<dl class="tree">
				<dd style="padding-left:0px">
<b><span>HTMLForm</span></b>					
					 implements 
<span>HTMLElement</span>
					
					
				</dd>
			</dl>










			<table class="summary methods" id="methods">
				<caption>Methods summary</caption>
			<tr data-order="__construct" id="___construct">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#___construct">#</a>
						<code>
<a href="source-class-HTMLForm.php#75-91" title="Go to source code">__construct</a>( <span>string <var>$html_id</var></span>, <span>string <var>$target</var> = <span class="php-quote">''</span></span>, <span>boolean <var>$enable_captcha_protection</var> = <span class="php-keyword1">true</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$html_id</var></dt>
									<dd>The HTML name of the form</dd>
									<dt><var>$target</var></dt>
									<dd>The url where the form sends data</dd>
									<dt><var>$enable_captcha_protection</var></dt>
									<dd>True if the CAPTCHA is enabled</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Constructs a HTMLForm object<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="move_captcha_protection_in_last_position" id="_move_captcha_protection_in_last_position">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_move_captcha_protection_in_last_position">#</a>
						<code>
<a href="source-class-HTMLForm.php#100-107" title="Go to source code">move_captcha_protection_in_last_position</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="add_fieldset" id="_add_fieldset">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_add_fieldset">#</a>
						<code>
<a href="source-class-HTMLForm.php#109-117" title="Go to source code">add_fieldset</a>( <span>FormFieldset <var>$fieldset</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$fieldset</var></dt>
									<dd>fieldset to add</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Adds fieldset in the form<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="add_constraint" id="_add_constraint">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_add_constraint">#</a>
						<code>
<a href="source-class-HTMLForm.php#119-126" title="Go to source code">add_constraint</a>( <span>FormConstraint <var>$constraint</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$constraint</var></dt>
									<dd>The constraint to add</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Adds a constraint on the form. This kind of constraints are rules regarding several fields.<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="add_button" id="_add_button">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_add_button">#</a>
						<code>
<a href="source-class-HTMLForm.php#128-136" title="Go to source code">add_button</a>( <span>FormButton <var>$button</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$button</var></dt>
									<dd>The button to add</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Adds a button to the form<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_value" id="_get_value">

				<td class="attributes">
					<code>
						 public 

						mixed
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_value">#</a>
						<code>
<a href="source-class-HTMLForm.php#138-161" title="Go to source code">get_value</a>( <span>string <var>$field_id</var></span>, <span> <var>$default_value</var> = <span class="php-keyword1">null</span></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$field_id</var></dt>
									<dd>The HTML id of the field and string $default_value The default value</dd>
									<dt><var>$default_value</var></dt>
									<dd></dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									mixed<br>The value of the field (the type depends of the field)
								</div>

								<h6>Throws</h6>
								<div class="list">
									FormBuilderException
								</div>

								<h6>Desc</h6>
								<div class="list">
										Returns the value of a form field.<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="field_is_disabled" id="_field_is_disabled">

				<td class="attributes">
					<code>
						 public 

						Boolean
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_field_is_disabled">#</a>
						<code>
<a href="source-class-HTMLForm.php#163-176" title="Go to source code">field_is_disabled</a>( <span>string <var>$field_id</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$field_id</var></dt>
									<dd>The HTML id of the field and string $default_value The default value</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									Boolean<br>true if field is disabled
								</div>


								<h6>Desc</h6>
								<div class="list">
										Returns true if field is disabled<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="has_field" id="_has_field">

				<td class="attributes">
					<code>
						 public 

						mixed
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_has_field">#</a>
						<code>
<a href="source-class-HTMLForm.php#178-190" title="Go to source code">has_field</a>( <span>string <var>$field_id</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$field_id</var></dt>
									<dd>The HTML id of the field</dd>
								</dl></div>

								<h6>Returns</h6>
								<div class="list">
									mixed<br>true if the $field_id is in the form, false otherwise
								</div>


								<h6>Desc</h6>
								<div class="list">
										Returns true if the $field_id is in the form.<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_field_by_id" id="_get_field_by_id">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_field_by_id">#</a>
						<code>
<a href="source-class-HTMLForm.php#192-203" title="Go to source code">get_field_by_id</a>( <span> <var>$field_id</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="display" id="_display">

				<td class="attributes">
					<code>
						 public 

						Template
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_display">#</a>
						<code>
<a href="source-class-HTMLForm.php#218-286" title="Go to source code">display</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									Template<br>The template containing all the form elements which is ready to be displayed.
								</div>


								<h6>Desc</h6>
								<div class="list">
										Displays the form<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="validate" id="_validate">

				<td class="attributes">
					<code>
						 public 

						boolean
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_validate">#</a>
						<code>
<a href="source-class-HTMLForm.php#318-342" title="Go to source code">validate</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							



								<h6>Returns</h6>
								<div class="list">
									boolean<br>true if the form is valid, false otherwise
								</div>


								<h6>Desc</h6>
								<div class="list">
										<p>Validates the form from all its constraints. If the constraints are satisfied, the
validation errors will be displayed at the top of the form.</p><br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="set_html_id" id="_set_html_id">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_set_html_id">#</a>
						<code>
<a href="source-class-HTMLForm.php#344-351" title="Go to source code">set_html_id</a>( <span>string <var>$html_id</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$html_id</var></dt>
									<dd>the HTML id</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Sets the form's HTML id<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="get_html_id" id="_get_html_id">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_get_html_id">#</a>
						<code>
<a href="source-class-HTMLForm.php#353-356" title="Go to source code">get_html_id</a>( )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							







						</div>
					</div>
				</td>
			</tr>
			<tr data-order="set_target" id="_set_target">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_set_target">#</a>
						<code>
<a href="source-class-HTMLForm.php#358-372" title="Go to source code">set_target</a>( <span>string <var>$target</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$target</var></dt>
									<dd>The URL at which the form will be submited</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Sets the form's target<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="set_css_class" id="_set_css_class">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_set_css_class">#</a>
						<code>
<a href="source-class-HTMLForm.php#374-382" title="Go to source code">set_css_class</a>( <span>string <var>$css_class</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$css_class</var></dt>
									<dd><p>The CSS class (see the HTMLForm::SMALL_CSS_CLASS and
HTMLForm::NORMAL_CSS_CLASS constants)</p></dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Sets the form's CSS class<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="set_method" id="_set_method">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_set_method">#</a>
						<code>
<a href="source-class-HTMLForm.php#384-398" title="Go to source code">set_method</a>( <span>string <var>$method</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$method</var></dt>
									<dd>The method name (HTMLForm::HTTP_METHOD_POST or HTMLForm::HTTP_METHOD_POST).</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										Sets the HTTP method with which the form will be submited<br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			<tr data-order="set_template" id="_set_template">

				<td class="attributes">
					<code>
						 public 

						
						
					</code>
				</td>

				<td class="name">
					<div>
						<a class="anchor" href="#_set_template">#</a>
						<code>
<a href="source-class-HTMLForm.php#400-408" title="Go to source code">set_template</a>( <span>Template <var>$template</var></span> )
						</code>

							<div class="description short">
								
							</div>

						<div class="description detailed hidden">
							


								<h6>Parameters</h6>
								<div class="list"><dl>
									<dt><var>$template</var></dt>
									<dd>The template to use</dd>
								</dl></div>



								<h6>Desc</h6>
								<div class="list">
										<p>Sets the template to use to display the form. If this method is not called,
a default template will be used (</p>

<pre>/template/<span class="php-keyword1">default</span>/framework/builder/form/Form.tpl</pre>

<p>).</p><br>
								</div>


						</div>
					</div>
				</td>
			</tr>
			</table>








			<table class="summary constants" id="constants">
				<caption>Constants summary</caption>
				<tr data-order="HTTP_METHOD_POST" id="HTTP_METHOD_POST">

					<td class="attributes"><code>string</code></td>
					<td class="name">
						<code>
							<a href="source-class-HTMLForm.php#24" title="Go to source code"><b>HTTP_METHOD_POST</b></a>
						</code>

						<div class="description short">
							
						</div>

						<div class="description detailed hidden">
							

						</div>
					</td>
					<td class="value">
						<div>
							<a href="#HTTP_METHOD_POST" class="anchor">#</a>
							<code><span class="php-quote">'post'</span></code>
						</div>
					</td>
				</tr>
				<tr data-order="HTTP_METHOD_GET" id="HTTP_METHOD_GET">

					<td class="attributes"><code>string</code></td>
					<td class="name">
						<code>
							<a href="source-class-HTMLForm.php#25" title="Go to source code"><b>HTTP_METHOD_GET</b></a>
						</code>

						<div class="description short">
							
						</div>

						<div class="description detailed hidden">
							

						</div>
					</td>
					<td class="value">
						<div>
							<a href="#HTTP_METHOD_GET" class="anchor">#</a>
							<code><span class="php-quote">'get'</span></code>
						</div>
					</td>
				</tr>
				<tr data-order="SMALL_CSS_CLASS" id="SMALL_CSS_CLASS">

					<td class="attributes"><code>string</code></td>
					<td class="name">
						<code>
							<a href="source-class-HTMLForm.php#27" title="Go to source code"><b>SMALL_CSS_CLASS</b></a>
						</code>

						<div class="description short">
							
						</div>

						<div class="description detailed hidden">
							

						</div>
					</td>
					<td class="value">
						<div>
							<a href="#SMALL_CSS_CLASS" class="anchor">#</a>
							<code><span class="php-quote">'fieldset-mini'</span></code>
						</div>
					</td>
				</tr>
				<tr data-order="NORMAL_CSS_CLASS" id="NORMAL_CSS_CLASS">

					<td class="attributes"><code>string</code></td>
					<td class="name">
						<code>
							<a href="source-class-HTMLForm.php#28" title="Go to source code"><b>NORMAL_CSS_CLASS</b></a>
						</code>

						<div class="description short">
							
						</div>

						<div class="description detailed hidden">
							

						</div>
					</td>
					<td class="value">
						<div>
							<a href="#NORMAL_CSS_CLASS" class="anchor">#</a>
							<code><span class="php-quote">'fieldset-content'</span></code>
						</div>
					</td>
				</tr>
			</table>










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