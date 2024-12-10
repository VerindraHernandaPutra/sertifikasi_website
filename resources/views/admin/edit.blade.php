<!DOCTYPE html>
<html>
<head>
    <title>Input Data Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Input Data Course</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('course.update', $course) }}" 33 method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">course_name</label>
                        <input type="text" name="course_name" class="form-control" value="{{ old('course_name') ?? $course->course_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">course_hour</label>
                        <input type="text" name="course_hour" class="form-control" value="{{ old('course_hour') ?? $course->course_hour }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">course_price</label>
                        <input type="text" name="course_price" class="form-control" value="{{ old('course_price') ?? $course->course_price }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description') ?? $course->description }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>