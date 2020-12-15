<?php

include_once("vendor/VideoConverter/VideoFile.php");
include_once("vendor/VideoConverter/CodecFactory.php");
include_once("vendor/VideoConverter/MPEG4CompressionCodec.php");
include_once("vendor/VideoConverter/OggCompressionCodec.php");
include_once("vendor/VideoConverter/BitrateReader.php");
include_once("vendor/VideoConverter/AudioMixer.php");
include_once("vendor/VideoConverter/File.php");

class VideoConverter 
{
  public function convert($filename, $format)
  {
    $file = new VideoFile($filename);
    $sourceCodec = CodecFactory::extract($file);

    if ($format == "mp4") {
      $destinationCodec = new MPEG4CompressionCodec();
    } else {
      $destinationCodec = new OggCompressionCodec();
    }

    $buffer = BitrateReader::read($filename, $sourceCodec);
    $result = BitrateReader::convert($buffer, $destinationCodec);   
    $result = (new AudioMixer())->fix($result);
    var_dump($result);
    return new File($result);

  }

}
