<?php 
namespace App\EventListener;
// src/App/EventListener/AuthenticationFailureListener.php

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
Class AuthenticationFailureListener{
	
	/**
	 * @param AuthenticationFailureEvent $event
	 */
	public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
	{
	    $data = [
	        'status'  => '401 Unauthorized',
	        'message' => 'Bad credentials, please verify that your username/password are correctly set',
	    ];

	    $response = new JWTAuthenticationFailureResponse($data);

	    $event->setResponse($response);
	}

}