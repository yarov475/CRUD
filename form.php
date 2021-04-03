
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>CRUD!</title>
</head>
<body>

<?php
$auth = false;
if ($auth):?>

<h1 class="text-danger text-center mb-2" >Hello, CRUD </h1>



<form action="index.php"   method="post" class="container">
    <div class="mb-3">
        <div class="form-floating">
            <input name="comment"
                   class="form-control" placeholder="оставь коммент" >

            <label >Комменты</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary center">Submit</button>


</form>
<?php else:?>
    <h1 class="text-danger text-center mb-2" >Hello, CRUD </h1>
    <h2 class="text-danger text-center mb-2" >Кто ты, кто ты а кто ты?</h2>;

<?php endif; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>