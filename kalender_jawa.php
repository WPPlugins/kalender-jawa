<?php
/*
Plugin Name: Kalender Jawa
Description: Kalender Jawa
Author: Nurhadi Purwata
Version: 1.0
Author URI: http://tiputipu.com/calendar
*/

function widget_jawa_init() {
  if ( !function_exists('register_sidebar_widget') )
    return; 

    function widget_jawa($args) {
      extract($args);
      $options = get_option('widget_jawa');
echo $before_widget; 
echo $before_title . $title . $after_title; 
?>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="176" height="127" id="FlashID" title="jawa">
  <param name="movie" value="http://tiputipu.com/calendar/jawa.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="http://tiputipu.com/calendar/Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="http://tiputipu.com/calendar/jawa.swf" width="176" height="127">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="http://tiputipu.com/calendar/Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<?php
echo $after_widget;
    }
  register_sidebar_widget('jawa', 'widget_jawa');
}
add_action('plugins_loaded', 'widget_jawa_init');
?>