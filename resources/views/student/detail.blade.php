<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <h2>Student Detail</h2>
        <div class="form">
            <table class="table">
                <tr>
                    <th>NIS</th>
                    <td>{{ $student->nis }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $student->nama }}</td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td>{{ $student->kelas->nama }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $student->tgl_lahir }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $student->alamat }}</td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
