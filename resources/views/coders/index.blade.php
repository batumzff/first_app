<x-layout>
    <h2>Currently Available Coders</h2>
    
   
    <ul>
    @foreach($coders as $coder)
        <li>
        <p>{{ $coder['name']}}</p>
        <a href="/coders/{{$coder['id']}}">View Details</a>
        </li>
    @endforeach
    </ul>
</x-layout>