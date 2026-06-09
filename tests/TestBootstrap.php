<?php declare(strict_types=1);

use Shopware\Core\TestBootstrapper;

try {
    $loader = (new TestBootstrapper())
        ->addCallingPlugin()
        ->addActivePlugins('AcademyPhpUnit')
        ->setForceInstallPlugins(true)
        ->bootstrap()
        ->getClassLoader();
} catch (Exception $exception) {
    throw new RuntimeException(
        'Could not bootstrap the AcademyPhpUnit test environment.',
        0,
        $exception
    );
}

$loader->addPsr4('AcademyPhpUnit\\Tests\\', __DIR__);
