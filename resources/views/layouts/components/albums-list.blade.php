<section id="albums-list">
    @empty($albums)
    <div class="album-list-item">
        List not availble at this time, please check back soon.
    </div>
    @endempty
    @foreach($albums as $album)
    <div class="album-list-item mb-6">
        <div class="album-list-heading"> {{$loop->iteration}}. {{$album['title']['label']}}</div>
        <div class="album-image"></div>
        <div class="album-info">
            <p>Title: {{$album['im:name']['label']}}</p>
            {{-- <p><a href="{{$album['im:artist']['attributes']['href']}}">{{$album['im:artist']['label']}}</a></p> --}}
            <p>Artist: {{$album['im:artist']['label']}}</p>
            <p>Genre: {{$album['category']['attributes']['label']}}</p>
            <p></p>
        </div>
    </div>
    @endforeach
</section>