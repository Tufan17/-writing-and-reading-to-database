<!DOCTYPE html>


<html lang="tr">
<head>

</head>
<body>

<div>
    @foreach($arabalar as $araba)
    <li>{{$araba->name}}</li>
    @endforeach

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Araba Adı</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Fiyat</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="text-center"><button>Send</button></div>
        </form>
</div>

</body>
</html>
