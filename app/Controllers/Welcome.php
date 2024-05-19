<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mfound;
use App\Models\Mmissing;
use App\Models\Muser;

class Welcome extends BaseController
{
    public function index()
    {
        $missing = new Mmissing();
        $data['city'] = $missing->distinct()->select('city')->findAll();
        $data['state'] = $missing->distinct()->select('state')->findAll();
        $data['phone'] = $missing->distinct()->select('phone')->findAll();
        // dd($data);

        return view('index',$data);
    }

    public function login()
    {
        $data['register']="register";
        $data['submit_to']="auth";
        return view('candidate/login',$data);
    }

    public function auth()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email'         => 'required|min_length[4]|max_length[100]|valid_email',
            'password'      => 'required|min_length[4]|max_length[50]'

        ]);
        if ($this->request->getMethod() === 'post' && $validation->run($this->request->getPost())) {
            $session = session();
            $user = new Muser();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $data = $user->where('email', $email)->first();
            if($data){
                $pass = $data['password'];
                if(md5($password) == $pass) {
                    $ses_data = [
                        'user_id' => $data['id'],
                        'loggedin' => TRUE
                    ];
                    if($data['email']=="admin@gmail.com")
                    $session->set(['admin'=>true]);
                    $session->set($ses_data);
                        echo '{"success":"true", "redirect" : "home"}';
                }else{
                    echo '{"password" :"Password is incorrect." }';
                }
            }else{
                echo '{"email" :"Email does not exist." }';
            }
        }
        else {
            echo json_encode($validation->getErrors());
        }
    }

    public function register(){
        $data['url']="/save";
        return view('hotlair/registerform',$data);
    }
    public function about(){
        return view('aboutus');
    }
    public function tandc(){
        return view('terms-and-conditions');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'full_name'         => 'required|min_length[3]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirm_password'  => 'matches[password]',
        ]);
        if ($this->request->getMethod() === 'post' && $validation->run($this->request->getPost())) {
            $user = new Muser();
            $data = [
                'name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email'),
                'password' => md5($this->request->getPost('password')),
            ];
            $user->insert($data);
            echo '{"success":"true" }';
        } else {
            echo json_encode($validation->getErrors());
        }
    }

    public function add_missing($id=1)
    {

        $data['submit_to']="save-missing";
        $header = view('admin/includes/header', ['title' => 'Add Missing','nav_heading'=>'Add Missing']);
        $footer= view('admin/includes/footer');
        return $header.view('admin/edit-hotlair',$data).$footer; 

    }

    public function save_missing() 
    {
        $validation = \Config\Services::validation();
        $rule=[
            'name' => 'required|min_length[1]|max_length[50]',
            'mobile' => 'required',
            'phone' => 'required|numeric',
            'city' => 'required|alpha_space',
            'state' => 'required|alpha_space',
            'address' => 'required',
            'description' => 'required',
            'image'  => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4048]'
        ] ;

        $image = $this->request->getFile('image');
        // if($image && $image->isValid() && !$image->hasMoved()){
        //     $rule['image'] = 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]';
        // }
        $validation->setRules($rule);
    
        if ($this->request->getMethod() === 'post' && $validation->run($this->request->getPost())) {
            $missing = new Mmissing();
            $uid = session('user_id');
            $data = [
                'name' => ucfirst($this->request->getPost('name')),
                'phone' => $this->request->getPost('phone'),
                'missing_date' => $this->request->getPost('mobile'),
                'city' => ucfirst($this->request->getPost('city')),
                'state' => ucfirst($this->request->getPost('state')),
                'address' => $this->request->getPost('address'),
                'user_id' => $uid,
                'description' => $this->request->getPost('description'),
            ];
    
    
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('./uploads/missing/', $newName);
                $data['image'] = 'uploads/missing/' . $newName;                 
            } 
            $missing->insert( $data);
            echo '{"success":true,"icon":"success","title":"Success","msg": "Data is Saved Successfully"}';
        } else {
            echo json_encode($validation->getErrors());
        }
    }

    public function add_found($id=1)
    {

        $data['submit_to']="save-found";
        $header = view('admin/includes/header', ['title' => 'Add found','nav_heading'=>'Add found']);
        $footer= view('admin/includes/footer');
        return $header.view('admin/edit-hotlair',$data).$footer; 

    }

    public function save_found() 
    {
        $validation = \Config\Services::validation();
        $rule=[
            'name' => 'required|min_length[1]|max_length[50]',
            'mobile' => 'required',
            'phone' => 'required|numeric',
            'city' => 'required|alpha_space',
            'state' => 'required|alpha_space',
            'address' => 'required',
            'description' => 'required',
            'image'  => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4048]'
        ] ;

        $image = $this->request->getFile('image');
        // if($image && $image->isValid() && !$image->hasMoved()){
        //     $rule['image'] = 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]';
        // }
        $validation->setRules($rule);
    
        if ($this->request->getMethod() === 'post' && $validation->run($this->request->getPost())) {
            $found = new Mfound();
            $uid = session('user_id');
            $data = [
                'name' => ucfirst($this->request->getPost('name')),
                'phone' => $this->request->getPost('phone'),
                'found_date' => $this->request->getPost('mobile'),
                'city' => ucfirst($this->request->getPost('city')),
                'state' => ucfirst($this->request->getPost('state')),
                'address' => $this->request->getPost('address'),
                'user_id' => $uid,
                'description' => $this->request->getPost('description'),
            ];
    
    
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('./uploads/found/', $newName);
                $data['image'] = 'uploads/found/' . $newName;                 
            } 
            $found->insert( $data);
            $id= $found->getInsertID();
            // echo "success";
            echo $this->match($id,$data['image']);
        } else {
            echo json_encode($validation->getErrors());
        }
    }
