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
		<h1>File builder/ajax/AjaxRequest.class.php</h1>
	</header>
	<article>
		<header><h2>File builder/ajax/AjaxRequest.class.php</h2></header>
		<div class="content">
            <pre class="numbers"><code><span class="l"><a href="#1">  1: </a></span><span class="l"><a href="#2">  2: </a></span><span class="l"><a href="#3">  3: </a></span></span><span class="l"><a href="#4">  4: </a></span></span><span class="l"><a href="#5">  5: </a></span></span><span class="l"><a href="#6">  6: </a></span></span><span class="l"><a href="#7">  7: </a></span></span><span class="l"><a href="#8">  8: </a></span></span><span class="l"><a href="#9">  9: </a></span></span><span class="l"><a href="#10"> 10: </a></span></span><span class="l"><a href="#11"> 11: </a></span></span><span class="l"><a href="#12"> 12: </a></span><span class="l"><a href="#13"> 13: </a></span><span class="l"><a href="#14"> 14: </a></span><span class="l"><a href="#15"> 15: </a></span><span class="l"><a href="#16"> 16: </a></span><span class="l"><a href="#17"> 17: </a></span><span class="l"><a href="#18"> 18: </a></span><span class="l"><a href="#19"> 19: </a></span><span class="l"><a href="#20"> 20: </a></span><span class="l"><a href="#21"> 21: </a></span><span class="l"><a href="#22"> 22: </a></span><span class="l"><a href="#23"> 23: </a></span><span class="l"><a href="#24"> 24: </a></span><span class="l"><a href="#25"> 25: </a></span><span class="l"><a href="#26"> 26: </a></span><span class="l"><a href="#27"> 27: </a></span><span class="l"><a href="#28"> 28: </a></span><span class="l"><a href="#29"> 29: </a></span><span class="l"><a href="#30"> 30: </a></span><span class="l"><a href="#31"> 31: </a></span><span class="l"><a href="#32"> 32: </a></span><span class="l"><a href="#33"> 33: </a></span><span class="l"><a href="#34"> 34: </a></span><span class="l"><a href="#35"> 35: </a></span><span class="l"><a href="#36"> 36: </a></span><span class="l"><a href="#37"> 37: </a></span><span class="l"><a href="#38"> 38: </a></span><span class="l"><a href="#39"> 39: </a></span><span class="l"><a href="#40"> 40: </a></span><span class="l"><a href="#41"> 41: </a></span><span class="l"><a href="#42"> 42: </a></span><span class="l"><a href="#43"> 43: </a></span><span class="l"><a href="#44"> 44: </a></span><span class="l"><a href="#45"> 45: </a></span><span class="l"><a href="#46"> 46: </a></span><span class="l"><a href="#47"> 47: </a></span><span class="l"><a href="#48"> 48: </a></span><span class="l"><a href="#49"> 49: </a></span><span class="l"><a href="#50"> 50: </a></span><span class="l"><a href="#51"> 51: </a></span><span class="l"><a href="#52"> 52: </a></span><span class="l"><a href="#53"> 53: </a></span><span class="l"><a href="#54"> 54: </a></span><span class="l"><a href="#55"> 55: </a></span><span class="l"><a href="#56"> 56: </a></span><span class="l"><a href="#57"> 57: </a></span><span class="l"><a href="#58"> 58: </a></span><span class="l"><a href="#59"> 59: </a></span><span class="l"><a href="#60"> 60: </a></span><span class="l"><a href="#61"> 61: </a></span><span class="l"><a href="#62"> 62: </a></span><span class="l"><a href="#63"> 63: </a></span><span class="l"><a href="#64"> 64: </a></span><span class="l"><a href="#65"> 65: </a></span><span class="l"><a href="#66"> 66: </a></span><span class="l"><a href="#67"> 67: </a></span><span class="l"><a href="#68"> 68: </a></span><span class="l"><a href="#69"> 69: </a></span><span class="l"><a href="#70"> 70: </a></span><span class="l"><a href="#71"> 71: </a></span><span class="l"><a href="#72"> 72: </a></span><span class="l"><a href="#73"> 73: </a></span><span class="l"><a href="#74"> 74: </a></span><span class="l"><a href="#75"> 75: </a></span><span class="l"><a href="#76"> 76: </a></span><span class="l"><a href="#77"> 77: </a></span><span class="l"><a href="#78"> 78: </a></span><span class="l"><a href="#79"> 79: </a></span><span class="l"><a href="#80"> 80: </a></span><span class="l"><a href="#81"> 81: </a></span><span class="l"><a href="#82"> 82: </a></span><span class="l"><a href="#83"> 83: </a></span><span class="l"><a href="#84"> 84: </a></span><span class="l"><a href="#85"> 85: </a></span><span class="l"><a href="#86"> 86: </a></span><span class="l"><a href="#87"> 87: </a></span></span><span class="l"><a href="#88"> 88: </a></span></span><span class="l"><a href="#89"> 89: </a></span></span><span class="l"><a href="#90"> 90: </a></span></span><span class="l"><a href="#91"> 91: </a></span></span><span class="l"><a href="#92"> 92: </a></span><span class="l"><a href="#93"> 93: </a></span><span class="l"><a href="#94"> 94: </a></span><span class="l"><a href="#95"> 95: </a></span><span class="l"><a href="#96"> 96: </a></span><span class="l"><a href="#97"> 97: </a></span><span class="l"><a href="#98"> 98: </a></span><span class="l"><a href="#99"> 99: </a></span><span class="l"><a href="#100">100: </a></span><span class="l"><a href="#101">101: </a></span><span class="l"><a href="#102">102: </a></span><span class="l"><a href="#103">103: </a></span><span class="l"><a href="#104">104: </a></span><span class="l"><a href="#105">105: </a></span><span class="l"><a href="#106">106: </a></span><span class="l"><a href="#107">107: </a></span><span class="l"><a href="#108">108: </a></span><span class="l"><a href="#109">109: </a></span><span class="l"><a href="#110">110: </a></span><span class="l"><a href="#111">111: </a></span><span class="l"><a href="#112">112: </a></span><span class="l"><a href="#113">113: </a></span><span class="l"><a href="#114">114: </a></span></code></pre>
            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l">
