<?php

function is_mobile(){
	$regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
	$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
	$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";	
	$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
	$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
	$regex_match.=")/i";		
	return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
}

switch($_GET['mode'])
    {
case 'mobile':
    $mode = "mobile";
    break;
case 'desktop':
    $mode = "desktop";
    break;
default:
    $mode = is_mobile() ? "mobile" : "desktop";
    break;
    }

if ($mode == "mobile")
    {
    header ("Location: http://m.thermalkingwindows.com");
    return;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.3.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slider.css" type="text/css" media="screen,projection" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9064605-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www')   '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
var rules = [];
rules.push("required,phone,Please enter your phone number.");
rsv.errorFieldClass = null;
rsv.displayType = "alert-all";
rsv.customErrorHandler = null;
</script>
</head>
<body>
<div id="container">
  <div id="top">
    <div class="logo"><a href="/" title="Thermal King"></a></div>
    <div class="phone"><span class="pt_1">1.888.KingWin</span><br /><span class="pt_2">1.888.546.4946</span></div>
  </div>
  <div id="navigation">
    <?php wp_page_menu('title_li=&sort_column=menu_order&sort_order=asc&show_home=1&exclude=331,342,414') ?>
  </div>
  <div class="clear"></div>
