<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD9KgNEx\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD9KgNEx/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerD9KgNEx.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerD9KgNEx\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerD9KgNEx\App_KernelProdContainer([
    'container.build_hash' => 'D9KgNEx',
    'container.build_id' => '1f7a9d7d',
    'container.build_time' => 1591385981,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD9KgNEx');
