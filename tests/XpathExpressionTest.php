<?php

namespace Xparse\ExpressionTranslator\Test;


use PHPUnit\Framework\TestCase;
use Xparse\ExpressionTranslator\XpathExpression;

/**
 * @author Ivan Shcherbak <alotofall@gmail.com>
 */
class XpathExpressionTest extends TestCase
{

    final public function testAssertSameIO(): void
    {
        self::assertSame(
            'custom-expression',
            (new XpathExpression())->convertToXpath('custom-expression')
        );
    }
}
