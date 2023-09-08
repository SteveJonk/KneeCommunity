<?php
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length)
{
    return 21;
}
add_filter('excerpt_length', 'new_excerpt_length');
