<?php

class BitrateReader
{
  public function read($filename, $sourceCodec) {
    $newFilename = substr($filename, 0, -3);
    return $newFilename .= $sourceCodec;
  }

  public function convert($buffer, $destinationCodec) {
    $newFilename = substr($buffer, 0, -3);
    return $newFilename .= $destinationCodec->codec;
  }
}