<?php

namespace HectorJ\SafePHPPsalmPlugin;

use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

final class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $api, object $config = null): void
    {
        $api->addStubFile(__DIR__.'/stubs/CoreGenericFunctions.phpstub');
    }
}