<?php
/**
 * Created by PhpStorm.
 * User: skogs
 * Date: 20.05.2015
 * Time: 2:59
 */

namespace MainWebSite;
use Exception;

class MusicController extends BaseController{

    public function index()
    {
        try {
            $articles = $this->model->get_data();
            $this->view->set('articles', $articles);
            $this->view->set('header', 'Что играем');

            $this->view->set('page_title', 'Music');

            $this->view->output('MusicView.php');

        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }
}