<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DropzoneController extends Controller
{
	public function save($request $Request)
	{
		if ($request->hasFile('file')) {
			$image = $request->file('file');
			$imageName = time() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('uploads'), $imageName);

			return response()->json(['success' => 'Image uploaded successfully']);
		}

		return response()->json(['error' => 'Image not uploaded'], 400);
	}
}
