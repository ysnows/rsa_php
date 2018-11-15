<?php
/**
 * Created by PhpStorm.
 * User: ysnows
 * Date: 2018/11/7
 * Time: 下午2:21
 */

require 'Rsa.php';

$rsa = new Rsa();

echo $rsaEncrypt = $rsa::privEncrypt("Hello");
//$pubEncrypt='vYRsYjySGBh0U36ZSr6BqtAY7AHjR/17fWtEaDhnzrhh/ItfwKrSZxxu3fOjrzpJhp8EiYA5+nBRc4bA/8AOvA3v4c1U+ZjoF/9YmZ5oSu+mAvTezaDFXummgqDT9oyzs+4PuOPmX/aeQnUHwDlpwpfdA8eXABTUjHsgj46dqbY=';
//echo $rsa::publicDecrypt($rsaEncrypt);