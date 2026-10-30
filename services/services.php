<?php

use Nails\Csp\Factory;
use Nails\Csp\Service;

return [
    'services'  => [
        'Csp' => function (): Service\Csp {
            if (class_exists('\App\Csp\Service\Csp')) {
                return new \App\Csp\Service\Csp();
            } else {
                return new Service\Csp();
            }
        },
    ],
    'factories' => [
        'Csp' => function (
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
        ): Factory\Csp {
            if (class_exists('\App\Csp\Factory\Csp')) {
                return new \App\Csp\Factory\Csp(
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
            } else {
                return new Factory\Csp(
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
            }
        },
    ],
];
