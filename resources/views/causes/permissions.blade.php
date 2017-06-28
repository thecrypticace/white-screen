@extends("app")

@section("content")
<div class="content">
    <strong>It might be a permissions problem with one of these directories:</strong>
    <ul>
        <li>bootstrap/cache</li>
        <li>storage/</li>
    </ul>

    <em>Verify that they are writable by the process running PHP (likely the webserver or fpm)</em>
</div>
@endsection
