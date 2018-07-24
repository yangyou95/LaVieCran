<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload Files</title>
  <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap-grid.css" rel="stylesheet">

</head>
<body>

    <div class="container">
      <div class="row">
        <form action=" {{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="file" name="file">

          <input type="submit" class="btn btn-info">

        </form>

      </div>
    </div>



</body>
</html>
