<?php
function handleHeadings( $text ) {
  for ( $i = 6; $i >= 1; --$i ) {
    $h = str_repeat( '=', $i );
    // Trim non-newline whitespace from headings
    $text = preg_replace( "/^(?:$h)[ \\t]*(.+?)[ \\t]*(?:$h)\\s*$/m", "<h$i>\\1</h$i>", $text );
  }
    return $text;
}
?>
