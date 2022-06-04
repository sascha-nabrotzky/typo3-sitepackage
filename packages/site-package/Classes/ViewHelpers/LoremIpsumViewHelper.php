<?php
namespace TYPO3\CMS\Fluid\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class LoremIpsumViewHelper extends AbstractViewHelper
{
  public static function renderStatic(
  array $arguments,
  \Closure $renderChildrenClosure,
  RenderingContextInterface $renderingContext
  ): string
  {
  $length = 100;
  $dummytext = 'Lorem ipsum dolor sit amet. ';
  $repeat = ceil($length / strlen($dummytext));
  $content = substr(str_repeat($dummytext . ' ', $repeat), 0, $length) . '.';
  return $content;
  }
}