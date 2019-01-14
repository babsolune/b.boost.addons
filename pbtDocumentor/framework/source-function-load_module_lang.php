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
		<h1>File deprecated_helper.inc.php</h1>
	</header>
	<article>
		<header><h2>File deprecated_helper.inc.php</h2></header>
		<div class="content">
			<div class="code-capsule">
	            <pre class="numbers"><code><span class="l"><a href="#1">  1: </a></span><span class="l"><a href="#2">  2: </a></span></span><span class="l"><a href="#3">  3: </a></span></span><span class="l"><a href="#4">  4: </a></span></span><span class="l"><a href="#5">  5: </a></span></span><span class="l"><a href="#6">  6: </a></span></span><span class="l"><a href="#7">  7: </a></span></span><span class="l"><a href="#8">  8: </a></span></span><span class="l"><a href="#9">  9: </a></span></span><span class="l"><a href="#10"> 10: </a></span></span><span class="l"><a href="#11"> 11: </a></span></span><span class="l"><a href="#12"> 12: </a></span><span class="l"><a href="#13"> 13: </a></span><span class="l"><a href="#14"> 14: </a></span><span class="l"><a href="#15"> 15: </a></span><span class="l"><a href="#16"> 16: </a></span><span class="l"><a href="#17"> 17: </a></span><span class="l"><a href="#18"> 18: </a></span><span class="l"><a href="#19"> 19: </a></span><span class="l"><a href="#20"> 20: </a></span><span class="l"><a href="#21"> 21: </a></span><span class="l"><a href="#22"> 22: </a></span><span class="l"><a href="#23"> 23: </a></span><span class="l"><a href="#24"> 24: </a></span><span class="l"><a href="#25"> 25: </a></span><span class="l"><a href="#26"> 26: </a></span><span class="l"><a href="#27"> 27: </a></span><span class="l"><a href="#28"> 28: </a></span><span class="l"><a href="#29"> 29: </a></span><span class="l"><a href="#30"> 30: </a></span><span class="l"><a href="#31"> 31: </a></span><span class="l"><a href="#32"> 32: </a></span><span class="l"><a href="#33"> 33: </a></span><span class="l"><a href="#34"> 34: </a></span><span class="l"><a href="#35"> 35: </a></span><span class="l"><a href="#36"> 36: </a></span><span class="l"><a href="#37"> 37: </a></span><span class="l"><a href="#38"> 38: </a></span></span><span class="l"><a href="#39"> 39: </a></span></span><span class="l"><a href="#40"> 40: </a></span></span><span class="l"><a href="#41"> 41: </a></span></span><span class="l"><a href="#42"> 42: </a></span></span><span class="l"><a href="#43"> 43: </a></span></span><span class="l"><a href="#44"> 44: </a></span></span><span class="l"><a href="#45"> 45: </a></span></span><span class="l"><a href="#46"> 46: </a></span></span><span class="l"><a href="#47"> 47: </a></span></span><span class="l"><a href="#48"> 48: </a></span></span><span class="l"><a href="#49"> 49: </a></span></span><span class="l"><a href="#50"> 50: </a></span></span><span class="l"><a href="#51"> 51: </a></span></span><span class="l"><a href="#52"> 52: </a></span></span><span class="l"><a href="#53"> 53: </a></span></span><span class="l"><a href="#54"> 54: </a></span></span><span class="l"><a href="#55"> 55: </a></span></span><span class="l"><a href="#56"> 56: </a></span></span><span class="l"><a href="#57"> 57: </a></span></span><span class="l"><a href="#58"> 58: </a></span></span><span class="l"><a href="#59"> 59: </a></span></span><span class="l"><a href="#60"> 60: </a></span></span><span class="l"><a href="#61"> 61: </a></span></span><span class="l"><a href="#62"> 62: </a></span></span><span class="l"><a href="#63"> 63: </a></span></span><span class="l"><a href="#64"> 64: </a></span></span><span class="l"><a href="#65"> 65: </a></span><span class="l"><a href="#66"> 66: </a></span><span class="l"><a href="#67"> 67: </a></span><span class="l"><a href="#68"> 68: </a></span><span class="l"><a href="#69"> 69: </a></span><span class="l"><a href="#70"> 70: </a></span><span class="l"><a href="#71"> 71: </a></span><span class="l"><a href="#72"> 72: </a></span><span class="l"><a href="#73"> 73: </a></span><span class="l"><a href="#74"> 74: </a></span><span class="l"><a href="#75"> 75: </a></span><span class="l"><a href="#76"> 76: </a></span><span class="l"><a href="#77"> 77: </a></span><span class="l"><a href="#78"> 78: </a></span><span class="l"><a href="#79"> 79: </a></span><span class="l"><a href="#80"> 80: </a></span><span class="l"><a href="#81"> 81: </a></span><span class="l"><a href="#82"> 82: </a></span><span class="l"><a href="#83"> 83: </a></span><span class="l"><a href="#84"> 84: </a></span><span class="l"><a href="#85"> 85: </a></span><span class="l"><a href="#86"> 86: </a></span><span class="l"><a href="#87"> 87: </a></span><span class="l"><a href="#88"> 88: </a></span><span class="l"><a href="#89"> 89: </a></span><span class="l"><a href="#90"> 90: </a></span><span class="l"><a href="#91"> 91: </a></span><span class="l"><a href="#92"> 92: </a></span><span class="l"><a href="#93"> 93: </a></span><span class="l"><a href="#94"> 94: </a></span><span class="l"><a href="#95"> 95: </a></span><span class="l"><a href="#96"> 96: </a></span><span class="l"><a href="#97"> 97: </a></span><span class="l"><a href="#98"> 98: </a></span><span class="l"><a href="#99"> 99: </a></span><span class="l"><a href="#100">100: </a></span><span class="l"><a href="#101">101: </a></span><span class="l"><a href="#102">102: </a></span><span class="l"><a href="#103">103: </a></span><span class="l"><a href="#104">104: </a></span><span class="l"><a href="#105">105: </a></span><span class="l"><a href="#106">106: </a></span><span class="l"><a href="#107">107: </a></span><span class="l"><a href="#108">108: </a></span><span class="l"><a href="#109">109: </a></span><span class="l"><a href="#110">110: </a></span><span class="l"><a href="#111">111: </a></span><span class="l"><a href="#112">112: </a></span><span class="l"><a href="#113">113: </a></span><span class="l"><a href="#114">114: </a></span><span class="l"><a href="#115">115: </a></span><span class="l"><a href="#116">116: </a></span><span class="l"><a href="#117">117: </a></span><span class="l"><a href="#118">118: </a></span><span class="l"><a href="#119">119: </a></span><span class="l"><a href="#120">120: </a></span><span class="l"><a href="#121">121: </a></span><span class="l"><a href="#122">122: </a></span><span class="l"><a href="#123">123: </a></span><span class="l"><a href="#124">124: </a></span><span class="l"><a href="#125">125: </a></span><span class="l"><a href="#126">126: </a></span><span class="l"><a href="#127">127: </a></span><span class="l"><a href="#128">128: </a></span><span class="l"><a href="#129">129: </a></span><span class="l"><a href="#130">130: </a></span><span class="l"><a href="#131">131: </a></span><span class="l"><a href="#132">132: </a></span><span class="l"><a href="#133">133: </a></span><span class="l"><a href="#134">134: </a></span><span class="l"><a href="#135">135: </a></span><span class="l"><a href="#136">136: </a></span><span class="l"><a href="#137">137: </a></span><span class="l"><a href="#138">138: </a></span><span class="l"><a href="#139">139: </a></span><span class="l"><a href="#140">140: </a></span><span class="l"><a href="#141">141: </a></span><span class="l"><a href="#142">142: </a></span><span class="l"><a href="#143">143: </a></span><span class="l"><a href="#144">144: </a></span><span class="l"><a href="#145">145: </a></span><span class="l"><a href="#146">146: </a></span></span><span class="l"><a href="#147">147: </a></span></span><span class="l"><a href="#148">148: </a></span></span><span class="l"><a href="#149">149: </a></span></span><span class="l"><a href="#150">150: </a></span></span><span class="l"><a href="#151">151: </a></span></span><span class="l"><a href="#152">152: </a></span></span><span class="l"><a href="#153">153: </a></span></span><span class="l"><a href="#154">154: </a></span><span class="l"><a href="#155">155: </a></span><span class="l"><a href="#156">156: </a></span><span class="l"><a href="#157">157: </a></span><span class="l"><a href="#158">158: </a></span><span class="l"><a href="#159">159: </a></span><span class="l"><a href="#160">160: </a></span><span class="l"><a href="#161">161: </a></span><span class="l"><a href="#162">162: </a></span><span class="l"><a href="#163">163: </a></span><span class="l"><a href="#164">164: </a></span><span class="l"><a href="#165">165: </a></span><span class="l"><a href="#166">166: </a></span><span class="l"><a href="#167">167: </a></span></span><span class="l"><a href="#168">168: </a></span></span><span class="l"><a href="#169">169: </a></span></span><span class="l"><a href="#170">170: </a></span></span><span class="l"><a href="#171">171: </a></span></span><span class="l"><a href="#172">172: </a></span></span><span class="l"><a href="#173">173: </a></span></span><span class="l"><a href="#174">174: </a></span><span class="l"><a href="#175">175: </a></span><span class="l"><a href="#176">176: </a></span><span class="l"><a href="#177">177: </a></span><span class="l"><a href="#178">178: </a></span><span class="l"><a href="#179">179: </a></span><span class="l"><a href="#180">180: </a></span><span class="l"><a href="#181">181: </a></span><span class="l"><a href="#182">182: </a></span><span class="l"><a href="#183">183: </a></span><span class="l"><a href="#184">184: </a></span><span class="l"><a href="#185">185: </a></span><span class="l"><a href="#186">186: </a></span><span class="l"><a href="#187">187: </a></span><span class="l"><a href="#188">188: </a></span><span class="l"><a href="#189">189: </a></span><span class="l"><a href="#190">190: </a></span><span class="l"><a href="#191">191: </a></span><span class="l"><a href="#192">192: </a></span><span class="l"><a href="#193">193: </a></span><span class="l"><a href="#194">194: </a></span><span class="l"><a href="#195">195: </a></span><span class="l"><a href="#196">196: </a></span><span class="l"><a href="#197">197: </a></span><span class="l"><a href="#198">198: </a></span><span class="l"><a href="#199">199: </a></span><span class="l"><a href="#200">200: </a></span><span class="l"><a href="#201">201: </a></span><span class="l"><a href="#202">202: </a></span><span class="l"><a href="#203">203: </a></span><span class="l"><a href="#204">204: </a></span><span class="l"><a href="#205">205: </a></span><span class="l"><a href="#206">206: </a></span><span class="l"><a href="#207">207: </a></span><span class="l"><a href="#208">208: </a></span><span class="l"><a href="#209">209: </a></span></span><span class="l"><a href="#210">210: </a></span></span><span class="l"><a href="#211">211: </a></span></span><span class="l"><a href="#212">212: </a></span></span><span class="l"><a href="#213">213: </a></span></span><span class="l"><a href="#214">214: </a></span></span><span class="l"><a href="#215">215: </a></span></span><span class="l"><a href="#216">216: </a></span></span><span class="l"><a href="#217">217: </a></span><span class="l"><a href="#218">218: </a></span><span class="l"><a href="#219">219: </a></span><span class="l"><a href="#220">220: </a></span><span class="l"><a href="#221">221: </a></span><span class="l"><a href="#222">222: </a></span><span class="l"><a href="#223">223: </a></span><span class="l"><a href="#224">224: </a></span><span class="l"><a href="#225">225: </a></span><span class="l"><a href="#226">226: </a></span><span class="l"><a href="#227">227: </a></span><span class="l"><a href="#228">228: </a></span><span class="l"><a href="#229">229: </a></span><span class="l"><a href="#230">230: </a></span><span class="l"><a href="#231">231: </a></span><span class="l"><a href="#232">232: </a></span><span class="l"><a href="#233">233: </a></span><span class="l"><a href="#234">234: </a></span></span><span class="l"><a href="#235">235: </a></span></span><span class="l"><a href="#236">236: </a></span></span><span class="l"><a href="#237">237: </a></span></span><span class="l"><a href="#238">238: </a></span></span><span class="l"><a href="#239">239: </a></span></span><span class="l"><a href="#240">240: </a></span></span><span class="l"><a href="#241">241: </a></span></span><span class="l"><a href="#242">242: </a></span></span><span class="l"><a href="#243">243: </a></span><span class="l"><a href="#244">244: </a></span><span class="l"><a href="#245">245: </a></span><span class="l"><a href="#246">246: </a></span><span class="l"><a href="#247">247: </a></span><span class="l"><a href="#248">248: </a></span><span class="l"><a href="#249">249: </a></span><span class="l"><a href="#250">250: </a></span><span class="l"><a href="#251">251: </a></span><span class="l"><a href="#252">252: </a></span><span class="l"><a href="#253">253: </a></span><span class="l"><a href="#254">254: </a></span><span class="l"><a href="#255">255: </a></span><span class="l"><a href="#256">256: </a></span><span class="l"><a href="#257">257: </a></span><span class="l"><a href="#258">258: </a></span><span class="l"><a href="#259">259: </a></span><span class="l"><a href="#260">260: </a></span><span class="l"><a href="#261">261: </a></span><span class="l"><a href="#262">262: </a></span><span class="l"><a href="#263">263: </a></span><span class="l"><a href="#264">264: </a></span><span class="l"><a href="#265">265: </a></span><span class="l"><a href="#266">266: </a></span><span class="l"><a href="#267">267: </a></span><span class="l"><a href="#268">268: </a></span><span class="l"><a href="#269">269: </a></span><span class="l"><a href="#270">270: </a></span><span class="l"><a href="#271">271: </a></span><span class="l"><a href="#272">272: </a></span><span class="l"><a href="#273">273: </a></span><span class="l"><a href="#274">274: </a></span><span class="l"><a href="#275">275: </a></span><span class="l"><a href="#276">276: </a></span><span class="l"><a href="#277">277: </a></span></code></pre>
	            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l"><span class="php-comment">/**
