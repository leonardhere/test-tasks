
<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

// MYSQL
class MyDB 
{

	var $dblogin = "lsara410_db"; // ВАШ ЛОГИН К БАЗЕ ДАННЫХ
	var $dbpass = "zNcK09IGjy"; // ВАШ ПАРОЛЬ К БАЗЕ ДАННЫХ
	var $db = "lsara410_lsaran"; // НАЗВАНИЕ БАЗЫ ДЛЯ САЙТА
	var $dbhost="localhost";

	var $link;
	var $query;
	var $err;
	var $result;
	var $data;
	var $fetch;

	function connect() {
		$this->link = mysqli_connect("localhost", "lsara410_db", "zNcK09IGjy", "lsara410_lsaran");

		if (!$this->link) {
		    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
		    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
/*
		echo "Соединение с MySQL установлено!" . PHP_EOL;
		echo "Информация о сервере: " . mysqli_get_host_info($this->link) . PHP_EOL;*/

		$db_selected = mysqli_select_db($this->link, 'lsaran'); 
		mysqli_query($this->link, 'SET NAMES utf8');
	}

	function close() {
		mysqli_close($this->link);
	}

	function run($query) {
		$this->query = $query;
		$this->result = mysqli_query($this->link, $this->query);
		$this->err = mysqli_error($this->link);
	}

	function row() {
	$this->data = mysqli_fetch_assoc($this->result);
	return isset($this->data);
	}
	
	function fetch() {
		while ($this->data = mysqli_fetch_assoc($this->result)) {
			$this->fetch = $this->data;
			return $this->fetch;
		}
	}
	
	function stop() {
		unset($this->data);
		unset($this->result);
		unset($this->fetch);
		unset($this->err);
		unset($this->query);
	}
}