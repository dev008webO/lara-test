<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ForgotPasswordController
 * @package App\Http\Controllers
 */
class ForgotPasswordController extends Controller
{
	public function returnLink(Request $request) {
		$linkToNative = 'ionsuper://deep_demo';

		$response = [
			'status' => 200,
			'link' => $linkToNative
		];

		return response()->json($response, 200);
	}
}
