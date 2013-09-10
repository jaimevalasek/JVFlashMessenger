<?php

namespace JVFlashMessenger\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class Message implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        // Setando variáveis
    	$viewModel = $serviceLocator->get('view_manager')->getViewModel();
    	$controller = $serviceLocator->get('ControllerPluginManager');
    	$flashMessenger = $controller->get('FlashMessenger');
    	
    	return $viewModel->setVariable('messages', $flashMessenger->getMessages());
    }
}