<?php
/**
 * --------------------------------------------------
 * INDEX
 * --------------------------------------------------
 */
session_start();
require_once( 'init.php' );
require_once( 'vendor/SPDO.php' );
require_once( 'vendor/SRequest.php' );

if( isset( $_GET['c'] ) ) {
    $controllerName = ucfirst( strtolower( $_GET['c'] ) ) . 'Controller';
} else {
    $controllerName = 'AccueilController';
}

if( file_exists( 'controllers/' . $controllerName . '.php' ) ) {
    require_once( 'controllers/' . $controllerName . '.php' );

    if( class_exists( $controllerName ) ) {
        $controller = new $controllerName;

        if( isset( $_GET['a'] ) ) {
            $actionName = $_GET['a'] . 'Action';
        } else {
            $actionName = 'showAction';
        }

        if( isset( $_GET['id'] ) && ctype_digit( $_GET['id'] ) ) {
            $controller->$actionName( $_GET['id'] );
        } else {
            $controller->$actionName();
        }
    }
}