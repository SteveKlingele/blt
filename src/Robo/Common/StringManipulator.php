<?php

namespace Acquia\Blt\Robo\Common;

/**
 *
 */
class StringManipulator {

  /**
   * Trims the last $num_lines lines from end of a text string.
   *
   * @param string $text
   *   A string of text.
   * @param int $num_lines
   *   The number of lines to trim from the end of the text.
   *
   * @return string
   *   The trimmed text.
   */
  protected function trimEndingLines($text, $num_lines) {
    return implode("\n",
      array_slice(explode("\n", $text), 0, sizeof($text) - $num_lines));
  }

  /**
   * Trims the last $num_lines lines from beginning of a text string.
   *
   * @param string $text
   *   A string of text.
   * @param int $num_lines
   *   The number of lines to trim from beginning of text.
   *
   * @return string
   *   The trimmed text.
   */
  protected function trimStartingLines($text, $num_lines) {
    return implode("\n", array_slice(explode("\n", $text), $num_lines));
  }

}
