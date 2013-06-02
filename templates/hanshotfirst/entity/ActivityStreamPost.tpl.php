<?php
    $object = $vars['object'];
    if ($subObject = $object->getObject()) echo $subObject->draw();