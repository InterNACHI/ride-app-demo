<x-layout>
	
	{{-- Style if you'd like --}}

	<h2>
		Request a Ride
	</h2>

	{{ Aire::open()->route('rides.store') }}

	{{ Aire::select($modes, 'mode', 'How do you want to get there?')->required() }}

	{{ Aire::number('passengers', 'Number of passengers')->defaultValue(1)->min(1)->max(10) }}

	{{ Aire::submit('Continue') }}

	{{ Aire::close() }}

</x-layout>
