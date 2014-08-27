<?php
/**
 * Contains the class for the different database key
 * 
 * @since 0.0.1
 * @author Bess
 **/

/**
 * Class defines the differents keys used in the Orm system
 * 
 *  OrmKEY::$PK defines a primary key
 *  OrmKEY::$FK defines a foreign key : a link between 2 entities 0,1->n 
 *  OrmKEY::$AK defines an associate key : a link between 2 entities that needing a third table
 * 
 * @since 0.0.1
 * @author Bess
 * @package Orm
*/
class OrmKEY
{
	public static $PK = 0x9901; // Primary KEY
	public static $FK = 0x9902; // Foreign KEY a link between 2 entities 0,1->n
	public static $AK = 0x9903; // Associate KEY a link between 2 entities n->n that needing a third table
}

?>
