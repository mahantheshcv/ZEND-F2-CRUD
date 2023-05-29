<?php 
return array(
     'controllers' => array( //-- The controllers section provides a list of all the controllers provided by the module.
         'invokables' => array(
             'Album\Controller\Album' => 'Album\Controller\AlbumController',
         ),
     ),
     
 // The following section is new and should be added to your file
 'router' => array(
    'routes' => array(
        'album' => array(
            'type'    => 'segment',  // -- The segment route allows us to specify placeholders in the URL pattern (route) that will be mapped to named parameters in the matched route In this case, the route is ``/album[/:action][/:id]``
            'options' => array(
                'route'    => '/album[/][:action][/:id]',
                'constraints' => array(
                    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'id'     => '[0-9]+',
                ),
                'defaults' => array(
                    'controller' => 'Album\Controller\Album',
                    'action'     => 'index',
                ),
            ),
        ),
    ),
),



'view_manager' => array( //-- view_manager will allow it to find the view scripts for the Album module that are stored in our view/ directory.
    'template_path_stack' => array(
        'album' => __DIR__ . '/../view',
    ),
),
);

 ?>