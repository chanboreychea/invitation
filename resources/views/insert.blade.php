<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="{{url('css\insert.css')}}">
</head>

<body>
    @if (session('status'))
        <h2>{{ session('status') }}</h2>
    @endif
    <form action="{{ url('insert-store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <select name="cateID" id="cateID" value="1">
            <option value="1">បាល់ទាត់ជាតិ</option>
            <option value="2">បាល់ទាត់អន្តរជាតិ</option>
            <option value="3">ប្រដាល់ជាតិ</option>
            <option value="4">ប្រដាល់អន្តរជាតិ</option>
            <option value="5">បាល់ទះ</option>
            <option value="6">កីឡាគ្រប់ប្រភេទ</option>
        </select>
        <input type="text" placeholder="Title" name="title">
        <input type="text" placeholder="Description" name="description">
        <input type="file" placeholder="Image" name="image">
        <div>Detail</div>
        <input type="file" placeholder="ImageTop" name="imageTop">
        <input type="text" placeholder="DesTop" name="desTop">
        <input type="file" placeholder="ImageMid" name="imageMid">
        <input type="text" placeholder="DescriptionMid" name="desMid">
        <input type="file" placeholder="ImageBottom" name="imageBottom">
        <input type="text" placeholder="DescriptionBottom" name="desBottom">

        <button type="submit">Save</button>
    </form>
</body>

</html>
