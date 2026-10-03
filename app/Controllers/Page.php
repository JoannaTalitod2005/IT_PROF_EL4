<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view("about/index");
    }

    public function contact()
    {
        return view("contact/index");
    }
}
