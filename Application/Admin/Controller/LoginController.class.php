<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function check(){
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	if(!trim($username)){
    		return show(0,'用户名不能为空');
    	}
    	if(!trim($password)){
    		return show(0,'密码不能为空');
    	}
    	/*print_r($_POST);*/

        $ret = D('Admin')->getAdminByUsername($username);

        print_r($ret);
    }
    public function tets(){
        echo "http://localhost/my_Article/index.php?m=home&c=index&a=add";
    }
}