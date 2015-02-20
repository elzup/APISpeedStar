<?php
namespace Controller;

class Base {
	public function index() {
        $app = \Slim\Slim::getInstance();
        $app->config(array(
                'templates.path' => 'view',
            )
        );
        $data = array(
            'hoge' => 'fuga',
            'hoge2' => 'fuga2',
        );

        $article_data=\Artist::all();
        echo '<pre>';
        var_dump($article_data);
        $this::responce($data, 200);
	}

    public function sample() {
        $app = \Slim\Slim::getInstance();
        $app->render(
            'Base/index.twig'
        );
    }

    public function responce($data, $statues_code) {
        http_response_code($statues_code);
        echo json_encode($data);
    }

}
