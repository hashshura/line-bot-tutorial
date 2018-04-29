<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function teach($query, $userId){
	
	include 'post.php';
	if ($userId != 'Ue4c6fc819a0e5f6e36035e6d3088f1f5'){
		$result = new TextMessageBuilder('Access denied.');
	} else {
		
		if ($query == null){
			$result = new TextMessageBuilder("Teach Me Words\n\n/teach [word] [answer*]
											\n\n*if not included means delete [word]");
		} else {

			$querySplit = explode(' ', $query, 2);
			$word = strtolower($querySplit[0]);
			$answer = $querySplit[1];
			
			postData('words/' . $word, $answer);
			
			if ($answer == null){
				$result = new TextMessageBuilder('Answer for "' . $word . '" deleted.');
			} else {
				$result = new TextMessageBuilder('Teach succeeded, try speaking "' . $word . '".');
			}
			
		}
	}
	
	return $result;
	
}