</span><span id="3" class="l"><span class="php-comment">/**
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Ajax
</span></span><span id="5" class="l"><span class="php-comment"> * @category    Framework PHP
</span></span><span id="6" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="7" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="8" class="l"><span class="php-comment"> * @author      Loic ROUCHON &lt;horn@phpboost.com&gt;
</span></span><span id="9" class="l"><span class="php-comment"> * @author      Kevin MASSY &lt;reidlos@phpboost.com&gt;
</span></span><span id="10" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2015 01 06
</span></span><span id="11" class="l"><span class="php-comment"> * @since       PHPBoost 3.0 - 2010 10 31
</span></span><span id="12" class="l"><span class="php-comment"> */</span>
</span><span id="13" class="l"> 
</span><span id="14" class="l"><span class="php-keyword1">class</span> AjaxRequest <span class="php-keyword1">implements</span> View
</span><span id="15" class="l">{
</span><span id="16" class="l">    <span class="php-keyword1">const</span> GET = <span class="php-quote">'get'</span>;
</span><span id="17" class="l">    <span class="php-keyword1">const</span> POST = <span class="php-quote">'post'</span>;
</span><span id="18" class="l">
</span><span id="19" class="l">    <span class="php-keyword1">const</span> BEFORE_SEND = <span class="php-quote">'beforeSend'</span>;
</span><span id="20" class="l">    <span class="php-keyword1">const</span> AJAX_SEND = <span class="php-quote">'ajaxSend'</span>;
</span><span id="21" class="l">    <span class="php-keyword1">const</span> SUCCESS = <span class="php-quote">'success'</span>;
</span><span id="22" class="l">    <span class="php-keyword1">const</span> AJAX_SUCCESS = <span class="php-quote">'ajaxSuccess'</span>;
</span><span id="23" class="l">    <span class="php-keyword1">const</span> ERROR = <span class="php-quote">'error'</span>;
</span><span id="24" class="l">    <span class="php-keyword1">const</span> AJAX_ERROR = <span class="php-quote">'ajaxError'</span>;
</span><span id="25" class="l">    <span class="php-keyword1">const</span> COMPLETE = <span class="php-quote">'complete'</span>;
</span><span id="26" class="l">    <span class="php-keyword1">const</span> AJAX_COMPLETE = <span class="php-quote">'ajaxComplete'</span>;
</span><span id="27" class="l">
</span><span id="28" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$target</span>;
</span><span id="29" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$method</span> = self::POST;
</span><span id="30" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$events</span> = <span class="php-keyword1">array</span>();
</span><span id="31" class="l">    <span class="php-keyword1">private</span> <span class="php-var">$parameters</span> = <span class="php-keyword1">array</span>();
</span><span id="32" class="l">
</span><span id="33" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> __construct(<span class="php-var">$target</span>, <span class="php-var">$onsuccess</span>, <span class="php-var">$onfailure</span> = <span class="php-keyword1">null</span>)
</span><span id="34" class="l">    {
</span><span id="35" class="l">        <span class="php-var">$this</span>-&gt;set_target(<span class="php-var">$target</span>);
</span><span id="36" class="l">        <span class="php-var">$this</span>-&gt;set_onsuccess_callback(<span class="php-var">$onsuccess</span>);
</span><span id="37" class="l">        <span class="php-var">$this</span>-&gt;set_onfailure_callback(<span class="php-var">$onfailure</span>);
</span><span id="38" class="l">    }
</span><span id="39" class="l">
</span><span id="40" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_target(<span class="php-var">$target</span>)
</span><span id="41" class="l">    {
</span><span id="42" class="l">        <span class="php-var">$this</span>-&gt;target = Url::to_rel(<span class="php-var">$target</span>);
</span><span id="43" class="l">    }
</span><span id="44" class="l">
</span><span id="45" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_method(<span class="php-var">$method</span>)
</span><span id="46" class="l">    {
</span><span id="47" class="l">        <span class="php-var">$this</span>-&gt;method = <span class="php-var">$method</span>;
</span><span id="48" class="l">    }
</span><span id="49" class="l">
</span><span id="50" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_success_callback(<span class="php-var">$onsuccess</span>)
</span><span id="51" class="l">    {
</span><span id="52" class="l">        <span class="php-var">$this</span>-&gt;add_event_callback(self::SUCCESS, <span class="php-var">$onsuccess</span>);
</span><span id="53" class="l">    }
</span><span id="54" class="l">
</span><span id="55" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> set_failure_callback(<span class="php-var">$onfailure</span> = <span class="php-keyword1">null</span>)
</span><span id="56" class="l">    {
</span><span id="57" class="l">        <span class="php-keyword1">if</span> (<span class="php-var">$onfailure</span> != <span class="php-keyword1">null</span>)
</span><span id="58" class="l">        {
</span><span id="59" class="l">            <span class="php-var">$this</span>-&gt;add_event_callback(self::ERROR, <span class="php-var">$onfailure</span>);
</span><span id="60" class="l">        }
</span><span id="61" class="l">        <span class="php-keyword1">else</span>
</span><span id="62" class="l">        {
</span><span id="63" class="l">            <span class="php-comment">// TODO localize the default error message</span>
</span><span id="64" class="l">            <span class="php-var">$this</span>-&gt;add_event_callback(self::ERROR, <span class="php-quote">'function() {alert(\'ajax failure\');}'</span>);
</span><span id="65" class="l">        }
</span><span id="66" class="l">    }
</span><span id="67" class="l">
</span><span id="68" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> add_event_callback(<span class="php-var">$event</span>, <span class="php-var">$callback</span>)
</span><span id="69" class="l">    {
</span><span id="70" class="l">        <span class="php-var">$this</span>-&gt;events[<span class="php-var">$event</span>] = <span class="php-var">$callback</span>;
</span><span id="71" class="l">    }
</span><span id="72" class="l">
</span><span id="73" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> add_param(<span class="php-var">$key</span>, <span class="php-var">$value</span>)
</span><span id="74" class="l">    {
</span><span id="75" class="l">        <span class="php-var">$this</span>-&gt;parameters[<span class="php-var">$key</span>] = <span class="php-var">$value</span>;
</span><span id="76" class="l">    }
</span><span id="77" class="l">
</span><span id="78" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> render()
</span><span id="79" class="l">    {
</span><span id="80" class="l">        <span class="php-var">$tpl</span> = <span class="php-var">$this</span>-&gt;get_template();
</span><span id="81" class="l">        <span class="php-var">$this</span>-&gt;assign(<span class="php-var">$tpl</span>);
</span><span id="82" class="l">        <span class="php-keyword1">return</span> <span class="php-var">$tpl</span>-&gt;render();
</span><span id="83" class="l">    }
</span><span id="84" class="l">
</span><span id="85" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> get_template()
</span><span id="86" class="l">    {
</span><span id="87" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">new</span> StringTemplate(<span class="php-quote">'jQuery.ajax({
</span></span><span id="88" class="l"><span class="php-quote">            url: ${escapejs(TARGET)},
</span></span><span id="89" class="l"><span class="php-quote">            type: ${escapejs(METHOD)},
</span></span><span id="90" class="l"><span class="php-quote">            data: {# START param #{param.NAME}:{param.VALUE},# END #},
</span></span><span id="91" class="l"><span class="php-quote">            # START event #{event.NAME}:{event.CALLBACK},# END #
</span></span><span id="92" class="l"><span class="php-quote">        });'</span>);
</span><span id="93" class="l">    }
</span><span id="94" class="l">
</span><span id="95" class="l">    <span class="php-keyword1">private</span> <span class="php-keyword1">function</span> assign(Template <span class="php-var">$tpl</span>)
</span><span id="96" class="l">    {
</span><span id="97" class="l">        <span class="php-var">$tpl</span>-&gt;put(<span class="php-quote">'TARGET'</span>, <span class="php-var">$this</span>-&gt;target);
</span><span id="98" class="l">        <span class="php-var">$tpl</span>-&gt;put(<span class="php-quote">'METHOD'</span>, <span class="php-var">$this</span>-&gt;method);
</span><span id="99" class="l">        <span class="php-var">$events</span> = <span class="php-keyword1">array</span>();
</span><span id="100" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;events <span class="php-keyword1">as</span> <span class="php-var">$event</span> =&gt; <span class="php-var">$callback</span>)
</span><span id="101" class="l">        {
</span><span id="102" class="l">            <span class="php-var">$events</span>[] = <span class="php-keyword1">array</span>(<span class="php-quote">'NAME'</span> =&gt; <span class="php-var">$event</span>, <span class="php-quote">'CALLBACK'</span> =&gt; <span class="php-var">$callback</span>);
</span><span id="103" class="l">        }
</span><span id="104" class="l">        <span class="php-var">$tpl</span>-&gt;put(<span class="php-quote">'event'</span>, <span class="php-var">$events</span>);
</span><span id="105" class="l">        <span class="php-var">$params</span> = <span class="php-keyword1">array</span>();
</span><span id="106" class="l">        <span class="php-keyword1">foreach</span> (<span class="php-var">$this</span>-&gt;parameters <span class="php-keyword1">as</span> <span class="php-var">$key</span> =&gt; <span class="php-var">$value</span>)
</span><span id="107" class="l">        {
</span><span id="108" class="l">            <span class="php-var">$params</span>[] = <span class="php-keyword1">array</span>(<span class="php-quote">'NAME'</span> =&gt; <span class="php-var">$key</span>, <span class="php-quote">'VALUE'</span> =&gt; <span class="php-var">$value</span>);
</span><span id="109" class="l">        }
</span><span id="110" class="l">        <span class="php-var">$tpl</span>-&gt;put(<span class="php-quote">'param'</span>, <span class="php-var">$params</span>);
</span><span id="111" class="l">    }
</span><span id="112" class="l">}
</span><span id="113" class="l"><span class="xlang">?&gt;</span>
</span><span id="114" class="l"></span></code></pre>
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