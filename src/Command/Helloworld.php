<?php
namespace Cookbiz\Woodpecker\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Helloworld extends Command
{
    protected function configure()
    {
        $this->setName('helloworld');
        $this->setDescription('Say "hello world"');

        $this->addOption('your-name', 'N', InputOption::VALUE_REQUIRED, '');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $name = $input->getOption('your-name');
        $output->writeln(sprintf('Hello world %s!!', $name), $output::OUTPUT_PLAIN);
        $output->writeln(sprintf('Hello world %s!!', $name), $output::OUTPUT_NORMAL);
        $output->writeln(sprintf('Hello world %s!!', $name), $output::OUTPUT_RAW);

        return parent::execute($input, $output);
    }
}
