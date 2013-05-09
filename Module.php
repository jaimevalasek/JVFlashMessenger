<?php

namespace JVFlashMessenger;

class Module
{
	public function getServiceConfig() {
		return array(
			'factories' => array(
				'jv_flashmessenger' => function ($sm) {
					// Setando variáveis
					$viewModel = $sm->get('view_manager')->getViewModel();
					$controller = $sm->get('ControllerPluginManager');
					$flashMessenger = $controller->get('FlashMessenger');
					
					return $viewModel->setVariable('messages', $flashMessenger->getMessages());
				},
			)
		);
	}
}