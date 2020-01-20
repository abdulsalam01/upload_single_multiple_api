<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>

    <h1>Single File</h1>
    <form action="{{ route('upload') }}" enctype="multipart/form-data" role="form" method="POST">
        <input type="file" name="fileUpload"/>

        <input type="submit"/>
    </form>

    <h1>Multiple File</h1>
    <form action="{{ route('upload2') }}" enctype="multipart/form-data" role="form" method="POST">
        <input type="file" name="filesUpload[]" multiple/>

        <input type="submit"/>
    </form>
</body>
</html>
