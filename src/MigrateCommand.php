<?php

namespace Danilocgsilva\PayloadPanaceaAdmin\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected static $defaultName = 'padmin:migrate';
    protected static $defaultDescription = 'Migrate the database';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("oi");

        return Command::SUCCESS;
    }
}
