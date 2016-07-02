<?php
$f_contents = file("slogans.txt");
$slogan = $f_contents[array_rand($f_contents)];
// determine operating system
$u_agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/linux/i', $u_agent)) $platform = 'linux';
elseif (preg_match('/macintosh|mac os x/i', $u_agent)) $platform = 'mac';
elseif (preg_match('/windows|win32/i', $u_agent)) $platform = 'windows';
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>nQuake</title>
<meta property="og:title" content="nQuake"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://www.nquake.com/images/fb-logo.png"/>
<meta property="og:url" content="http://nquake.com/"/>
<meta property="og:site_name" content="nQuake"/>
<meta property="fb:admins" content="1094035580"/>
<meta property="fb:app_id" content="204006163045470"/>
<meta property="og:description" content="Interested in QuakeWorld? nQuake is a QuakeWorld package that simplifies the downloading and installing of QuakeWorld for both beginners and experienced players."/>
<meta name="description" content="Interested in QuakeWorld? nQuake is a QuakeWorld package that simplifies the downloading and installing of QuakeWorld for both beginners and experienced players.">
<meta name="author" content="Empezar">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<link rel="styleSheet" type="text/css" href="http://www.quakeworld.nu/stylesheets/qwnetbar.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="jquery.colorbox-min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js.js"></script>
<script src="yt.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
/* ]]> */</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sv_SE/all.js#xfbml=1&appId=186457941398400";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="qwnetwork">
	<div id="qwnet_content">
		<a href="http://nquake.com/" title="nQuake - Download QuakeWorld package today!" id="qwnet_nquake"></a>
		<a href="http://ezquake.sourceforge.net/" title="ezQuake - The most popular QW client" id="qwnet_ezquake"></a>
		<a href="http://fodquake.net/" title="Fodquake - Another great QW client" id="qwnet_fodquake"></a>

		<div class="qwnet_separator">&nbsp;</div>

		<a href="http://www.quakeworld.nu/" title="QuakeWorld.nu - Your portal to everything Quake" id="qwnet_qwnu"></a>
		<a href="http://www.quakeworld.nu/forum/" title="QW.nu Forum - Discuss anything QW-related" id="qwnet_forums"></a>

		<div class="qwnet_separator">&nbsp;</div>

		<a href="http://eql.quakeworld.nu/" title="EQL - European Quake Ladder" id="qwnet_eql"></a>
		<a href="http://draft.quakeworld.nu" title="Salvation - QuakeWorld Draft League" id="qwnet_salvation"></a>
		<a href="http://www.quakeworld.nu/news/820/hymn-of-hope-is-finally-back/" title="Hymn of Hope - QuakeWorld Cash Tourney" id="qwnet_hoh"></a>

		<div class="qwnet_separator">&nbsp;</div>

		<a href="http://wiki.quakeworld.nu/" title="QuakeWorld Wiki - The open QW encyclopedia" id="qwnet_wiki"></a>
		<a href="http://www.quakeservers.net/quakeworld/servers/pl=1/so=8/" title="QuakeServers.net - QW server listings and info" id="qwnet_quakeservers"></a>
		<a href="http://stats.quakeworld.nu/" title="QuakeWorld Statistics - QW statistics, ranking systems and more." id="qwnet_stats"></a>
		<a href="http://qtv.quakeworld.nu/" title="QuakeTV - Watch QW now!" id="qwnet_qtv"></a>
		<a href="http://goldrush.quakeworld.nu/" title="Goldrush - QuakeWorld betting" id="qwnet_goldrush"></a>

		<div class="qwnet_separator">&nbsp;</div>

		<a href="http://www.challenge-tv.com/index.php?mode=demos&game=2" title="Challenge-TV - Download QW demos" id="qwnet_chtv"></a>
		<a href="http://videos.quakeworld.nu/" title="QuakeWorld.nu Videos - Watch QW videos, interviews and more" id="qwnet_videos"></a>
		<a href="http://gfx.quakeworld.nu/" title="QuakeWorld GFX - Download custom graphics" id="qwnet_gfx"></a>

		<div id="qwnet_clearer">&nbsp;</div>
	</div>
</div>

<div id="page">
	<header></header>
	<div id="slogan"><span><?php echo $slogan?></span></div>
	<noscript>
		<div style="margin:0 auto; width:200px;margin-top: 20px;margin-bottom: 20px;">No trailer without javascript.</div>
	</noscript>
	<div id="video-container">
			<div id="video"></div>
			<div id="play-button-container" class="play-button-normal" onClick='jQuery("#video").tubeplayer("play",{id:"tjV1J0V4wyA",time:0})'></div>
			<div id="play-text">Play trailer.</div>
	</div>
	<div id="download">
	<a href="https://github.com/nQuake/client-win32/raw/master/releases/nquake_installer-latest.exe" class="btn btn-warning left wider dl" title="Download nQuake" data-content="For <a href='https://github.com/nQuake/client-win32/raw/master/releases/nquake_installer-latest.exe' title='Download nQuake for Windows'>Windows</a>, <a href='https://github.com/nQuake/client-linux/raw/master/releases/nquake_installer-linux-latest.tar.gz' title='Download nQuake for Linux'>Linux</a> and <a href='https://github.com/nQuake/client-macosx/raw/master/releases/nquake_installer-macosx-latest.tar.gz' title='Download nQuake for OS X'>OS X</a>. (client), and <a href='https://github.com/nQuake/server-win32/raw/master/releases/nquakesv_installer-latest.exe' title='Download nQuake server for Windows'>Windows</a> and <a href='https://github.com/nQuake/server-linux/raw/master/releases/nquakesv_installer-linux-latest.tar.gz' title='Download nQuake server for Linux'>Linux</a> (server).">
	<i class="icon-circle-arrow-down"></i> Download</a>
