<?php

interface Component
{
    public function accept(Visitor $visitor): void;
}