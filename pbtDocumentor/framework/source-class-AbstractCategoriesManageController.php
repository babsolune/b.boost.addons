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
		<h1>File AbstractCategoriesManageController.class.php</h1>
	</header>
	<article>
		<header><h2>File AbstractCategoriesManageController.class.php</h2></header>
		<div class="content">
			<div class="code-capsule">
	            <pre class="numbers"><code><span class="l"><a href="#1">  1: </a></span><span class="l"><a href="#2">  2: </a></span></span><span class="l"><a href="#3">  3: </a></span></span><span class="l"><a href="#4">  4: </a></span></span><span class="l"><a href="#5">  5: </a></span></span><span class="l"><a href="#6">  6: </a></span></span><span class="l"><a href="#7">  7: </a></span></span><span class="l"><a href="#8">  8: </a></span></span><span class="l"><a href="#9">  9: </a></span></span><span class="l"><a href="#10"> 10: </a></span></span><span class="l"><a href="#11"> 11: </a></span></span><span class="l"><a href="#12"> 12: </a></span></span><span class="l"><a href="#13"> 13: </a></span></span><span class="l"><a href="#14"> 14: </a></span><span class="l"><a href="#15"> 15: </a></span><span class="l"><a href="#16"> 16: </a></span><span class="l"><a href="#17"> 17: </a></span><span class="l"><a href="#18"> 18: </a></span><span class="l"><a href="#19"> 19: </a></span><span class="l"><a href="#20"> 20: </a></span><span class="l"><a href="#21"> 21: </a></span><span class="l"><a href="#22"> 22: </a></span><span class="l"><a href="#23"> 23: </a></span><span class="l"><a href="#24"> 24: </a></span><span class="l"><a href="#25"> 25: </a></span><span class="l"><a href="#26"> 26: </a></span><span class="l"><a href="#27"> 27: </a></span><span class="l"><a href="#28"> 28: </a></span><span class="l"><a href="#29"> 29: </a></span><span class="l"><a href="#30"> 30: </a></span><span class="l"><a href="#31"> 31: </a></span><span class="l"><a href="#32"> 32: </a></span><span class="l"><a href="#33"> 33: </a></span><span class="l"><a href="#34"> 34: </a></span><span class="l"><a href="#35"> 35: </a></span><span class="l"><a href="#36"> 36: </a></span><span class="l"><a href="#37"> 37: </a></span><span class="l"><a href="#38"> 38: </a></span><span class="l"><a href="#39"> 39: </a></span><span class="l"><a href="#40"> 40: </a></span><span class="l"><a href="#41"> 41: </a></span><span class="l"><a href="#42"> 42: </a></span><span class="l"><a href="#43"> 43: </a></span><span class="l"><a href="#44"> 44: </a></span><span class="l"><a href="#45"> 45: </a></span><span class="l"><a href="#46"> 46: </a></span><span class="l"><a href="#47"> 47: </a></span><span class="l"><a href="#48"> 48: </a></span><span class="l"><a href="#49"> 49: </a></span><span class="l"><a href="#50"> 50: </a></span><span class="l"><a href="#51"> 51: </a></span><span class="l"><a href="#52"> 52: </a></span><span class="l"><a href="#53"> 53: </a></span><span class="l"><a href="#54"> 54: </a></span><span class="l"><a href="#55"> 55: </a></span><span class="l"><a href="#56"> 56: </a></span><span class="l"><a href="#57"> 57: </a></span><span class="l"><a href="#58"> 58: </a></span><span class="l"><a href="#59"> 59: </a></span><span class="l"><a href="#60"> 60: </a></span><span class="l"><a href="#61"> 61: </a></span><span class="l"><a href="#62"> 62: </a></span><span class="l"><a href="#63"> 63: </a></span><span class="l"><a href="#64"> 64: </a></span><span class="l"><a href="#65"> 65: </a></span><span class="l"><a href="#66"> 66: </a></span><span class="l"><a href="#67"> 67: </a></span><span class="l"><a href="#68"> 68: </a></span><span class="l"><a href="#69"> 69: </a></span><span class="l"><a href="#70"> 70: </a></span><span class="l"><a href="#71"> 71: </a></span><span class="l"><a href="#72"> 72: </a></span><span class="l"><a href="#73"> 73: </a></span><span class="l"><a href="#74"> 74: </a></span><span class="l"><a href="#75"> 75: </a></span><span class="l"><a href="#76"> 76: </a></span><span class="l"><a href="#77"> 77: </a></span><span class="l"><a href="#78"> 78: </a></span><span class="l"><a href="#79"> 79: </a></span><span class="l"><a href="#80"> 80: </a></span><span class="l"><a href="#81"> 81: </a></span><span class="l"><a href="#82"> 82: </a></span><span class="l"><a href="#83"> 83: </a></span><span class="l"><a href="#84"> 84: </a></span><span class="l"><a href="#85"> 85: </a></span><span class="l"><a href="#86"> 86: </a></span><span class="l"><a href="#87"> 87: </a></span><span class="l"><a href="#88"> 88: </a></span><span class="l"><a href="#89"> 89: </a></span><span class="l"><a href="#90"> 90: </a></span><span class="l"><a href="#91"> 91: </a></span><span class="l"><a href="#92"> 92: </a></span><span class="l"><a href="#93"> 93: </a></span><span class="l"><a href="#94"> 94: </a></span><span class="l"><a href="#95"> 95: </a></span><span class="l"><a href="#96"> 96: </a></span><span class="l"><a href="#97"> 97: </a></span><span class="l"><a href="#98"> 98: </a></span><span class="l"><a href="#99"> 99: </a></span><span class="l"><a href="#100">100: </a></span><span class="l"><a href="#101">101: </a></span><span class="l"><a href="#102">102: </a></span><span class="l"><a href="#103">103: </a></span><span class="l"><a href="#104">104: </a></span><span class="l"><a href="#105">105: </a></span><span class="l"><a href="#106">106: </a></span><span class="l"><a href="#107">107: </a></span><span class="l"><a href="#108">108: </a></span><span class="l"><a href="#109">109: </a></span><span class="l"><a href="#110">110: </a></span><span class="l"><a href="#111">111: </a></span><span class="l"><a href="#112">112: </a></span><span class="l"><a href="#113">113: </a></span><span class="l"><a href="#114">114: </a></span><span class="l"><a href="#115">115: </a></span><span class="l"><a href="#116">116: </a></span><span class="l"><a href="#117">117: </a></span><span class="l"><a href="#118">118: </a></span><span class="l"><a href="#119">119: </a></span><span class="l"><a href="#120">120: </a></span><span class="l"><a href="#121">121: </a></span><span class="l"><a href="#122">122: </a></span><span class="l"><a href="#123">123: </a></span><span class="l"><a href="#124">124: </a></span><span class="l"><a href="#125">125: </a></span><span class="l"><a href="#126">126: </a></span><span class="l"><a href="#127">127: </a></span><span class="l"><a href="#128">128: </a></span><span class="l"><a href="#129">129: </a></span><span class="l"><a href="#130">130: </a></span><span class="l"><a href="#131">131: </a></span><span class="l"><a href="#132">132: </a></span><span class="l"><a href="#133">133: </a></span><span class="l"><a href="#134">134: </a></span><span class="l"><a href="#135">135: </a></span><span class="l"><a href="#136">136: </a></span></span><span class="l"><a href="#137">137: </a></span></span><span class="l"><a href="#138">138: </a></span><span class="l"><a href="#139">139: </a></span><span class="l"><a href="#140">140: </a></span><span class="l"><a href="#141">141: </a></span><span class="l"><a href="#142">142: </a></span><span class="l"><a href="#143">143: </a></span><span class="l"><a href="#144">144: </a></span></span><span class="l"><a href="#145">145: </a></span></span><span class="l"><a href="#146">146: </a></span><span class="l"><a href="#147">147: </a></span><span class="l"><a href="#148">148: </a></span><span class="l"><a href="#149">149: </a></span><span class="l"><a href="#150">150: </a></span><span class="l"><a href="#151">151: </a></span><span class="l"><a href="#152">152: </a></span></span><span class="l"><a href="#153">153: </a></span></span><span class="l"><a href="#154">154: </a></span></span><span class="l"><a href="#155">155: </a></span><span class="l"><a href="#156">156: </a></span><span class="l"><a href="#157">157: </a></span><span class="l"><a href="#158">158: </a></span><span class="l"><a href="#159">159: </a></span><span class="l"><a href="#160">160: </a></span><span class="l"><a href="#161">161: </a></span><span class="l"><a href="#162">162: </a></span><span class="l"><a href="#163">163: </a></span><span class="l"><a href="#164">164: </a></span><span class="l"><a href="#165">165: </a></span><span class="l"><a href="#166">166: </a></span><span class="l"><a href="#167">167: </a></span><span class="l"><a href="#168">168: </a></span><span class="l"><a href="#169">169: </a></span><span class="l"><a href="#170">170: </a></span><span class="l"><a href="#171">171: </a></span><span class="l"><a href="#172">172: </a></span></span><span class="l"><a href="#173">173: </a></span></span><span class="l"><a href="#174">174: </a></span><span class="l"><a href="#175">175: </a></span><span class="l"><a href="#176">176: </a></span><span class="l"><a href="#177">177: </a></span></span><span class="l"><a href="#178">178: </a></span></span><span class="l"><a href="#179">179: </a></span></span><span class="l"><a href="#180">180: </a></span><span class="l"><a href="#181">181: </a></span><span class="l"><a href="#182">182: </a></span><span class="l"><a href="#183">183: </a></span></span><span class="l"><a href="#184">184: </a></span></span><span class="l"><a href="#185">185: </a></span></span><span class="l"><a href="#186">186: </a></span><span class="l"><a href="#187">187: </a></span><span class="l"><a href="#188">188: </a></span><span class="l"><a href="#189">189: </a></span></span><span class="l"><a href="#190">190: </a></span></span><span class="l"><a href="#191">191: </a></span></span><span class="l"><a href="#192">192: </a></span><span class="l"><a href="#193">193: </a></span><span class="l"><a href="#194">194: </a></span><span class="l"><a href="#195">195: </a></span></span><span class="l"><a href="#196">196: </a></span></span><span class="l"><a href="#197">197: </a></span><span class="l"><a href="#198">198: </a></span><span class="l"><a href="#199">199: </a></span><span class="l"><a href="#200">200: </a></span></span><span class="l"><a href="#201">201: </a></span></span><span class="l"><a href="#202">202: </a></span><span class="l"><a href="#203">203: </a></span><span class="l"><a href="#204">204: </a></span><span class="l"><a href="#205">205: </a></span></span><span class="l"><a href="#206">206: </a></span></span><span class="l"><a href="#207">207: </a></span><span class="l"><a href="#208">208: </a></span><span class="l"><a href="#209">209: </a></span><span class="l"><a href="#210">210: </a></span></span><span class="l"><a href="#211">211: </a></span></span><span class="l"><a href="#212">212: </a></span><span class="l"><a href="#213">213: </a></span><span class="l"><a href="#214">214: </a></span><span class="l"><a href="#215">215: </a></span><span class="l"><a href="#216">216: </a></span></code></pre>
	            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l"><span class="php-comment">/**
