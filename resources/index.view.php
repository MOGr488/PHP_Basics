<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        .todo-item {
            display: flex !important;
            margin: 8px 0;
            border-radius: 0;
            background: #f7f7f7;


        }

        .todo-item.completed div {
            text-decoration: line-through;
        }

        .todo-item-remove {
            visibility: hidden;
        }

        .todo-item:hover .todo-item-remove {
            visibility: visible;
        }
    </style>

    <title>Tasks</title>
</head>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3">
                <div class="card-header p-3">
                    <form action="task/create" method="post">
                        <div class="input-group">
                            <input type="text" name="description" class="form-control" placeholder="مهمة جديدة..." required>
                            <button type="submit" class="btn btn-success">حفظ</button>
                        </div>
                    </form>
                </div>
                <div class="card-body p-3">
                    <ul class="nav nav-pills justify-content-center mb-3">
                        <li>
                            <a href="<?= home() ?>" class="nav-link">الكل</a>
                        </li>
                        <li>
                            <a href="?completed=0" class="nav-link">قيد التنفيذ</a>
                        </li>
                        <li>
                            <a href="?completed=1" class="nav-link">مكتملة</a>
                        </li>
                    </ul>
                    <?php foreach ($tasks as $task) : ?>
                        <div class="todo-item p-2 <?= !$task->completed ?: 'completed' ?>">
                            <div class="p-1">
                                <a href="task/update?id=<?= $task->id ?>&completed=<?= $task->completed ? '0' : '1' ?>">
                                    <i class="bi fs-5 <?= $task->completed ? 'bi-check-square' : 'bi-clock text-secondary' ?>"></i>
                                </a>
                            </div>
                            <div class="flex-fill m-auto p-2">
                                <?= $task->description ?>

                            </div>
                            <div class="mb-2">
                                <a href="task/delete?id=<?= $task->id ?>" class="todo-item-remove">
                                    <i class="bi bi-trash text-danger fs-4"></i>
                                </a>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>

<body>

</body>

</html>