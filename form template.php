<html>
<head>
	<title>Strong Random Password Generator</title>
	<meta name="description" content="Create strong password you can remember easily on the client side without sending it across the Internet with a simple click."> 
	<meta name="keywords" content="Online Password Generator, Random Password Generator, Strong Password Generator, Secure Password Generator, Password Creator, Create Password, Generate Password, Make Password " >
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript">

function s_(a){document.getElementById(a).focus();document.getElementById(a).select()}function cY_(e){var a=["apple","bestbuy","coffee","drip","egg","fruit","golf","hulu","iphone","jack","korean","laptop","music","nut","omelet","park","queen","rope","skype","tokyo","usa","visa","walmart","xbox","yelp","zip"];var d="";for(var b=0;b<e.length;b++){var f=e.charCodeAt(b);if(65<=f&&f<=90){f-=65;d+=a[f].toUpperCase()}else{if(97<=f&&f<=122){f-=97;d+=a[f]}else{d+=e.substring(b,b+1)}}d+=" "}return d}function AY_(a,f,b){var d=Math.floor(Math.random()*a.length);var c=Math.floor(Math.random()*f);var e=b.substring(0,c)+a.substring(d,d+1)+b.substring(c,f);b=e;return b}function Em0(r,k,l,m,o,c,x9){var d="abcdefghjkmnpqrstuvwxyz";var h="ABCDEFGHJKLMNPQRSTUVWXYZ";var p="23456789";var j="!#$%&*+-=?@^_";if(!k){d+="ilo";h+="IO";p+="01";j+="|"}var a="";var g=0;if(!x9){j+="{}[]()\/'\"`~,;:.<>\\";}if(l==1){a+=d;g++}if(m==1){a+=h;g++}if(o==1){a+=p;g++}if(c==1){a+=j;g++}if(g==0){q="You must select at least one character set!";return q}var n=a.length;var f=r-g;var q="";for(var e=0;e<f;e++){var b=Math.floor(Math.random()*n);q+=a.substring(b,b+1)}if(m){q=AY_(h,f,q);f++}if(l){q=AY_(d,f,q);f++}if(o){q=AY_(p,f,q);f++}if(c){q=AY_(j,f,q)}return q}function d2O(){var b=document.getElementById("pgLength").value;var f=0;if(document.getElementById("Nosimilar").checked){f=1}var a=0;if(document.getElementById("Symbols").checked){a=1}var a6=0;if(document.getElementById("NoAmb").checked){a6=1}var g=0;if(document.getElementById("Lowercase").checked){g=1}var l=0;if(document.getElementById("Uppercase").checked){l=1}var p=0;if(document.getElementById("Numbers").checked){p=1}var e=document.getElementById("Client").checked;if(e){var o=Em0(b,f,g,l,p,a,a6);var k=cY_(o);document.getElementById("final_pass").value=o;if( b>50 )k="";document.getElementById("PhoneticPronunciation").innerHTML=k}else{var c=null;if(window.ActiveXObject){c=new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){c=new XMLHttpRequest()}else{alert("Your browser does not support AJAX.");return}}var j="0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";var n=3;var m=0;var h=document.getElementById("final_pass").value;for(var d=0;d<h.length;d++){m+=h.charCodeAt(d)}if(c!=null){c.onreadystatechange=function(){if(c.readyState==4){var q=c.responseText;var r=q.search("Phonetic=");var i=q.length;document.getElementById("final_pass").value=q.substring(0,r);if( b<51 )document.getElementById("PhoneticPronunciation").innerHTML=q.substring(r+9,i);else{document.getElementById("PhoneticPronunciation").innerHTML="";}}};c.open("GET","calc.php?Length="+b+"&Symbols="+a+"&Lowercase="+g+"&Uppercase="+l+"&Numbers="+p+"&Nosimilar="+f+"&Last="+m,true);c.send()}}}function Jm0(b){var c,a,e,d=document.cookie.split(";");for(c=0;c<d.length;c++){a=d[c].substr(0,d[c].indexOf("="));e=d[c].substr(d[c].indexOf("=")+1);a=a.replace(/^\s+|\s+$/g,"");if(a==b){return unescape(e)}}}function Jx2(a,d,b){var e=new Date();e.setDate(e.getDate()+b);var c=escape(d)+((b==null)?"":"; expires="+e.toUTCString());document.cookie=a+"="+c}function x2J(){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=d[c];var e=b.indexOf("=");var a=e>-1?b.substr(0,e):b;document.cookie=a+"=;expires=Thu, 01 Jan 1970 00:00:00 GMT"}}function Q2S(b){var a=Jm0(b);if(a!=null&&a!=""){if(a=="true"){document.getElementById(b).checked=true}else{document.getElementById(b).checked=false}}else{if((b=="SaveSettings"||b=="NoAmb")==false){document.getElementById(b).checked=true}}}function BBB(b,c){var a=document.getElementById(b).checked;Jx2(b,a,c)}function OIU(){if (window.top !== window.self) window.top.location.replace(window.self.location.href);Q2S("Symbols");Q2S("Lowercase");Q2S("Uppercase");Q2S("Numbers");Q2S("Nosimilar");Q2S("NoAmb");Q2S("Client");Q2S("SaveSettings");var a=Jm0("pgLength");if(a!=null&&a!=""){document.getElementById("pgLength").value=a}else{document.getElementById("pgLength").value=15}}function S7P(a){var c=document.getElementById("SaveSettings").checked;var d=60;if(c){BBB("Symbols",d);BBB("Lowercase",d);BBB("Uppercase",d);BBB("Numbers",d);BBB("Nosimilar",d);BBB("NoAmb",d);BBB("Client",d);BBB("SaveSettings",d);var b=document.getElementById("pgLength").value;Jx2("pgLength",b,d)}else{if(a){x2J()}}};

	</script>
