<?php
    class CrudModel{
        private $db;
        private $query;
        private $sql;
        private $result;

        function __construct($db){
            $this->db = $db;
        }

        public function getUsers(){
            $users = [];
			$this->query = "SELECT * FROM user ORDER BY name";
			$this->sql = $this->db->query($this->query);
			while ($this->result = $this->sql->fetch()) {
                $user = new User($this->result['fullname'], 
                $this->result['name'], 
                $this->result['email'], 
                $this->result['password'],
                $this->result['id']);
				array_push($users, $user);
			}
			return $users;
		}

         /*

			---------------------------------------------------------------------------------------
			Cette méthode permet d'enregistrer un nouveau utilisateur dans la DB
			---------------------------------------------------------------------------------------

	 	*/

		public function createUser($name, $email, $password){
			$this->query = "INSERT INTO user(name, email, password) VALUES(?, ?, ?)";
			$this->sql = $this->db->prepare($this->query);
			$this->sql->execute(array($name, $email, $password));
		}

        public function deleteUser($idUser){
            $this->query = "DELETE FROM user WHERE id = ?";
            $this->sql = $this->db->prepare($this->query);
			$this->sql->execute(array($idUser));
        }

    }