<?php
class Controller_Generator extends Controller
{
	  public function action_home() {
            return Response::forge(View::forge('generator/home'));
        }

        public function action_about() {

            return Response::forge(View::forge('generator/about'));
        }

	public function action_index()
	{
		$size = Input::get('size', 10);
		$colors = Input::get('colors', 5);

		$size_validation = Validation::forge('size_validation');
		$size_validation->add('size', 'Rows and columns size')->add_rule('required')
			->add_rule('numeric_min', 1)
			->add_rule('numeric_max', 26);
		$size_validation->set_message('required', 'Size required.');
		$size_validation->set_message('numeric_min', 'Size must be at least 1.');
		$size_validation->set_message('numeric_max', 'Size must be less than 27.');

		$colors_validation = Validation::forge('colors_validation');
		$colors_validation->add('colors', 'Number of colors')->add_rule('required')
			->add_rule('numeric_min', 1)
			->add_rule('numeric_max', 10);
		$colors_validation->set_message('required', 'Colors required.');
		$colors_validation->set_message('numeric_min', 'Colors must be at least 1.');
		$colors_validation->set_message('numeric_max', 'Colors must be less than 11.');
		
		$valid_size = false;
		$valid_colors = false;

		$size_error_placeholder = '';
		$colors_error_placeholder = '';

		$size_error_message = '';
		$colors_error_message = '';
		
		if ($size_validation->run(array('size'=>$size))) {
			$valid_size = true;
		}
		else {
			$size_error_message = $size_validation->error('size')->get_message();
		}

		if ($colors_validation->run(array('colors'=>$colors))) {
			$valid_colors = true;
		}
		else {
			$colors_error_message =  $colors_validation->error('colors')->get_message();
		}

		return Response::forge(View::forge('generator/index', array(
			'size' => $size,
			'colors' => $colors,
			'valid_size' => $valid_size,
			'valid_colors' => $valid_colors,
			'size_error_placeholder' => $size_error_placeholder,
			'colors_error_placeholder' => $colors_error_placeholder,
			'size_error_message' => $size_error_message,
			'colors_error_message' => $colors_error_message
		)));
	}
}
