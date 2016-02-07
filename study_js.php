<!DOCTYPE>

<html lang="ja">
	<head>
	<meta charset="utf8">
	<title>JavaScriptの勉強メモ</title>
	<link rel="stylesheet" href="./css/study_html.css">
	</head>

<div align="center">
<h3>JavaScriptの勉強メモ</h3>	
</div>

<h5>【変数、ポップアップボックス】</h5>
<ul>
	<li><a href="#js0">共通部分</a></li>
	<li><a href="#js_mumei">即時/無名関数(通常の書き方)</a></li>
	<li><a href="#js1">変数宣言、変数表示</a></li>
	<li><a href="#js2">警告Window表示</a></li>
	<li><a href="#js3">確認Box_window</a></li>
	<li><a href="#js4">プロンプトBox</a></li>
	<li><a href="#js5">現在時刻の表示</a></li>
	<li><a href="#js6">Google Feed APIの活用でニュース取得</a></li>
</ul>

<strong id="js0">Code (共通設定)</strong>
<pre><code>&lt;html lang="ja"&gt;
	&lt;head&gt;
	&lt;meta charset="utf8"&gt;
	&lt;script type="text/javascript" 
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"&gt;
	&lt;/script&gt;

	&lt;title>Study javascript&lt;/title&gt;
	&lt;/head&gt;
&lt;body&gt;

<< ここにJavascriptのコードを記述 >>

&lt;/body&gt;
&lt;/html&gt;</code></pre>
<br/>

<strong id="js_mumei">即時/無名関数(通常の書き方)</strong>
<pre><code>&lt;script&gt;
function say_hello()
{
	alert("Hellow!!");
}
say_hello();
&lt;/script&gt;</code></pre>

<strong>無名関数</strong>
<pre><code>&lt;script&gt;
<FONT color="red">(</FONT>function()
{
	alert("Hello!!");
}<FONT color="red">)</FONT><FONT color="blue">()</FONT>;
&lt;/script&gt;
</code></pre>
</pre>

<strong>即時関数</strong>
<pre><code>&lt;script&gt;
(function <FONT color="red">say_hello()</FONT>
{
	alert("Hello!!");
})();
&lt;/script&gt;
</code></pre>

<br/>



<strong id="js1">Code (変数宣言、変数表示)</strong>
<pre><code>&lt;p&gt;下記のスクリプトは変数を宣言して、値を割り当てて、値を表示。変更して再度表示&lt;p&gt;
&lt;script type="text/javascript"&gt;
var firstname;
firstname = "Hoge";
document.write(firstname);

<!-- brタグで改行 -->
document.write("<br/>");

firstname="Huga";
document.write(firstname);
&lt;/script&gt;</code></pre>

<strong>実行結果</strong>
<pre><code>下記のスクリプトは変数を宣言して、値を割り当てて、値を表示。変更して再度表示
Hoge
Huga </code></pre>
<p></p>

<strong id="js2">警告Window表示</strong>
<pre><code>&lt;script type="text/javascript"&gt;
function display_alert()
{
	alert("this is alert box");
}
&lt;/script&gt;
&lt;input type="button" onclick="display_alert()" value="警告Boxボタン" /&gt;</code></pre>

<strong>実行結果</strong>
<pre><code><script type="text/javascript">
function display_alert()
{
	alert("this is alert box");
}
</script>
<input type="button" onclick="display_alert()" value="警告Boxボタン" />
</code></pre>
<p></p>


<strong id="js3">確認Box_window</strong>
<pre><code>
&lt;script type="text/javascript"&gt;
function show_confirm()
{
	var r = confirm("ボタンを押してください")
	if( r == true )
	{
		alert("OKを押しました");
	}
	else
	{
		alert("Cancelを押しました");
	}
}
&lt;/script&gt;

&lt;input type="button" onclick="show_confirm()" value="確認Box表示" /&gt;
</code></pre>

<strong>実行結果</strong>
<pre><code><script type="text/javascript">
function show_confirm()
{
	var r = confirm("ボタンを押してください")
	if( r == true )
	{
		alert("OKを押しました");
	}
	else
	{
		alert("Cancelを押しました");
	}
}</script>
<input type="button" onclick="show_confirm()" value="確認Box表示" />
</code></pre>
<p></p>


<strong id="js4">プロンプトBox</strong>
<pre><code>
&lt;script type="text/javascript"&gt;
function display_prompt()
{
	var fname = prompt("あなたの名前を入力してください:" , "input_here")
	document.getElementById("msg").innerHTML="こんにちは" + fname
}
&lt;/script&gt;
&lt;input type="button" onclick="display_prompt()" value="プロンプトBox表示"/&gt;
&lt;br/&gt;&lt;br/&gt;
<!--
<div id="msg"></div>
-->
&lt;p id="msg"&gt;&lt;/p&gt;
</code></pre>

<strong>実行結果</strong>
<pre><script type="text/javascript">
function display_prompt()
{
	var fname = prompt("あなたの名前を入力してください:" , "input_here")
	document.getElementById("msg").innerHTML="こんにちは" + fname
}
</script>
<input type="button" onclick="display_prompt()" value="プロンプトBox表示"/>
<!--
<div id="msg"></div>
-->
<p id="msg"></p></pre>



