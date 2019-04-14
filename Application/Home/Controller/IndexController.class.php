<?php
namespace Home\Controller;
use http\Header;
use mysql_xdevapi\Exception;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        if(!checkrobot()){
            $this->display('err404');
            die();
        }
        $min_id = ar_min();
        $max_id = ar_max();
        $lanmu = M('lanmu')->select();
        $list24 = array();
        for($i=0;$i<24;$i++){
            $randid=rand($min_id,$max_id);
            $s = M('article')->join('ci on article.ciid = ci.id')->where('article.id='.$randid)->field('*,article.id')->find();
            array_push($list24,$s);
        }
        $list1 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 1')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list2 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 2')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list3 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 3')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list4 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 4')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list5 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 5')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list6 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 6')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list7 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 7')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list8 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 8')->field('*,article.id')->order('article.id')->limit(7)->select();
        $list9 = M('article')->join('ci on article.ciid = ci.id')->where('topid = 9')->field('*,article.id')->order('article.id')->limit(7)->select();
        $this->assign('z1',$list1);
        $this->assign('z2',$list2);
        $this->assign('z3',$list3);
        $this->assign('z4',$list4);
        $this->assign('z5',$list5);
        $this->assign('z6',$list6);
        $this->assign('z7',$list7);
        $this->assign('z8',$list8);
        $this->assign('z9',$list9);
        $this->assign('t24',$list24);
        $this->assign('lanmus',$lanmu);
        $this->assign('title',C('title'));
        $this->assign('keywords',C('keywords'));
        $this->assign('description',C('description'));
        $this->assign('webdomian',C('webdomian'));
        $this->display();
    }

    public function lists(){
        if(!checkrobot()){
            $this->display('err404');
            die();
        }
        if (isset($_GET['id'])){
            $lanmu = M('lanmu')->select();
            $lanmu_names = M('lanmu')->where('id = %d',$_GET['id'])->find();
            $info  = M('article')->join('ci on ci.id = article.id')->where('topid=%d',$_GET['id'])->field('article.id,ci.tagname,article.creattime')->order('article.id desc')->limit(35)->select();
            $r1 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->order('rand()')->limit(10)->select();
            $r2 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname,article.img')->order('rand()')->limit(6)->select();
            $r3 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->order('rand()')->limit(10)->select();
            $this->assign('r1',$r1);
            $this->assign('r2',$r2);
            $this->assign('r3',$r3);
            $this->assign('info',$info);
            $this->assign('lanmu_names',$lanmu_names);
            $this->assign('lanmus',$lanmu);
            $this->assign('title',$lanmu_names['name'].'-'.C('title'));
            $this->assign('keywords',C('keywords'));
            $this->assign('description',C('description'));
            $this->assign('webdomian',C('webdomian'));
            $this->display();
        }else{
            header('Location: /');
        }

    }

    public function page(){
        if(!checkrobot()){
            $this->display('err404');
            die();
        }
        if (isset($_GET['id'])){
            $lanmu = M('lanmu')->select();
            $info  = M('article')->join('ci on ci.id = article.ciid')->join('lanmu on lanmu.id = article.topid')->field('*,lanmu.id as lid')->where('article.id=%d',$_GET['id'])->find();
            if (!isset($info['creattime']) || empty($info['creattime'])){
                $data['creattime'] = time();
                $data['neirong'] = mkcontent();
                $data['xiangguan1'] = mkint();
                $data['xiangguan2'] = mkint();
                M('article')->where('id=%d',$_GET['id'])->save($data);
                $info  = M('article')->join('ci on ci.id = article.ciid')->join('lanmu on lanmu.id = article.topid')->field('*,lanmu.id as lid')->where('article.id=%d',$_GET['id'])->find();
            }
            $xiangguan1 = showt($info['xiangguan1'],true);
            $xiangguan2 = showt($info['xiangguan2']);
            $r1 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->order('rand()')->limit(10)->select();
            $r2 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname,article.img')->order('rand()')->limit(6)->select();
            $r3 = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->order('rand()')->limit(10)->select();

            $nextpage = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->where('article.id>%d',$_GET['id'])->limit(1)->find();
            $spage = M('article')->join('ci on ci.id = article.ciid')->field('article.id,ci.tagname')->where('article.id<%d',$_GET['id'])->order('article.id desc')->limit(1)->find();
            $this->assign('xiangguan1',$xiangguan1);
            $this->assign('xiangguan2',$xiangguan2);
            $this->assign('np',$nextpage);
            $this->assign('sp',$spage);
            $this->assign('r1',$r1);
            $this->assign('r2',$r2);
            $this->assign('r3',$r3);
            $this->assign('info',$info);
            $this->assign('lanmus',$lanmu);
            $this->assign('title',$info['tagname'].'-'.C('title'));
            $this->assign('keywords',$info['tagname']);
            $this->assign('description',C('description'));
            $this->assign('webdomian',C('webdomian'));
            $this->display();
        }else{
            header('Location: /');
        }
    }

    public function ci(){
        set_time_limit(0);
        if (isset($_POST['ci']) && !empty($_POST['ci'])){
            $ci_arr = explode("\n",$_POST['ci']);
            if(count($ci_arr) > 10000){
                $this->show('超出限制,单次最多添加一万个词');die();
            }else{
                foreach ($ci_arr as $v){
                    if (!empty($v)){
                        $s = M('ci')->where("tagname='%s'",$v)->find();
                        if ($s == false){
                            $data['tagname'] = $v;
                            $res = M('ci')->data($data)->add();
                            if ($res){
                                $data['ciid'] = $res;
                                $lanmuids = $this->lanmuids();
                                $data['topid'] = $lanmuids[rand(0,count($lanmuids)-1)];
                                $data['img'] = 'upload/img/'.randstr(rand(8,16)).'.jpg';
                                M('article')->data($data)->add();

                            }
                        }
                    }
                }
                $this->show('导入完毕');
            }
        }else{
            $this->display();
        }
    }

    function lanmuids(){
        if(!checkrobot()){
            $this->display('err404');
            die();
        }
        $res = M('lanmu')->field('id')->select();
        $arr = array();
        foreach ($res as $v){
            array_push($arr,$v['id']);
        }
        return $arr;
    }

    public function randimg(){
        $Verify =     new \Think\Verify();
        $Verify->useImgBg = true;
        $Verify->entry();
    }


    public function err404(){
        $this->display();
    }

    public function sitemap(){
        if(!checkrobot()){
            $this->display('err404');
            die();
        }
        header("Content-type:text/xml");
        $id_min = ar_min();
        $id_max = ar_max();
        $domian = empty($_SERVER['HTTP_X_CLIENT_PROTO']) ? 'http://'.$_SERVER['HTTP_HOST'] : $_SERVER['HTTP_X_CLIENT_PROTO'] . ':'.$_SERVER['HTTP_HOST'];
        $s = '<?xml version="1.0" encoding="utf-8"?>'."\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
        for($i=0;$i<200;$i++){
            $randint = rand($id_min,$id_max);
            $res = M('article')->field('id')->where('id='.$randint)->find();
            $s = $s .'<url><loc>'.$domian.'/'.'page-'.$res['id'].'.html'.'</loc><priority>0.8</priority><lastmod>'.date('Y-m-d').'</lastmod><changefreq>daily</changefreq></url>'."\n";
        }
        $s = $s . '</urlset>';
        echo $s;
        die();
    }

    public function robots(){
        header("Content-type:text/plain");
        echo 'User-Agent: *'."\n\n".'Sitemap:'.C('webdomian').'/sitemap.xml';die();
    }

}