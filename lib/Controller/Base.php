<?php
namespace Controller;

class Base {
	public function index() {
        echo "Yahello!!";
	}

    public function sample() {
        $app = \Slim\Slim::getInstance();
        $app->render(
            'Base/index.twig'
        );
    }

}
