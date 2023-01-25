<?php

class View
{
    public static function load($view_name,$view_date=[])
    {
        $file = VIEWS.$view_name.'.php';
        if(file_exists($file))
        {
            extract($view_date);

            require($file);
        }
        else
        {
            echo 'This view : '.$view_name .' does not exist';
        }
    }
}
?>