<a href="http://nquake.com/online/nqonline.exe" data-content="Play without downloading. Requires <a href='http://www.oracle.com/technetwork/java/javase/downloads/jre7-downloads-1880261.html' title='Download Java Runtime Environment'>Java</a>." title="Play nQuake" class="btn btn-success left"><i class="icon-play"></i> Play now</a>
</div>
	<div id="below_download" class="clearer"></div>
	<footer>
		<div class="footer-col">
			<ul>
				<li class="header">COMMUNITY</li>
				<li><span class="important_link"><a href="http://www.quakeworld.nu/" title="Connecting everything QuakeWorld">QuakeWorld Portal</a></span></li>
				<li><span class="important_link"><a href="http://www.quakeworld.nu/forum/" title="Discuss with other Quakers">Message Board</a></span></li>
				<li><span class="important_link"><a href="http://webchat.quakenet.org/?nick=nquake_visitor&channels=qwrookie" title="Find an opponent or ask for help" class="important_link">Chat</a></span></li>
				<li><a href="http://gfx.quakeworld.nu/" title="Customize your Quake">Graphics Repository</a></li>
				<li><a href="http://maps.quakeworld.nu/" title="Download new maps">Maps Repository</a></li>
				<li><a href="http://qtv.quakeworld.nu/" title="Look at other people playing">Quake TV</a></li>
				<li><a href="http://www.quakeservers.net/quakeworld/servers/t=ffa/so=8/" title="Find a server to play on">Server List</a></li>
				<li><span class="important_link"><a href="http://www.steamgames.com/v/index.php?area=game&AppId=2310" title="A cheap way of saying thanks to Id Software and to enjoy the full game">Buy Quake on Steam</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li class="header">GET STARTED</li>
				<li><a href="http://www.youtube.com/watch?v=v6jm9iGW2Co" ytid="v6jm9iGW2Co" class="popup" title="Bunnyjumping is a fundamental QuakeWorld skill">Learn to Bunnyjump</a></li>
				<li><a href="http://www.youtube.com/watch?v=Iz5wlNJpD1g" ytid="Iz5wlNJpD1g" class="popup" title="Shows most trick jumps on the usual QuakeWorld maps">QuakeWorld Trickjumping</a></li>
				<li><a href="http://www.youtube.com/watch?v=HI9mCbu5HZs" ytid="HI9mCbu5HZs" class="popup" title="Get a deeper understanding for duel tactics on DM6">DM6 Duel Commentary</a></li>
				<li><a href="http://www.youtube.com/watch?v=_JRvmisbtmg" ytid="_JRvmisbtmg" class="popup" title="Get a deeper understanding for duel tactics on DM4">DM4 Duel Commentary</a></li>
				<li><a href="http://www.youtube.com/watch?v=41GzHQigSOM" ytid="41GzHQigSOM" class="popup" title="Get a deeper understanding for duel tactics on DM2">DM2 Duel Commentary</a></li>
				<li><a href="http://www.youtube.com/watch?v=s6GV8mTP3xU" ytid="s6GV8mTP3xU" class="popup" title="Get a deeper understanding for duel tactics on ZTNDM3">ZTNDM3 Duel Commentary</a></li>
				<li><a href="http://www.youtube.com/watch?v=GB7q3Q2zgFc" ytid="GB7q3Q2zgFc" class="popup" title="Get a deeper understanding for duel tactics on Aerowalk">Aerowalk Duel Commentary</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li class="header">MIRROR PROVIDERS / SPONSORS</li>
				<li><a href="http://www.sourceforge.net/" title="SourceForge hosts the nQuake website">SourceForge.net</a></li>
				<li><a href="http://www.quakeservers.net/" title="QuakeServers.net is a mirror provider for nQuake">QuakeServers.net</a></li>
				<li><a href="http://www.localghost.net/" title="LocalGhost.net is a mirror provider for nQuake">LocalGhost.net</a></li>
				<li><a href="http://qw.quakephil.com/" title="QuakePhil.com is a mirror provider for nQuake">QuakePhil.com</a></li>
				<li><a href="http://fnu.nu/" title="Fnu.nu is the mother mirror of nQuake">Fnu.nu</a></li>
				<li style="margin-top: 4px;"><span class="important_link"><a href="http://sourceforge.net/projects/nquake/forums/forum/702197/topic/3107668" title="Any help is appreciated!">Start an nQuake mirror</a></span></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li class="header">SOCIAL / CONTRIBUTE</li>
				<li>&nbsp;</li>
				<li style="margin-top: -20px;"><a href="http://www.nquake.com/donate.php" target="_blank">Donate money for domain renewals</li>
				<li><a href="http://www.facebook.com/nquakeworld" target="_blank">Follow nQuake on Facebook</li>
				<li><a href="http://www.twitter.com/nquakeworld" target="_blank">Follow nQuake on Twitter</li>
				<li style="margin-top: 4px;"><div class="fb-like" data-href="http://www.nquake.com/" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false" data-colorscheme="dark"></div></li>
				<li style="margin-top: 4px;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="www.nquake.com" data-text="Check out nQuake, the simplest way to start playing QuakeWorld!" data-hashtags="gaming">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
				<li style="margin-top: 2px;"><a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://www.nquake.com/"></a>
				<noscript><a href="http://flattr.com/thing/610046/nQuake" target="_blank"><img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript></li>
			</ul>
		</div>
	</footer>
	<img src="images/play_hover.png" alt="" class="hidden" />
	<img src="images/play_click.png" alt="" class="hidden" />
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2568169-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
