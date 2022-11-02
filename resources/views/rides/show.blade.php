<x-layout>

	{{-- Style if you'd like --}}

    <h2>
        Your Ride
    </h2>

    <dl>
        <dt class="font-bold">
            Mode
        </dt>
        <dd>
            {{ $ride->mode }}
        </dd>
        <dt class="font-bold">
            Number of Passengers
        </dt>
        <dd>
            {{ $ride->passengers }}
        </dd>
        <dt class="font-bold">
            Fee
        </dt>
        <dd>
            {{ $dollars }}
        </dd>
    </dl>

</x-layout>
