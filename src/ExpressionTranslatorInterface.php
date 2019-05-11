<?php

  namespace Xparse\ExpressionTranslator;

  /**
   * @author Ivan Shcherbak <alotofall@gmail.com>
   */
  interface ExpressionTranslatorInterface {

    /**
     * Translate expression to xpath
     * For example you can use css
     */
    public function convertToXpath(string $expression) : string;

  }