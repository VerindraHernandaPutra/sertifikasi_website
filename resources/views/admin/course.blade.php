<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <br><br><br>
    
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <a class="btn btn-primary" href="{{  route('course.create') }}" role="button">Link</a>
            <div class="col-lg-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">course_name</th>
                            <th scope="col">course_hour</th>
                            <th scope="col">course_price</th>
                            <th scope="col">course_type</th>
                            <th scope="col">description</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($course as $course)
                            <tr>
                                <th scope="row"> {{ $course->id }} </th>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->course_hour }}</td>
                                <td>{{ $course->course_price }}</td>
                                <td>{{ $course->course_type }}</td>
                                <td>{{ $course->description }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('course.edit', $course) }}">
                                    <button class="text-white" style="background-color: indigo">
                                        Edit
                                    </button>
                                    </a>
                                    <span class="mx-2">   |   </span>
                                    <!-- Form untuk Delete -->
                                    <form action="{{ route('course.destroy', $course) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-white" style="background-color: red" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    


</body>
</html>