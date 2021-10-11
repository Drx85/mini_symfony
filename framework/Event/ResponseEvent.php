<?php

namespace Framework\Event;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

class ResponseEvent extends Event
{
	protected Response $response;
	
	public function __construct(response $response)
	{
		$this->response = $response;
	}
	
	public function getresponse(): response
	{
		return $this->response;
	}
}