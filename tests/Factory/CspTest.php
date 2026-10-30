<?php

namespace Tests\Csp\Factory;

use Nails\Csp\Factory\Csp;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nails\Csp\Factory\Csp
 */
class CspTest extends TestCase
{
    public function test_empty_policy_compiles_to_empty_string(): void
    {
        self::assertSame('', (new Csp())->compile());
    }

    public function test_directives_compile_in_order_and_skip_empty(): void
    {
        $csp = new Csp(
            defaultSrc: ['self'],
            baseUri: ['self'],
            imgSrc: ['*', 'data:'],
        );

        self::assertSame(
            "base-uri 'self'; default-src 'self'; img-src * data:;",
            $csp->compile()
        );
    }

    public function test_keywords_are_quoted_and_hosts_are_not(): void
    {
        $csp = new Csp(scriptSrc: ['self', 'strict-dynamic', 'unsafe-eval', 'wasm-unsafe-eval', 'none', 'example.com']);

        self::assertSame(
            "script-src 'self' 'strict-dynamic' 'unsafe-eval' 'wasm-unsafe-eval' 'none' example.com;",
            $csp->compile()
        );
    }

    public function test_setter_with_string_appends(): void
    {
        $csp = (new Csp(connectSrc: ['self']))
            ->setConnectSrc('api.example.com');

        self::assertSame(['self', 'api.example.com'], $csp->getConnectSrc());
    }

    public function test_setter_with_array_replaces(): void
    {
        $csp = (new Csp(connectSrc: ['self']))
            ->setConnectSrc(['api.example.com']);

        self::assertSame(['api.example.com'], $csp->getConnectSrc());
    }

    public function test_nonce_is_null_by_default(): void
    {
        self::assertNull((new Csp())->getNonce());
    }

    public function test_generate_nonce_creates_32_hex_characters(): void
    {
        $csp = (new Csp())->generateNonce();

        self::assertMatchesRegularExpression('/^[a-f0-9]{32}$/', (string) $csp->getNonce());
    }

    public function test_set_nonce_stores_the_nonce(): void
    {
        self::assertSame('abc123', (new Csp())->setNonce('abc123')->getNonce());
    }

    public function test_nonce_is_added_to_script_and_style_directives(): void
    {
        $csp = (new Csp(
            defaultSrc: ['self'],
            scriptSrc: ['self'],
            scriptSrcAttr: ['self'],
            styleSrc: ['self'],
            styleSrcAttr: ['self'],
            styleSrcElem: ['self'],
        ))->setNonce('abc123');

        self::assertSame(
            "default-src 'self'; script-src 'self' 'nonce-abc123'; script-src-attr 'self' 'nonce-abc123'; style-src 'self' 'nonce-abc123'; style-src-attr 'self' 'nonce-abc123'; style-src-elem 'self' 'nonce-abc123';",
            $csp->compile()
        );
    }

    public function test_nonce_is_not_added_when_unsafe_inline_is_present(): void
    {
        $csp = (new Csp(
            scriptSrc: ['self'],
            scriptSrcAttr: ['self'],
            styleSrc: ['self', 'unsafe-inline'],
            styleSrcAttr: ['self'],
            styleSrcElem: ['self'],
        ))->setNonce('abc123');

        self::assertStringContainsString("style-src 'self' 'unsafe-inline';", $csp->compile());
        self::assertStringContainsString("script-src 'self' 'nonce-abc123';", $csp->compile());
    }

    public function test_casting_to_string_compiles(): void
    {
        $csp = new Csp(defaultSrc: ['self']);

        self::assertSame($csp->compile(), (string) $csp);
    }
}
