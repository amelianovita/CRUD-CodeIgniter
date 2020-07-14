<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }

      $model = new UserModel();
      $data['user'] = $model->get_user();

      return view('user_view', $data);
   }
   public function tambahdata()
   {
      echo view('view_tambah_data');
   }

   public function save()
   {
      $model = new UserModel();
      $data = array(
		'user_id' => $this->request->getPost('user_id'),
		'user_nama' => $this->request->getPost('user_nama'),
         'user_email' => $this->request->getPost('user_email')
	  );
      $model->saveUser($data);
      return redirect()->to('/user');
   }

   public function edit($id)
   {
      $model = new UserModel();
      $data['user'] = $model->get_user($id)->getRow();
      return view('user_view_edit', $data);
   }
   public function updateData()
   {
      $model = new UserModel();
      $id = $this->request->getPost('user_id');
      $data = array(
         'user_nama' => $this->request->getPost('user_nama'),
         'user_email' => $this->request->getPost('user_email')
   );
      $model->updateUser($data, $id);
      return redirect()->to('/user');
   }

   public function delete($id)
   {
      $model = new UserModel();
      $model->deleteUser($id);
      return redirect()->to('/user');
   }
	
	//--------------------------------------------------------------------

}
