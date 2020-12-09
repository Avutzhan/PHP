<?php

function clientCode(Creator $creator)
{
  echo "Client: i'm not aware of the creator's class, but it still works:\n" . $creator->someOperation();
}