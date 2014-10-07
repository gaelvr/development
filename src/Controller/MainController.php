<?php namespace Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

class MainController implements ControllerProviderInterface
{
	public function connect(Application $app)
	{
		$route = $app["controllers_factory"];
		
		//Ruta para servir el index del proyecto
		$route
			->get("/", [$this, "index"])
			->bind("index");
			
		return $route;
	}    

    public function index(Application $app)
    {
		return "Hola mundo!";
	}	
}	