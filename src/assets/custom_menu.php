<?php 
function custom_menu( $theme_location ) {
  if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
      $menu = get_term( $locations[$theme_location], 'nav_menu' );
      $menu_items = wp_get_nav_menu_items($menu->term_id);

      $count = 0;
      $submenu = false;
       
      foreach( $menu_items as $menu_item ) {
          $link = $menu_item->url;
          $title = $menu_item->title;
          
          if ( !$menu_item->menu_item_parent ) {
              $parent_id = $menu_item->ID;
              $menu_list .= '<li>' ."\n";
              $menu_list .= '<a href="'.$link.'">'.$title.'</a>' ."\n";
          }
          
          if ( $parent_id == $menu_item->menu_item_parent ) {
              
              if ( !$submenu ) {
                  $submenu = true;
                  $menu_list .= '<ul class="nav-dropdown">' ."\n";
              }
              $menu_list .= '<li>' ."\n";
              $menu_list .= '<a href="'.$link.'">'.$title.'</a>' ."\n";
              $menu_list .= '</li>' ."\n";
              
              if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                  $menu_list .= '</ul>' ."\n";
                  $submenu = false;
              }
          }

          if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
              $menu_list .= '</li>' ."\n";      
              $submenu = false;
          }

          $count++;
      }

  } else {
      $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
  }
  echo $menu_list;
}
 ?>