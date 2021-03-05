<?php

namespace App\Controllers;
use App\Models\PostsModel;
use App\Models\MessageModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'TBrown | Home';
		echo view('General/head', $data);
		echo view('home');
		echo view('General/foot');
	}

	public function view_all()
	{
		$data['title'] = 'TBrown | All';
		echo view('General/head',$data);
		echo view('view_all');
		echo view('General/foot');
	}

	public function aboutUs()
	{
		$data['title'] = 'TBrown | About';
		echo view('General/head',$data);
		echo view('contact');
		echo view('General/foot');
	}

	public function test(){
		echo view('test');
	}

	function getPosts()
	{
		$posts = new PostsModel();
		$data= $posts->orderBy('id', 'DESC')->findAll();
		echo json_encode(['data'=>$data]);
	}

	public function view_this($id)
	{
		$posts = new PostsModel();
		$thisPost = $posts->where('id', $id)->first();
		$price = "";
		if ($thisPost['price'] != null) {
			$price = 'N'.number_format(intval($thisPost['price']));
		}

		$details = [
			'id' => $thisPost['id'],
			'title' => $thisPost['title'],
			'price' => $price,
			'description' => $thisPost['description'],
			'image' => $thisPost['image'],
			'image2' => $thisPost['image2'],
			'image3' => $thisPost['image3'],
			'date' => $thisPost['date']
		];

		$data['title'] = 'TBrown | All';
		echo view('General/head',$data);
		echo view('view_this', $details);
		echo view('General/foot');
	}
}