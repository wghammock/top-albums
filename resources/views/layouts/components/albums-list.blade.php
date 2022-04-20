<table class="table table-inverse">
    <thead>
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
    </thead>
    <tbody>
        @foreach($albums as $data)
        <tr id="album{{$data->id}}">
            <td>{{$data->name}}</td>
            <td>{{$data->artist}}</td>
        </tr>
        @endforeach
    </tbody>
</table>