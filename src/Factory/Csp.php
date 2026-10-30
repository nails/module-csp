<?php

namespace Nails\Csp\Factory;

class Csp
{
    const QUOTED = [
        'none',
        'strict-dynamic',
        'self',
        'unsafe-eval',
        'unsafe-inline',
        'wasm-unsafe-eval',
    ];

    protected ?string $nonce = null;

    public function __construct(
        protected array $baseUri = [],
        protected array $blockAllMixedContent = [],
        protected array $childSrc = [],
        protected array $connectSrc = [],
        protected array $defaultSrc = [],
        protected array $fontSrc = [],
        protected array $formAction = [],
        protected array $frameAncestors = [],
        protected array $frameSrc = [],
        protected array $imgSrc = [],
        protected array $manifestSrc = [],
        protected array $mediaSrc = [],
        protected array $navigateTo = [],
        protected array $objectSrc = [],
        protected array $prefetchSrc = [],
        protected array $reportUri = [],
        protected array $sandbox = [],
        protected array $scriptSrc = [],
        protected array $scriptSrcAttr = [],
        protected array $styleSrc = [],
        protected array $styleSrcAttr = [],
        protected array $styleSrcElem = [],
        protected array $upgradeInsecureRequests = [],
        protected array $workerSrc = [],
    ) {
    }

    public function generateNonce(): self
    {
        $this->nonce = bin2hex(random_bytes(16));
        return $this;
    }

