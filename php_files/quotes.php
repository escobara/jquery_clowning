<?php 
	
	$num = rand(1, 5);
	switch($num) {
		case 1:
			$quote = "Be yourself. Above all, let who you are, what you are, what you believe, shine through every sentence you write, every piece you finish.";
			$author = 'John Jakes';
			break;
		case 2:
			$quote = "Try not to become a man of success, but rather try to become a man of value.";
			$author = 'Albert Einstein';
			break;
		case 3:
			$quote = "Success consists of going from failure to failure without a loss of enthusiasm";
			$author = 'Winston Churchill';
			break;
		case 4:
			$quote = 'The starting point of all achievement is desire';
			$author = 'Napoleon Hill';
			break;
		case 5:
			$quote = 'Try not to become a man of success, but rather try to become of man of value';
			$author = 'Albert Einstein';
			break;			
	}
	echo $quote;
	echo $author;

?>