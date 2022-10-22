<?php
declare(strict_types=1);

namespace App;

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Elephox\Miniphox\Attributes\Get;
use Elephox\Miniphox\Miniphox;

#[Get]
function index(): string {
	return "Hello, World!";
}

#[Get('/greet/[name]')]
function greet(string $name): string {
	return "Hello, $name!";
}

Miniphox::build()
	->mount('/api', [index(...), greet(...)])
	->run();
