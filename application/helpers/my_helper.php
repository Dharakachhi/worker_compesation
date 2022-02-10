<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('datepiker_to_database'))
{
    function datepiker_to_database($date = '')
    {
       
    	if ($date != "" && $date != "0000-00-00") {
    		$myDateTime = DateTime::createFromFormat('m/d/Y', $date);
			return $myDateTime->format('Y-m-d');
    	}else{
    		return FALSE;
    	}
    }   
}

if ( ! function_exists('datetimepiker_to_database'))
{
    function datetimepiker_to_database($date_time = '')
    {    	
    	if ($date_time != "" && $date_time != "0000-00-00 00:00:00") {
    		$date_time = str_replace(" - ", " ", $date_time);
	    	$sec = strtotime($date_time);
		    $newdate = date ("Y-m-d H:i:s", $sec);
			return $newdate;
    	}else{
    		return FALSE;
    	}
    }   
}
if ( ! function_exists('database_to_datetimepicker')) {

    function database_to_datetimepicker($date_time = '')
    {
        if ($date_time != "" && $date_time != "0000-00-00 00:00:00") {
            return date('m/d/Y - h:i A',strtotime($date_time));
        }else{
            return FALSE;
        }
    }
}
if ( ! function_exists('database_to_datepicker')) {

    function database_to_datepicker($date_time = '')
    {
        if ($date_time != ""  && $date_time != "0000-00-00") {            
            return date('m/d/Y',strtotime($date_time));
        }else{
            return FALSE;
        }
    }
}

if ( ! function_exists('database_to_timepicker')) {

    function timepicker_to_database($time = '')
    {
        if ($time != ""  && $time != "00:00") {            
            return date('h:i:s A',strtotime($time));
        }else{
            return FALSE;
        }
    }
}

if ( ! function_exists('database_to_timepicker')) {

    function database_to_timepicker($time = '')
    {
       if ($time != "" && $time != "00:00") {
            return date('h:i A',strtotime($time));
        }else{
            return FALSE;
        }
    }
}

if ( ! function_exists('date_time')) {

    function date_time($date = '')
    {
        if ($date != "" && $date != "0000-00-00") {
            $var_date = date('d/m/Y/A',strtotime($date));

            $expload_date= (explode('/', $var_date));
            return $expload_date;
        }else{
            return FALSE;
        }
    }
}


if ( ! function_exists('began_work_date')) {

    function date_explode($date = '')
    {
        if ($date != "" && $date != "0000-00-00") {
            //$var_date = date('Y/m/d/A',strtotime($date));
            $expload_date= (explode(' ', $date));
            return $expload_date;
        }else{
            return FALSE;
        }
    }
}

if ( ! function_exists('datepiker_to_database_format'))
{
    function datepiker_to_database_format($date = '')
    {
         if ($date != "" && $date != "0000-00-00 00:00:00") {
            return date('n/j/y - h:i A',strtotime($date));
        }else{
            return FALSE;
        }
    }   
}

if ( ! function_exists('database_to_datepicker_format')) {

    function database_to_datepicker_format($date_time = '')
    {
        if ($date_time != ""  && $date_time != "0000-00-00") {            
            return date('n/j/y',strtotime($date_time));
        }else{
            return FALSE;
        }
    }
}

if ( ! function_exists('database_to_datepicker_format')) {

    function database_to_datepicker_format($date_time = '')
    {
        if ($date_time != ""  && $date_time != "0000-00-00") {            
            return date('n/j/y',strtotime($date_time));
        }else{
            return FALSE;
        }
    }
}