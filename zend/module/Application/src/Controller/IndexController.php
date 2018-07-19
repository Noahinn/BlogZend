<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;
use Application\Model\PostTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    // Add this property:
    private $table;

    // Add this constructor:
    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel([
            'posts' => $this->table->fetchAll(),
        ]);
    }
     public function homeAction()
    {
        return new ViewModel();
    }
     public function postAction()
    {
        return new ViewModel();
    }

    public function getPostAction(){

    }
}
