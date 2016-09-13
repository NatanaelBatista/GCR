<?php

/**
 * LoginController
 *
 * @package TutsupMVC
 * @since 0.1
 */
class LoginController extends MainController
{
	/**
	 * index
	 *
	 * Carrega o layaut da página junto com o conteúdo
	 *
	 * @since 0.1
	 * @access public
	 */
	public function index()
	{
		// Retorna um objeto do model
		$modelo = $this->load_model( 'login/login-model' );

		// Título da página
		$this->title = 'Login';

		// Adiciona o conteúdo da página
		require ABSPATH . '/views/login/login.php';
	}
}