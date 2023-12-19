<?php

declare(strict_types=1);

namespace Nanaweb\Myhello;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('app:hello')
            ->addArgument('you', InputArgument::REQUIRED, 'your name')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf('Hello %s!', $input->getArgument('you')));

        return self::SUCCESS;
    }
}
