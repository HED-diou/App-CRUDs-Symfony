<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE6d73rY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE6d73rY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE6d73rY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE6d73rY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerE6d73rY\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'E6d73rY',
    'container.build_id' => 'ba5f3419',
    'container.build_time' => 1618054388,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE6d73rY');
