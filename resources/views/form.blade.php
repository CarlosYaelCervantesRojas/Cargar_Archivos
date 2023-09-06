<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    main{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form{
        border: solid 2px gray;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        padding: 30px;
    }
    div{
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    button{
        width: 35%;

    }
</style>

<body>
    
    <main>

        <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="file" name="file" id="file">

            <div>
                <label for="name">Nombre del archivo</label>
                <input type="text" name="name" id="name" required>
            </div>

            <button type="submit">
                Guardar
            </button>

        </form>

    </main>

</body>
</html>