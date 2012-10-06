<?php

function preprocess_Templates ( &$vars ) {
    //generate template suggestions based on the Pathauto alias generated
   if ( module_exists ( 'path' ) ) {
        //gets the "clean" URL of the current page
        $alias = drupal_get_path_alias ( $_GET[ 'q' ] );
        $vars[ 'alias' ] = $alias;

        //Why not keep the values drupal has generated
        $suggestions = &$vars[ 'theme_hook_suggestions' ];
        // Get path arguments.
        $args = arg ();
        // Remove first argument of "node".
        unset( $args[ 0 ] );

        $isFirst = TRUE;
        $template_filename = "_";

        foreach ( explode ( '/' , $alias ) as $path_part ) {
                $template_filename = 'page_';
                if ( $isFirst ) {
                    $isFirst = FALSE;
                    $template_filename = $template_filename . '_' . $path_part;
                    $type = $template_filename;
                } else {
                    $type = $template_filename . '_' . $path_part;
                }
        }

        // another interesting way
        $suggestions = array_merge (
            $suggestions ,
            array ( $type ) ,
            theme_get_suggestions ( $args , $type )
        );
       
       //custom page edit form by type eg;
       //       page__edit__type
       //       page__node__add__type
       $yes = false;
       foreach ($suggestions as $thing) {
           if ( $thing == 'page__edit' ) {
               $yes = true;
           }
       }

       if ( $yes == false) {
           $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
       } else {
           $vars['theme_hook_suggestions'][] = 'page__edit__'. $vars['node']->type;
       }
       
    }

    return $vars;
    
}
