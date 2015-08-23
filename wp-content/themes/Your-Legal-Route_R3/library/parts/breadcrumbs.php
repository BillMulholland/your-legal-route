<?php
/* Taxonomy Breadcrumb */
function be_taxonomy_breadcrumb() {
// Get the current term
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

// Create a list of all the term's parents
$parent = $term->parent;
while ($parent):
$parents[] = $parent;
$new_parent = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ));
$parent = $new_parent->parent;
endwhile;
if(!empty($parents)):
$parents = array_reverse($parents);

// For each parent, create a breadcrumb item
foreach ($parents as $parent):
$item = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ));
$url = get_bloginfo('url').'/'.$item->taxonomy.'/'.$item->slug;
echo '<li><a href="'.$url.'">'.$item->name.'</a></li>';
endforeach;
endif;

// Display the current term in the breadcrumb
echo '<li>'.$term->name.'</li>';
}

?>

<ol class="breadcrumb">
<li><a href="<?php echo home_url(); ?>">Home</a></li>
<?php be_taxonomy_breadcrumb() ?></ol>