<?php

namespace Xparse\ExpressionTranslator;

/**
 * @author Ivan Shcherbak <dev@funivan.com> 02.12.15
 */
class XpathExpression implements ExpressionTranslatorInterface
{

    final public function convertToXpath(string $expression): string
    {
        return $expression;
    }

}