</span></span><span id="3" class="l"><span class="php-comment"> * @package     Content
</span></span><span id="4" class="l"><span class="php-comment"> * @subpackage  Category\controllers
</span></span><span id="5" class="l"><span class="php-comment"> * @category    Framework
</span></span><span id="6" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="7" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="8" class="l"><span class="php-comment"> * @author      Kevin MASSY &lt;reidlos@phpboost.com&gt;
</span></span><span id="9" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2017 08 22
</span></span><span id="10" class="l"><span class="php-comment"> * @since       PHPBoost 4.0 - 2013 02 11
</span></span><span id="11" class="l"><span class="php-comment"> * @contributor Julien BRISWALTER &lt;j1.seth@phpboost.com&gt;
</span></span><span id="12" class="l"><span class="php-comment"> * @contributor Arnaud GENET &lt;elenwii@phpboost.com&gt;
</span></span><span id="13" class="l"><span class="php-comment"> * @contributor janus57 &lt;janus57@janus57.fr&gt;
</span></span><span id="14" class="l"><span class="php-comment">*/</span>
</span><span id="15" class="l">
</span><span id="16" class="l"><span class="php-keyword1">abstract</span> <span class="php-keyword1">class</span> AbstractCategoriesManageController <span class="php-keyword1">extends</span> ModuleController
</span><span id="17" class="l">{
</span><span id="18" class="l">    <span class="php-keyword1">protected</span> <span class="php-var">$lang</span>;
</span><span id="19" class="l">    <span class="php-keyword1">protected</span> <span class="php-var">$tpl</span>;
</span><span id="20" class="l">
</span><span id="21" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> execute(HTTPRequestCustom <span class="php-var">$request</span>)
</span><span id="22" class="l">    {
</span><span id="23" class="l">        <span class="php-var">$this</span>-&gt;check_authorizations();
</span><span id="24" class="l">
</span><span id="25" class="l">        <span class="php-var">$this</span>-&gt;init();
</span><span id="26" class="l">
</span><span id="27" class="l">        <span class="php-var">$this</span>-&gt;update_positions(<span class="php-var">$request</span>);
</span><span id="28" class="l">
</span><span id="29" class="l">        <span class="php-var">$this</span>-&gt;build_view();
</span><span id="30" class="l">
</span><span id="31" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$this</span>-&gt;generate_response(<span class="php-var">$this</span>-&gt;tpl);
</span><span id="32" class="l">    }
</span><span id="33" class="l">
</span><span id="34" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> init()
</span><span id="35" class="l">    {
</span><span id="36" class="l">        <span class="php-var">$this</span>-&gt;lang = LangLoader::get(<span class="php-quote">'categories-common'</span>);
</span><span id="37" class="l">        <span class="php-var">$this</span>-&gt;tpl = <span class="php-keyword1">new</span> FileTemplate(<span class="php-quote">'default/framework/content/categories/manage.tpl'</span>);
</span><span id="38" class="l">        <span class="php-var">$this</span>-&gt;tpl-&gt;add_lang(<span class="php-var">$this</span>-&gt;lang);
</span><span id="39" class="l">    }
</span><span id="40" class="l">
</span><span id="41" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> build_view()
</span><span id="42" class="l">    {
</span><span id="43" class="l">        <span class="php-var">$categories_cache</span> = <span class="php-var">$this</span>-&gt;get_categories_manager()-&gt;get_categories_cache()-&gt;<span class="php-keyword2">get_class</span>();
</span><span id="44" class="l">        <span class="php-var">$categories</span> = <span class="php-var">$categories_cache</span>::load()-&gt;get_categories();
</span><span id="45" class="l">
</span><span id="46" class="l">        <span class="php-var">$number_categories</span> = <span class="php-keyword2">count</span>(<span class="php-var">$categories</span>);
</span><span id="47" class="l">
</span><span id="48" class="l">        <span class="php-var">$this</span>-&gt;tpl-&gt;put_all(<span class="php-keyword1">array</span>(
</span><span id="49" class="l">            <span class="php-quote">'C_NO_CATEGORIES'</span> =&gt; <span class="php-var">$number_categories</span> &lt;= <span class="php-num">1</span>,
</span><span id="50" class="l">            <span class="php-quote">'C_MORE_THAN_ONE_CATEGORY'</span> =&gt; <span class="php-var">$number_categories</span> &gt; <span class="php-num">2</span>, <span class="php-comment">// Root category is not displayed, but taken into account in the calculation</span>
</span><span id="51" class="l">            <span class="php-quote">'FIELDSET_TITLE'</span> =&gt; <span class="php-var">$this</span>-&gt;get_title()
</span><span id="52" class="l">        ));
</span><span id="53" class="l">
</span><span id="54" class="l">        <span class="php-var">$this</span>-&gt;build_children_view(<span class="php-var">$this</span>-&gt;tpl, <span class="php-var">$categories</span>, Category::ROOT_CATEGORY);
</span><span id="55" class="l">    }
</span><span id="56" class="l">
</span><span id="57" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> build_children_view(<span class="php-var">$template</span>, <span class="php-var">$categories</span>, <span class="php-var">$id_parent</span>)
</span><span id="58" class="l">    {
</span><span id="59" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$categories</span> <span class="php-keyword1">as</span> <span class="php-var">$id</span> =&gt; <span class="php-var">$category</span>)
</span><span id="60" class="l">        {
</span><span id="61" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$category</span>-&gt;get_id_parent() == <span class="php-var">$id_parent</span> &amp;&amp; <span class="php-var">$id</span> != Category::ROOT_CATEGORY)
</span><span id="62" class="l">            {
</span><span id="63" class="l">                <span class="php-var">$description</span> = <span class="php-quote">''</span>;
</span><span id="64" class="l">                <span class="php-keyword1">if</span> (<span class="php-keyword2">method_exists</span>(<span class="php-var">$category</span>, <span class="php-quote">'get_description'</span>))
</span><span id="65" class="l">                {
</span><span id="66" class="l">                    <span class="php-var">$description</span> = FormatingHelper::second_parse(<span class="php-var">$category</span>-&gt;get_description());
</span><span id="67" class="l">                    <span class="php-var">$description</span> = TextHelper::<span class="php-keyword2">strlen</span>(<span class="php-var">$description</span>) &gt; <span class="php-num">250</span> ? TextHelper::cut_string(@<span class="php-keyword2">strip_tags</span>(<span class="php-var">$description</span>, <span class="php-quote">'&lt;br&gt;&lt;br/&gt;'</span>), <span class="php-num">250</span>) . <span class="php-quote">'...'</span> : <span class="php-var">$description</span>;
</span><span id="68" class="l">                }
</span><span id="69" class="l">
</span><span id="70" class="l">                <span class="php-var">$description_exists</span> = <span class="php-keyword2">method_exists</span>(<span class="php-var">$category</span>, <span class="php-quote">'get_description'</span>);
</span><span id="71" class="l">                <span class="php-var">$category_view</span> = <span class="php-keyword1">new</span> FileTemplate(<span class="php-quote">'default/framework/content/categories/category.tpl'</span>);
</span><span id="72" class="l">                <span class="php-var">$category_view</span>-&gt;add_lang(<span class="php-var">$this</span>-&gt;lang);
</span><span id="73" class="l">                <span class="php-var">$category_view</span>-&gt;put_all(<span class="php-keyword1">array</span>(
</span><span id="74" class="l">                    <span class="php-quote">'C_DESCRIPTION'</span> =&gt; !<span class="php-keyword1">empty</span>(<span class="php-var">$description</span>),
</span><span id="75" class="l">                    <span class="php-quote">'C_ALLOWED_TO_HAVE_CHILDS'</span> =&gt; <span class="php-var">$category</span>-&gt;is_allowed_to_have_childs(),
</span><span id="76" class="l">                    <span class="php-quote">'U_DISPLAY'</span> =&gt; <span class="php-var">$this</span>-&gt;get_display_category_url(<span class="php-var">$category</span>)-&gt;rel(),
</span><span id="77" class="l">                    <span class="php-quote">'U_EDIT'</span> =&gt; <span class="php-var">$this</span>-&gt;get_edit_category_url(<span class="php-var">$category</span>)-&gt;rel(),
</span><span id="78" class="l">                    <span class="php-quote">'U_DELETE'</span> =&gt; <span class="php-var">$this</span>-&gt;get_delete_category_url(<span class="php-var">$category</span>)-&gt;rel(),
</span><span id="79" class="l">                    <span class="php-quote">'ID'</span> =&gt; <span class="php-var">$id</span>,
</span><span id="80" class="l">                    <span class="php-quote">'NAME'</span> =&gt; <span class="php-var">$category</span>-&gt;get_name(),
</span><span id="81" class="l">                    <span class="php-quote">'DESCRIPTION'</span> =&gt; <span class="php-var">$description</span>,
</span><span id="82" class="l">                    <span class="php-quote">'DELETE_CONFIRMATION_MESSAGE'</span> =&gt; StringVars::replace_vars(<span class="php-var">$this</span>-&gt;get_delete_confirmation_message(), <span class="php-keyword1">array</span>(<span class="php-quote">'name'</span> =&gt; <span class="php-var">$category</span>-&gt;get_name()))
</span><span id="83" class="l">                ));
</span><span id="84" class="l">
</span><span id="85" class="l">                <span class="php-var">$this</span>-&gt;build_children_view(<span class="php-var">$category_view</span>, <span class="php-var">$categories</span>, <span class="php-var">$id</span>);
</span><span id="86" class="l">
</span><span id="87" class="l">                <span class="php-var">$template</span>-&gt;assign_block_vars(<span class="php-quote">'children'</span>, <span class="php-keyword1">array</span>(<span class="php-quote">'child'</span> =&gt; <span class="php-var">$category_view</span>-&gt;render()));
</span><span id="88" class="l">            }
</span><span id="89" class="l">        }
</span><span id="90" class="l">    }
</span><span id="91" class="l">
</span><span id="92" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> update_positions(HTTPRequestCustom <span class="php-var">$request</span>)
</span><span id="93" class="l">    {
</span><span id="94" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$request</span>-&gt;get_postvalue(<span class="php-quote">'submit'</span>, <span class="php-keyword1">false</span>))
</span><span id="95" class="l">        {
</span><span id="96" class="l">            <span class="php-var">$categories</span> = <span class="php-keyword2">json_decode</span>(TextHelper::<span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$request</span>-&gt;get_value(<span class="php-quote">'tree'</span>)));
</span><span id="97" class="l">            <span class="php-var">$categories_cache</span> = <span class="php-var">$this</span>-&gt;get_categories_manager()-&gt;get_categories_cache();
</span><span id="98" class="l">
</span><span id="99" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$categories</span> <span class="php-keyword1">as</span> <span class="php-var">$position</span> =&gt; <span class="php-var">$tree</span>)
</span><span id="100" class="l">            {
</span><span id="101" class="l">                <span class="php-var">$id</span> = <span class="php-var">$tree</span>-&gt;id;
</span><span id="102" class="l">                <span class="php-var">$children</span> = <span class="php-var">$tree</span>-&gt;children[<span class="php-num">0</span>];
</span><span id="103" class="l">                <span class="php-var">$category</span> = <span class="php-var">$categories_cache</span>-&gt;get_category(<span class="php-var">$id</span>);
</span><span id="104" class="l">
</span><span id="105" class="l">                <span class="php-var">$this</span>-&gt;get_categories_manager()-&gt;update_position(<span class="php-var">$category</span>, Category::ROOT_CATEGORY, (<span class="php-var">$position</span> +<span class="php-num">1</span>));
</span><span id="106" class="l">
</span><span id="107" class="l">                <span class="php-var">$this</span>-&gt;update_children_positions(<span class="php-var">$children</span>, <span class="php-var">$category</span>-&gt;get_id());
</span><span id="108" class="l">            }
</span><span id="109" class="l">
</span><span id="110" class="l">            <span class="php-var">$categories_cache</span>::invalidate();
</span><span id="111" class="l">
</span><span id="112" class="l">            <span class="php-var">$this</span>-&gt;tpl-&gt;put(<span class="php-quote">'MSG'</span>, MessageHelper::display(LangLoader::get_message(<span class="php-quote">'message.success.position.update'</span>, <span class="php-quote">'status-messages-common'</span>), MessageHelper::SUCCESS, <span class="php-num">5</span>));
</span><span id="113" class="l">        }
</span><span id="114" class="l">    }
</span><span id="115" class="l">
</span><span id="116" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> update_children_positions(<span class="php-var">$categories</span>, <span class="php-var">$id_parent</span>)
</span><span id="117" class="l">    {
</span><span id="118" class="l">        <span class="php-keyword1">if</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$categories</span>))
</span><span id="119" class="l">        {
</span><span id="120" class="l">            <span class="php-keyword1">foreach</span> (<span class="php-var">$categories</span> <span class="php-keyword1">as</span> <span class="php-var">$position</span> =&gt; <span class="php-var">$tree</span>)
</span><span id="121" class="l">            {
</span><span id="122" class="l">                <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$position</span>))
</span><span id="123" class="l">                {
</span><span id="124" class="l">                    <span class="php-var">$id</span> = <span class="php-var">$tree</span>-&gt;id;
</span><span id="125" class="l">                    <span class="php-var">$children</span> = <span class="php-var">$tree</span>-&gt;children[<span class="php-num">0</span>];
</span><span id="126" class="l">                    <span class="php-var">$category</span> = <span class="php-var">$this</span>-&gt;get_categories_manager()-&gt;get_categories_cache()-&gt;get_category(<span class="php-var">$id</span>);
</span><span id="127" class="l">
</span><span id="128" class="l">                    <span class="php-var">$this</span>-&gt;get_categories_manager()-&gt;update_position(<span class="php-var">$category</span>, <span class="php-var">$id_parent</span>, (<span class="php-var">$position</span> +<span class="php-num">1</span>));
</span><span id="129" class="l">
</span><span id="130" class="l">                    <span class="php-var">$this</span>-&gt;update_children_positions(<span class="php-var">$children</span>, <span class="php-var">$category</span>-&gt;get_id());
</span><span id="131" class="l">                }
</span><span id="132" class="l">            }
</span><span id="133" class="l">        }
</span><span id="134" class="l">    }
</span><span id="135" class="l">
</span><span id="136" class="l">    <span class="php-comment">/**
</span></span><span id="137" class="l"><span class="php-comment">     * @return string Page title
</span></span><span id="138" class="l"><span class="php-comment">     */</span>
</span><span id="139" class="l">    <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_title()
</span><span id="140" class="l">    {
</span><span id="141" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$this</span>-&gt;lang[<span class="php-quote">'categories.management'</span>];
</span><span id="142" class="l">    }
</span><span id="143" class="l">
</span><span id="144" class="l">    <span class="php-comment">/**
</span></span><span id="145" class="l"><span class="php-comment">     * @return string Delete category confirmation message
</span></span><span id="146" class="l"><span class="php-comment">     */</span>
</span><span id="147" class="l">    <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_delete_confirmation_message()
</span><span id="148" class="l">    {
</span><span id="149" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$this</span>-&gt;lang[<span class="php-quote">'category.message.delete_confirmation'</span>];
</span><span id="150" class="l">    }
</span><span id="151" class="l">
</span><span id="152" class="l">    <span class="php-comment">/**
</span></span><span id="153" class="l"><span class="php-comment">     * @param View $view
</span></span><span id="154" class="l"><span class="php-comment">     * @return Response
</span></span><span id="155" class="l"><span class="php-comment">     */</span>
</span><span id="156" class="l">    <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> generate_response(View <span class="php-var">$view</span>)
</span><span id="157" class="l">    {
</span><span id="158" class="l">        <span class="php-var">$response</span> = <span class="php-keyword1">new</span> SiteDisplayResponse(<span class="php-var">$view</span>);
</span><span id="159" class="l">
</span><span id="160" class="l">        <span class="php-var">$graphical_environment</span> = <span class="php-var">$response</span>-&gt;get_graphical_environment();
</span><span id="161" class="l">        <span class="php-var">$graphical_environment</span>-&gt;set_page_title(<span class="php-var">$this</span>-&gt;get_title(), <span class="php-var">$this</span>-&gt;get_module_home_page_title());
</span><span id="162" class="l">        <span class="php-var">$graphical_environment</span>-&gt;get_seo_meta_data()-&gt;set_canonical_url(<span class="php-var">$this</span>-&gt;get_categories_management_url());
</span><span id="163" class="l">
</span><span id="164" class="l">        <span class="php-var">$breadcrumb</span> = <span class="php-var">$graphical_environment</span>-&gt;get_breadcrumb();
</span><span id="165" class="l">        <span class="php-var">$breadcrumb</span>-&gt;add(<span class="php-var">$this</span>-&gt;get_module_home_page_title(), <span class="php-var">$this</span>-&gt;get_module_home_page_url());
</span><span id="166" class="l">
</span><span id="167" class="l">        <span class="php-var">$breadcrumb</span>-&gt;add(<span class="php-var">$this</span>-&gt;get_title(), <span class="php-var">$this</span>-&gt;get_categories_management_url());
</span><span id="168" class="l">
</span><span id="169" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$response</span>;
</span><span id="170" class="l">    }
</span><span id="171" class="l">
</span><span id="172" class="l">    <span class="php-comment">/**
</span></span><span id="173" class="l"><span class="php-comment">     * @return CategoriesManager
</span></span><span id="174" class="l"><span class="php-comment">     */</span>
</span><span id="175" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_categories_manager();
</span><span id="176" class="l">
</span><span id="177" class="l">    <span class="php-comment">/**
</span></span><span id="178" class="l"><span class="php-comment">     * @param int $category Category
</span></span><span id="179" class="l"><span class="php-comment">     * @return Url
</span></span><span id="180" class="l"><span class="php-comment">     */</span>
</span><span id="181" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_display_category_url(Category <span class="php-var">$category</span>);
</span><span id="182" class="l">
</span><span id="183" class="l">    <span class="php-comment">/**
</span></span><span id="184" class="l"><span class="php-comment">     * @param int $category Category
</span></span><span id="185" class="l"><span class="php-comment">     * @return Url
</span></span><span id="186" class="l"><span class="php-comment">     */</span>
</span><span id="187" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_edit_category_url(Category <span class="php-var">$category</span>);
</span><span id="188" class="l">
</span><span id="189" class="l">    <span class="php-comment">/**
</span></span><span id="190" class="l"><span class="php-comment">     * @param int $category Category
</span></span><span id="191" class="l"><span class="php-comment">     * @return Url
</span></span><span id="192" class="l"><span class="php-comment">     */</span>
</span><span id="193" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_delete_category_url(Category <span class="php-var">$category</span>);
</span><span id="194" class="l">
</span><span id="195" class="l">    <span class="php-comment">/**
</span></span><span id="196" class="l"><span class="php-comment">     * @return Url
</span></span><span id="197" class="l"><span class="php-comment">     */</span>
</span><span id="198" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_categories_management_url();
</span><span id="199" class="l">
</span><span id="200" class="l">    <span class="php-comment">/**
</span></span><span id="201" class="l"><span class="php-comment">     * @return Url
</span></span><span id="202" class="l"><span class="php-comment">     */</span>
</span><span id="203" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_module_home_page_url();
</span><span id="204" class="l">
</span><span id="205" class="l">    <span class="php-comment">/**
</span></span><span id="206" class="l"><span class="php-comment">     * @return string module home page title
</span></span><span id="207" class="l"><span class="php-comment">     */</span>
</span><span id="208" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> get_module_home_page_title();
</span><span id="209" class="l">
</span><span id="210" class="l">    <span class="php-comment">/**
</span></span><span id="211" class="l"><span class="php-comment">     * @return boolean Authorization to manage categories
</span></span><span id="212" class="l"><span class="php-comment">     */</span>
</span><span id="213" class="l">    <span class="php-keyword1">abstract</span> <span class="php-keyword1">protected</span> <span class="php-keyword1">function</span> check_authorizations();
</span><span id="214" class="l">}
</span><span id="215" class="l"><span class="xlang">?&gt;</span>
</span><span id="216" class="l"></span></code></pre>
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