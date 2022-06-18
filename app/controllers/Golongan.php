<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{
      protected object $model;

      public function __construct() {
            $this->model = new \App\Models\Golongan();
      }

      public function index()
	{
		$data['rows'] = $this->model->all();
		$this->home('golongan/index', $data);

	}

      public function create()
      {
            $this->home('golongan/create');
      }

}