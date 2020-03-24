<?php

namespace app\core;

class View {
	public function generate($title='Главная', $content_view, $template_view, $data = null)
	{   
		ob_start();
		require 'app/views/'.$content_view;
		$content = ob_get_contents();
		require 'app/views/'.$template_view;
	}
}