</span></span><span id="3" class="l"><span class="php-comment"> * @package     Helper
</span></span><span id="4" class="l"><span class="php-comment"> * @category    Framework
</span></span><span id="5" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="6" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="7" class="l"><span class="php-comment"> * @author      Regis VIARRE &lt;crowkait@phpboost.com&gt;
</span></span><span id="8" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2018 10 26
</span></span><span id="9" class="l"><span class="php-comment"> * @since       PHPBoost 3.0 - 2010 01 22
</span></span><span id="10" class="l"><span class="php-comment"> * @contributor Julien BRISWALTER &lt;j1.seth@phpboost.com&gt;
</span></span><span id="11" class="l"><span class="php-comment"> * @contributor Arnaud GENET &lt;elenwii@phpboost.com&gt;
</span></span><span id="12" class="l"><span class="php-comment">*/</span>
</span><span id="13" class="l">
</span><span id="14" class="l"><span class="php-comment">### Variable types ###</span>
</span><span id="15" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'GET'</span>,       <span class="php-num">1</span>);
</span><span id="16" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'POST'</span>,      <span class="php-num">2</span>);
</span><span id="17" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'REQUEST'</span>,   <span class="php-num">3</span>);
</span><span id="18" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'COOKIE'</span>,    <span class="php-num">4</span>);
</span><span id="19" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'FILES'</span>,     <span class="php-num">5</span>);
</span><span id="20" class="l">
</span><span id="21" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TBOOL'</span>,             <span class="php-quote">'boolean'</span>);
</span><span id="22" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TINTEGER'</span>,          <span class="php-quote">'integer'</span>);
</span><span id="23" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TDOUBLE'</span>,           <span class="php-quote">'double'</span>);
</span><span id="24" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TFLOAT'</span>,            <span class="php-quote">'double'</span>);
</span><span id="25" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TSTRING'</span>,           <span class="php-quote">'string'</span>);
</span><span id="26" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TSTRING_PARSE'</span>,     <span class="php-quote">'string_parse'</span>);
</span><span id="27" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TSTRING_UNCHANGE'</span>,  <span class="php-quote">'string_unsecure'</span>);
</span><span id="28" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TSTRING_HTML'</span>,      <span class="php-quote">'string_html'</span>);
</span><span id="29" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TSTRING_AS_RECEIVED'</span>, <span class="php-quote">'string_unchanged'</span>);
</span><span id="30" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TARRAY'</span>,            <span class="php-quote">'array'</span>);
</span><span id="31" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TUNSIGNED_INT'</span>,     <span class="php-quote">'uint'</span>);
</span><span id="32" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TUNSIGNED_DOUBLE'</span>,  <span class="php-quote">'udouble'</span>);
</span><span id="33" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TUNSIGNED_FLOAT'</span>,   <span class="php-quote">'udouble'</span>);
</span><span id="34" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'TNONE'</span>,             <span class="php-quote">'none'</span>);
</span><span id="35" class="l">
</span><span id="36" class="l"><span class="php-keyword2">define</span>(<span class="php-quote">'USE_DEFAULT_IF_EMPTY'</span>, <span class="php-num">1</span>);
</span><span id="37" class="l">
</span><span id="38" class="l"><span class="php-comment">/**
</span></span><span id="39" class="l"><span class="php-comment"> * @deprecated
</span></span><span id="40" class="l"><span class="php-comment"> * Retrieves an input variable. You can retrieve any parameter of the HTTP request which launched the execution of this page.
</span></span><span id="41" class="l"><span class="php-comment"> * @param int $var_type The origin of the variable: GET if it's a parameter in the request URL, POST if the variable was in a formulary,
</span></span><span id="42" class="l"><span class="php-comment"> * COOKIE if the variables come from a cookie and FILES if it's a file.
</span></span><span id="43" class="l"><span class="php-comment"> * @param string $var_name Name of a HTTP variable you want to retrieve.
</span></span><span id="44" class="l"><span class="php-comment"> * @param mixed $default_value The value you want the variable you retrieve has if the HTTP parameter doesn't exist.
</span></span><span id="45" class="l"><span class="php-comment"> * @param string $force_type Type of the variable you want to retrieve. If you don't use this parameter, the returned variable will have the same type as the default value you imposed.
</span></span><span id="46" class="l"><span class="php-comment"> * When you force the variable type, a cast operation will be made from string (it's a string in the HTTP request) to the type you choosed.
</span></span><span id="47" class="l"><span class="php-comment"> * The types you can use are numerous:
</span></span><span id="48" class="l"><span class="php-comment"> * &lt;ul&gt;
</span></span><span id="49" class="l"><span class="php-comment"> *  &lt;li&gt;TINTEGER to retrieve an integer value.&lt;/li&gt;
</span></span><span id="50" class="l"><span class="php-comment"> *  &lt;li&gt;TSTRING to retrieve a string. The HTML code in this string is protected (XSS protection) and the dangerous MySQL characters are escaped. You can use this variable directly in a MySQL query.
</span></span><span id="51" class="l"><span class="php-comment"> * It you want to use it now without inserting it in a data base, use the stripslashes PHP function.&lt;/li&gt;
</span></span><span id="52" class="l"><span class="php-comment"> *  &lt;li&gt;TSTRING_UNCHANGE if you want to retrieve the value of a string without any processing (no quotes escaping and no HTML protection).&lt;/li&gt;
</span></span><span id="53" class="l"><span class="php-comment"> *  &lt;li&gt;TSTRING_PARSE if you want to parse the value you retrieved. The HTML code is protected, it parses with the user parser and the quotes are escaped. Ready to be inserted in a MySQL query !&lt;/li&gt;
</span></span><span id="54" class="l"><span class="php-comment"> *  &lt;li&gt;TBOOL to retrieve a boolean value.&lt;/li&gt;
</span></span><span id="55" class="l"><span class="php-comment"> *  &lt;li&gt;TUNSIGNED_INT if you expect an unsigned integer.&lt;/li&gt;
</span></span><span id="56" class="l"><span class="php-comment"> *  &lt;li&gt;TUNSIGNED_DOUBLE to retrieve an unsigned double value.&lt;/li&gt;
</span></span><span id="57" class="l"><span class="php-comment"> *  &lt;li&gt;TSTRING_HTML if you don't want to protect the HTML code of the content but you want to escape the quotes.&lt;/li&gt;
</span></span><span id="58" class="l"><span class="php-comment"> *  &lt;li&gt;TSTRING_AS_RECEIVED if you want to retrieve the string variable as it was in the HTTP request. &lt;/li&gt;
</span></span><span id="59" class="l"><span class="php-comment"> *  &lt;li&gt;TARRAY to retrieve an array. The values it contains aren't processed.&lt;/li&gt;
</span></span><span id="60" class="l"><span class="php-comment"> *  &lt;li&gt;TDOUBLE to retrieve a double value&lt;/li&gt;
</span></span><span id="61" class="l"><span class="php-comment"> *  &lt;li&gt;TNONE if you want to get the input variable as it has been recieved (the return value will be a string because HTTP parameters are all strings).&lt;/li&gt;
</span></span><span id="62" class="l"><span class="php-comment"> * &lt;/ul&gt;
</span></span><span id="63" class="l"><span class="php-comment"> * @param int $flags You can change the behaviour of this method: USE_DEFAULT_IF_EMPTY will allow you to retrieve the default value even if the parameter exists but its value is empty (to know if the var is empty, we use the empty() PHP function).
</span></span><span id="64" class="l"><span class="php-comment"> * @return mixed The value of the variable you wanted to retrieve. Its type is either the same as the default value or the type you forced.
</span></span><span id="65" class="l"><span class="php-comment"> */</span>
</span><span id="66" class="l"><span class="php-keyword1">function</span> retrieve(<span class="php-var">$var_type</span>, <span class="php-var">$var_name</span>, <span class="php-var">$default_value</span>, <span class="php-var">$force_type</span> = <span class="php-keyword1">NULL</span>, <span class="php-var">$flags</span> = <span class="php-num">0</span>)
</span><span id="67" class="l">{
</span><span id="68" class="l">    <span class="php-var">$var</span> = <span class="php-keyword1">null</span>;
</span><span id="69" class="l">    <span class="php-var">$request</span> = AppContext::get_request();
</span><span id="70" class="l">
</span><span id="71" class="l">    <span class="php-keyword1">switch</span> (<span class="php-var">$var_type</span>)
</span><span id="72" class="l">    {
</span><span id="73" class="l">        <span class="php-keyword1">case</span> GET:
</span><span id="74" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$request</span>-&gt;has_getparameter(<span class="php-var">$var_name</span>))
</span><span id="75" class="l">            {
</span><span id="76" class="l">                <span class="php-var">$var</span> = <span class="php-var">$request</span>-&gt;get_getvalue(<span class="php-var">$var_name</span>);
</span><span id="77" class="l">            }
</span><span id="78" class="l">            <span class="php-keyword1">break</span>;
</span><span id="79" class="l">        <span class="php-keyword1">case</span> POST:
</span><span id="80" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$request</span>-&gt;has_postparameter(<span class="php-var">$var_name</span>))
</span><span id="81" class="l">            {
</span><span id="82" class="l">                <span class="php-var">$var</span> = <span class="php-var">$request</span>-&gt;get_postvalue(<span class="php-var">$var_name</span>);
</span><span id="83" class="l">            }
</span><span id="84" class="l">            <span class="php-keyword1">break</span>;
</span><span id="85" class="l">        <span class="php-keyword1">case</span> REQUEST:
</span><span id="86" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$request</span>-&gt;has_parameter(<span class="php-var">$var_name</span>))
</span><span id="87" class="l">            {
</span><span id="88" class="l">                <span class="php-var">$var</span> = <span class="php-var">$request</span>-&gt;get_value(<span class="php-var">$var_name</span>);
</span><span id="89" class="l">            }
</span><span id="90" class="l">            <span class="php-keyword1">break</span>;
</span><span id="91" class="l">        <span class="php-keyword1">case</span> COOKIE:
</span><span id="92" class="l">            <span class="php-keyword1">if</span> (<span class="php-var">$request</span>-&gt;has_cookieparameter(<span class="php-var">$var_name</span>))
</span><span id="93" class="l">            {
</span><span id="94" class="l">                <span class="php-var">$var</span> = <span class="php-var">$request</span>-&gt;get_cookie(<span class="php-var">$var_name</span>);
</span><span id="95" class="l">            }
</span><span id="96" class="l">            <span class="php-keyword1">break</span>;
</span><span id="97" class="l">        <span class="php-keyword1">case</span> FILES:
</span><span id="98" class="l">            <span class="php-keyword1">if</span> (<span class="php-keyword1">isset</span>(<span class="php-var">$_FILES</span>[<span class="php-var">$var_name</span>]))
</span><span id="99" class="l">            {
</span><span id="100" class="l">                <span class="php-var">$var</span> = <span class="php-var">$_FILES</span>[<span class="php-var">$var_name</span>];
</span><span id="101" class="l">            }
</span><span id="102" class="l">            <span class="php-keyword1">break</span>;
</span><span id="103" class="l">        <span class="php-keyword1">default</span>:
</span><span id="104" class="l">            <span class="php-keyword1">break</span>;
</span><span id="105" class="l">    }
</span><span id="106" class="l">
</span><span id="107" class="l">    <span class="php-comment">//If $var is not set or an empty value is retrieved with the USE_DEFAULT_IF_EMPTY flag, we return the default value</span>
</span><span id="108" class="l">    <span class="php-keyword1">if</span> (<span class="php-var">$var</span> === <span class="php-keyword1">null</span> || ((<span class="php-var">$flags</span> &amp; USE_DEFAULT_IF_EMPTY != <span class="php-num">0</span>) &amp;&amp; <span class="php-keyword1">empty</span>(<span class="php-var">$var</span>)))
</span><span id="109" class="l">    {
</span><span id="110" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$default_value</span>;
</span><span id="111" class="l">    }
</span><span id="112" class="l">
</span><span id="113" class="l">    <span class="php-var">$force_type</span> = !<span class="php-keyword1">isset</span>(<span class="php-var">$force_type</span>) ? <span class="php-keyword2">gettype</span>(<span class="php-var">$default_value</span>) : <span class="php-var">$force_type</span>;
</span><span id="114" class="l">    <span class="php-keyword1">switch</span> (<span class="php-var">$force_type</span>)
</span><span id="115" class="l">    {
</span><span id="116" class="l">        <span class="php-keyword1">case</span> TINTEGER:
</span><span id="117" class="l">            <span class="php-keyword1">return</span> (int)<span class="php-var">$var</span>;
</span><span id="118" class="l">        <span class="php-keyword1">case</span> TSTRING:
</span><span id="119" class="l">            <span class="php-keyword1">return</span> TextHelper::strprotect(<span class="php-var">$var</span>); <span class="php-comment">//Chaine protégée.</span>
</span><span id="120" class="l">        <span class="php-keyword1">case</span> TSTRING_UNCHANGE:
</span><span id="121" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">trim</span>((string)<span class="php-var">$var</span>); <span class="php-comment">//Chaine non protégée.</span>
</span><span id="122" class="l">        <span class="php-keyword1">case</span> TSTRING_PARSE:
</span><span id="123" class="l">            <span class="php-keyword1">return</span> FormatingHelper::strparse(<span class="php-var">$var</span>); <span class="php-comment">//Chaine parsée.</span>
</span><span id="124" class="l">        <span class="php-keyword1">case</span> TBOOL:
</span><span id="125" class="l">            <span class="php-keyword1">return</span> (bool)<span class="php-var">$var</span>;
</span><span id="126" class="l">        <span class="php-keyword1">case</span> TUNSIGNED_INT:
</span><span id="127" class="l">            <span class="php-var">$var</span> = (int)<span class="php-var">$var</span>;
</span><span id="128" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$var</span> &gt; <span class="php-num">0</span> ? <span class="php-var">$var</span> : <span class="php-keyword2">max</span>(<span class="php-num">0</span>, <span class="php-var">$default_value</span>);
</span><span id="129" class="l">        <span class="php-keyword1">case</span> TUNSIGNED_DOUBLE:
</span><span id="130" class="l">            <span class="php-var">$var</span> = (double)<span class="php-var">$var</span>;
</span><span id="131" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$var</span> &gt; <span class="php-num">0.0</span> ? <span class="php-var">$var</span> : <span class="php-keyword2">max</span>(<span class="php-num">0.0</span>, <span class="php-var">$default_value</span>);
</span><span id="132" class="l">        <span class="php-keyword1">case</span> TSTRING_HTML:
</span><span id="133" class="l">            <span class="php-keyword1">return</span> TextHelper::strprotect(<span class="php-var">$var</span>, TextHelper::HTML_NO_PROTECT); <span class="php-comment">//Chaine non protégée pour l'html.</span>
</span><span id="134" class="l">        <span class="php-keyword1">case</span> TSTRING_AS_RECEIVED:
</span><span id="135" class="l">            <span class="php-keyword1">return</span> (string)<span class="php-var">$var</span>;
</span><span id="136" class="l">        <span class="php-keyword1">case</span> TARRAY:
</span><span id="137" class="l">            <span class="php-keyword1">return</span> (<span class="php-keyword1">array</span>)<span class="php-var">$var</span>;
</span><span id="138" class="l">        <span class="php-keyword1">case</span> TDOUBLE:
</span><span id="139" class="l">            <span class="php-keyword1">return</span> (double)<span class="php-var">$var</span>;
</span><span id="140" class="l">        <span class="php-keyword1">case</span> TNONE:
</span><span id="141" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$var</span>;
</span><span id="142" class="l">        <span class="php-keyword1">default</span>:
</span><span id="143" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$default_value</span>;
</span><span id="144" class="l">    }
</span><span id="145" class="l">}
</span><span id="146" class="l"><span class="php-comment">/**
</span></span><span id="147" class="l"><span class="php-comment"> * @deprecated
</span></span><span id="148" class="l"><span class="php-comment"> * Adds the session ID to an URL if the user doesn't accepts cookies.
</span></span><span id="149" class="l"><span class="php-comment"> * This functions allows you to generate an URL according to the site configuration concerning the URL rewriting.
</span></span><span id="150" class="l"><span class="php-comment"> * @param string $url URL if the URL rewriting is disabled
</span></span><span id="151" class="l"><span class="php-comment"> * @param string $mod_rewrite URL if the URL rewriting is enabled
</span></span><span id="152" class="l"><span class="php-comment"> * @param string $ampersand In a redirection you mustn't put the &amp; HTML entity (&amp;amp;). In this case set that parameter to &amp;.
</span></span><span id="153" class="l"><span class="php-comment"> * @return string The URL to use.
</span></span><span id="154" class="l"><span class="php-comment"> */</span>
</span><span id="155" class="l"><span class="php-keyword1">function</span> url(<span class="php-var">$url</span>, <span class="php-var">$mod_rewrite</span> = <span class="php-quote">''</span>, <span class="php-var">$ampersand</span> = <span class="php-quote">'&amp;amp;'</span>)
</span><span id="156" class="l">{
</span><span id="157" class="l">    <span class="php-keyword1">if</span> (ServerEnvironmentConfig::load()-&gt;is_url_rewriting_enabled() &amp;&amp; !<span class="php-keyword1">empty</span>(<span class="php-var">$mod_rewrite</span>)) <span class="php-comment">//Activation du mod rewrite =&gt; cookies activés.</span>
</span><span id="158" class="l">    {
</span><span id="159" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$mod_rewrite</span>;
</span><span id="160" class="l">    }
</span><span id="161" class="l">    <span class="php-keyword1">else</span>
</span><span id="162" class="l">    {
</span><span id="163" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$url</span>;
</span><span id="164" class="l">    }
</span><span id="165" class="l">}
</span><span id="166" class="l">
</span><span id="167" class="l"><span class="php-comment">/**
</span></span><span id="168" class="l"><span class="php-comment"> * @deprecated
</span></span><span id="169" class="l"><span class="php-comment"> * Loads a module lang file. It will load alone the file corresponding to the user lang, but if it doesn't exist, another lang will be choosen.
</span></span><span id="170" class="l"><span class="php-comment"> * An error will be displayed on the page and the script execution will be stopped if no lang file is found for this module.
</span></span><span id="171" class="l"><span class="php-comment"> * @param string $module_name The identifier of the module for which you want to load the lang file.
</span></span><span id="172" class="l"><span class="php-comment"> * @param string Path of the folder in which is the file. This path mustn't finish by the / character.
</span></span><span id="173" class="l"><span class="php-comment"> * @depre
</span></span><span id="174" class="l"><span class="php-comment"> */</span>
</span><span id="175" class="l"><span class="php-keyword1">function</span> load_module_lang(<span class="php-var">$module_name</span>, <span class="php-var">$path</span> = PATH_TO_ROOT)
</span><span id="176" class="l">{
</span><span id="177" class="l">    <span class="php-keyword1">global</span> <span class="php-var">$LANG</span>;
</span><span id="178" class="l">
</span><span id="179" class="l">    <span class="php-var">$user_locale</span> = AppContext::<span class="php-keyword2">get_current_user</span>()-&gt;get_locale();
</span><span id="180" class="l">
</span><span id="181" class="l">    <span class="php-var">$module_lang_file</span> = <span class="php-var">$path</span> . <span class="php-quote">'/lang/'</span> . <span class="php-var">$user_locale</span> . <span class="php-quote">'/modules/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'_'</span> . <span class="php-var">$user_locale</span> . <span class="php-quote">'.php'</span>;
</span><span id="182" class="l">    <span class="php-keyword1">if</span> (<span class="php-keyword2">file_exists</span>(<span class="php-var">$module_lang_file</span>))
</span><span id="183" class="l">    {
</span><span id="184" class="l">        <span class="php-var">$result</span> = <span class="php-keyword1">include_once</span> <span class="php-var">$module_lang_file</span>;
</span><span id="185" class="l">    }
</span><span id="186" class="l">    <span class="php-keyword1">else</span>
</span><span id="187" class="l">    {
</span><span id="188" class="l">        <span class="php-var">$file</span> = <span class="php-var">$path</span> . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'/lang/'</span> . <span class="php-var">$user_locale</span> . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'_'</span> . <span class="php-var">$user_locale</span> . <span class="php-quote">'.php'</span>;
</span><span id="189" class="l">        <span class="php-var">$result</span> = <span class="php-keyword1">include_once</span> <span class="php-var">$file</span>;
</span><span id="190" class="l">    }
</span><span id="191" class="l">
</span><span id="192" class="l">    <span class="php-keyword1">if</span> (!<span class="php-var">$result</span>)
</span><span id="193" class="l">    {
</span><span id="194" class="l">        <span class="php-var">$lang</span> = find_require_dir(PATH_TO_ROOT . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'/lang/'</span>, <span class="php-var">$user_locale</span>, <span class="php-keyword1">false</span>);
</span><span id="195" class="l">        <span class="php-var">$file2</span> = PATH_TO_ROOT . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'/lang/'</span> . <span class="php-var">$lang</span> . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'_'</span> . <span class="php-var">$lang</span> . <span class="php-quote">'.php'</span>;
</span><span id="196" class="l">        <span class="php-var">$result2</span> = <span class="php-keyword1">include_once</span> <span class="php-var">$file2</span>;
</span><span id="197" class="l">
</span><span id="198" class="l">        <span class="php-keyword1">if</span> (!<span class="php-var">$result2</span>)
</span><span id="199" class="l">        {
</span><span id="200" class="l">            <span class="php-var">$error_message</span> = <span class="php-keyword2">sprintf</span>(<span class="php-quote">'Unable to load lang file \'%s\'!'</span>, PATH_TO_ROOT . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'/lang/'</span> . <span class="php-var">$lang</span> . <span class="php-quote">'/'</span> . <span class="php-var">$module_name</span> . <span class="php-quote">'_'</span> . <span class="php-var">$lang</span> . <span class="php-quote">'.php'</span>);
</span><span id="201" class="l">
</span><span id="202" class="l">            <span class="php-var">$controller</span> = <span class="php-keyword1">new</span> UserErrorController(LangLoader::get_message(<span class="php-quote">'error'</span>, <span class="php-quote">'status-messages-common'</span>),
</span><span id="203" class="l">                <span class="php-var">$error_message</span>, UserErrorController::FATAL);
</span><span id="204" class="l">            DispatchManager::redirect(<span class="php-var">$controller</span>);
</span><span id="205" class="l">        }
</span><span id="206" class="l">    }
</span><span id="207" class="l">}
</span><span id="208" class="l">
</span><span id="209" class="l"><span class="php-comment">/**
</span></span><span id="210" class="l"><span class="php-comment"> * @deprecated
</span></span><span id="211" class="l"><span class="php-comment"> * Loads a configuration file. You choose a bases path, and you specify a folder name in which you file should be found, if it doesn't exist, it will take a file in another folder.
</span></span><span id="212" class="l"><span class="php-comment"> * It's very interesting when you want to
</span></span><span id="213" class="l"><span class="php-comment"> * @param string $dir_path Path of the file (relative from this page).
</span></span><span id="214" class="l"><span class="php-comment"> * @param string $require_dir The name of the folder in which the configuration file should be. This folder must be in the bases file ($dir_path). If this directory doesn't exist, another will be read.
</span></span><span id="215" class="l"><span class="php-comment"> * @param string $ini_name The name of the configuration file you want to know.
</span></span><span id="216" class="l"><span class="php-comment"> * @return string[] The configuration values contained in the file $dir_path/$require_dir/$ini_name.
</span></span><span id="217" class="l"><span class="php-comment"> */</span>
</span><span id="218" class="l"><span class="php-keyword1">function</span> load_ini_file(<span class="php-var">$dir_path</span>, <span class="php-var">$require_dir</span>, <span class="php-var">$ini_name</span> = <span class="php-quote">'config.ini'</span>)
</span><span id="219" class="l">{
</span><span id="220" class="l">    <span class="php-var">$dir</span> = find_require_dir(<span class="php-var">$dir_path</span>, <span class="php-var">$require_dir</span>, <span class="php-keyword1">false</span>);
</span><span id="221" class="l">    <span class="php-var">$file</span> = <span class="php-var">$dir_path</span> . <span class="php-var">$dir</span> . <span class="php-quote">'/'</span> . <span class="php-var">$ini_name</span>;
</span><span id="222" class="l">    <span class="php-keyword1">if</span> (<span class="php-keyword2">file_exists</span>(<span class="php-var">$file</span>))
</span><span id="223" class="l">    {
</span><span id="224" class="l">        <span class="php-var">$result</span> = <span class="php-keyword2">parse_ini_file</span>(<span class="php-var">$file</span>);
</span><span id="225" class="l">    }
</span><span id="226" class="l">    <span class="php-keyword1">else</span>
</span><span id="227" class="l">    {
</span><span id="228" class="l">        <span class="php-var">$result</span> = <span class="php-keyword1">false</span>;
</span><span id="229" class="l">    }
</span><span id="230" class="l">    <span class="php-keyword1">return</span> <span class="php-var">$result</span>;
</span><span id="231" class="l">}
</span><span id="232" class="l">
</span><span id="233" class="l"><span class="php-comment">//Cherche un dossier s'il n'est pas trouvé, on parcourt le dossier passé en argument à la recherche du premier dossier.</span>
</span><span id="234" class="l"><span class="php-comment">/**
</span></span><span id="235" class="l"><span class="php-comment"> * @deprecated
</span></span><span id="236" class="l"><span class="php-comment"> * Finds a folder according to the user language. You find the file in a folder in which there is one folder per lang.
</span></span><span id="237" class="l"><span class="php-comment"> * If it doesn't exist, you want to choose the file in another language.
</span></span><span id="238" class="l"><span class="php-comment"> * This function returns the path of an existing file (if the required lang exists, it will be it, otherwise it will be one of the existing files).
</span></span><span id="239" class="l"><span class="php-comment"> * @param string $dir_path Path of the folder in which you want to search
</span></span><span id="240" class="l"><span class="php-comment"> * @param string $require_dir Default folder
</span></span><span id="241" class="l"><span class="php-comment"> * @param string $fatal_error true if you want to throw a fatal error if no file could be found, false otherwise.
</span></span><span id="242" class="l"><span class="php-comment"> * @return string The path of the folder you search.
</span></span><span id="243" class="l"><span class="php-comment"> */</span>
</span><span id="244" class="l"><span class="php-keyword1">function</span> find_require_dir(<span class="php-var">$dir_path</span>, <span class="php-var">$require_dir</span>, <span class="php-var">$fatal_error</span> = <span class="php-keyword1">true</span>)
</span><span id="245" class="l">{
</span><span id="246" class="l">    <span class="php-comment">//Si le dossier n'existe pas on prend le suivant exisant.</span>
</span><span id="247" class="l">    <span class="php-keyword1">if</span> (!@<span class="php-keyword2">file_exists</span>(<span class="php-var">$dir_path</span> . <span class="php-var">$require_dir</span>))
</span><span id="248" class="l">    {
</span><span id="249" class="l">        <span class="php-keyword1">if</span> (@<span class="php-keyword2">is_dir</span>(<span class="php-var">$dir_path</span>) &amp;&amp; <span class="php-var">$dh</span> = @<span class="php-keyword2">opendir</span>(<span class="php-var">$dir_path</span>)) <span class="php-comment">//Si le dossier existe et qu'on a les permissions suffisantes</span>
</span><span id="250" class="l">        {
</span><span id="251" class="l">            <span class="php-keyword1">while</span> (!<span class="php-keyword2">is_bool</span>(<span class="php-var">$dir</span> = <span class="php-keyword2">readdir</span>(<span class="php-var">$dh</span>)))
</span><span id="252" class="l">            {
</span><span id="253" class="l">                <span class="php-keyword1">if</span> (TextHelper::<span class="php-keyword2">strpos</span>(<span class="php-var">$dir</span>, <span class="php-quote">'.'</span>) === <span class="php-keyword1">false</span>  )
</span><span id="254" class="l">                {
</span><span id="255" class="l">                    <span class="php-keyword2">closedir</span>(<span class="php-var">$dh</span>);
</span><span id="256" class="l">                    <span class="php-keyword1">return</span> <span class="php-var">$dir</span>;
</span><span id="257" class="l">                }
</span><span id="258" class="l">            }
</span><span id="259" class="l">            <span class="php-keyword2">closedir</span>(<span class="php-var">$dh</span>);
</span><span id="260" class="l">        }
</span><span id="261" class="l">    }
</span><span id="262" class="l">    <span class="php-keyword1">else</span>
</span><span id="263" class="l">    {
</span><span id="264" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$require_dir</span>;
</span><span id="265" class="l">    }
</span><span id="266" class="l">
</span><span id="267" class="l">    <span class="php-keyword1">if</span> (<span class="php-var">$fatal_error</span>)
</span><span id="268" class="l">    {
</span><span id="269" class="l">        <span class="php-var">$error_message</span> = <span class="php-keyword2">sprintf</span>(<span class="php-quote">'Unable to load required directory \'%s\'!'</span>, <span class="php-var">$dir_path</span> . <span class="php-var">$require_dir</span>);
</span><span id="270" class="l">
</span><span id="271" class="l">        <span class="php-var">$controller</span> = <span class="php-keyword1">new</span> UserErrorController(LangLoader::get_message(<span class="php-quote">'error'</span>, <span class="php-quote">'status-messages-common'</span>),
</span><span id="272" class="l">            <span class="php-var">$error_message</span>, UserErrorController::FATAL);
</span><span id="273" class="l">        DispatchManager::redirect(<span class="php-var">$controller</span>);
</span><span id="274" class="l">    }
</span><span id="275" class="l">}
</span><span id="276" class="l"><span class="xlang">?&gt;</span>
</span><span id="277" class="l"></span></code></pre>
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