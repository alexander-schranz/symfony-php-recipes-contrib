<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fpt_stripe', [
        'credentials' => [
            'publishable_key' => '%env(STRIPE_PUBLISHABLE_KEY)%',
            'secret_key' => '%env(STRIPE_SECRET_KEY)%',
        ],
        'webhook' => [
            'check_signature' => true,
            'signature_key' => '%env(STRIPE_WEBHOOK_SIGNATURE_KEY)%',
        ],
    ]);
};
