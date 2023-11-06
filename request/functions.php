<?php 
function my_script_init() {
  wp_enqueue_style("my", get_template_directory_uri() . "../css/common.css", array(), filemtime(get_theme_file_path('../css/common.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "../assets/js/main.js", array("jquery"), filemtime(get_theme_file_path('../assets/js/main.js')), true);

  // jQuery UIを登録
  wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true);

}
add_action("wp_enqueue_scripts", "my_script_init");
