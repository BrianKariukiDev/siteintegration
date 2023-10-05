<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
            background-color: violet;
            height: fit-content;
            border-radius: 30px;
        }
        label,input,textarea{
            margin: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" action="/articles">
        @csrf
        <label for="title">Title:</label>    
        <input type="text" name="title"><br />
        <label for="excerpt">Excerpt:</label>    
        <input type="text" name="excerpt"><br />
        <label for="title">Body:</label>    
        <textarea name="body" cols="30" rows="10"></textarea><br>
        <input type="submit">
        </form>
</body>
</html>