    public function setNonce(string $nonce): self
    {
        $this->nonce = $nonce;
        return $this;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    protected function setProperty(array &$property, array|string $value): self
    {
        if (is_array($value)) {
            $property = $value;
        } else {
            $property[] = $value;
        }

        return $this;
    }

    public function setBaseUri(array|string $value): self
    {
        return $this->setProperty($this->baseUri, $value);
    }

    public function getBaseUri(): array
    {
        return $this->baseUri;
    }

    public function setBlockAllMixedContent(array|string $value): self
    {
        return $this->setProperty($this->blockAllMixedContent, $value);
    }

    public function getBlockAllMixedContent(): array
    {
        return $this->blockAllMixedContent;
    }

    public function setChildSrc(array|string $value): self
    {
        return $this->setProperty($this->childSrc, $value);
    }

    public function getChildSrc(): array
    {
        return $this->childSrc;
    }

    public function setConnectSrc(array|string $value): self
    {
        return $this->setProperty($this->connectSrc, $value);
    }

    public function getConnectSrc(): array
    {
        return $this->connectSrc;
    }

    public function setDefaultSrc(array|string $value): self
    {
        return $this->setProperty($this->defaultSrc, $value);
    }

    public function getDefaultSrc(): array
    {
        return $this->defaultSrc;
    }

    public function setFontSrc(array|string $value): self
    {
        return $this->setProperty($this->fontSrc, $value);
    }

    public function getFontSrc(): array
    {
        return $this->fontSrc;
    }

    public function setFormAction(array|string $value): self
    {
        return $this->setProperty($this->formAction, $value);
    }

    public function getFormAction(): array
    {
        return $this->formAction;
    }

    public function setFrameAncestors(array|string $value): self
    {
        return $this->setProperty($this->frameAncestors, $value);
    }

    public function getFrameAncestors(): array
    {
        return $this->frameAncestors;
    }

    public function setFrameSrc(array|string $value): self
    {
        return $this->setProperty($this->frameSrc, $value);
    }

    public function getFrameSrc(): array
    {
        return $this->frameSrc;
    }

    public function setImgSrc(array|string $value): self
    {
        return $this->setProperty($this->imgSrc, $value);
    }

    public function getImgSrc(): array
    {
        return $this->imgSrc;
    }

    public function setManifestSrc(array|string $value): self
    {
        return $this->setProperty($this->manifestSrc, $value);
    }

    public function getManifestSrc(): array
    {
        return $this->manifestSrc;
    }

    public function setMediaSrc(array|string $value): self
    {
        return $this->setProperty($this->mediaSrc, $value);
    }

    public function getMediaSrc(): array
    {
        return $this->mediaSrc;
    }

    public function setNavigateTo(array|string $value): self
    {
        return $this->setProperty($this->navigateTo, $value);
    }

    public function getNavigateTo(): array
    {
        return $this->navigateTo;
    }

    public function setObjectSrc(array|string $value): self
    {
        return $this->setProperty($this->objectSrc, $value);
    }

    public function getObjectSrc(): array
    {
        return $this->objectSrc;
    }

    public function setPrefetchSrc(array|string $value): self
    {
        return $this->setProperty($this->prefetchSrc, $value);
    }

    public function getPrefetchSrc(): array
    {
        return $this->prefetchSrc;
    }

    public function setReportUri(array|string $value): self
    {
        return $this->setProperty($this->reportUri, $value);
    }

    public function getReportUri(): array
    {
        return $this->reportUri;
    }

    public function setSandbox(array|string $value): self
    {
        return $this->setProperty($this->sandbox, $value);
    }

    public function getSandbox(): array
    {
        return $this->sandbox;
    }

    public function setScriptSrc(array|string $value): self
    {
        return $this->setProperty($this->scriptSrc, $value);
    }

    public function getScriptSrc(): array
    {
        return $this->scriptSrc;
    }

    public function setScriptSrcAttr(array|string $value): self
    {
        return $this->setProperty($this->scriptSrcAttr, $value);
    }

    public function getScriptSrcAttr(): array
    {
        return $this->scriptSrcAttr;
    }

    public function setStyleSrc(array|string $value): self
    {
        return $this->setProperty($this->styleSrc, $value);
    }

    public function getStyleSrc(): array
    {
        return $this->styleSrc;
    }

    public function setStyleSrcAttr(array|string $value): self
    {
        return $this->setProperty($this->styleSrcAttr, $value);
    }

    public function getStyleSrcAttr(): array
    {
        return $this->styleSrcAttr;
    }

    public function setStyleSrcElem(array|string $value): self
    {
        return $this->setProperty($this->styleSrcElem, $value);
    }

    public function getStyleSrcElem(): array
    {
        return $this->styleSrcElem;
    }

    public function setUpgradeInsecureRequests(array|string $value): self
    {
        return $this->setProperty($this->upgradeInsecureRequests, $value);
    }

    public function getUpgradeInsecureRequests(): array
    {
        return $this->upgradeInsecureRequests;
    }

    public function setWorkerSrc(array|string $value): self
    {
        return $this->setProperty($this->workerSrc, $value);
    }

    public function getWorkerSrc(): array
    {
        return $this->workerSrc;
    }

    public function compile(): string
    {
        $directives = [
            'base-uri'                  => $this->baseUri,
            'block-all-mixed-content'   => $this->blockAllMixedContent,
            'child-src'                 => $this->childSrc,
            'connect-src'               => $this->connectSrc,
            'default-src'               => $this->defaultSrc,
            'font-src'                  => $this->fontSrc,
            'form-action'               => $this->formAction,
            'frame-ancestors'           => $this->frameAncestors,
            'frame-src'                 => $this->frameSrc,
            'img-src'                   => $this->imgSrc,
            'manifest-src'              => $this->manifestSrc,
            'media-src'                 => $this->mediaSrc,
            'navigate-to'               => $this->navigateTo,
            'object-src'                => $this->objectSrc,
            'prefetch-src'              => $this->prefetchSrc,
            'report-uri'                => $this->reportUri,
            'sandbox'                   => $this->sandbox,
            'script-src'                => $this->applyNonce($this->scriptSrc),
            'script-src-attr'           => $this->applyNonce($this->scriptSrcAttr),
            'style-src'                 => $this->applyNonce($this->styleSrc),
            'style-src-attr'            => $this->applyNonce($this->styleSrcAttr),
            'style-src-elem'            => $this->applyNonce($this->styleSrcElem),
            'upgrade-insecure-requests' => $this->upgradeInsecureRequests,
            'worker-src'                => $this->workerSrc,
        ];

        $out = [];
        foreach ($directives as $directive => $values) {
            if (!empty($values)) {
                $out[] = sprintf(
                    '%s %s;',
                    $directive,
                    implode(' ', array_map(
                        fn($value) => in_array($value, static::QUOTED) ? "'$value'" : $value,
                        $values
                    ))
                );
            }
        }
        return implode(' ', $out);
    }

    protected function applyNonce(array $values): array
    {
        $nonce = $this->getNonce();
        if ($nonce && !in_array('unsafe-inline', $values)) {
            $values = array_merge(
                $values,
                [
                    "'nonce-$nonce'",
                ]
            );
        }

        return $values;
    }

    public function __toString(): string
    {
        return $this->compile();
    }
}
