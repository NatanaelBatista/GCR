<?php

/**
 * HomeController
 *
 * @package TutsupMVC
 * @since 0.1
 */
class HomeController extends MainController
{
	public function index()
	{
		$this->title = 'Home';

		require ABSPATH . '/views/_includes/header.php';
		require ABSPATH . '/views/_includes/nav.php';
		require ABSPATH . '/views/home/home.php';
		require ABSPATH . '/views/_includes/footer.php';
	}
}