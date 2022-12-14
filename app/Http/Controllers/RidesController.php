<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Support\RideCalculator;
use Brick\Money\Money;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RidesController extends Controller
{
	protected array $modes = ['bus'];
	
	public function index()
	{
		//
	}
	
	public function create()
	{
		return view('rides.create', [
			'modes' => array_combine($this->modes, $this->modes),
		]);
	}
	
	public function store(Request $request)
	{
		$request->validate([
			'mode' => ['required', Rule::in($this->modes)],
			'passengers' => ['required', 'int', 'min:1', 'max:10'],
		]);
		
		$calculator = new RideCalculator($request->integer('passengers'));
		
		$ride = Ride::create([
			'mode' => $request->input('mode'),
			'passengers' => $request->integer('passengers'),
			'cents' => $calculator->costByBus()->getMinorAmount()->toInt(),
		]);
		
		return redirect()->route('rides.show', $ride);
	}
	
	public function show(Ride $ride)
	{
		return view('rides.show', [
			'ride' => $ride,
			'dollars' => Money::ofMinor($ride->cents, 'USD')->formatTo('en_US'),
		]);
	}
	
	public function edit(Ride $ride)
	{
		//
	}
	
	public function update(Request $request, Ride $ride)
	{
		//
	}
	
	public function destroy(Ride $ride)
	{
		//
	}
}
