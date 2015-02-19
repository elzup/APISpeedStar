<?php
class Route {
	static function registration($app) {
		$app->get('/', '\Controller\Base:index');
	}
}
