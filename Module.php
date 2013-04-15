<?php 

namespace JVFlashMessenger;

class Module
{
    public function getServiceConfig() {
        return array(
	        'factories' => array(
				'jv_flashmessenger' => function ($sm) {
	    			$viewModel = $sm->get('view_manager');
	    			$controller = $sm->get('ControllerPluginManager');
	    		
	    			// Configurando variáveis
	    			$flashMessenger = $controller->get('FlashMessenger');
	    		
	    			$viewModel = $viewModel->getViewModel();
	    			$messages = $flashMessenger->getMessages();
	    		
	    			// Setando variáveis
	    			$viewModel->setVariable('messages', $messages);
	    		
	    			return $viewModel;
	    		},
			)
		);
	}
}
