<?php

interface Downloader
{
    public function download(string $url): string;
}