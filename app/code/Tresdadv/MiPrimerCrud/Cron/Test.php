<?php

namespace Tresdadv\MiPrimerCrud\Cron;

class Test
{

	public function execute()
	{

		$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/crontest.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('Funciona');

		return $this;

	}
}