<strong id="js5">現在時刻の表示</strong>
<pre><code>&lt;span id="view_clock"&gt;&lt;/span&gt;
	&lt;script type="text/javascript"&gt;
		timerID = setInterval('clock()', 500);

		function clock()
		{
			document.getElementById("view_clock").innerHTML = getNow();
		}
		function getNow()
		{
			var now  = new Date();
			var year = now.getFullYear();
			var mon  = now.getMonth() + 1;
			var day  = now.getDate();
			var hour = now.getHours();
			var min  = now.getMinutes();
			var sec  = now.getSeconds();
		
			var s = year + "年" + mon + "月" + day + "日" + hour + "時" + min + "分" + sec + "秒";
			return s;
		}
	&lt;/script&gt;
</code></pre>

<strong>実行結果<strong>
<pre>
<span id="view_clock"></span>
	<script type="text/javascript">
		timerID = setInterval('clock()', 500);
		function clock(){
			document.getElementById("view_clock").innerHTML = getNow();
		}
		function getNow(){
			var now  = new Date();
			var year = now.getFullYear();
			var mon  = now.getMonth() + 1;
			var day  = now.getDate();
			var hour = now.getHours();
			var min  = now.getMinutes();
			var sec  = now.getSeconds();
		
			var s = year + "年" + mon + "月" + day + "日" + hour + "時" + min + "分" + sec + "秒";
			return s;
		}
	</script>
</pre>

<strong id="js6">Google Feed APIの活用でニュース取得</strong>
<pre><code>&lt;script type="text/javascript" 
	    src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"&gt;
	    &lt;/script&gt;
        &lt;script src="http://www.google.com/jsapi"&lt;&lt;/script&gt;&lt;div style="background-color:#EDF7FF;"&gt;
        &lt;h5 align="center">Gigazineニュースの一覧&lt;/h5&gt;
    &lt;/div&gt;
    &lt;br/&gt;
     &lt;div align="center" id="feedContent">&gt;&lt;/div&gt;

&lt;script&gt;
        google.load("feeds", "1");
 
    function initialize()
    {
        var url = "http://feed.rssad.jp/rss/gigazine/rss_2.0";     // 取得したいフィードURL
        var news_num = 1;                                          //ニュースの数
        var feedContent = document.getElementById("feedContent");
        url = url + "?" + (new Date()).getTime();                  
        
        var html = "";
        var feed = new google.feeds.Feed(url);                     //フィードを取得する時に取得するエントリ数を指定する
        feed.setNumEntries(news_num); 
        // ニュース毎に表示
        feed.load(function(result)
        {
            if (!result.error)
            {
                for (var i = 0; i &lt; result.feed.entries.length; i++ )
                {
                    var entry     = result.feed.entries[i];
                    var title     = entry.title;                       // 記事のタイトル
                    var content   = entry.content;                   // 記事の要約（提供されていない場合も多い）
                    var link      = entry.link;                         // 記事へのリンク
                    var date      = new Date(entry.publishedDate);      // 記事の更新日時
                     
                        html += "&lt;h4&gt;&lt;dl&gt;";
                        html += "&lt;dt&gt;&lt;a href='" + link + "' target='_blank'&gt;" + title + "&lt;/a&gt;&lt;/dt&gt;&lt;/h4&gt;";
                        html += "&lt;dd&gt;" + content + "&lt;/dd&gt;";
                        html += "&lt;dd class='date'>" + date + "&lt;/dd&gt;";
                        html += "&lt;/dl&gt;";
                        html += "&lt;hr&gt;";
                }
                    feedContent.innerHTML = html;
            }
            else{
                    alert(result.error.code + ":" + result.error.message);
            }
        });
    }
 
        google.setOnLoadCallback(initialize);
     &lt;/script&gt;
</code></pre>

<strong>実行結果</strong>
<pre><code>
<script type="text/javascript" 
	    src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js">
	    </script>
        <script src="http://www.google.com/jsapi"></script><div style="background-color:#EDF7FF;">
        <h5 align="center">Gigazineニュースの一覧</h5>
    </div>
    <br/>
     <div align="center" id="feedContent"></div>

<script>
        google.load("feeds", "1");
 
    function initialize()
    {
        var url = "http://feed.rssad.jp/rss/gigazine/rss_2.0";     // 取得したいフィードURL
        var news_num = 1;                                          //ニュースの数
        var feedContent = document.getElementById("feedContent");
        url = url + "?" + (new Date()).getTime();                  // Googleのサーバのキャッシュは古い情報のためダミークエリ（?23419847のような文字列）を追加する
        
        var html = "";
        var feed = new google.feeds.Feed(url);                     //フィードを取得する時に取得するエントリ数を指定する
        feed.setNumEntries(news_num); 
        // ニュース毎に表示
        feed.load(function(result)
        {
            if (!result.error)
            {
                for (var i = 0; i < result.feed.entries.length; i++ )
                {
                    var entry     = result.feed.entries[i];
                    var title     = entry.title;                       // 記事のタイトル
                    var content   = entry.content;                   // 記事の要約（提供されていない場合も多い）
                    var link      = entry.link;                         // 記事へのリンク
                    var date      = new Date(entry.publishedDate);      // 記事の更新日時
                     
                        html += "<h4><dl>";
                        html += "<dt><a href='" + link + "' target='_blank'>" + title + "</a></dt></h4>";
                        html += "<dd>" + content + "</dd>";
                        html += "<dd class='date'>" + date + "</dd>";
                        html += "</dl>";
                        html += "<hr>";
                }
                    feedContent.innerHTML = html;
            }
            else{
                    alert(result.error.code + ":" + result.error.message);
            }
        });
    }
 
        google.setOnLoadCallback(initialize);
     </script>
</code></pre>





