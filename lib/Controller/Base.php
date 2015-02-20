<?php
namespace Controller;

class Base {
	public function index() {
        $app = \Slim\Slim::getInstance();
        $data = array(
            'hoge' => 'fuga',
            'hoge2' => 'fuga2',
        );
        $app->render('views/json.php', $data, 200);
	}

    public function sample() {
        $app = \Slim\Slim::getInstance();
        $app->render(
            'Base/index.twig'
        );
    }

}
