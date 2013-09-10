<?php

namespace JVBase;

return array(
    'service_manager' => array(
        'factories' => array(
            'jv_flashmessenger' => 'JVFlashMessenger\Factory\Message',
        )
    )
);