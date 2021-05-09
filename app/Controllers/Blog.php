<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
   
    public function index()
	{
        $model = new BlogModel();
        $data['blogs'] = $model->getBlogs();
		return view('blogs/overview',$data);
	}
    public function view($slug = NULL)
    {
        $model = new BlogModel();
       
        $data['blogs'] = $model->getBlogs($slug);
        


        if (empty($data['blogs']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }
    
        $data['BlogTitle'] = $data['blogs']['BlogTitle'];
        $data['BlogContent'] = $data['blogs']['BlogContent'];
    
        echo view('blogs/view', $data);
}
}
