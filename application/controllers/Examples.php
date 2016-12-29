<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function _index_output($output = null)
	{
		$this->load->view('index_output.php',$output);
	}

	public function index()
	{
		$this->_index_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function books()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('book');
		$crud->set_relation_n_n('writers', 'book_writer', 'writer', 'book_id', 'writer_id', 'fullname');
		$crud->set_relation_n_n('heading', 'book_heading', 'heading', 'book_id', 'heading_id', 'name');
		$crud->set_field_upload('cover','assets/uploads/cover',"jpg|png|gif|jpeg");
		$crud->display_as('cover','Обложка книги');
		$crud->display_as('writers','Автор(ы)');
		$crud->display_as('title','Название книги');
		$crud->display_as('heading','Раздел(ы)');
		$crud->display_as('description','Краткое описание');
		$crud->set_subject('book');		
		$crud->fields('cover', 'writers',  'title', 'heading', 'description');

		$output = $crud->render();

		$this->_example_output($output);
	}


	public function writers()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('writer');
		$crud->set_subject('writer');		
		$crud->set_relation_n_n('books', 'book_writer', 'book', 'writer_id', 'book_id', 'title');
		$crud->display_as('fullname','Писатель');
		$crud->display_as('books','Все книги автора');
		$crud->fields('fullname','books');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function genres()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('heading');
		$crud->set_subject('genre');		
		$crud->set_relation_n_n('books', 'book_heading', 'book', 'heading_id', 'book_id', 'title');
		$crud->display_as('name','Жанр, раздел');
		$crud->display_as('books','Книги в этом жанре');
		$crud->fields('name','books');

		$output = $crud->render();

		$this->_example_output($output);
	}




}