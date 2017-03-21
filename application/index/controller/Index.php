<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index($name)
    {
		$this->assign('name', $name);
        return $this->fetch();
    }

	public function set($name=null) 
	{
		$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$ip = gethostbyname("$hostname");
		return $ip;
	}
}
