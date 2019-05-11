<?php

namespace Xparse\ExpressionTranslator\Test;


use Xparse\ExpressionTranslator\XpathExpression;

class XpathExpressionTest extends \PHPUnit_Framework_TestCase
{

    final public function testAssertSameIO(): void
    {
        self::assertSame(
            'custom-expression',
            (new XpathExpression())->convertToXpath('custom-expression')
        );
    }
}
