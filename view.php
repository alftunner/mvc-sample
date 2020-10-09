<!--Шаблон гостевой книги-->
<html>
    <head>
        <title>Книга жалоб и предложений</title>
    </head>
    <body>
        <h1>Тут вы можете пожаловаться: </h1>
        <form action="controller.php" method="post">
            Ваше имя: <input type="text" name="new[name]"><br />
            Комментарий: <br />
            <textarea name="new[text]" cols="60" rows="5"></textarea><br />
            <input type="submit" name="doAdd" value="Добавить!">
        </form>
        <h2>Список жалоб: </h2>
        <?php
            foreach ($book as $id => $e) { ?>
            Имя человека: <?=$e['name']?><br />
            Его комментарий:<br /> <?= $e['text'] ?> <hr />
        <?php } ?>
    </body>
</html>
