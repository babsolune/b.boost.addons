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
		<h1>File TextHelper.class.php</h1>
	</header>
	<article>
		<header><h2>File TextHelper.class.php</h2></header>
		<div class="content">
			<div class="code-capsule">
	            <pre class="numbers"><code><span class="l"><a href="#1">  1: </a></span><span class="l"><a href="#2">  2: </a></span></span><span class="l"><a href="#3">  3: </a></span></span><span class="l"><a href="#4">  4: </a></span></span><span class="l"><a href="#5">  5: </a></span></span><span class="l"><a href="#6">  6: </a></span></span><span class="l"><a href="#7">  7: </a></span></span><span class="l"><a href="#8">  8: </a></span></span><span class="l"><a href="#9">  9: </a></span></span><span class="l"><a href="#10"> 10: </a></span></span><span class="l"><a href="#11"> 11: </a></span></span><span class="l"><a href="#12"> 12: </a></span></span><span class="l"><a href="#13"> 13: </a></span></span><span class="l"><a href="#14"> 14: </a></span><span class="l"><a href="#15"> 15: </a></span><span class="l"><a href="#16"> 16: </a></span><span class="l"><a href="#17"> 17: </a></span><span class="l"><a href="#18"> 18: </a></span><span class="l"><a href="#19"> 19: </a></span><span class="l"><a href="#20"> 20: </a></span><span class="l"><a href="#21"> 21: </a></span><span class="l"><a href="#22"> 22: </a></span><span class="l"><a href="#23"> 23: </a></span></span><span class="l"><a href="#24"> 24: </a></span></span><span class="l"><a href="#25"> 25: </a></span></span><span class="l"><a href="#26"> 26: </a></span></span><span class="l"><a href="#27"> 27: </a></span></span><span class="l"><a href="#28"> 28: </a></span></span><span class="l"><a href="#29"> 29: </a></span></span><span class="l"><a href="#30"> 30: </a></span><span class="l"><a href="#31"> 31: </a></span><span class="l"><a href="#32"> 32: </a></span><span class="l"><a href="#33"> 33: </a></span><span class="l"><a href="#34"> 34: </a></span><span class="l"><a href="#35"> 35: </a></span><span class="l"><a href="#36"> 36: </a></span><span class="l"><a href="#37"> 37: </a></span><span class="l"><a href="#38"> 38: </a></span><span class="l"><a href="#39"> 39: </a></span><span class="l"><a href="#40"> 40: </a></span><span class="l"><a href="#41"> 41: </a></span><span class="l"><a href="#42"> 42: </a></span><span class="l"><a href="#43"> 43: </a></span><span class="l"><a href="#44"> 44: </a></span><span class="l"><a href="#45"> 45: </a></span><span class="l"><a href="#46"> 46: </a></span><span class="l"><a href="#47"> 47: </a></span><span class="l"><a href="#48"> 48: </a></span><span class="l"><a href="#49"> 49: </a></span><span class="l"><a href="#50"> 50: </a></span><span class="l"><a href="#51"> 51: </a></span><span class="l"><a href="#52"> 52: </a></span><span class="l"><a href="#53"> 53: </a></span><span class="l"><a href="#54"> 54: </a></span><span class="l"><a href="#55"> 55: </a></span><span class="l"><a href="#56"> 56: </a></span><span class="l"><a href="#57"> 57: </a></span><span class="l"><a href="#58"> 58: </a></span><span class="l"><a href="#59"> 59: </a></span></span><span class="l"><a href="#60"> 60: </a></span></span><span class="l"><a href="#61"> 61: </a></span></span><span class="l"><a href="#62"> 62: </a></span></span><span class="l"><a href="#63"> 63: </a></span></span><span class="l"><a href="#64"> 64: </a></span></span><span class="l"><a href="#65"> 65: </a></span></span><span class="l"><a href="#66"> 66: </a></span></span><span class="l"><a href="#67"> 67: </a></span><span class="l"><a href="#68"> 68: </a></span><span class="l"><a href="#69"> 69: </a></span><span class="l"><a href="#70"> 70: </a></span><span class="l"><a href="#71"> 71: </a></span><span class="l"><a href="#72"> 72: </a></span><span class="l"><a href="#73"> 73: </a></span><span class="l"><a href="#74"> 74: </a></span></span><span class="l"><a href="#75"> 75: </a></span></span><span class="l"><a href="#76"> 76: </a></span></span><span class="l"><a href="#77"> 77: </a></span></span><span class="l"><a href="#78"> 78: </a></span></span><span class="l"><a href="#79"> 79: </a></span></span><span class="l"><a href="#80"> 80: </a></span></span><span class="l"><a href="#81"> 81: </a></span></span><span class="l"><a href="#82"> 82: </a></span></span><span class="l"><a href="#83"> 83: </a></span><span class="l"><a href="#84"> 84: </a></span><span class="l"><a href="#85"> 85: </a></span><span class="l"><a href="#86"> 86: </a></span><span class="l"><a href="#87"> 87: </a></span><span class="l"><a href="#88"> 88: </a></span><span class="l"><a href="#89"> 89: </a></span><span class="l"><a href="#90"> 90: </a></span><span class="l"><a href="#91"> 91: </a></span><span class="l"><a href="#92"> 92: </a></span></span><span class="l"><a href="#93"> 93: </a></span></span><span class="l"><a href="#94"> 94: </a></span></span><span class="l"><a href="#95"> 95: </a></span></span><span class="l"><a href="#96"> 96: </a></span></span><span class="l"><a href="#97"> 97: </a></span><span class="l"><a href="#98"> 98: </a></span><span class="l"><a href="#99"> 99: </a></span><span class="l"><a href="#100">100: </a></span><span class="l"><a href="#101">101: </a></span><span class="l"><a href="#102">102: </a></span><span class="l"><a href="#103">103: </a></span><span class="l"><a href="#104">104: </a></span><span class="l"><a href="#105">105: </a></span><span class="l"><a href="#106">106: </a></span><span class="l"><a href="#107">107: </a></span></span><span class="l"><a href="#108">108: </a></span></span><span class="l"><a href="#109">109: </a></span></span><span class="l"><a href="#110">110: </a></span></span><span class="l"><a href="#111">111: </a></span></span><span class="l"><a href="#112">112: </a></span><span class="l"><a href="#113">113: </a></span><span class="l"><a href="#114">114: </a></span><span class="l"><a href="#115">115: </a></span><span class="l"><a href="#116">116: </a></span><span class="l"><a href="#117">117: </a></span><span class="l"><a href="#118">118: </a></span><span class="l"><a href="#119">119: </a></span></span><span class="l"><a href="#120">120: </a></span></span><span class="l"><a href="#121">121: </a></span></span><span class="l"><a href="#122">122: </a></span></span><span class="l"><a href="#123">123: </a></span></span><span class="l"><a href="#124">124: </a></span><span class="l"><a href="#125">125: </a></span><span class="l"><a href="#126">126: </a></span><span class="l"><a href="#127">127: </a></span><span class="l"><a href="#128">128: </a></span><span class="l"><a href="#129">129: </a></span><span class="l"><a href="#130">130: </a></span><span class="l"><a href="#131">131: </a></span><span class="l"><a href="#132">132: </a></span><span class="l"><a href="#133">133: </a></span><span class="l"><a href="#134">134: </a></span><span class="l"><a href="#135">135: </a></span><span class="l"><a href="#136">136: </a></span><span class="l"><a href="#137">137: </a></span><span class="l"><a href="#138">138: </a></span><span class="l"><a href="#139">139: </a></span><span class="l"><a href="#140">140: </a></span><span class="l"><a href="#141">141: </a></span><span class="l"><a href="#142">142: </a></span><span class="l"><a href="#143">143: </a></span><span class="l"><a href="#144">144: </a></span><span class="l"><a href="#145">145: </a></span><span class="l"><a href="#146">146: </a></span><span class="l"><a href="#147">147: </a></span><span class="l"><a href="#148">148: </a></span><span class="l"><a href="#149">149: </a></span><span class="l"><a href="#150">150: </a></span><span class="l"><a href="#151">151: </a></span><span class="l"><a href="#152">152: </a></span><span class="l"><a href="#153">153: </a></span><span class="l"><a href="#154">154: </a></span><span class="l"><a href="#155">155: </a></span><span class="l"><a href="#156">156: </a></span><span class="l"><a href="#157">157: </a></span><span class="l"><a href="#158">158: </a></span><span class="l"><a href="#159">159: </a></span><span class="l"><a href="#160">160: </a></span><span class="l"><a href="#161">161: </a></span><span class="l"><a href="#162">162: </a></span><span class="l"><a href="#163">163: </a></span><span class="l"><a href="#164">164: </a></span><span class="l"><a href="#165">165: </a></span><span class="l"><a href="#166">166: </a></span><span class="l"><a href="#167">167: </a></span><span class="l"><a href="#168">168: </a></span><span class="l"><a href="#169">169: </a></span><span class="l"><a href="#170">170: </a></span><span class="l"><a href="#171">171: </a></span><span class="l"><a href="#172">172: </a></span><span class="l"><a href="#173">173: </a></span><span class="l"><a href="#174">174: </a></span><span class="l"><a href="#175">175: </a></span><span class="l"><a href="#176">176: </a></span><span class="l"><a href="#177">177: </a></span><span class="l"><a href="#178">178: </a></span><span class="l"><a href="#179">179: </a></span><span class="l"><a href="#180">180: </a></span><span class="l"><a href="#181">181: </a></span><span class="l"><a href="#182">182: </a></span><span class="l"><a href="#183">183: </a></span><span class="l"><a href="#184">184: </a></span><span class="l"><a href="#185">185: </a></span><span class="l"><a href="#186">186: </a></span><span class="l"><a href="#187">187: </a></span><span class="l"><a href="#188">188: </a></span><span class="l"><a href="#189">189: </a></span><span class="l"><a href="#190">190: </a></span><span class="l"><a href="#191">191: </a></span><span class="l"><a href="#192">192: </a></span><span class="l"><a href="#193">193: </a></span><span class="l"><a href="#194">194: </a></span><span class="l"><a href="#195">195: </a></span><span class="l"><a href="#196">196: </a></span><span class="l"><a href="#197">197: </a></span><span class="l"><a href="#198">198: </a></span><span class="l"><a href="#199">199: </a></span><span class="l"><a href="#200">200: </a></span><span class="l"><a href="#201">201: </a></span><span class="l"><a href="#202">202: </a></span><span class="l"><a href="#203">203: </a></span><span class="l"><a href="#204">204: </a></span><span class="l"><a href="#205">205: </a></span><span class="l"><a href="#206">206: </a></span><span class="l"><a href="#207">207: </a></span><span class="l"><a href="#208">208: </a></span><span class="l"><a href="#209">209: </a></span><span class="l"><a href="#210">210: </a></span><span class="l"><a href="#211">211: </a></span><span class="l"><a href="#212">212: </a></span><span class="l"><a href="#213">213: </a></span><span class="l"><a href="#214">214: </a></span><span class="l"><a href="#215">215: </a></span><span class="l"><a href="#216">216: </a></span><span class="l"><a href="#217">217: </a></span><span class="l"><a href="#218">218: </a></span><span class="l"><a href="#219">219: </a></span><span class="l"><a href="#220">220: </a></span><span class="l"><a href="#221">221: </a></span><span class="l"><a href="#222">222: </a></span><span class="l"><a href="#223">223: </a></span><span class="l"><a href="#224">224: </a></span><span class="l"><a href="#225">225: </a></span><span class="l"><a href="#226">226: </a></span><span class="l"><a href="#227">227: </a></span><span class="l"><a href="#228">228: </a></span><span class="l"><a href="#229">229: </a></span><span class="l"><a href="#230">230: </a></span><span class="l"><a href="#231">231: </a></span><span class="l"><a href="#232">232: </a></span><span class="l"><a href="#233">233: </a></span><span class="l"><a href="#234">234: </a></span><span class="l"><a href="#235">235: </a></span><span class="l"><a href="#236">236: </a></span><span class="l"><a href="#237">237: </a></span><span class="l"><a href="#238">238: </a></span><span class="l"><a href="#239">239: </a></span><span class="l"><a href="#240">240: </a></span><span class="l"><a href="#241">241: </a></span><span class="l"><a href="#242">242: </a></span><span class="l"><a href="#243">243: </a></span><span class="l"><a href="#244">244: </a></span><span class="l"><a href="#245">245: </a></span><span class="l"><a href="#246">246: </a></span><span class="l"><a href="#247">247: </a></span><span class="l"><a href="#248">248: </a></span><span class="l"><a href="#249">249: </a></span><span class="l"><a href="#250">250: </a></span><span class="l"><a href="#251">251: </a></span><span class="l"><a href="#252">252: </a></span><span class="l"><a href="#253">253: </a></span><span class="l"><a href="#254">254: </a></span><span class="l"><a href="#255">255: </a></span><span class="l"><a href="#256">256: </a></span><span class="l"><a href="#257">257: </a></span><span class="l"><a href="#258">258: </a></span><span class="l"><a href="#259">259: </a></span><span class="l"><a href="#260">260: </a></span><span class="l"><a href="#261">261: </a></span><span class="l"><a href="#262">262: </a></span><span class="l"><a href="#263">263: </a></span><span class="l"><a href="#264">264: </a></span><span class="l"><a href="#265">265: </a></span><span class="l"><a href="#266">266: </a></span><span class="l"><a href="#267">267: </a></span><span class="l"><a href="#268">268: </a></span><span class="l"><a href="#269">269: </a></span><span class="l"><a href="#270">270: </a></span><span class="l"><a href="#271">271: </a></span><span class="l"><a href="#272">272: </a></span><span class="l"><a href="#273">273: </a></span><span class="l"><a href="#274">274: </a></span><span class="l"><a href="#275">275: </a></span><span class="l"><a href="#276">276: </a></span><span class="l"><a href="#277">277: </a></span><span class="l"><a href="#278">278: </a></span><span class="l"><a href="#279">279: </a></span><span class="l"><a href="#280">280: </a></span><span class="l"><a href="#281">281: </a></span><span class="l"><a href="#282">282: </a></span><span class="l"><a href="#283">283: </a></span><span class="l"><a href="#284">284: </a></span><span class="l"><a href="#285">285: </a></span><span class="l"><a href="#286">286: </a></span><span class="l"><a href="#287">287: </a></span><span class="l"><a href="#288">288: </a></span><span class="l"><a href="#289">289: </a></span><span class="l"><a href="#290">290: </a></span><span class="l"><a href="#291">291: </a></span><span class="l"><a href="#292">292: </a></span><span class="l"><a href="#293">293: </a></span><span class="l"><a href="#294">294: </a></span><span class="l"><a href="#295">295: </a></span><span class="l"><a href="#296">296: </a></span><span class="l"><a href="#297">297: </a></span></span><span class="l"><a href="#298">298: </a></span></span><span class="l"><a href="#299">299: </a></span></span><span class="l"><a href="#300">300: </a></span></span><span class="l"><a href="#301">301: </a></span></span><span class="l"><a href="#302">302: </a></span></span><span class="l"><a href="#303">303: </a></span><span class="l"><a href="#304">304: </a></span><span class="l"><a href="#305">305: </a></span><span class="l"><a href="#306">306: </a></span><span class="l"><a href="#307">307: </a></span><span class="l"><a href="#308">308: </a></span><span class="l"><a href="#309">309: </a></span><span class="l"><a href="#310">310: </a></span><span class="l"><a href="#311">311: </a></span><span class="l"><a href="#312">312: </a></span><span class="l"><a href="#313">313: </a></span><span class="l"><a href="#314">314: </a></span><span class="l"><a href="#315">315: </a></span><span class="l"><a href="#316">316: </a></span><span class="l"><a href="#317">317: </a></span><span class="l"><a href="#318">318: </a></span><span class="l"><a href="#319">319: </a></span><span class="l"><a href="#320">320: </a></span></span><span class="l"><a href="#321">321: </a></span></span><span class="l"><a href="#322">322: </a></span></span><span class="l"><a href="#323">323: </a></span></span><span class="l"><a href="#324">324: </a></span></span><span class="l"><a href="#325">325: </a></span></span><span class="l"><a href="#326">326: </a></span></span><span class="l"><a href="#327">327: </a></span></span><span class="l"><a href="#328">328: </a></span><span class="l"><a href="#329">329: </a></span><span class="l"><a href="#330">330: </a></span><span class="l"><a href="#331">331: </a></span><span class="l"><a href="#332">332: </a></span><span class="l"><a href="#333">333: </a></span><span class="l"><a href="#334">334: </a></span><span class="l"><a href="#335">335: </a></span><span class="l"><a href="#336">336: </a></span><span class="l"><a href="#337">337: </a></span><span class="l"><a href="#338">338: </a></span><span class="l"><a href="#339">339: </a></span><span class="l"><a href="#340">340: </a></span><span class="l"><a href="#341">341: </a></span><span class="l"><a href="#342">342: </a></span><span class="l"><a href="#343">343: </a></span><span class="l"><a href="#344">344: </a></span><span class="l"><a href="#345">345: </a></span><span class="l"><a href="#346">346: </a></span><span class="l"><a href="#347">347: </a></span><span class="l"><a href="#348">348: </a></span><span class="l"><a href="#349">349: </a></span><span class="l"><a href="#350">350: </a></span><span class="l"><a href="#351">351: </a></span><span class="l"><a href="#352">352: </a></span><span class="l"><a href="#353">353: </a></span></code></pre>
	            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l"><span class="php-comment">/**
