<?php
/*
Plugin Name: Current Date and Time
Plugin URI: http://www.devilhunter.net/
Description:  This PlugIn will automatically match your theme's color. Go to Appearance > Widgets, and drag 'PlugIn' in sidebar or footer or into any widgetized area. Insert into page or post by PageBuilder. No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 


Developer: 
Tawhidur Rahman Dear
tawhidurrahmandear@gmail.com
Blog: http://tawhidurrahmandear.blogspot.com/
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
YouTube: http://www.youtube.com/tawhidurrahmandear
LinkedIn: http://www.linkedin.com/in/tawhidurrahmandear

 
 */
 
 
class tawhidurrahmandearfourteenWidget extends WP_Widget {
  function tawhidurrahmandearfourteenWidget() {
    $widget_ops = array('classname' => 'tawhidurrahmandearfourteenWidget', 'description' => 'Drag the PlugIn in sidebar or footer. Insert into page or post by PageBuilder' );
    $this->WP_Widget('tawhidurrahmandearfourteenWidget', 'Current Date and Time', $widget_ops);
  }
 
  function form($instance) {
    $instance = wp_parse_args((array) $instance, array( 'title' => '' ));
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title (optional) :<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance) {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
 ?>

<script type="text/javascript">
function display_c(){
var refresh=1000;
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var strcount
var x = new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script>
<div align="center">
<body onload=display_ct();>
<span id='ct' ></span>
</body>
</div>
 
<?php
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("tawhidurrahmandearfourteenWidget");') );?>