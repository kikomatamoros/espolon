<?php
class PagesController extends Controller
{
    public function home(){
        $this->view('index.html');
    }
    public function about(){
        $this->view('about.html');
    }
}