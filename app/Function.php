<?php
    function excerpt_string($string,$limit){
        $excerpt = explode(' ', $string, $limit);
            if (count($excerpt)>=$limit) {
                array_pop($excerpt);
                $excerpt = implode(" ",$excerpt).'...';
            } else {
                $excerpt = implode(" ",$excerpt);
            } 
            $excerpt = preg_replace('`\*\]`','',$excerpt);
            return $excerpt;
    }
?>