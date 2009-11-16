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
class Crystal_Query_Mysql_Orderby 
{

    

    function __construct($method=null, $order=null)
    {
	
	
	$this->order = " ORDER BY ";	
		
	if(is_array($order))
	{
		
		
			if(!isset($order[0]))
			{
				
				
				/** 
				*  Works for array type  -> array(key => value)
			   */
		       $last_element = end($order);
			    foreach($order as $key => $value)
			    {
		            	if($key == $last_element)
			        	{
			             $this->order  .= Crystal_Query_Mysql_Helper::add_apostrophe($key) . ' ' 
						 .  $value . ' ,';
		                }
		                else
		                {
		                    $this->order  .= Crystal_Query_Mysql_Helper::add_apostrophe($key) . ' '
							. $value;
		                }
		
		         }
				
				
				
				
				
			}
			else
			{
				$this->order  .= Crystal_Query_Mysql_Helper::add_apostrophe($order[0]). ' ' 
				. $order[1];
				
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