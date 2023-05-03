<?php

class Categorias extends CI_Controller{

    private $classname = "categorias";
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("categoria");
    }

    public function index(){
        redirect($this->classname . "/page");
    }

    public function create(){
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->model("produto");
        $data["title"] = ucfirst($this->classname);
        $data['message'] = "Categoria criado com sucesso.";
        $data['produtos'] = $this->produto->findAll();
        $this->load->view("templates/cabecalho", $data);
        
        $messages = array("required" => "Campo (%s) é de preenchimento obrigatório");
        $this->form_validation->set_rules('nome', 'Nome', 'required', $messages);
        
        if ($this->form_validation->run() <> FALSE)
        {
            if(!$this->categoria->exists()){
                $this->categoria->add();
                $this->load->view("mensagens/success");
            }
            else{
                $this->load->view("mensagens/warning", array('message' => 'Categoria já foi adicionada.'));
            }
        }

        $this->load->view($this->classname . "/create");
        $this->load->view("templates/rodape");
    }

    public function page($page = 0){
        $limit = 10;
        $data["paginacao"] = $this->pageConfig($limit);
        $data["title"] = ucfirst($this->classname);
        $data[$this->classname] = $this->categoria->page($limit, $page);
        $this->load->view("templates/cabecalho", $data);
        $this->load->view($this->classname . "/page");
        $this->load->view("templates/rodape");
    }

    private function pageConfig($limit){
        $this->load->library("pagination");
        $config['first_link'] = ' << ';
        $config['last_link'] = ' >> ';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = $config['prev_tag_open'];
        $config['prev_tag_close'] = $config['prev_tag_close'];
        $config['first_tag_open'] = $config['prev_tag_open'];
        $config['first_tag_close'] = $config['prev_tag_close'];
        $config['last_tag_open'] = $config['prev_tag_open'];
        $config['last_tag_close'] = $config['prev_tag_close'];
        $config['attributes'] = array('class' => 'page-link');
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['base_url'] = site_url($this->classname . "/page");
        $config['total_rows'] = $this->categoria->count();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

    public function associar($id = NULL){
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->model("produto");
        
        $data['title'] = "Associar produtos";
        $data['categoria'] = $this->categoria->find($id);
        $data['produtos'] = $this->produto->findAll();
        $data['prodsassoc'] = $this->categoria->findAllProdCatByCatId($id);

        $messages = array('required' => 'O campo (%s) é preenchimento obrigatório.');
        $this->form_validation->set_rules('produto_id', 'Produto', 'required', $messages);

        $this->load->view("templates/cabecalho", $data);

        if ($this->form_validation->run() <> FALSE)
        {
            $this->categoria->addProdCatByCatId($id);
            redirect($this->classname . "/associar/" . $id);
        }

        $this->load->view($this->classname . "/associar");
        $this->load->view("templates/rodape");
    }

    public function delete($id = NULL){
        if ($id <> NULL)
        {
            $this->categoria->delete($id);
            $this->index();
        }
    }
}