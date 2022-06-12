<?php

class AboutUs extends Controller
{
    public function index()
    {
        $this->view('aboutUs/index');
    }
    public function scholarly()
    {
        $this->view('aboutUs/scholarly');
    }
}