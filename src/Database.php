<?php 
namespace API\Src;

/**
 * Database class
 */
class Database
{
    /**
	* Return db
	* @var object
	*/
	private $db;
	
    public function __construct(){}

    private function Connect()
    {
		try 
		{
			$this->db = new \PDO("" . MYSQL_CONNECTION_STRING . "", "" . USERNAME . "", "" . PASSWORD . "");
		} 
		catch (PDOException $err) 
		{
			die(json_encode(array("Fatal error" => "Database error!")));
		}
	}
	
	public function GetConnection()
	{
		$this->Connect();
		return $this->db;
	}
}
?>