<?php

namespace Vendorname\CronJob\Cron;
use \Psr\Log\LoggerInterface;

class CronJob {

    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {
        $this->logger->info('Cron Job Cron Works');
    }

}
