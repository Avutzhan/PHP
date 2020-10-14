<?php

//1 example

//можно сделать проверку чисел прям в скобках
//function add(float $one,float $two)
function add($one, $two)
{
    if ( ! is_float($one) || ! is_float($two)) {
        throw new InvalidArgumentException('Provide a float');
    }

    return $one * $two;
}

try {
    echo add(2.0, []);
} catch (InvalidArgumentException $e) {
    echo 'Oh well';
}

//2 example

class Video
{

}

class User
{
    public function download(Video $video)
    {
        if (! $this->subscribed()) {
            throw new Exception("You must be subscribed");
        }
    }

    public function subscribed()
    {
        return false;
    }
}

//try {
//    (new User)->download(new Video);
//} catch() {
//
//}

//3 exception

