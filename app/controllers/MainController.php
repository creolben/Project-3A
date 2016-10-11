
<?php

class MainController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
public function index()
{

	return View::make('home');
}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function paragraphs()
	{
		if (isset($_POST['num']) AND !empty($_POST['num']) AND is_numeric($_POST['num']) AND $_POST['num'] > 0){
			$number = $_POST['num'];

		} else {
				$number = 3;

		}

		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($number + 1);
		return View::make('p_generator', compact('paragraphs','number'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function user_gen()
	{
		/*
		  validate number is not empty, is a number and greater than 1
		*/
		if (isset($_GET['num']) AND !empty($_GET['num']) AND is_numeric($_GET['num']) AND $_GET['num'] > 0){
			  $number = $_GET['num'];

		} else {
				$number = 3;

			}
		// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();
		return View::make('u_generator', compact('faker','number'));
	}


}
