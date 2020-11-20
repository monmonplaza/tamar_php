<?php

class Walker_Nav_Primary extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth= 0,$args = array() ){
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? 'sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth= 0,$args = array(), $id= 0 ){
        $output .= '<li class="submenu-item">';
        $output .= $args->before;
        $output .= '<a href="'.$item-> url.'">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    function end_el(&$output, $item, $depth= 0,$args = array(), $id= 0 ){
        $output .= '</li><div class="link-blurb">' .
                    '<h3>'. $item -> title .'</h3><hr>' . 
                    '<p>'. $item -> description .'</p>' . 
                    '</div> ';
    }


    function end_lvl(&$output, $depth= 0,$args = array() ){
        $output .= '</ul>  ';
    }
}