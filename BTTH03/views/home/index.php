<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main class="container mt-3">
        <h3 class="text-center text-uppercase mb-3 text-primary">Danh sách bài báo</h3>
        <div class="row">
            <div class="col-md-3">
                <a href="?controller=Article&action=add" class="btn btn-success">Thêm mới</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Content</th>
                        <th scope="col">category_id</th>
                        <th scope="col">member_id</th>
                        <th scope="col">Image_id</th>
                        <th scope="col">published</th>
                        <th scope="col">created</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <?php
                foreach ($articles as $item) {
                ?>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"><?= $item->getId() ?></th>
                            <td><?= $item->getTitle() ?></td>
                            <td><?= $item->getSummary() ?></td>
                            <td><?= $item->getContent() ?></td>
                            <td><?= $item->getCategoryId() ?></td>
                            <td><?= $item->getMemberId() ?></td>
                            <td><?= $item->getImageId() ?></td>
                            <td><?= $item->isPublished() ?></td>
                            <td><?= $item->getCreated() ?></td>
                            <td>
                                <a href="?controller=Article&action=edit&id=<?= $item->getId() ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="?controller=Article&action=delete&id=<?= $item->getId() ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>