</head>


<body onload="OIU()">

<div class="container" >
	
	<div id="header">
		<div id="Logo"><img src="images/logo.png" border="0" alt="Secure Random Password Generator"></div>
		<div id="LogoText">Secure Password Generator</div>
		<div id="review"></div>
	</div><!-- header -->

	<div id="sec_options">

		<div class="chboxl">Password Length:</div>
		<div class="chboxr">
				<select id="pgLength" title="Select the length of your password." onclick="S7P( false );">
				<optgroup label="Weak">
	  				 <option value="6">6</option>
	  				 <option value="7">7</option>
	  				 <option value="8">8</option>
	   				 <option value="9">9</option>
	  				 <option value="10">10</option>
	  				 <option value="11">11</option>
	  				 <option value="12">12</option>
	   				<option value="13">13</option>
	   				<option value="14">14</option>
				</optgroup>
				<optgroup label="Strong">
    	  			   <option value="15">15</option>
			   	   <option value="16">16</option>
			   	   <option value="17">17</option>
			   	   <option value="18">18</option>
			   	   <option value="19">19</option>		
			   	   <option value="20">20</option>
			   	   <option value="21">21</option>
			   	   <option value="22">22</option>
			   	   <option value="23">23</option>
			   	   <option value="24">24</option>
			   	   <option value="25">25</option>
			   	   <option value="26">26</option>
			   	   <option value="27">27</option>
			   	   <option value="28">28</option>
			   	   <option value="29">29</option>
			   	   <option value="30">30</option>
			   	   <option value="31">31</option>
			   	   <option value="32">32</option>
			   	   <option value="33">33</option>
			   	   <option value="34">34</option>
			   	   <option value="35">35</option>
			   	   <option value="36">36</option>
			   	   <option value="37">37</option>
			   	   <option value="38">38</option>
			   	   <option value="39">39</option>
			   	   <option value="40">40</option>
			   	   <option value="41">41</option>
			   	   <option value="42">42</option>
			   	   <option value="43">43</option>
			   	   <option value="44">44</option>
			   	   <option value="45">45</option>
			   	   <option value="46">46</option>
			   	   <option value="47">47</option>
			   	   <option value="48">48</option>
			   	   <option value="49">49</option>
			   	   <option value="50">50</option>
			        <option value="51">51</option>
			        <option value="52">52</option>
			        <option value="53">53</option>
			        <option value="54">54</option>
			        <option value="55">55</option>
			        <option value="56">56</option>
			        <option value="57">57</option>
			        <option value="58">58</option>
			        <option value="59">59</option>
			        <option value="60">60</option>
			        <option value="61">61</option>
			        <option value="62">62</option>
			        <option value="63">63</option>
			        <option value="64">64</option>
			        <option value="65">65</option>
			        <option value="66">66</option>
			        <option value="67">67</option>
			        <option value="68">68</option>
			        <option value="69">69</option>
			        <option value="70">70</option>
			        <option value="71">71</option>
			        <option value="72">72</option>
			        <option value="73">73</option>
			        <option value="74">74</option>
			        <option value="75">75</option>
			        <option value="76">76</option>
			        <option value="77">77</option>
			        <option value="78">78</option>
			        <option value="79">79</option>
			        <option value="80">80</option>
			        <option value="81">81</option>
			        <option value="82">82</option>
			        <option value="83">83</option>
			        <option value="84">84</option>
			        <option value="85">85</option>
			        <option value="86">86</option>
			        <option value="87">87</option>
			        <option value="88">88</option>
			        <option value="89">89</option>
			        <option value="90">90</option>
			        <option value="91">91</option>
			        <option value="92">92</option>
			        <option value="93">93</option>
			        <option value="94">94</option>
			        <option value="95">95</option>
			        <option value="96">96</option>
			        <option value="97">97</option>
			        <option value="98">98</option>
			        <option value="99">99</option>
			        <option value="100">100</option>
			        <option value="101">101</option>
			        <option value="102">102</option>
			        <option value="103">103</option>
			        <option value="104">104</option>
			        <option value="105">105</option>
			        <option value="106">106</option>
			        <option value="107">107</option>
			        <option value="108">108</option>
			        <option value="109">109</option>
			        <option value="110">110</option>
			        <option value="111">111</option>
			        <option value="112">112</option>
			        <option value="113">113</option>
			        <option value="114">114</option>
			        <option value="115">115</option>
			        <option value="116">116</option>
			        <option value="117">117</option>
			        <option value="118">118</option>
			        <option value="119">119</option>
			        <option value="120">120</option>
			        <option value="121">121</option>
			        <option value="122">122</option>
			        <option value="123">123</option>
			        <option value="124">124</option>
			        <option value="125">125</option>
			        <option value="126">126</option>
			        <option value="127">127</option>
			        <option value="128">128</option>
				</optgroup>
				</select>
		</div>
		
		
		<div class="chboxl">Include Symbols:</div>
		<div class="chboxr"><input type="checkbox" name="Symbols" id="Symbols" onclick="S7P( false );">( e.g. @#$% )</div>
		
		<div class="chboxl">Include Numbers:</div>
		<div class="chboxr"><input type="checkbox" name="Numbers" id="Numbers" onclick="S7P( false );">( e.g. 123456 )</div>		
		
		<div class="chboxl">Include Lowercase Characters:</div>
		<div class="chboxr"><input type="checkbox" name="Lowercase" id="Lowercase" onclick="S7P( false );">( e.g. abcdefgh )</div>
		
		<div class="chboxl">Include Uppercase Characters:</div>
		<div class="chboxr"><input type="checkbox" name="Uppercase"  id="Uppercase" onclick="S7P( false );">( e.g. ABCDEFGH )</div>	
		
		<div class="chboxl">Exclude Similar Characters:</div>
		<div class="chboxr"><input type="checkbox" name="Nosimilar" id="Nosimilar" onclick="S7P( false );">( e.g. i, l, 1, L, o, 0, O )</div>
		
		<div class="chboxl">Exclude Ambiguous Characters:</div>
		<div class="chboxr"><input type="checkbox" name="NoAmb" id="NoAmb" onclick="S7P( false );">( { } [ ] ( ) / \ ' " ` ~ , ; : . < > )</div>			
		
		<div class="chboxl">Generate On The Client Side:</div>
		<div class="chboxr"><input type="checkbox" name="Client" id="Client" onclick="S7P( false );">( do NOT send it across the Internet )</div>
	
		<div class="chboxl">Save My Preference:</div>
		<div class="chboxr"><input type="checkbox" name="SaveSettings" id="SaveSettings"  onclick="S7P( true );">( save all the settings above for later use )</div>

	</div><!-- sec_options -->


	<div id="sec_btn">
		<input id="genbtn" type="button" value="Generate secure password" onclick="d2O();">
	</div><!-- sec_btn -->

	<div id="sec_password">

		<div class="chboxl">Your New Password:</div>
		<div class="chboxr">
			<input name="final_pass" id="final_pass" type="text" size="75" value="Your new password will be shown here." class="txt_password" onclick="s_('final_pass')"; >
		</div>

		<div id="sec_pron">
			<div class="Phoneticl"><label>Phonetic Pronunciation:</label></div>
			<div class="Phoneticr"><label id="PhoneticPronunciation">Pronounceable( phonetic ) password: remember your password with the first letters of the words in the sentence.</label></div>
		</div>

	</div><!-- sec_password -->

	<div class="sec_blank"></div>

	<div id="sec_tips">
		<p>To prevent your passwords from being hacked by social engineering, brute force or dictionary attack method and protect your sensitive information online, you should notice that:</p>
		<p>1. Do not use the same password on multiple accounts.</p>
		<p>2. The password should contains at least 15 characters, it should consists of both numbers, letters and special symbols.</p>
		<p>3. Do not use the names of your families, friends or pets.</p>
		<p>4. Do not use postcodes, house numbers, phone numbers, birthdates, ID card numbers, social security numbers, etc.</p>
		<p>5. Do not use the most commonly used English words.</p>
		<p>6. You should not let your browsers( FireFox, Chrome, Opera, IE, Safari ) or FTP client programs save your passwords, any password saved in the browser can be revealed with a simple click using a script.</p>
		<p>7. Do not login important accounts with a public computer or a machine of other guys.</p>
		<p>8. Do not login important accounts with HTTP or FTP connections, because the username and password in the message of a HTTP or FTP connection can be captured easily with a network protocol analyzer like Wireshark, which means that the password can be sniffed or hacked with very little effort. You should use HTTPS or SFTP connections.</p>
		<p>9. It's a good habit to change your passwords regularly.</p>
		<p>10. It's recommended that you remember 3 to 5 main passwords, and store other passwords with a certain software, for example, you can save them in a plain text file and encrypt it with 7-Zip or BitLocker, or manage them with a password management software.</p>
	</div><!-- sec_tips -->

	<div class="sec_blank"></div>
	
	<div id="sec_btm">
		<p>Copyright &copy; 2012 - 2014 <a href="http://PasswordsGenerator.net" title="Password Generator">PasswordsGenerator.net</a>. All Rights Reserved.</p>
		<p>Contact us: PasswordGenerator( at )outlook.com</p>
	</div><!-- sec_btm -->

</div><!-- container -->


<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://freewaremap.com/stats3/" : "http://freewaremap.com/stats3/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://freewaremap.com/stats3/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body> 
</html>