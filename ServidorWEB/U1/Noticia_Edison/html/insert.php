<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insercion</title>
    </head>
    <body>
        <form name="form1" action="grabar.php" method="POST">
            Title:
            <input type="text" name="post_title" value="" /><br>
            Slug:
            <input type="text" name="post_slug" value="" /><br>
            Abstract:
            <input type="text" name="post_abstract" value="" /><br>
            Body:
            <input type="text" name="post_body" value="" /><br>
            Date:
            <input type="date" name="post_date" value="" /><br>
            Image:
            <input type="file" name="post_image" value="" /><br>
            <input type="submit" value="Grabar" name="grabar" />
        </form>   
    </body>
</html>