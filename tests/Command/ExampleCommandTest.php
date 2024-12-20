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
        $command = new ExampleCommand();
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);
        $commandTester->assertCommandIsSuccessful();

        $this->assertSame('Add a short description for your command', $command->getDescription());
    }
}
