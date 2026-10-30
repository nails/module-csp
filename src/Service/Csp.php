<?php

namespace Nails\Csp\Service;

use Nails\Csp\Constants;
use Nails\Factory;

class Csp
{
    protected ?\Nails\Csp\Factory\Csp $csp = null;

    public function load(\Nails\Csp\Factory\Csp $csp): self
    {
        $this->csp = $csp;
        return $this;
    }

    public function unload(): self
    {
        $this->csp = null;
        return $this;
    }

    public function get(): ?\Nails\Csp\Factory\Csp
    {
        return $this->csp;
    }

    public function make(
        array $baseUri = [],
        array $blockAllMixedContent = [],
        array $childSrc = [],
        array $connectSrc = [],
        array $defaultSrc = [],
        array $fontSrc = [],
        array $formAction = [],
        array $frameAncestors = [],
        array $frameSrc = [],
        array $imgSrc = [],
        array $manifestSrc = [],
        array $mediaSrc = [],
        array $navigateTo = [],
        array $objectSrc = [],
        array $prefetchSrc = [],
        array $reportUri = [],
        array $sandbox = [],
        array $scriptSrc = [],
        array $scriptSrcAttr = [],
        array $styleSrc = [],
        array $styleSrcAttr = [],
        array $styleSrcElem = [],
        array $upgradeInsecureRequests = [],
        array $workerSrc = [],
    ): \Nails\Csp\Factory\Csp {

        /** @var \Nails\Csp\Factory\Csp $csp */
        $csp = Factory::factory(
            'Csp',
            Constants::MODULE_SLUG,
            $baseUri,
            $blockAllMixedContent,
            $childSrc,
            $connectSrc,
            $defaultSrc,
            $fontSrc,
            $formAction,
            $frameAncestors,
            $frameSrc,
            $imgSrc,
            $manifestSrc,
            $mediaSrc,
            $navigateTo,
            $objectSrc,
            $prefetchSrc,
            $reportUri,
            $sandbox,
            $scriptSrc,
            $scriptSrcAttr,
            $styleSrc,
            $styleSrcAttr,
            $styleSrcElem,
            $upgradeInsecureRequests,
            $workerSrc,
        );

        return $csp;
    }
}
