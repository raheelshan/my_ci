<?php
	/*	This helper loads view	*/	
	if (!function_exists('partial')) {	
		function partial($name, $data, $loop = FALSE)
		{
			$name = get_instance()->router->directory .	'/' . $name;

			if (strpos('/', $name) === FALSE)
			{
				$name = get_instance()->router->directory .	'/' . $name;
			}else{
				$parts = explode('/', $name);
				$last = count($parts) - 1;
				$parts[$last] = (strpos('_', $parts[$last]) === 0) ?
				$parts[$last] : '_' . $parts[$last];
				$name = implode('/', $parts);
			}	
			$output = "";
			if ($loop && is_array($data))
			{
				foreach ($data as $row)
				{
					$output .= get_instance()->load->view($name,array( 'row' => $row ), TRUE);
				}
			}else{
				$output = get_instance()->load->view($name, $data,	TRUE);
			}
			return $output;
		}
	}
	


