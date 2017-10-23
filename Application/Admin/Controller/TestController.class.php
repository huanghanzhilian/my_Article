<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class TestController extends CommonController {
    public function index(){
        //print_r($_SESSION['adminUser']);
        //print_r($_COOKIE);
        /*$news = D('News')->maxcount();
        print_r($news);
        $newscount = D('News')->getNewsCount(array('status'=>1));
        $positionCount = D('Position')->getCount(array('status'=>1));
        $adminCount = D("Admin")->getLastLoginUsers();

        $this->assign('news', $news);
        $this->assign('newscount', $newscount);
        $this->assign('positioncount', $positionCount);
        $this->assign('admincount', $adminCount);*/
        $res=M('admin');
        //print_r($res->select());
        dump($res->where('admin_id=1')->select());
        $this->assign('news', "hello");
        $this->display();
    }

}