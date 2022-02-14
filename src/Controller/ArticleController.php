<?php  

class ArticleController extends AppController
{
public function index()
{
$this->loadComponent('paginator');
$article= $this->Paginator-paginate($this->Article->find());
this->set('article',$articles);
}
}