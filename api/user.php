<?php
    include('config.php');

    class User
    {
        protected $_uid;        
        protected $_username;       // entered username
        protected $_password;   // entered password
        private $crypted_password;

        protected $_db;       // stores the database handler
        private $salt;

        public function __construct(PDO $db, $username, $password) 
        {
            $this->_db = $db;
            $this->_username = $username;
            $this->_password = $password;
        }

        public function login()
        {
            $user = self::_checkCredentials();
            if ($user) 
                if ($this->crypted_password == $user['password']) 
                {
                    return $user;
                }
            return false;
        }

        public function register()
        {
            if(!self::_checkCredentials())
            {
                self::create_salt();
                self::encrypt();
                $stmt = $this->_db->prepare("INSERT INTO user_basic_data (name, password, salt ) VALUES (?,?,?)");
                $stmt->execute(array($this->_username, $this->crypted_password, $this->salt));
                $stmt = $this->_db->prepare('SELECT * FROM user_basic_data WHERE name=?');
                $stmt->execute(array($this->_username));
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return $user;
            }
            return false;
        }

        protected function _checkCredentials()
        {
            $stmt = $this->_db->prepare('SELECT * FROM user_basic_data WHERE name=?');
            $stmt->execute(array($this->_username));
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->salt = $user['salt'];
                $this->_uid = $user['uid'];
                self::encrypt();
                return $user;
            }
            return false;
        }

        public function findUser() {
            if(self::_checkCredentials())
                return true;
            return false;
        }

        public function getUsername() {
            return $this->_username;
        }

        function create_salt() {
            if(!isset($this->salt)) {
                $this->salt = uniqid("", true);
            }
        }

        private function encrypt() {
            $this->crypted_password = self::hash($this->_password, $this->salt);
        }

        private static function hash($str, $salt) {
            for($i = 0; $i < 1000; $i++) {
                $str = hash_hmac("sha512", $str, $salt);
                $salt = hash_hmac("sha512", $salt, $str);
            }
            return $str;
        }

    }

?>
