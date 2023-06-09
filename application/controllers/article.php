<?php


class Article extends Frontend_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('article_m');
        $this->data['recent_news'] = $this->article_m->get_recent();
    }

    public function index($id, $slug){
        //Fetch the article
        $this->article_m->set_published();
        $this->data['article'] = $this->article_m->get($id);

        //Return 404 if not found
        count($this->data['article']) || show_404(uri_string());

        //Redirect if slug was incorrect
        $request_slug = $this->uri->segment(3);
        $set_slug = $this->data['article']->slug;
        if ($request_slug != $set_slug){
            redirect('article/' . $this->data['article']->id . '/' . $this->data['article']->slug, 'location', '301');
        }

        //Load view
        add_meta_title($this->data['article']->title);

        $this->data['subview'] = 'article';
        $this->load->view('_main_layout', $this->data);
    }

}