//used by web as API
    // public function match($i,$id){
    //     if($id!=null){
    //         $url = "http://localhost:8002/api?";
    //         $found= new Mfound();
    //         $missing = new Mmissing();
    //         // $mdata= $missing->where('status',null)->findAll();
    //         $mdata= $missing->findAll();
    //         foreach($mdata as $d){
    //             if(!empty($d['image'])){
    //                 // echo $d['image']."<br>";
    //                 $uri="img1=$id&img2=".$d['image'];
    //                 $result=file_get_contents($url.$uri);
    //                 $result=json_decode($result,1);
    //                 if($result['message']=="True"){
    //                     $m=new Mmissing;
    //                     $m->update($d['id'],['status'=>$i]);
    //                     // "redirect":"/detail/missing/'.$i.'"
    //                     return '{"success":true,"icon":"success","title":"Match Found","msg": "Check the missing list for more information"}';
    //                 }
    //             }
    //         }
    //     }
    //     return '{"success":true,"icon":"failed","title":"No Match Found","msg": "No matching data is found in our system"}';
    // }
// used by script
    // public function match($i,$id){
    //     if($id!=null){
    //         $found= new Mfound();
    //         $missing = new Mmissing();
    //         // $mdata= $missing->where('status',null)->findAll();
    //         $mdata= $missing->findAll();
    //         foreach($mdata as $d){
    //             if(!empty($d['image'])){
    //                 // echo $d['image']."<br>";
    //                 $cmd="python match.py $id ".$d['image'];
    //                  $result=exec($cmd);
    //                 if($result=="True"){
    //                     $m=new Mmissing;
    //                     $m->update($d['id'],['status'=>$i]);
    //                     // "redirect":"/detail/missing/'.$i.'"
    //                     return '{"success":true,"icon":"success","title":"Match Found","msg": "Check the missing list for more information"}';
    //                 }
    //             }
    //         }
    //     }
    //     return '{"success":true,"icon":"failed","title":"No Match Found","msg": "No matching data is found in our system"}';
    // }

    public function match($i,$id){
        // public function test(){
            // $id='1.jpg';$i=1;
        if($id!=null){
            $missing = new Mmissing();
            $mis ="";
            // $mdata= $missing->where('status',null)->findAll();
            $mdata= $missing->findAll();
            foreach($mdata as $d){
                if(!empty($d['image'])){
                    $mis.=" ".$d['image'];
                }
            }
            $cmd="python m.py $id ".$mis;
            $result=exec($cmd);
            if($result!="None"){
                $ret = $missing->where('image',$result)->first()['id'];
                $m=new Mmissing;
                $m->update($ret,['status'=>$i]);
                return '{"success":true,"icon":"success","title":"Match Found","msg": "Check the missing list for more information"}';
            }
        }
        return '{"success":true,"icon":"failed","title":"No Match Found","msg": "No matching data is found in our system"}';
    }

    public function missing_list(){
        $missing = new Mmissing();
        $data['nav_heading']="Missing List";
        $data['url']="missing";
        $data['missing']= $missing->findAll();
        return view('missing-list',$data);
    }

    public function found_list(){
        $found = new Mfound();
        $data['nav_heading']="Found List";
        $data['url']="found";
        $data['f']="true";
        $data['missing']= $found->findAll();
        return view('missing-list',$data);
    }

    public function missing_detail($id){
        $missing= new Mmissing();
        $data['candidate']=$missing->find($id);
        $found = $missing->join("found","missing.status = found.id")->where("missing.id",$id)->find();
        if(count($found)>0){
            $data['found'] =  $found[0];
        }
        // dd($data);
        
        return view('candidate/profile-overview',$data);
    }

    public function founding_detail($id){
        $found= new Mfound();
        $data['candidate']=$found->find($id);
        $found = $found->join("missing","missing.status = found.id")->where("missing.id",$id)->find();
        if(count($found)>0){
            $data['found'] =  $found[0];
        }
        // dd($data);
        
        return view('candidate/profile-overview',$data);
    }

    public function dashboard(){
        $missing = new Mmissing();
        $found = new Mfound();
       
        $data['miss_count']=count( $missing->findAll());
        $data['found_count']=count( $found->findAll());
        return view('admin/index',$data);
    }

    public function admin_missing(){
        if(session('admin')){
        $missing= new Mmissing();
        $data['nav_heading']="Missing List";
        $data['url']="missing/";
        $data['candidates']=$missing->findAll();
        
        return view('admin/candidate-list',$data); }
    }

    public function admin_found(){
        if(session('admin')){
        $found= new Mfound();
        $data['nav_heading']="Found List";
        $data['url']="found/";
        $data['candidates']=$found->findAll();
        return view('admin/candidate-list',$data); 
        }
    }

    
    public function delete_missing($id)
    {
        if(session('admin')){
        $missing = new Mmissing(); 

        $data= $missing->find($id);
        $this->deleteFile($data['image']) ;
        $missing->delete($id);
        }
        return redirect()->back();
        
    }

    public function delete_found($id)
    {
        if(session('admin')){
        $found = new Mfound(); 
        $missing = new Mmissing();
        $missing->set('status',null)->where('status',$id)->update();


        $data= $found->find($id);
        $this->deleteFile($data['image']) ;
        $found->delete($id);
        }
        return redirect()->back();
    }

    public function deleteFile($filePath)
    {
        if(session('admin')){
            helper('filesystem');
            if (file_exists($filePath)) {
                if (unlink($filePath)) {
                    return "File deleted successfully";
                } else {
                    return "Failed to delete the file";
                }
            } else {
                return "File doesn't exist";
            }
        }
    }

    public function search($phone,$city,$state)
    {
        $where=array();
        if($phone!="null"){
            $where["phone"]=$phone;
        }
        if($city!="null"){
            $where["city"]=$city;
        }
        if($state!="null"){
            $where["state"]=$state;
        }
        $missing = new Mmissing();
        $data['nav_heading']="Search List";
        $data['url']="missing";
        $data['missing']= $missing->where($where)->findAll();
        return view('missing-list',$data);

    }

    // public function test(){
    //     $data =  exec('python match.py');
    //     var_dump($data);
    // }
    

}
