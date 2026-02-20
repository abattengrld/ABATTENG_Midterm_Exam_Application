<h1>Books List </h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year Published</th>
        <th>Price</th>
    </tr>

    @foreach($data as $book)
    <tr>
        <td>{{$book['title']}}</td>
        <td>{{$book['author']}}</td>
        <td>{{$book['year_published']}}</td>
        <td>{{$book['price']}}</td>
    </tr>
    @endforeach

</table>
