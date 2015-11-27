<?php 

add_filter( 'smamo_rabatkode_column_fields', 'smamo_add_rabatkode_fields' );
function smamo_add_rabatkode_fields(){
    
    $fields = array(
        'add_name' => array(
            'slug' => 'rabat_kode_nr',
            'output' => 'Nr',
            'meta_field' => 'rabat_kode_nr',
            'order_by'   => 'meta_value_num',
        ),
        
        'add_company' => array(
            'slug' => 'rabat_navn',
            'output' => 'Navn',
            'meta_field' => 'rabat_navn',
        ),
        
        'add_member_of' => array(
            'slug' => 'rabat_email',
            'output' => 'Email',
            'meta_field' => 'rabat_email',
        ),  
    );
    
    return $fields;
}

/*
OPRET FELTER
------------------------------------------------*/


// Headers
add_filter('manage_edit-rabatkode_columns', 'smamo_add_rabatkode_columns');
function smamo_add_rabatkode_columns($columns) {
    
    $fields = apply_filters( 'smamo_rabatkode_column_fields', array() );
    if ( empty( $fields ) || ! is_array( $fields ) ){
        return $columns;
    }
    
	$new_columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Kode',
    );
    
    foreach($fields as $field){
        $key = $field['slug'];
        $new_columns[$key] = $field['output'];
    }
    
	return $new_columns;
}

// Indhold
add_action('manage_rabatkode_posts_custom_column', 'smamo_manage_rabatkode_columns', 10, 2);
function smamo_manage_rabatkode_columns($column_name, $id) {
	global $post;
    
    $fields = apply_filters( 'smamo_rabatkode_column_fields', array() );
        
    foreach($fields as $field){
        if($field['slug'] === $column_name){
            
            if(isset($field['link']) && $field['link'] === 'post'){
                echo edit_post_link( get_post_meta($post->ID,$field['meta_field'],true), '<b>', '</b>', $post->ID );
            }
            
            else if(isset($field['field_type']) && $field['field_type'] === 'options'){
                echo $field['options'][get_post_meta($post->ID,$field['meta_field'],true)];   
            }
            
            else{
                echo get_post_meta($post->ID,$field['meta_field'],true);
            }
           
        }
	} 
}

// Sortering
add_filter("manage_edit-rabatkode_sortable_columns", 'smamo_sort_rabatkode_columns');
function smamo_sort_rabatkode_columns($columns) {
    
    $fields = apply_filters( 'smamo_rabatkode_column_fields', array() );
	if ( empty( $fields ) || ! is_array( $fields ) ){
        return $columns;
    }
    
	$custom = array();
    
    foreach($fields as $field){
        $key = $field['slug'];
        $custom[$key] = $field['slug'];
        
    }
    
	return wp_parse_args($custom, $columns);
}

// Ordn
add_filter( 'request', 'smamo_sort_rabatkode_columns_orderby' );
function smamo_sort_rabatkode_columns_orderby( $vars ) {
	
    $fields = apply_filters( 'smamo_rabatkode_column_fields', array() );
    if ( empty( $fields ) || ! is_array( $fields ) ){
        return $vars;
    }
    
    foreach($fields as $field){
       if ( isset( $vars['orderby'] ) && $field['slug'] == $vars['orderby'] ) {
            $order_by = (isset($field['order_by'])) ? $field['order_by'] : 'meta_value';
            
            $merge_array = array(
                'meta_key' => $field['meta_field'],
                'orderby' => $order_by
            );
                
            if(isset($field['meta_type'])){
                $merge_array['meta_type'] = $field['meta_type'];
                
            }
           
            $vars = array_merge( $vars, $merge_array);
        } 
    }
	return $vars;
}