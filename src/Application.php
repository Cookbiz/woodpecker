<?php
namespace Cookbiz\Woodpecker;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Cookbiz\Woodpecker\Command;

class Application extends \Symfony\Component\Console\Application
{
    /**
     * Class Constructor.
     *
     * Initialize the Woodpecker console application.
     *
     * @param string $version The Application Version
     */
    public function __construct($version = '0.1')
    {
        parent::__construct('Woodpecker, a crawler.', $version);

        // Phinx\Coomand を見てみよう
        $this->addCommands([
            new Command\Helloworld(),
            // new Command\Create(),
            // new Command\Migrate(),
            // new Command\Rollback(),
            // new Command\Status(),
            // new Command\Breakpoint(),
            // new Command\Test(),
            // new Command\SeedCreate(),
            // new Command\SeedRun(),
        ]);
    }

    /**
     * Runs the current application.
     *
     * @param InputInterface  $input  An Input instance
     * @param OutputInterface $output An Output instance
     * @return integer 0 if everything went fine, or an error code
     */
    public function doRun(InputInterface $input, OutputInterface $output)
    {
        // always show the version information except when the user invokes the help
        // command as that already does it
//        if (false === $input->hasParameterOption(['--help', '-h']) && null !== $input->getFirstArgument()) {
//            $output->writeln($this->getLongVersion());
//            $output->writeln('');
//        }


        return parent::doRun($input, $output);
    }
}
