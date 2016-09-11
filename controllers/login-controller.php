<?php

/**
 * LoginController
 *
 * @package TutsupMVC
 * @since 0.1
 */
class LoginController extends MainController
{
	public function index()
	{
		// Título da página
		$this->title = 'Login';

		// Adiciona o conteúdo da página
		require ABSPATH . '/views/login/login.php';
	}
}