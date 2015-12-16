<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Picture;
use App\Category;
use View;
use Request;
use Input;

class PicturesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pictures = Picture::all();
		return View::make('picture.index', [
			'pictures' => $pictures
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$newPicture = Picture::create(['name' => 'pictures', 'image' => 'no_image.png', 'latitude' => 21.0289428, 'longitude' => 105.8512668, 'user_id' => 1, 'category_id' => 1]);
		$newPicture->user_id = 1;
		$newPicture->category_id = 1;
		$newPicture->save();
		dd('ok');
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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  
	 * @return Response
	 */
	public function newUpload()
	{
		return View::make('picture.upload');
	}

}
