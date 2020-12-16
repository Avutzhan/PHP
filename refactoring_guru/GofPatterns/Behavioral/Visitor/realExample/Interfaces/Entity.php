<?php

interface Entity
{
    public function accept(Visitor $visitor): string;
}