<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Title сайта</title>
    <link href="/assets/template/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- бургер меню -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Наш сайт</a>
        </div>

        <!-- навигация -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/about/">О нас</a></li>
                <li><a href="/portfolio/">Портфолио</a></li>
                <li><a href="/contacts/">Контакты</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">

    <!-- Контент модуль -->
    <div class="jumbotron">
        <div class="container">
            <?php include 'app/views/'.$content_view; ?>
        </div>
    </div>

    <hr>

    <footer>
        <p>© 2015 Company, Inc.</p>
    </footer>
</div> <!-- /container -->


<!-- Инклюдим onload после 
================================================== -->
<!-- Вносим в конец для быстрого рендера -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/template/js/bootstrap.min.js"></script>



</body>

</html>