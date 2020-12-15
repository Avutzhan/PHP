<?php

class CodecFactory
{
  public function extract($file)
  {
    return substr($file->filename, -3);;
  }
}