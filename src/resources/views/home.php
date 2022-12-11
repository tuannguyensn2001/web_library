<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=assets("css/index.css")?>">
</head>
<body>

    <div>hello world</div>
<div><?=$name?></div>
    <form action="/post" method="post">
        <input type="text" name="name">
        <button>submit</button>
    </form>
    <div>
        <img src="<?=assets('picture.jpeg')?>" alt="">
    </div>
</body>
</html>