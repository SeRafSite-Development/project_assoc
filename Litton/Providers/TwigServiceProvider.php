<?php

namespace Litton\Providers;

use Symfony\Component\Routing\Generator\UrlGenerator;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_SimpleFunction;

class TwigServiceProvider extends ServiceProvider
{
	public function provide(array $options = []) {
		$loader = new Twig_Loader_Filesystem($this->config['dir']);
		$twig = new Twig_Environment($loader, array('cashe' => $this->config['cashe'], 'auto_reload' => true));

		// echo '<pre>';
		// print_r($options['urlGenerator']);
		// echo false != $options['urlGenerator'] instanceof UrlGenerator;
		// die();

		if(!isset($options['urlGenerator']) || (false == $options['urlGenerator'] instanceof UrlGenerator)) {
			throw new \Exception('Twig provider must have urlGenerator');
		}

		$functionUrlGenerator = new Twig_SimpleFunction('url', function($name, $parameters = []) use ($options) {
			return $options['urlGenerator']->generate($name, $parameters);
		});

		$functionAsset = new Twig_SimpleFunction('asset', function($fileName) {
			return '/assets/'.$fileName;
		});

		$twig->addFunction($functionUrlGenerator);
		$twig->addFunction($functionAsset);

		return $twig;
	}
}