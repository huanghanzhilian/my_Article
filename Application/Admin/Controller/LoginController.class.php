<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function test(){
        echo C('URL_MODEL'),'<br/>';
        echo U('login/index', array('id'=>1), 'html', true),'<br/>';
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
        //print_r($ret);
        if(!$ret){
            return show(0,'该用户不存在');
        }

        if($ret['password'] != getMd5Password($password)) {
            return show(0,'密码错误');
        }

        D("Admin")->updateByAdminId($ret['admin_id'],array('lastlogintime'=>time()));

        session('adminUser', $ret);
        return show(1,'登录成功');
    }
    public function loginout() {
        session('adminUser', null);
        $this->redirect('/admin.php?c=login');
    }
    /*public function tets(){
        echo "http://localhost/my_Article/index.php?m=home&c=index&a=add";
        echo "你好";
    }*/
}