<?php 

/**
 * UsuariosModel
 *
 * Classe para registros de usuários
 *
 * @package TutsupMVC
 * @since 0.1
 */
class UsuariosModel
{
	/**
	 * $form_data
	 *
	 * Os dados do formulário de envio.
	 *
	 * @access public
	 */	
	public $form_data;

	/**
	 * $form_msg
	 *
	 * As mensagens de feedback para o usuário.
	 *
	 * @access public
	 */	
	public $form_msg;

	/**
	 * $db
	 *
	 * O objeto da nossa conexão PDO
	 *
	 * @access public
	 */
	public $db;

	/**
	 * Construtor
	 * 
	 * Carrega  o DB.
	 *
	 * @since 0.1
	 * @access public
	 */
	public function __construct( $db = false )
	{
		$this->db = $db;
	}

	/**
	 * validate_register_form
	 *
	 * Valida o formulário de envio e cadastra usuários
	 *
	 * @since 0.1
	 * @access public
	 */
	public function validate_register_form()
	{
		// Configura os dados do formulário
		$this->form_data = array();

		// Verifica se algum dado foi enviado
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty ( $_POST ) )
		{	
			// Faz o loop dos dados do post
			foreach ( $_POST as $key => $value )
			{
				// Insere os dados enviados na propriedade $form_data
				$this->form_data[$key] = $value;

				// Todos os campos deverão ser preenchidos
				if ( empty( $value ) )
				{
						
					// Configura a mensagem
					$this->form_msg = '<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					É necessário preencher todos as informações.</div>';
						
					// Termina
					return;	
				}	
			}
		}
		else
		{
			// Termina se nada foi enviado
			return;
		}

		// Verifica se a propriedade $form_data foi preenchida
		if( empty( $this->form_data ) )
		{
			return;
		}

		// Verifica se o usuário existe
		$db_check_user = $this->db->query
		(
			'SELECT * FROM `users` WHERE `user_id` = ?', 
			array( 
				chk_array( $this->form_data, 'user_id')		
			) 
		);
		
		// Verifica se a consulta foi realizada com sucesso
		if ( ! $db_check_user ) {
			$this->form_msg = '<p class="form_error">Internal error.</p>';
			return;
		}
		
		// Obtém os dados da base de dados MySQL
		$fetch_user = $db_check_user->fetch();
		
		// Configura o ID do usuário
		$user_id = $fetch_user['user_id'];

