<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 游戏中心首页
 * User: MikeMei
 * Date: 2017/4/7
 * Time: 17:09
 */
class Game extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('common/footer.php');
        $this->load->view('game/game_index.php');
        $this->load->view('common/header.php');
    }

}