<?php declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class GenZPHPTest extends TestCase
{
    public static function returnTrue(): array
    {
        return [
            [no_cap],
            [NO_CAP],
        ];
    }

    #[Test]
    #[DataProvider('returnTrue')]
    public function it_returns_true(bool $input): void
    {
        $this->assertTrue($input);
    }
    public static function returnFalse(): array
    {
        return [
            [cap],
            [CAP],
        ];
    }

    #[Test]
    #[DataProvider('returnFalse')]
    public function it_returns_false(bool $input): void
    {
        $this->assertFalse($input);
    }
}
