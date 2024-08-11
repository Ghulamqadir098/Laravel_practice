<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('./assets/style.css') }}>

</head>

<body>

<div class="contact_list">
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $item)
                <tr>
                    <td>{{ $item->full_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
<a class="input_field" href="{{route('contact_edit',$item->id)}}">Edit</a>

<form action="{{route('contact_delete',$item->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="input_field" type="submit">Delete</button>
</form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
</body>

</html>
