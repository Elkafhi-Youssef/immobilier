<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Books</title>
</head>
<body>
    <table>
    <tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
    </tr>
    <?php 

        foreach($this->books as $book){
            echo "<tr>
            <td>$book->isbn</td>
            <td>$book->title</td>
            <td>$book->author</td>
            <td>$book->category</td>            
            </tr>";
        }  
        //print_r($this->books);
    ?>
    </table>
</body>
</html>