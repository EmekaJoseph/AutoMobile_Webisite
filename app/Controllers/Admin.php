<?php

namespace App\Controllers;
use App\Models\PostsModel;
use App\Models\MessageModel;
use CodeIgniter\I18n\Time;


class Admin extends BaseController
{

    public function index()
	{
		//echo view('Admin/head');
		echo view('Admin/login');
		// echo view('Admin/foot');
    }


	public function home()
	{
		echo view('Admin/head');
		echo view('Admin/home');
		// echo view('Admin/foot');
    }
    
    public function posts()
	{
		echo view('Admin/head');
		echo view('Admin/posts');
		// echo view('Admin/foot');
    }
    
    public function requests()
	{
		echo view('Admin/head');
		echo view('Admin/requests');
		// echo view('Admin/foot');
    }
    
    public function password()
	{
		echo view('Admin/head');
		echo view('Admin/password');
		// echo view('Admin/foot');
	}



	public function upload()
	{
		$admin = new PostsModel();
		$title = $this->request->getVar('title');
		$description = $this->request->getVar('description');
		$price = $this->request->getVar('price');
		
		//get, convert and store the images
		$img = $this->request->getVar('image');
		$img2 = $this->request->getVar('image2');
		$img3 = $this->request->getVar('image3');
		// $rand = uniqid();
		// $rand_2 = uniqid();
		// $rand_3 = uniqid();
		$image = uniqid() . '.jpg';
		$image2 = uniqid() . '.jpg';
		$image3 = uniqid() . '.jpg';
		$savePath = "../public/assets/img/Uploads/" . $image ;
		$savePath_2 = "../public/assets/img/Uploads/" . $image2 ;
		$savePath_3 = "../public/assets/img/Uploads/" . $image3 ;
		$image_base64 = base64_decode($img);
		$image_base64_2 = base64_decode($img2);
		$image_base64_3 = base64_decode($img3);
		file_put_contents($savePath, $image_base64);
		file_put_contents($savePath_2, $image_base64_2);
		file_put_contents($savePath_3, $image_base64_3);


		// $image_parts = explode(";base64,",$img);
		// $image_type_aux = explode("image/",$image_parts[0]);
		// $image_type = $image_type_aux[1];

		//today's date
		$today = Time::parse('today', 'America/Chicago');
		$date = $today->toLocalizedString('MMM d, yyyy');

		//store in database
		$dataToSave = [
			'title' => $title,
			'description' => $description,
			'price' => $price,
			'image' => $image,
			'image2' => $image2,
			'image3' => $image3,
			'date' => $date	
		];

		$admin->save($dataToSave);

		echo json_encode(['status'=>'success']);
	}

	function getPosts()
	{
		$posts = new PostsModel();
		$data= $posts->orderBy('id', 'DESC')->findAll();
		echo json_encode(['data'=>$data]);
	}

	function deletePost($id)
	{
		$admin = new PostsModel();
		$admin->where('id',$id)->delete($id);
		echo json_encode(['status'=>'success']);
	}

	public function sendMessage()
	{
		$message = new MessageModel();

		//today's date
		$today = Time::parse('today', 'America/Chicago');
		$date = $today->toLocalizedString('MMM d, yyyy');

		$dataToSave = [
			'senderName' => $this->request->getVar('senderName'),
			'contact' => $this->request->getVar('contact'),
			'message' => $this->request->getVar('message'),
			'requestId' => $this->request->getVar('requestId'),
			'date' => $date,
			'readStatus' => 0
		];
		$message->save($dataToSave);
		echo json_encode(['data' => 1]);
	}

	function getMessages()
	{
		$message = new MessageModel();
		$data= $message->orderBy('id', 'DESC')->findAll();
		echo json_encode(['data'=>$data]);
	}


	function deleteMessage($id)
	{
		$admin = new MessageModel();
		$admin->where('id',$id)->delete($id);
		echo json_encode(['status'=>'success']);
	}

	public function view_request($id)
	{
		$posts = new PostsModel();
		$thisPost = $posts->where('id', $id)->first();
		$price = "";
		if ($thisPost['price'] != null) {
			$price = 'N'.number_format(intval($thisPost['price']));
		}

		$data = [
			'id' => $thisPost['id'],
			'title' => $thisPost['title'],
			'price' => $price,
			'description' => $thisPost['description'],
			'image' => $thisPost['image'],
			'image2' => $thisPost['image2'],
			'image3' => $thisPost['image3'],
			'date' => $thisPost['date']
		];
		echo view('Admin/view_request', $data);
	}

	function changeReadStatus ($id)
	{
		$message = new MessageModel();
		$message->where('id',$id)->set('readStatus', '1')->update();
	}
}