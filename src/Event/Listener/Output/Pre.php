<?php

namespace Nails\Csp\Event\Listener\Output;

use Nails\Common\Events;
use Nails\Common\Events\Subscription;
use Nails\Common\Service\Output;
use Nails\Factory;

class Pre extends Subscription
{
    public function __construct()
    {
        $this
            ->setEvent(Events::OUTPUT_PRE)
            ->setNamespace(Events::getEventNamespace())
            ->setCallback([$this, 'execute']);
    }

    // --------------------------------------------------------------------------

    public function execute(): void
    {
        /** @var \Nails\Csp\Service\Csp $cspService */
        $cspService = Factory::service('Csp', \Nails\Csp\Constants::MODULE_SLUG);
        $csp        = $cspService->get();

        if ($csp) {
            /** @var Output $output */
            $output = Factory::service('Output');
            $output->setHeader('Content-Security-Policy: ' . $csp->compile());
        }
    }
}
