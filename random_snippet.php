<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past


/**
 * Example hooks for a Pico plugin
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 */
class Random_Snippet {

	public function before_render(&$twig_vars, &$twig)
	{
	       $f_snippets = file ("plugins/pico_random_header/snippets.txt");
	       $twig_vars['random_snippet'] = $f_snippets[array_rand ($f_snippets)];
	}
	
}

?>
