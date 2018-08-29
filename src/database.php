<?php
class Database
{
	private $pdo;
	static private $instance;
	private function __construct()
	{
		$this->pdo = new PDO('mysql:dbname=vegtable;host=localhost:3306','root','');
	}
	static public function create(): self
	{
		if (self::$instance===NULL){
			self::$instance = new Database();
		}
		return self::$instance;
	}
	public function saveLegume($nature,$legume)
	{
	     $legumes=$legume->getnom();
	     $surface=$legume->getsurface();
	     $PH=$legume->getPH();

	      $stmt =$this->pdo->prepare(
                "insert into legume(nature,nom,surface,PH)
                value (:nature,:nom,:surface,:PH)
                 "
                );
     
                $stmt ->execute ([
                   'nature'=>$nature,
                   'nom' => $legumes,
                   'surface'=>$surface,
                   'PH'=>$PH
                 ]);
         $reponse = $this->pdo->query('SELECT * FROM legume');
         return $reponse;
	}


}

