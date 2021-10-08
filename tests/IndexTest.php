<?php

use Framework\Simplex;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

class IndexTest extends TestCase
{
	protected Simplex $framework;
	
	protected function setUp(): void
	{
		$routes = require __DIR__ . '/../src/routes.php';
		$urlMatcher = new UrlMatcher($routes, new RequestContext());
		$controllerResolver = new ControllerResolver();
		$argumentResolver = new ArgumentResolver();
		$this->framework = new Simplex($urlMatcher, $controllerResolver, $argumentResolver);
	}
	
	public function testHello()
	{
		$request = Request::create('/hello/test');
		$response = $this->framework->handle($request);
		$this->assertEquals('<h1>Hello test</h1>', $response->getContent());
	}
	
	public function testHelloByDefault()
	{
		$request = Request::create('/hello');
		$response = $this->framework->handle($request);
		$this->assertEquals('<h1>Hello World</h1>', $response->getContent());
	}
	
	public function testBye()
	{
		$request = Request::create('/bye');
		$response = $this->framework->handle($request);
		$this->assertEquals('<h1>Goodbye !</h1>', $response->getContent());
	}
	
	public function testAbout()
	{
		$request = Request::create('/a-propos');
		$response = $this->framework->handle($request);
		$this->assertEquals('<h1>A propos</h1>', $response->getContent());
	}
}