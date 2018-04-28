<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 4/27/18
 * Time: 7:37 PM
 */

function createDir($dir)
{
	return (!mkdir("./$dir", 0777) && !is_dir($dir));
}
//function createDir($dir)
//{
//	$absPath = __DIR__ . 'functions.php/' . $dir;
//	if (!file_exists($absPath) || !is_dir($absPath)) {
//		mkdir($absPath);
//	}
//}