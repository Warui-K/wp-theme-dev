<?php 
/**
 * WordPress provides a base walker class that can be built on top
 */
class WPT_Custom_Nav_Walker extends Walker_Nav_Menu{
    /** The start_lvl function is called when WP starts looping through a nested array.
     * The start level and end level functions will be called during the beginning and ending of the data structure
    * The $output argument is parsed as a reference with '&' (No unique value)
    * The 2nd argument is the $depth of the menu, 0 value means no sub-menu items
    * The 3rd argument is the $args, this would be the value you parse into the nav menu function
    */
    public function start_lvl(&$output, $depth = 0, $args = []){
        //Append the value
        $output  .= '<ul class="special-class">';
    }
    /**
     * $item object contains info related to the link itself
     * The start_el and end_el will loop through each individual item
     */
    public function start_el(&$output, $item, $depth = 0, $args = [], $id =0 ){
        $output  .= '<li class="special-class-item">';
        $output .= $args->before; //Text before the link markup
        $output .= '<a href="' . $item->url . '">';
        $output .= $args->link_before. $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->before; //Text after the link markup
    }
    public function end_el(&$output, $item, $depth = 0, $args = [], $id =0 ){
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = []){
        $output  .= '</ul>';
        
    }
}