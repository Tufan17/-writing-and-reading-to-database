<!DOCTYPE html>
<html>
<head>
    <title>Ogrenci Ekleme</title>
</head>


<body>
@foreach($ogrenci as $name)

    <li>{{ $name->no."  => ". $name->name}}</li>
@endforeach

<div style="margin: 20%">


    <form method="POST" action="/ogrenci_add">
        @csrf

        <div class="form-outline mb-4">
            <input type="number" id="no" name="no" class="form-control" />
            <label class="form-label" for="form2Example1">No</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="ogrenci" name="name" class="form-control" />
            <label class="form-label" for="form2Example1">Ogrenci</label>
        </div>
        <button value="kaydet" type="submit" name="kaydet">Kaydet</button>
    </form>
</div>
</body>

</html>
