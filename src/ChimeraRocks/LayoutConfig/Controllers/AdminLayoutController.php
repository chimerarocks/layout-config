<?php

namespace ChimeraRocks\LayoutConfig\Controllers;

use ChimeraRocks\LayoutConfig\Models\Layout;
use Illuminate\Http\Request;

class AdminPermisionController extends Controller
{
	private $layout;

	public function __construct(Layout $layout)
	{
		$this->layout = $layout;
	}

	public function index()
	{
		$layouts = $this->layout->all();

		return view('appconfig::layouts.index', compact('layouts'));
	}

	public function create()
	{
		return view('appconfig::layouts.create');
	}

	public function store(Request $request)
	{
		$layout = $this->layout->create([
			'name' => $request->get('name')
		]);
		$file = $request->file('layout');

		$zip = new \ZipArchive();

		if ($zip->open($file->getRealPath()) == true) {
			$zip->extractTo(storage_path("app/layouts/$layout->dirname"));
			$zip->close();
		}

		return redirect()->route('admin.layouts.index');
	}
}