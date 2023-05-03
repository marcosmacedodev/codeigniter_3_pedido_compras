<?php 

class Cidades extends CI_Controller{

    private $classname = "cidades";
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("cidade");
    }

    public function index(){
        redirect($this->classname . "/page");
    }

    public function page($page = 0){
        $limit = 10;
        $data["paginacao"] = $this->pageConfig($limit);
        $data["title"] = ucfirst($this->classname);
        $data[$this->classname] = $this->cidade->page($limit, $page);
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
        $config['total_rows'] = $this->cidade->count();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

    public function update($id = NULL){
        $data['title'] = "Atualizar cidade";
        $data['cidade'] = $this->cidade->find($id);
        $this->load->view("templates/cabecalho", $data);
        $this->load->view($this->classname . "/update");
        $this->load->view("templates/rodape");
    }

    public function delete($id = NULL){
        if ($id <> NULL)
        {
            $this->cidade->delete($id);
            $this->index();
        }
    }
}