<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\Product;

class Home extends BaseController
{
    public function __construct(){
        //   loding user model
        $this->user = new UserModel();       
        $this->product = new Product();       
    }

    public function index()
    {
        return view('welcome_message');
    }

    /**
     * 
     */
    public function getUsers()
    { 
        /**
         *  @var data
         *  @type array
         *  @use - to collect all data that need to show/use in view
         */
        $data = array();

        $data['users'] = $this->user->findAll();

        return view('users', $data);
    }

    public function getProducts()
    {
         /**
         *  @var data
         *  @type array
         *  @use - to collect all data that need to show/use in view
         */
        $data = array();

        $data['products'] = $this->product->findAll();

        return view('product', $data);
    }
}
