<?php

namespace Codesquad\Events;

use Phalcon\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;

/**
 * Handles not-found controller/actions.
 *
 * @package Codesquad\Events
 */
class NotFoundPlugin extends Plugin
{
	
	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event      $event
	 * @param Dispatcher $dispatcher
	 * @param \Exception $exception
	 *
	 * @return boolean
	 * @throws \Phalcon\Exception
	 */
	public function beforeException(Event $event, Dispatcher $dispatcher, \Exception $exception)
	{
		switch ($exception->getCode())
		{
			case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
			case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
				
				$dispatcher->forward([
					'controller' => 'index',
					'action'     => 'notFound'
				]);
				
				return false;
		}
		
		return true;
	}
	
}