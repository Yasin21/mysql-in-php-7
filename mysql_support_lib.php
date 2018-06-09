<?php
/**
 * This file Helps use mysql in php 7
 * @author Yasin Munshi
 * @company Techfusion
 */

// Check if the in the lower php version
if(!function_exists("mysql_connect")){
    $__connection = null;
    function mysql_connect($server,$user,$password){
        global $__connection;
        $__connection = mysqli_connect($server,$user,$password);
        return $__connection;
    }
    function mysql_select_db($name,$connection = null){
        $connection = __get_current_connection($connection);
        return mysqli_select_db($connection,$name);
    }

    function mysql_fetch_array($result){
        return mysqli_fetch_array($result);
    }

    function mysql_fetch_assoc($result){
        return mysqli_fetch_assoc($result);
    }

    function mysql_fetch_row($result){
        return mysqli_fetch_row($result);
    }

    function mysql_query($query,$connection = null){
        $connection = __get_current_connection($connection);
        return mysqli_query($connection,$query);
    }

    function mysql_error($connection = null){
        $connection = __get_current_connection($connection);
        return mysqli_error($connection);
    }
    function mysql_errno($connection = null){
        $connection = __get_current_connection($connection);
        return mysqli_errno($connection);
    }

    function mysql_insert_id($connection = null){
        $connection = __get_current_connection($connection);
        return mysqli_insert_id($connection);
    }

    function mysql_escape_string($string){
        return mysqli_escape_string(__get_current_connection(null),$string);
    }

    function mysql_real_escape_string($string,$connection = null){
        return mysqli_real_escape_string(__get_current_connection($connection),$string);
    }

    function mysql_num_rows($result){
        return mysqli_num_rows($result);
    }

    function mysql_close($connection = null){
        return mysqli_close(__get_current_connection($connection));
    }


    function __get_current_connection($connection){
        if($connection = null){
            return $GLOBALS['__connection'];
        }
        return $connection;
    }
}