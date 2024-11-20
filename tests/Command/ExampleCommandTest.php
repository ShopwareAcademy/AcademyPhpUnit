<?php declare(strict_types=1);

namespace AcademyPhpUnit\Tests\Command;

use AcademyPhpUnit\Command\ExampleCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ExampleCommandTest extends TestCase
{
    public function testDescriptionIsCorrect(): void
    {
        $application = new Application();
        $command = new ExampleCommand();
        $application->add($command);

        $commandTester = new CommandTester($application->find('swag-commands:example'));
        $commandTester->execute([]);

        $this->assertSame('Does something very special.', $command->getDescription());
    }
}