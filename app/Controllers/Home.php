<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new BlogModel();
        $data['blogs'] = $model->getBlogs(false,6);
		return view('home',$data);
	}
}
