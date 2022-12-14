
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> PassUsingModel - Backend1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" />
</head>

<body>
<header>//заголовок черная полоска
    <div class="header">Backend1</div>
    <a href="~/"><div class="main_link">Home</div></a>
</header>

<div class="content">
    <h2> PassUsingModel </h2>
    @foreach($model as $model_)
    <div class="calc">

        //НЕ ВИДИТ ДАННЫЕ С КОНТРОЛЛЕРА НЕ ВИДИТ $object_model

        <div>Rand Value First :  {{$model_['first_number'] }}   </div> <br />

        <div>Add : </div><br />
        {{$object_model->first_number}} + {{$object_model->second_number }} = {{$object_model->addition}} <br />
        <div>Sub : </div><br />
        {{$object_model->first_number}} - {{$object_model->second_number }} = {{$object_model->subtraction}} <br />
        <div>Mult: </div><br />
        {{$object_model->first_number}} * {{$object_model->second_number }} = {{$object_model->multiplication}} <br />
        <div>Div : </div><br />
        {{$object_model->first_number}} / {{$object_model->second_number }} = {{$object_model->division}} <br />

    </div>
</div>
<footer>© 2022 - Backend1</footer>
</body>
</html>
@endforeach