</span></span><span id="3" class="l"><span class="php-comment"> * Text helper
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Helper
</span></span><span id="5" class="l"><span class="php-comment"> * @category    Framework
</span></span><span id="6" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="7" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="8" class="l"><span class="php-comment"> * @author      Regis VIARRE &lt;crowkait@phpboost.com&gt;
</span></span><span id="9" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2018 11 09
</span></span><span id="10" class="l"><span class="php-comment"> * @since       PHPBoost 3.0 - 2010 01 24
</span></span><span id="11" class="l"><span class="php-comment"> * @contributor Julien BRISWALTER &lt;j1.seth@phpboost.com&gt;
</span></span><span id="12" class="l"><span class="php-comment"> * @contributor Arnaud GENET &lt;elenwii@phpboost.com&gt;
</span></span><span id="13" class="l"><span class="php-comment"> * @contributor mipel &lt;mipel@phpboost.com&gt;
</span></span><span id="14" class="l"><span class="php-comment">*/</span>
</span><span id="15" class="l">
</span><span id="16" class="l"><span class="php-keyword1">class</span> TextHelper
</span><span id="17" class="l">{
</span><span id="18" class="l">    <span class="php-keyword1">const</span> HTML_NO_PROTECT = <span class="php-keyword1">false</span>;
</span><span id="19" class="l">    <span class="php-keyword1">const</span> HTML_PROTECT = <span class="php-keyword1">true</span>;
</span><span id="20" class="l">    <span class="php-keyword1">const</span> ADDSLASHES_FORCE = <span class="php-num">1</span>;
</span><span id="21" class="l">    <span class="php-keyword1">const</span> ADDSLASHES_NONE = <span class="php-num">2</span>;
</span><span id="22" class="l">
</span><span id="23" class="l">    <span class="php-comment">/**
</span></span><span id="24" class="l"><span class="php-comment">     * Protects an input variable. Never trust user input!
</span></span><span id="25" class="l"><span class="php-comment">     * @param string $var Variable to protect.
</span></span><span id="26" class="l"><span class="php-comment">     * @param bool $html_protect HTML_PROTECT if you don't accept the HTML code (it will be transformed
</span></span><span id="27" class="l"><span class="php-comment">     * by the corresponding HTML entities and won't be considerer by the web browsers).
</span></span><span id="28" class="l"><span class="php-comment">     * @param int $addslashes If you want to escape the quotes in the string, use ADDSLASHES_FORCE, if you don't want, use the ADDSLASHES_NONE constant.
</span></span><span id="29" class="l"><span class="php-comment">     * @return string The protected string.
</span></span><span id="30" class="l"><span class="php-comment">     */</span>
</span><span id="31" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> strprotect(<span class="php-var">$var</span>, <span class="php-var">$html_protect</span> = self::HTML_PROTECT, <span class="php-var">$addslashes</span> = self::ADDSLASHES_FORCE)
</span><span id="32" class="l">    {
</span><span id="33" class="l">        <span class="php-var">$var</span> = <span class="php-keyword2">trim</span>((string)<span class="php-var">$var</span>);
</span><span id="34" class="l">
</span><span id="35" class="l">        <span class="php-comment">//Protection contre les balises html.</span>
</span><span id="36" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$html_protect</span>)
</span><span id="37" class="l">        {
</span><span id="38" class="l">            <span class="php-var">$var</span> = self::<span class="php-keyword2">htmlspecialchars</span>(<span class="php-var">$var</span>);
</span><span id="39" class="l">            <span class="php-comment">//While we aren't in UTF8 encoding, we have to use HTML entities to display some special chars, we accept them.</span>
</span><span id="40" class="l">            <span class="php-var">$var</span> = <span class="php-keyword2">preg_replace</span>(<span class="php-quote">'`&amp;amp;((?:#[0-9]{2,5})|(?:[a-z0-9]{2,8}));`iu'</span>, <span class="php-quote">&quot;&amp;</span><span class="php-var">$1</span><span class="php-quote">;&quot;</span>, <span class="php-var">$var</span>);
</span><span id="41" class="l">        }
</span><span id="42" class="l">
</span><span id="43" class="l">        <span class="php-keyword1">switch</span> (<span class="php-var">$addslashes</span>)
</span><span id="44" class="l">        {
</span><span id="45" class="l">            <span class="php-keyword1">case</span> self::ADDSLASHES_FORCE:
</span><span id="46" class="l">            <span class="php-keyword1">default</span>:
</span><span id="47" class="l">                <span class="php-comment">//On force l'échappement de caractères</span>
</span><span id="48" class="l">                <span class="php-var">$var</span> = <span class="php-keyword2">addslashes</span>(<span class="php-var">$var</span>);
</span><span id="49" class="l">                <span class="php-keyword1">break</span>;
</span><span id="50" class="l">            <span class="php-keyword1">case</span> self::ADDSLASHES_NONE:
</span><span id="51" class="l">                <span class="php-comment">//On ne touche pas la chaîne</span>
</span><span id="52" class="l">                <span class="php-var">$var</span> = <span class="php-keyword2">stripslashes</span>(<span class="php-var">$var</span>);
</span><span id="53" class="l">                <span class="php-keyword1">break</span>;
</span><span id="54" class="l">        }
</span><span id="55" class="l">
</span><span id="56" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$var</span>;
</span><span id="57" class="l">    }
</span><span id="58" class="l">
</span><span id="59" class="l">    <span class="php-comment">/**
</span></span><span id="60" class="l"><span class="php-comment">     * Inserts a carriage return every $lenght characters. It's equivalent to wordwrap PHP function but it can deal with the HTML entities.
</span></span><span id="61" class="l"><span class="php-comment">     * An entity is coded on several characters and the wordwrap function counts several characters for an entity whereas it represents only one character.
</span></span><span id="62" class="l"><span class="php-comment">     * @param string $str The string to wrap.
</span></span><span id="63" class="l"><span class="php-comment">     * @param int $lenght The number of characters you want in a line.
</span></span><span id="64" class="l"><span class="php-comment">     * @param string $cut_char The character to insert every $lenght characters. The default value is '&lt;br /&gt;', the HTML carriage return tag.
</span></span><span id="65" class="l"><span class="php-comment">     * @param bool $cut True if you accept that a word would be broken apart, false if you want to cut only on a blank character.
</span></span><span id="66" class="l"><span class="php-comment">     * @return string The wrapped HTML string.
</span></span><span id="67" class="l"><span class="php-comment">     */</span>
</span><span id="68" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> wordwrap_html(<span class="php-var">$str</span>, <span class="php-var">$lenght</span>, <span class="php-var">$cut_char</span> = <span class="php-quote">'&lt;br /&gt;'</span>, <span class="php-var">$cut</span> = <span class="php-keyword1">true</span>)
</span><span id="69" class="l">    {
</span><span id="70" class="l">        <span class="php-var">$str</span> = self::utf8_wordwrap(self::<span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$str</span>), <span class="php-var">$lenght</span>, <span class="php-var">$cut_char</span>, <span class="php-var">$cut</span>);
</span><span id="71" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">str_replace</span>(<span class="php-quote">'&amp;lt;br /&amp;gt;'</span>, <span class="php-quote">'&lt;br /&gt;'</span>, self::<span class="php-keyword2">htmlspecialchars</span>(<span class="php-var">$str</span>, ENT_NOQUOTES));
</span><span id="72" class="l">    }
</span><span id="73" class="l">
</span><span id="74" class="l">    <span class="php-comment">/**
</span></span><span id="75" class="l"><span class="php-comment">     * Cuts a string containing some HTML code which contains some HTML entities. The substr PHP function considers a HTML entity as several characters.
</span></span><span id="76" class="l"><span class="php-comment">     * This function allows you to consider them as only one character.
</span></span><span id="77" class="l"><span class="php-comment">     * @param string $str The string you want to cut.
</span></span><span id="78" class="l"><span class="php-comment">     * @param int $start  If start  is non-negative, the returned string will start at the start 'th position in string , counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
</span></span><span id="79" class="l"><span class="php-comment">     * If start is negative, the returned string will start at the start 'th character from the end of string .
</span></span><span id="80" class="l"><span class="php-comment">     * If string is less than or equal to start characters long, FALSE will be returned.
</span></span><span id="81" class="l"><span class="php-comment">     * @param int $end If length is given and is positive, the string returned will contain at most length  characters beginning from start  (depending on the length of string ).
</span></span><span id="82" class="l"><span class="php-comment">     * @return string The sub string.
</span></span><span id="83" class="l"><span class="php-comment">     */</span>
</span><span id="84" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> substr_html(<span class="php-var">$str</span>, <span class="php-var">$start</span>, <span class="php-var">$end</span> = <span class="php-quote">''</span>)
</span><span id="85" class="l">    {
</span><span id="86" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$end</span> == <span class="php-quote">''</span>)
</span><span id="87" class="l">            <span class="php-keyword1">return</span> self::<span class="php-keyword2">htmlspecialchars</span>(self::<span class="php-keyword2">substr</span>(self::<span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$str</span>), <span class="php-var">$start</span>), ENT_NOQUOTES);
</span><span id="88" class="l">        <span class="php-keyword1">else</span>
</span><span id="89" class="l">            <span class="php-keyword1">return</span> self::<span class="php-keyword2">htmlspecialchars</span>(self::<span class="php-keyword2">substr</span>(self::<span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$str</span>), <span class="php-var">$start</span>, <span class="php-var">$end</span>), ENT_NOQUOTES);
</span><span id="90" class="l">    }
</span><span id="91" class="l">
</span><span id="92" class="l">    <span class="php-comment">/**
</span></span><span id="93" class="l"><span class="php-comment">     * Cut string to the desired length, ending with the last full word.
</span></span><span id="94" class="l"><span class="php-comment">     * @param string $string A PHP string to convert to cut
</span></span><span id="95" class="l"><span class="php-comment">     * @param int $length The desired length
</span></span><span id="96" class="l"><span class="php-comment">     * @return string The substring
</span></span><span id="97" class="l"><span class="php-comment">     */</span>
</span><span id="98" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> cut_string(<span class="php-var">$string</span>, <span class="php-var">$length</span>)
</span><span id="99" class="l">    {
</span><span id="100" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">strlen</span>(<span class="php-var">$string</span>) &lt;= <span class="php-var">$length</span>)
</span><span id="101" class="l">            <span class="php-keyword1">return</span> <span class="php-var">$string</span>;
</span><span id="102" class="l">
</span><span id="103" class="l">        <span class="php-var">$str</span> = <span class="php-keyword2">mb_substr</span>(<span class="php-keyword2">str_replace</span>(<span class="php-quote">'&lt;br /&gt;'</span>, <span class="php-quote">'&lt;br/&gt;'</span>, <span class="php-var">$string</span>), <span class="php-num">0</span>, <span class="php-var">$length</span> + <span class="php-num">1</span>, <span class="php-quote">'UTF-8'</span>);
</span><span id="104" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">substr</span>(<span class="php-var">$str</span>, <span class="php-num">0</span>, <span class="php-keyword2">strrpos</span>(<span class="php-var">$str</span>, <span class="php-quote">' '</span>)) . <span class="php-quote">'...'</span>;
</span><span id="105" class="l">    }
</span><span id="106" class="l">
</span><span id="107" class="l">    <span class="php-comment">/**
</span></span><span id="108" class="l"><span class="php-comment">     * Exports a variable to be used in a javascript script.
</span></span><span id="109" class="l"><span class="php-comment">     * @param string $string A PHP string to convert to a JS one
</span></span><span id="110" class="l"><span class="php-comment">     * @param string $add_quotes If true, returned string will be bounded by single quotes
</span></span><span id="111" class="l"><span class="php-comment">     * @return string The js equivalent string
</span></span><span id="112" class="l"><span class="php-comment">     */</span>
</span><span id="113" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> to_js_string(<span class="php-var">$string</span>, <span class="php-var">$add_quotes</span> = <span class="php-keyword1">true</span>)
</span><span id="114" class="l">    {
</span><span id="115" class="l">        <span class="php-var">$bounds</span> = <span class="php-var">$add_quotes</span> ? <span class="php-quote">'\''</span> : <span class="php-quote">''</span>;
</span><span id="116" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$bounds</span> . <span class="php-keyword2">str_replace</span>(<span class="php-keyword1">array</span>(<span class="php-quote">&quot;\r\n&quot;</span>, <span class="php-quote">&quot;\r&quot;</span>, <span class="php-quote">&quot;\n&quot;</span>, <span class="php-quote">'&quot;'</span>), <span class="php-keyword1">array</span>(<span class="php-quote">'\n'</span>, <span class="php-quote">'\n'</span>, <span class="php-quote">'\n'</span>, <span class="php-quote">'&amp;quot;'</span>), <span class="php-keyword2">addcslashes</span>(<span class="php-var">$string</span>, <span class="php-quote">'\''</span>)) . <span class="php-var">$bounds</span>;
</span><span id="117" class="l">    }
</span><span id="118" class="l">
</span><span id="119" class="l">    <span class="php-comment">/**
</span></span><span id="120" class="l"><span class="php-comment">     * Exports a variable to be used in a json javascript script.
</span></span><span id="121" class="l"><span class="php-comment">     * @param string $string A PHP string to convert to a json one
</span></span><span id="122" class="l"><span class="php-comment">     * @param string $add_quotes If true, returned string will be bounded by double quotes
</span></span><span id="123" class="l"><span class="php-comment">     * @return string The json equivalent string
</span></span><span id="124" class="l"><span class="php-comment">     */</span>
</span><span id="125" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> to_json_string(<span class="php-var">$string</span>, <span class="php-var">$add_quotes</span> = <span class="php-keyword1">true</span>)
</span><span id="126" class="l">    {
</span><span id="127" class="l">        <span class="php-var">$bounds</span> = <span class="php-var">$add_quotes</span> ? <span class="php-quote">'&quot;'</span> : <span class="php-quote">''</span>;
</span><span id="128" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$bounds</span> . <span class="php-keyword2">str_replace</span>(<span class="php-keyword1">array</span>(<span class="php-quote">&quot;\r\n&quot;</span>, <span class="php-quote">&quot;\r&quot;</span>, <span class="php-quote">&quot;\n&quot;</span>,), <span class="php-keyword1">array</span>(<span class="php-quote">'\n'</span>, <span class="php-quote">'\n'</span>, <span class="php-quote">'\n'</span>,), <span class="php-keyword2">addcslashes</span>(<span class="php-var">$string</span>, <span class="php-quote">'&quot;'</span>)) . <span class="php-var">$bounds</span>;
</span><span id="129" class="l">    }
</span><span id="130" class="l">
</span><span id="131" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">htmlspecialchars</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span> = <span class="php-keyword1">null</span>, <span class="php-var">$encoding</span> = <span class="php-quote">'UTF-8'</span>, <span class="php-var">$double_encode</span> = <span class="php-keyword1">true</span>)
</span><span id="132" class="l">    {
</span><span id="133" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$flags</span> === <span class="php-keyword1">null</span>)
</span><span id="134" class="l">            <span class="php-var">$flags</span> = ENT_COMPAT;
</span><span id="135" class="l">
</span><span id="136" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">str_replace</span>(<span class="php-quote">'&amp;amp;'</span>, <span class="php-quote">'&amp;'</span>, <span class="php-keyword2">htmlspecialchars</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span>, <span class="php-var">$encoding</span>, <span class="php-var">$double_encode</span>));
</span><span id="137" class="l">    }
</span><span id="138" class="l">
</span><span id="139" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">htmlspecialchars_decode</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span> = <span class="php-keyword1">null</span>)
</span><span id="140" class="l">    {
</span><span id="141" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$flags</span> === <span class="php-keyword1">null</span>)
</span><span id="142" class="l">            <span class="php-var">$flags</span> = ENT_COMPAT;
</span><span id="143" class="l">
</span><span id="144" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">htmlspecialchars_decode</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span>);
</span><span id="145" class="l">    }
</span><span id="146" class="l">
</span><span id="147" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span> = <span class="php-keyword1">null</span>, <span class="php-var">$encoding</span> = <span class="php-quote">'UTF-8'</span>)
</span><span id="148" class="l">    {
</span><span id="149" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$flags</span> === <span class="php-keyword1">null</span>)
</span><span id="150" class="l">            <span class="php-var">$flags</span> = ENT_COMPAT;
</span><span id="151" class="l">
</span><span id="152" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">html_entity_decode</span>(<span class="php-var">$string</span>, <span class="php-var">$flags</span>, <span class="php-var">$encoding</span>);
</span><span id="153" class="l">    }
</span><span id="154" class="l">
</span><span id="155" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strtolower</span>(<span class="php-var">$string</span>)
</span><span id="156" class="l">    {
</span><span id="157" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strtolower</span>(<span class="php-var">$string</span>);
</span><span id="158" class="l">    }
</span><span id="159" class="l">
</span><span id="160" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strtoupper</span>(<span class="php-var">$string</span>)
</span><span id="161" class="l">    {
</span><span id="162" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strtoupper</span>(<span class="php-var">$string</span>);
</span><span id="163" class="l">    }
</span><span id="164" class="l">
</span><span id="165" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">lcfirst</span>(<span class="php-var">$string</span>)
</span><span id="166" class="l">    {
</span><span id="167" class="l">        <span class="php-var">$fc</span> = <span class="php-keyword2">mb_strtolower</span>(<span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-num">0</span>, <span class="php-num">1</span>));
</span><span id="168" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$fc</span> . <span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-num">1</span>);
</span><span id="169" class="l">    }
</span><span id="170" class="l">
</span><span id="171" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">ucfirst</span>(<span class="php-var">$string</span>)
</span><span id="172" class="l">    {
</span><span id="173" class="l">        <span class="php-var">$fc</span> = <span class="php-keyword2">mb_strtoupper</span>(<span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-num">0</span>, <span class="php-num">1</span>));
</span><span id="174" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$fc</span> . <span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-num">1</span>);
</span><span id="175" class="l">    }
</span><span id="176" class="l">
</span><span id="177" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strlen</span>(<span class="php-var">$string</span>)
</span><span id="178" class="l">    {
</span><span id="179" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">strlen</span>(<span class="php-var">$string</span>);
</span><span id="180" class="l">    }
</span><span id="181" class="l">
</span><span id="182" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strpos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>, <span class="php-var">$offset</span> = <span class="php-quote">''</span>)
</span><span id="183" class="l">    {
</span><span id="184" class="l">        <span class="php-keyword1">if</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$substring</span>))
</span><span id="185" class="l">        {
</span><span id="186" class="l">            <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$offset</span>))
</span><span id="187" class="l">                <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strpos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>, <span class="php-var">$offset</span>);
</span><span id="188" class="l">            <span class="php-keyword1">else</span>
</span><span id="189" class="l">                <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strpos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>);
</span><span id="190" class="l">        }
</span><span id="191" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="192" class="l">    }
</span><span id="193" class="l">
</span><span id="194" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">stripos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>, <span class="php-var">$offset</span> = <span class="php-quote">''</span>)
</span><span id="195" class="l">    {
</span><span id="196" class="l">        <span class="php-keyword1">if</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$substring</span>))
</span><span id="197" class="l">        {
</span><span id="198" class="l">            <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$offset</span>))
</span><span id="199" class="l">                <span class="php-keyword1">return</span> <span class="php-keyword2">mb_stripos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>, <span class="php-var">$offset</span>);
</span><span id="200" class="l">            <span class="php-keyword1">else</span>
</span><span id="201" class="l">                <span class="php-keyword1">return</span> <span class="php-keyword2">mb_stripos</span>(<span class="php-var">$string</span>, <span class="php-var">$substring</span>);
</span><span id="202" class="l">        }
</span><span id="203" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="204" class="l">    }
</span><span id="205" class="l">
</span><span id="206" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>, <span class="php-var">$length</span> = <span class="php-quote">''</span>)
</span><span id="207" class="l">    {
</span><span id="208" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$length</span>))
</span><span id="209" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>, <span class="php-var">$length</span>);
</span><span id="210" class="l">        <span class="php-keyword1">else</span>
</span><span id="211" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>);
</span><span id="212" class="l">    }
</span><span id="213" class="l">
</span><span id="214" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>, <span class="php-var">$length</span> = <span class="php-quote">''</span>)
</span><span id="215" class="l">    {
</span><span id="216" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$length</span>))
</span><span id="217" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>, <span class="php-var">$length</span>);
</span><span id="218" class="l">        <span class="php-keyword1">else</span>
</span><span id="219" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_substr</span>(<span class="php-var">$string</span>, <span class="php-var">$start</span>);
</span><span id="220" class="l">    }
</span><span id="221" class="l">
</span><span id="222" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strrchr</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>)
</span><span id="223" class="l">    {
</span><span id="224" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strrchr</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>);
</span><span id="225" class="l">    }
</span><span id="226" class="l">
</span><span id="227" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strripos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$offset</span> = <span class="php-quote">''</span>)
</span><span id="228" class="l">    {
</span><span id="229" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$offset</span>))
</span><span id="230" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strripos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$offset</span>);
</span><span id="231" class="l">        <span class="php-keyword1">else</span>
</span><span id="232" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strripos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>);
</span><span id="233" class="l">    }
</span><span id="234" class="l">
</span><span id="235" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strrpos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$offset</span> = <span class="php-quote">''</span>)
</span><span id="236" class="l">    {
</span><span id="237" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$offset</span>))
</span><span id="238" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strrpos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$offset</span>);
</span><span id="239" class="l">        <span class="php-keyword1">else</span>
</span><span id="240" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strrpos</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>);
</span><span id="241" class="l">    }
</span><span id="242" class="l">
</span><span id="243" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">strstr</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$before_needle</span> = <span class="php-quote">''</span>)
</span><span id="244" class="l">    {
</span><span id="245" class="l">        <span class="php-keyword1">if</span> (<span class="php-keyword2">is_int</span>(<span class="php-var">$before_needle</span>))
</span><span id="246" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strstr</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$before_needle</span>);
</span><span id="247" class="l">        <span class="php-keyword1">else</span>
</span><span id="248" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_strstr</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>);
</span><span id="249" class="l">    }
</span><span id="250" class="l">
</span><span id="251" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">substr_count</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$encoding</span> = <span class="php-quote">''</span>)
</span><span id="252" class="l">    {
</span><span id="253" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$encoding</span> != <span class="php-quote">''</span>)
</span><span id="254" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_substr_count</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>, <span class="php-var">$encoding</span>);
</span><span id="255" class="l">        <span class="php-keyword1">else</span>
</span><span id="256" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_substr_count</span>(<span class="php-var">$string</span>, <span class="php-var">$needle</span>);
</span><span id="257" class="l">    }
</span><span id="258" class="l">
</span><span id="259" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> convert_case(<span class="php-var">$string</span>, <span class="php-var">$mode</span>, <span class="php-var">$encoding</span> = <span class="php-quote">''</span>)
</span><span id="260" class="l">    {
</span><span id="261" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$encoding</span> != <span class="php-quote">''</span>)
</span><span id="262" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_convert_case</span>(<span class="php-var">$string</span>, <span class="php-var">$mode</span>, <span class="php-var">$encoding</span>);
</span><span id="263" class="l">        <span class="php-keyword1">else</span>
</span><span id="264" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword2">mb_convert_case</span>(<span class="php-var">$string</span>, <span class="php-var">$mode</span>);
</span><span id="265" class="l">    }
</span><span id="266" class="l">
</span><span id="267" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">serialize</span>(<span class="php-var">$string</span>)
</span><span id="268" class="l">    {
</span><span id="269" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">serialize</span>(<span class="php-var">$string</span>);
</span><span id="270" class="l">    }
</span><span id="271" class="l">
</span><span id="272" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> serialize_base64(<span class="php-var">$string</span>)
</span><span id="273" class="l">    {
</span><span id="274" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">base64_encode</span>(self::<span class="php-keyword2">serialize</span>(<span class="php-var">$string</span>));
</span><span id="275" class="l">    }
</span><span id="276" class="l">
</span><span id="277" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> <span class="php-keyword2">unserialize</span>(<span class="php-var">$string</span>)
</span><span id="278" class="l">    {
</span><span id="279" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">unserialize</span>(self:: is_base64(<span class="php-var">$string</span>) ? <span class="php-keyword2">base64_decode</span>(<span class="php-var">$string</span>) : <span class="php-var">$string</span>);
</span><span id="280" class="l">    }
</span><span id="281" class="l">
</span><span id="282" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> mb_unserialize(<span class="php-var">$string</span>)
</span><span id="283" class="l">    {
</span><span id="284" class="l">        <span class="php-var">$string</span> = <span class="php-keyword2">preg_replace_callback</span>(<span class="php-quote">'!s:(\d+):&quot;(.*?)&quot;;!s'</span>, <span class="php-keyword1">function</span> (<span class="php-var">$matches</span>) {
</span><span id="285" class="l">            <span class="php-keyword1">if</span> (<span class="php-keyword1">isset</span>(<span class="php-var">$matches</span>[<span class="php-num">2</span>])) <span class="php-keyword1">return</span> <span class="php-quote">'s:'</span> . <span class="php-keyword2">strlen</span>(<span class="php-var">$matches</span>[<span class="php-num">2</span>]) . <span class="php-quote">':&quot;'</span> . <span class="php-var">$matches</span>[<span class="php-num">2</span>] . <span class="php-quote">'&quot;;'</span>;
</span><span id="286" class="l">        }, <span class="php-var">$string</span>
</span><span id="287" class="l">        );
</span><span id="288" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">unserialize</span>(<span class="php-var">$string</span>);
</span><span id="289" class="l">    }
</span><span id="290" class="l">
</span><span id="291" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> is_base64(<span class="php-var">$string</span>)
</span><span id="292" class="l">    {
</span><span id="293" class="l">        <span class="php-var">$decoded</span> = <span class="php-keyword2">base64_decode</span>(<span class="php-var">$string</span>, <span class="php-keyword1">true</span>);
</span><span id="294" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">preg_match</span>(<span class="php-quote">'/^[a-zA-Z0-9\/\r\n+]*={0,2}$/'</span>, <span class="php-var">$string</span>) &amp;&amp; <span class="php-keyword1">false</span> !== <span class="php-var">$decoded</span> &amp;&amp; <span class="php-keyword2">base64_encode</span>(<span class="php-var">$decoded</span>) == <span class="php-var">$string</span>;
</span><span id="295" class="l">    }
</span><span id="296" class="l">
</span><span id="297" class="l">    <span class="php-comment">/**
</span></span><span id="298" class="l"><span class="php-comment">     * Checks if a string contains less than a defined number of links (used to prevent SPAM).
</span></span><span id="299" class="l"><span class="php-comment">     * @param string $contents String in which you want to count the number of links
</span></span><span id="300" class="l"><span class="php-comment">     * @param int $max_nbr Maximum number of links accepted.
</span></span><span id="301" class="l"><span class="php-comment">     * @param bool $has_html_links true if the content is in HTML
</span></span><span id="302" class="l"><span class="php-comment">     * @return bool true if there are no too much links, false otherwise.
</span></span><span id="303" class="l"><span class="php-comment">     */</span>
</span><span id="304" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> check_nbr_links(<span class="php-var">$contents</span>, <span class="php-var">$max_nbr</span>, <span class="php-var">$has_html_links</span> = <span class="php-keyword1">false</span>)
</span><span id="305" class="l">    {
</span><span id="306" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$max_nbr</span> == -<span class="php-num">1</span>)
</span><span id="307" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword1">true</span>;
</span><span id="308" class="l">
</span><span id="309" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$has_html_links</span>)
</span><span id="310" class="l">            <span class="php-var">$nbr_link</span> = <span class="php-keyword2">preg_match_all</span>(<span class="php-quote">'`&lt;a href=&quot;(?:ftp|https?)://`u'</span>, <span class="php-var">$contents</span>, <span class="php-var">$array</span>);
</span><span id="311" class="l">        <span class="php-keyword1">else</span>
</span><span id="312" class="l">            <span class="php-var">$nbr_link</span> = <span class="php-keyword2">preg_match_all</span>(<span class="php-quote">'`(?:ftp|https?)://`u'</span>, <span class="php-var">$contents</span>, <span class="php-var">$array</span>);
</span><span id="313" class="l">
</span><span id="314" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$nbr_link</span> !== <span class="php-keyword1">false</span> &amp;&amp; <span class="php-var">$nbr_link</span> &gt; <span class="php-var">$max_nbr</span>)
</span><span id="315" class="l">            <span class="php-keyword1">return</span> <span class="php-keyword1">false</span>;
</span><span id="316" class="l">
</span><span id="317" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">true</span>;
</span><span id="318" class="l">    }
</span><span id="319" class="l">
</span><span id="320" class="l">    <span class="php-comment">/**
</span></span><span id="321" class="l"><span class="php-comment">     * Wraps a UTF-8 string to a given number of characters
</span></span><span id="322" class="l"><span class="php-comment">     *
</span></span><span id="323" class="l"><span class="php-comment">     * @param string $string the input string
</span></span><span id="324" class="l"><span class="php-comment">     * @param int $width the column width
</span></span><span id="325" class="l"><span class="php-comment">     * @param string $break the line is broken using the optional break parameter
</span></span><span id="326" class="l"><span class="php-comment">     * @param string $cut not used for the moment
</span></span><span id="327" class="l"><span class="php-comment">     * @return string the given string wrapped at the specified column
</span></span><span id="328" class="l"><span class="php-comment">     */</span>
</span><span id="329" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">static</span> <span class="php-keyword1">function</span> utf8_wordwrap(<span class="php-var">$string</span>, <span class="php-var">$width</span> = <span class="php-num">75</span>, <span class="php-var">$break</span> = <span class="php-quote">&quot;\n&quot;</span>, <span class="php-var">$cut</span> = <span class="php-keyword1">true</span>)
</span><span id="330" class="l">    {
</span><span id="331" class="l">        <span class="php-var">$lines</span> = <span class="php-keyword1">array</span>();
</span><span id="332" class="l">        <span class="php-keyword1">while</span> (!<span class="php-keyword1">empty</span>(<span class="php-var">$string</span>))
</span><span id="333" class="l">        {
</span><span id="334" class="l">            <span class="php-comment">// We got a line with a break in it somewhere before the end</span>
</span><span id="335" class="l">            <span class="php-keyword1">if</span> (<span class="php-keyword2">preg_match</span>(<span class="php-quote">'%^(.{1,'</span> . <span class="php-var">$width</span> . <span class="php-quote">'})(?:\s|$)%u'</span>, <span class="php-var">$string</span>, <span class="php-var">$matches</span>))
</span><span id="336" class="l">            {
</span><span id="337" class="l">                <span class="php-comment">// Add this line to the output</span>
</span><span id="338" class="l">                <span class="php-var">$lines</span>[] = <span class="php-var">$matches</span>[<span class="php-num">1</span>];
</span><span id="339" class="l">                <span class="php-var">$string</span> = self::<span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, self::<span class="php-keyword2">strlen</span>(<span class="php-var">$matches</span>[<span class="php-num">0</span>]));
</span><span id="340" class="l">            }
</span><span id="341" class="l">            <span class="php-comment">// Just take the next $width characters</span>
</span><span id="342" class="l">            <span class="php-keyword1">else</span>
</span><span id="343" class="l">            {
</span><span id="344" class="l">                <span class="php-var">$lines</span>[] = self::<span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, <span class="php-num">0</span>, <span class="php-var">$width</span>);
</span><span id="345" class="l">                <span class="php-var">$string</span> = self::<span class="php-keyword2">substr</span>(<span class="php-var">$string</span>, <span class="php-var">$width</span>);
</span><span id="346" class="l">            }
</span><span id="347" class="l">        }
</span><span id="348" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword2">implode</span>(<span class="php-var">$break</span>, <span class="php-var">$lines</span>);
</span><span id="349" class="l">    }
</span><span id="350" class="l">}
</span><span id="351" class="l">
</span><span id="352" class="l"><span class="xlang">?&gt;</span>
</span><span id="353" class="l"></span></code></pre>
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