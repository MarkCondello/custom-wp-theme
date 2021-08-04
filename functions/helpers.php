<?php
//Get post archive page id
function get_archive_page_id($postType)
{
    $pageobj = get_page_by_path($postType);
    return $pageobj->ID;
}

 