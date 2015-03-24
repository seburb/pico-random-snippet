<?php
header("Cache-Control: no-cache, must-revalidate"); // Dirty fix to force the browser to update on
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // every page load. Uncomment if cache is needed.

class Random_Snippet {

	public function before_render(&$twig_vars, &$twig)
	{
	       $f_snippets = file ("plugins/pico-random-snippet/snippets.txt");
	       $twig_vars['random_snippet'] = $f_snippets[array_rand ($f_snippets)];
	}
	
}

?>