		/*if ( ! empty( $user_id ) )
		{
			$query = $this->db->update
			(
				'users', 'user_id', $user_id, 
				array(
					'user_password' => $password, 
					'user_name' => chk_array( $this->form_data, 'user_name'
				), 
			));
			
			// Verifica se a consulta está OK e configura a mensagem
			if ( ! $query ) {
				$this->form_msg = '<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Não foi possível editar o usuário.</div>';
				
				// Termina
				return;
			}
			else
			{
				$this->form_msg = '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Usuário editado com sucesso!.</div>';
				
				// Termina
				return;
			}
		}
		else
		{
			$query = $this->db->insert
			(
				'users',
				array(
					'User_name' => chk_array( $this->form_data, 'user_name'), 
					'user' => chk_array( $this->form_data, 'user'), 
					'User_password' => chk_array( $this->form_data, 'user_password'),
				)
			);

			if ( ! $query )
			{
				$this->form_msg = '<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Não foi possível cadastrar o usuário.</div>';
				
				// Termina
				return;
			}
			else
			{
				$this->form_msg = '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Usuário cadastrado com sucesso!.</div>';
				
				// Termina
				return;
			}
		}*/
		return $user_id;
	}

	/**
	 * validate_register_form
	 *
	 * Valida o formulário de envio e cadastra usuários
	 *
	 * @since 0.1
	 * @access public
	 */
	public function edit_register_form( $user_id = false )
	{
		// Configura os dados do formulário
		$this->form_data = array();

		// Verifica se algo foi postado
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty ( $_POST ) ) {
		
			// Faz o loop dos dados do post
			foreach ( $_POST as $key => $value ) {
			
				// Configura os dados do post para a propriedade $form_data
				$this->form_data[$key] = $value;
				
				// Nós não permitiremos nenhum campos em branco
				if ( empty( $value ) ) {
					
					// Configura a mensagem
					$this->form_msg = '<p class="form_error">There are empty fields. Data has not been sent.</p>';
					
					// Termina
					return;
					
				}			
			
			}
		}
		else
		{
			// Termina se nada foi enviado
			return;
		}

		// Verifica se a propriedade $form_data foi preenchida
		if( empty( $this->form_data ) ) {
			return;
		}

		// O ID de usuário que vamos pesquisar
		$s_user_id = false;
		
		// Verifica se você enviou algum ID para o método
		if ( ! empty( $user_id ) ) {
			$s_user_id = $user_id[0];
		}
		
		// Verifica se existe um ID de usuário
		if ( empty( $s_user_id ) ) {
			return;
		}

		// Verifica se o usuário existe
		$db_check_user = $this->db->query ('SELECT * FROM `users` WHERE `user_id` = ?', array( $s_user_id ) );

		// Verifica se a consulta foi realizada com sucesso
		if ( ! $db_check_user ) {
			$this->form_msg = '<p class="form_error">Internal error.</p>';
			return;
		}
		else
		{
			$query= $this->db->update
			(
				'users', 'user_id', $s_user_id, 
				array(
					'user' => $this->form_data['user'],
					'user_password' => $this->form_data['user_password'], 
					'user_name' => $this->form_data['user_name'],
				)
			);
			
			// Verifica se a consulta está OK e configura a mensagem
			if ( ! $query ) {
				$this->form_msg = '<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Não foi possível editar o usuário.</div>';
				
				// Termina
				return;
			}
			else
			{
				$this->form_msg = '<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Usuário editado com sucesso!.</div>';
				
				// Termina
				return;
			}
		}
		return $this->form_data;
		//return $s_user_id;
	}

	/**
	 * get_register_form
	 *
	 * Obtém os dados do formulário
	 * 
	 * Obtém os dados para usuários registrados
	 *
	 * @since 0.1
	 * @access public
	 */
	public function get_register_form( $user_id = false )
	{
		// O ID de usuário que vamos pesquisar
		$s_user_id = false;
		
		// Verifica se você enviou algum ID para o método
		if ( ! empty( $user_id ) ) {
			$s_user_id = $user_id[0];
		}
		
		// Verifica se existe um ID de usuário
		if ( empty( $s_user_id ) ) {
			return;
		}
		
		// Verifica na base de dados
		$query = $this->db->query('SELECT * FROM `users` WHERE `user_id` = ?', array( $s_user_id ));
		
		// Verifica a consulta
		if ( ! $query ) {
			$this->form_msg = '<p class="form_error">Usuário não existe.</p>';
			return;
		}
		
		// Obtém os dados da consulta
		$fetch_userdata = $query->fetch();
		
		// Verifica se os dados da consulta estão vazios
		if ( empty( $fetch_userdata ) ) {
			$this->form_msg = '<p class="form_error">User do not exists.</p>';
			return;
		}
		
		// Configura os dados do formulário
		foreach ( $fetch_userdata as $key => $value ) {
			$this->form_data[$key] = $value;
		}
	}

	/**
	 * Obtém a lista de usuários
	 * 
	 * @since 0.1
	 * @access public
	 */
	public function get_user_list()
	{
		// Simplesmente seleciona os dados na base de dados 
		$query = $this->db->query('SELECT * FROM `users` ORDER BY user_id DESC');
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
			return array();
		}
		// Preenche a tabela com os dados do usuário
		return $query->fetchAll();
	}
}