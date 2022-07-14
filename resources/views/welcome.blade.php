<!DOCTYPE html>
<html>
<head>
</head>
<body>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <h1> Add a new provider module </h1>
    <form action="{{ route('providerModules.store') }}" method="POST">
        @csrf

        <label> Name of Provider: </label>
        <input type="text" name="providerName" id="providerName" required><br>
        <label>URL: </label>
        <input type="text" name="url" id="url" required><br>
        <button type="submit">Add module</button>
    </form>

    <hr>

    <h1>List of provider modules: </h1><br>
    @foreach($modules as $module)
    <ul>
        <li>Provider Name: {{ $module->providerName }} Url: {{ $module->url }} <br>
            <form action="{{ route('providerModules.destroy' , $module)}}" method="POST">
                @method('delete')
                {{ csrf_field() }}
                <button type="submit">Delete</button>
            </form>
            <form action="{{ route('providerModules.update', $module->id) }}" method="POST">
                @csrf
                @method('put')
        
                <label> Name of Provider: </label>
                <input type="text" name="providerName" value="{{ $module->providerName }}" id="providerName" required><br>
                <label>URL: </label>
                <input type="text" name="url" id="url" value="{{ $module->url }}" required><br>
                <button type="submit">Update module</button>
            </form>
        </li>
    </ul>
    @endforeach

</body>
</html>