
<?php

class MainController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (isset($_GET['num'])){
			$number = $_GET['num'];

		} else {
				$number = 5;

			}


		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($number + 1);
		$name = "Ben";
		return View::make('welcome', compact('paragraphs','number'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function about()
	{
		if (isset($_GET['num'])){
			$number = $_GET['num'];

		} else {
				$number = 5;

			}
		// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();
		return View::make('second_page',compact('faker','number'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
