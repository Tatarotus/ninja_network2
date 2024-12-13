<x-layout>
    <ul>
        @forelse ($ninjas as $ninja)
            <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 70">
                <li>
                    <div>
                        <h3>{{ $ninja->name }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </li>
            </x-card>

        @empty
            <p> Well, it looks like the ninjas list is empty, try adding a ninja.</p>
        @endforelse
    </ul>
    {{ $ninjas->links() }}
</x-layout>
