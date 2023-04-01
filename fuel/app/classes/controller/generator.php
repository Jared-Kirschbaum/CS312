<?php
class Controller_Generator extends Controller
{
	public function action_index()
	{
		$size = Input::get('size', 10);
		$colors = Input::get('colors', 5);

		$size_validation = Validation::forge('size_validation');
		$size_validation->add('size', 'Rows and columns size')->add_rule('numeric_min', 1)
			->add_rule('numeric_max', 26);

		$colors_validation = Validation::forge('colors_validation');
		$colors_validation->add('colors', 'Number of colors')->add_rule('numeric_min', 1)
			->add_rule('numeric_max', 10);
		
		$valid_size = false;
		$valid_colors = false;

		if ($size_validation->run(intval($size))) {
			$valid_size = true;
		}
		else {
			// validation failed
		}

		if ($colors_validation->run(intval($colors))) {
			$valid_colors = true;
		}
		else {
			// validation failed
		}

		return Response::forge(View::forge('generator/index', array(
			'size' => $size,
			'colors' => $colors,
			'valid_size' => $valid_size,
			'valid_colors' => $valid_colors
		)));
	}
}