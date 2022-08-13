<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('exercise_html_purifier', [
        'default' => [
            'Core.Encoding' => 'UTF-8',
        ],
    ]);
};
