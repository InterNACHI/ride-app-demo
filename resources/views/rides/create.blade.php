<x-layout>
	
	{{-- Style as you see fit --}}
	
	<h2>
		Request a Ride
	</h2>
	
	{{ Aire::open()->route('rides.store') }}
	
	{{ Aire::select($modes, 'mode', 'How do you want to get there?')->required() }}
	
	{{ Aire::number('passengers', 'Number of passengers')->defaultValue(1)->min(1)->max(10) }}
	
	<button type="submit">
		Continue
	</button>
	
	{{ Aire::close() }}
	
</x-layout>
