<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXvtazob\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXvtazob/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXvtazob.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXvtazob\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXvtazob\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xvtazob',
    'container.build_id' => '3e722502',
    'container.build_time' => 1515891446,
));