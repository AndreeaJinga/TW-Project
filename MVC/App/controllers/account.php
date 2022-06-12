<?php

class Account extends Controller
{
    public function index()
    {
        $this->view('account/index');
    }
    public function settings()
    {
        $this->view('account/settingsPage');
    }
}