<x-layout>
    <h2>Currently Available Coders</h2>
    
    <ul>
    @foreach($coders as $coder)
        <li>
          <x-card href="/coders/{{ $coder['id'] }}" :highlight="$coder['skill'] > 70">
            <h3>{{$coder['name']}}</h3>
          </x-card>
        </li>
    @endforeach
    </ul>
</x-layout>