<?php
	/**
	 * Classe permettant de se connecter à la base de données
	 */
	class DB {

		//DATA ONLINE
		const DB_HOST = "localhost";
		const DB_NAME = "id21265902_crud";
		const DB_USER = "id21265902_isaacwinner";
		const DB_PASSWORD = "Slktplogin1+";

		/*DATA IN OFFLINE
		const DB_HOST = "localhost";
		const DB_NAME = "crud";
		const DB_USER = "root";
		const DB_PASSWORD = "";*/

		private static $_instance;

		/**
		*** Cette méthode permet de se connecter à la database
		*@return Retourne un object PDO
		**/
		public static function get_instance(){
			if (is_null(self::$_instance)) {
				try{
					$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
					self::$_instance = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . '', '' . self::DB_USER . '', '' . self::DB_PASSWORD . '', $pdo_options);
				}
				catch(Exception $e){
					die('Erreur : ' . $e->getMessage());
				}
			}
			return self::$_instance;
		}
		
	}