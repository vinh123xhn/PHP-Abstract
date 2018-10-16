<?php
require __DIR__ . '/class/Book.php';

$data = new Book();
$books = $data->showBook();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <!--        header-->
        <h1>Library Manager</h1>
    </div>
    <hr>

    <div class="col-md-12">
        <!--        menu-->
        <!--        <nav class="navbar navbar-inverse navbar-fixed-top">-->
        <a href="#">Home</a>
        <a href="#">Book</a>
        <a href="#">Reader</a>
        <a href="#">Borrow books</a>
        <a href="#">Author</a>
        <a href="#">Categories</a>
        <!--        </nav>-->
    </div>
    <hr>
    <div class="col-md-12">
        <!--        list-->
        <h2 style="color: chocolate">Categories List</h2>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Category Name</th>
                <th>Category ID</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) : ?>

                <tr>
                    <td><?php echo $book['id'] ?></td>
                    <td><?php echo $book['book_name'] ?></td>
                    <td><?php echo $book['author'] ?></td>
                    <td><?php echo $book['category_name']?></td>
                    <td>
                        <a href="../book/html_book/from_updata.php?id=<?php echo $book['id'] ?>">Update</a>
                        <a href="../book/function_book/delete.php?id=<?php echo $book['id'] ?>">Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post">
            <a href="html_book/from_add.php">Add New Category</a>
        </form>
        <hr>
    </div>

    <div class="col-md-12">
        <!--        footer-->
        <p style="margin-left: 940px">@ 2017 Library Inc.</p>
    </div>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

