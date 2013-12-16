# php-url-shortener

Simple PHP URL shortener, as used on http://uup.nu

# database

| id  | link          				   | ip        | date  |
| ----|:------------------------------------------:| ---------:|------:|
| 1   | http://www.youtube.com/watch?v=oiKj0Z_Xnjc | 127.0.0.1 | now   |
| 2   | http://www.youtube.com/watch?v=3O1_3zBUKM8 | 127.0.0.1 | or    |
| 3   | http://www.youtube.com/watch?v=RbtPXFlZlHg | 127.0.0.1 | never |

## usage

	<?php
		$url 		= 'http://uup.nu';
		$datas 		= 'link='.'http://www.youtube.com/watch?v=v0aRb4rAq0I';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/2008111317 Firefox/3.0.4");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10); 

		$response = curl_exec($ch);
		curl_close($ch);
		echo $response;
	?>

## dependencies

- [NotORM] for database communication.

## license

This script is available under the GPL license.

## author

* [Eray Arslan](http://erayarslan.com)

