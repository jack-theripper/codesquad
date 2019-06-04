<?php

namespace Codesquad\Modules\Frontend\Controllers;

/**
 * Class IndexController
 *
 * @package Codesquad\Modules\Frontend\Controllers
 */
class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }
	
	/**
	 * Action if the route is not found.
	 */
	public function notFoundAction()
	{
		$this->response->setStatusCode(404, 'Not Found');
	}
	
}

