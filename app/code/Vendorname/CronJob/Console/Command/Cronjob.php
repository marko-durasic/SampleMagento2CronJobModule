<?php

namespace Vendorname\CronJob\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\Console\Cli;
use \Psr\Log\LoggerInterface;

class CronJob extends Command
{
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('vendorname:pushorder');
;
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $item = $this->itemFactory->create();
//        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
//        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
//        $item->setIsObjectNew(true);
//        $item->save();
          $this->logger->info('Cron Job Command Works');
          return Cli::RETURN_SUCCESS;


    }
}
