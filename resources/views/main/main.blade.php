<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Home Page - Backend1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" >

</head>
<body>
<header class="header">//заголовок черная полоска
    <div class="title">Backend1</div>
    <a href="~/"><div class="main_link">Home</div></a>
</header>

<div class="content">
    <h2> Calc Service Demonstration  </h2>
    <ul>
        <li><a href="~/calc/model_calc"> Using Model Calc </a></li>
        <li><a href="~/calc/viewData_calc">Using ViewData Calc (merged with ViewBag in laravel)</a></li>
        <li><a href="~/calc/view_composer">Using View composer(Service Injection) Calc</a></li>
    </ul>
</div>
<footer>© 2022 - Backend1</footer>

<style>
    .header{
        background-color:black;
        font-size: 14px;
        color: #a6a6a6;
        width: auto;
    }
    .title{
        font-size: 16px;
    }
</style>
</body>
</html>
