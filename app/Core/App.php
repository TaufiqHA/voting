<?php 

class App
{
	private $controller = 'home';
	private $method = 'index';
	private $param = [];
	public function __construct()
	{
		$url = $this->parsurl();
		if (!empty($url)) {
			if (file_exists('../app/Controllers/' . $url[0] . '.php')) {
				$this->controller = $url[0];
				unset($url[0]);
			}
		}

		require_once "../app/Controllers/" . $this->controller . '.php';
		$this->controller = new $this->controller;

		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		if (!empty($url)) {
			$this->param = array_values($url);
		}

		call_user_func_array([$this->controller, $this->method], $this->param);
	}

	public function parsurl()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], "/");
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
			return $url;
		}
	}
}