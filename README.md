JVFlashMessenger 1.0
================
Create By: Jaime Marcelo Valasek

Pais: Brasil

Set the flash to send a messenger with the message variable for layout

Solution for sending flash messages for the layout and need not be editing posts in all views.

Installation
-----
Download this module into the vendor folder of your project.

Enable the module in the file application.config.php. Add the module JVFlashMessenger.

Usage
-----
Add the following code inside the action you want to show messages

```php
$this->getServiceLocator()->get('jv_flashmessenger');
```

Add the following code in layout.
Note: This code was developed thinking you are using the bootstrap.

```php
<?php if(isset($messages[0])): 
    $class = key((array) $messages[0]);
    $message = current((array) $messages[0]);
    ?>
    <div class="alert alert-<?php echo $class?>">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
<?php endif; ?>
```

Set the flash messenger in controller / action

Messages success
-----
```php
$this->flashMessenger()->addMessage(array('success' => 'Message Text!'));
```

Messages info
-----
```php
$this->flashMessenger()->addMessage(array('info' => 'Message Text!'));
```

Messages error
-----
```php
$this->flashMessenger()->addMessage(array('error' => 'Message Text!'));
```

Tutorials
-----
http://www.youtube.com/zf2tutoriais

http://www.zf2.com.br/tutoriais