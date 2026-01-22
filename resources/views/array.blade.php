<x-layout>
    <ul class="cards">
        @foreach($array as $item)
            <li class="cards__item">
                <img src="{{ Vite::asset('resources/images/'.$item["path"]) }}" alt="Жорик" >
                <p>{{ $item['title'] }}</p>
                <p>{{ $item['price'] }}</p>
            </li>
        @endforeach
    </ul>
</x-layout>
