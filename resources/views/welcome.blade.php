@extends("app")

@section("content")
<div class="content">
    <div class="title m-b-md">
        White screen?
    </div>
    <div class="subtitle m-b-md">
        Try this:
    </div>

    <div class="links">
        <a class="cause" href="/causes/permissions">Directory Permissions</a>
        <a class="cause" href="/causes/env">Missing .env file</a>
        <a class="cause" href="/causes/app-key">No APP_KEY</a>
        <a class="cause" href="/causes/display-errors">display_errors?</a>
        <a class="cause" href="/causes/php">PHP Version</a>
        <a class="cause" href="/causes/composer">Run Composer!</a>
    </div>
</div>
@endsection
