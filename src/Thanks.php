<?php declare(strict_types = 1);

namespace Symfony\Thanks;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Thanks implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io): void
    {
    }
}
