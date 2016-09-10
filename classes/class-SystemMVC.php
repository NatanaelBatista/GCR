<?php

/**
 * SystemMVC
 *
 * @package SystemMVC
 * @since 0.1
 */
class SystemMVC
{
	/**
	 * $controlador
	 *
	 * @access private
	 */	
	private $controlador;

	/**
	 * $acao
	 *
	 * @access private
	 */	
	private $acao;
	
	/**
	 * $parametros
	 *
	 * @access private
	 */	
	private $parametros;
	
	/**
	 * $not_found
	 *
	 * @access private
	 */	
	private $not_found = '/includes/404.php';

	/**
	 * Construtor
	 *
	 * @since 0.1
	 * @access public
	 */
	public function __construct()
	{
		$this->get_url_data();

		// se nenhum controlador for especificado chame o método index do controlador home
		if ( ! $this->controlador )
		{
			require_once ABSPATH . '/controllers/home-controller.php';

			$this->controlador = new HomeController();
			$this->controlador->index();

			return;
		}

		// se um controlador for especificado e seu controller não existir chame a página not found
		if ( ! file_exists( ABSPATH . '/controllers/' . $this->controlador . '.php' ) )
		{
			require_once ABSPATH . $this->not_found;

			return;
		}

		// mas se o controller do controlador especificado existir chame o mesmo
		require_once ABSPATH . '/controllers/' . $this->controlador . '.php';

		$this->controlador = preg_replace( '/[^a-zA-Z]/i', '', $this->controlador );

		// mas se sua classe não existir chame a página not found
		if ( ! class_exists( $this->controlador ) )
		{
			require_once ABSPATH . $this->not_found;

			return;
		}

		// mas se a classe existir crie um objeto, passe os parâmetros como parâmetro
		// e armazene no método $controlador
		$this->controlador = new $this->controlador( $this->parametros );
		
		$this->acao = preg_replace( '/[^a-zA-Z]/i', '', $this->acao );

		// se o método da ação existir chame esse método e passe os parâmetros como parâmetros
		if ( method_exists( $this->controlador, $this->acao ) )
		{
			$this->controlador->{ $this->acao } ( $this->parametros );

			return;
		}

		// se nenhuma ação for especificada e o método index existir chame o método index
		if ( ! $this->acao && method_exists( $this->controlador, 'index' ) )
		{
			$this->controlador->index( $this->parametros );

			return;
		}

		// se o método especificado não existir chame a página not found
		if ( ! method_exists( $this->controlador, $this->acao ) )
		{
			require_once ABSPATH . $this->not_found;

			return;
		}
	}

	/**
	 * get_url_data
	 *
	 * @since 0.1
	 * @access public
	 */
	public function get_url_data()
	{
		if ( isset( $_GET['path'] ) )
		{
			$path = $_GET['path'];

			// retiera a barra no final da string
			$path = rtrim( $path, '/' );
			// filtra a string com o filtro de URL's
			$path = filter_var( $path, FILTER_SANITIZE_URL );

			$path = explode( '/', $path );

			$this->controlador 	= chk_array( $path, 0 );
			$this->controlador	.= '-controller';
			$this->acao 		= chk_array( $path, 1 );

			if ( chk_array( $path, 2 ) ) {
				unset( $path[0] );
				unset( $path[1] );

				$this->parametros = array_values( $path );
			}

			// DEBUG
			/*
			echo 'controlador: ' . $this->controlador . '<hr>';
			echo 'acao: ' . $this->acao . '<hr>';
			echo 'parametros: <pre>';
			print_r( $this->parametros );
			echo '</pre>';
			*/
		}
	}
}