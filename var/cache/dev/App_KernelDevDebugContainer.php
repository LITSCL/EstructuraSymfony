<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJgyw0gc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJgyw0gc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJgyw0gc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJgyw0gc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJgyw0gc\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jgyw0gc',
    'container.build_id' => '53ca0ae2',
    'container.build_time' => 1680069031,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJgyw0gc');
