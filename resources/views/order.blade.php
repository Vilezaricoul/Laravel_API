<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заказ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="/Products" method="POST">
    @csrf
        <div class="form-group">
            <label for="fio">Message</label>
            <input type="text" class="form-control" name="Message" id="fio" aria-describedby="emailHelp" >
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
        
    </form> 
</div>

</body>
</html>