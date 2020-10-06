<?php 
	class User{
		public $name;
		public $login;
		protected $password;
		public $email;

		public function __construct($name, $login, $password, $email){
			$this->name = $name;
			$this->login = $login;
			$this->email = $email;
			$this->myHasch($password);
			echo ($this->password);

		}

		public function forgotpassword($str){
			/*проверить что к нам приходит в строке:логин или емаил
			если логин то по нему ищем пользователя а если по емаилу то по нему
			text@email.com
			отправить письмо на почту дибилу который забыл свой пароль которое содержит ссылку ограниченного срока действия на страницу восстановления пароля
			*/
		};

		protected function myHasch($password){
			$tmp = '';
			if($tmp = password_hash($password, PASSWORD_DEFAULT)){
				$this->password = $tmp;
			}

		}

		public function getname(){
			return $this->name;
		}

		public function getlogin(){
			return $this->login;
		}

		public function getpassword(){
			return $this->password;
		}

		public function getemail(){
			return $this->email;
		}

		public function setname($name){
			$this->name = $name;
		}

		public function setlogin($login){
			$this->login = $login;
		}

		public function setpassword($password){
			$this->password = $password;
		}

		public function setemail($email){
			$this->email = $email;
		}

	}

	/*$user = new User();
	$user->setname('Ivan');
	$user->setlogin('VANO');
	$user->setpassword('V123');
	$user->setemail('ivan123@gmail.com');
*/
 ?>
