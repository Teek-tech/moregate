<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Document</title>
</head>
<body>
    <h2>Todo list</h2>
    <form action="{{route('todo.update', $editPost->id)}}"  method="post">
      @csrf 
      @method('patch')
      <label for="description">Enter post description</label>
      <input type="text" name="description" id="description" value="{{$editPost->description}}">
      <div>
        <label for="">Enter Message</label>
        <textarea name="body" id="" cols="30" row="10">{{$editPost->body}}</textarea>
      </div>
      <button class="btn btn-primary"type="submit" name="submit">Submit</button>
    </form>
</body>
</html>