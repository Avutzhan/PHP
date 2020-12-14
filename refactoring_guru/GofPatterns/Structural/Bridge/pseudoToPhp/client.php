<?php

include_once("Classes/Implementation/Tv.php");
include_once("Classes/Implementation/Radio.php");
include_once("Classes/Abstraction/Remote.php");
include_once("Classes/Abstraction/AdvancedRemote.php");

$tv = new Tv();

if ($tv->isEnabled()) {
  echo "true";
} else {
  echo "false";
}

echo "\n";

echo $tv->getVolume();

echo "\n \n";

$remote = new Remote($tv);

$remote->togglePower();

if ($tv->isEnabled()) {
  echo "true";
} else {
  echo "false";
}

$remote->volumeUp();
$remote->volumeUp();
$remote->volumeDown();

echo "\n";

echo $tv->getVolume();

echo "\n \n";

$radio = new Radio();

if ($radio->isEnabled()) {
  echo "true";
} else {
  echo "false";
}

echo "\n";

echo $radio->getVolume();

$advancedRemote = new AdvancedRemote($radio);

$advancedRemote->togglePower();

echo "\n \n";

if ($radio->isEnabled()) {
  echo "true";
} else {
  echo "false";
}

$advancedRemote->volumeUp();
$advancedRemote->volumeUp();
$advancedRemote->volumeDown();

echo "\n";

echo $radio->getVolume();

$advancedRemote->mute();

echo "\n";

echo $radio->getVolume();