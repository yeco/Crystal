<?php
/**
 * Crystal DBAL
 *
 * An open source application for database manipulation
 *
 * @package		Crystal DBAL
 * @author		Martin Rusev
 * @link		http://crystal.martinrusev.net
 * @since		Version 0.1
 * @version     0.1
 */

// ------------------------------------------------------------------------
class Crystal_Methods_Mysql_Orderby 
{

    

    function __construct($method, $order)
    {
		
		
	if(isset($order))
	{

       $last_element = end($order);

	    $this->order = " ORDER BY ";


	    foreach($order as $key => $value)
	    {
            if($key == $last_element)
	        {
	             $this->order  .= Crystal_Methods_Mysql_Helper::add_single_quote($key) . ' ' 
				 .  $value . ' ,';
                }
                else
                {
                    $this->order  .= Crystal_Methods_Mysql_Helper::add_single_quote($key) 
					. $value;
                }

            }

          
        }
        else
        {

           $this->order = FALSE;

        }
    	
		
      
    }

    public function __toString() 
	{
        return $this->order;
    }
    
    
}