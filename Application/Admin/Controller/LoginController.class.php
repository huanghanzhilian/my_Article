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
    		return show(0,'名不能为空');
    	}
    	if(!trim($password)){
    		return show(0,'密码是空的');
    	}
    	/*print_r($_POST);*/

        $ret = D('Admin')->getAdminByUsername($username);
        if(!$ret){
            return show(0,'该用户不存在');
        }
    }
    public function tets(){
        echo "http://localhost/my_Article/index.php?m=home&c=index&a=add";
    }
}