<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="Enter Title" name="title" value="{{ old('title') }}">
        </div>
        <select name="tags[]" multiple>
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="javascript">JavaScript</option>
            <option value="jquery">Jquery</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>

<div>
    <table>
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Desc</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $key => $todo)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ implode(',', $todo->desc) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>