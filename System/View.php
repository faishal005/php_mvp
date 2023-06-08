<?php

class View
{
	public function render($viewPath, $layout = NULL)
	{
		if ($layout === NULL) {
			$this->view = $viewPath;
			require('views/layout.php');
		}
		else if ($layout === FALSE) {
			require('views/' . $viewPath . '.php');			
		}
		else {
			$this->view = $viewPath;
			require("views/$layout.php");
		}
	}
}
