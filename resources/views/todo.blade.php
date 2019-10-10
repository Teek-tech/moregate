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
    <form action="{{route('todo.insert')}}" method="post">
      @csrf 
      @method('post')
      <label for="description">Enter post description</label>
      <input type="text" name="description" id="description">
      <div>
        <label for="">Enter Message</label>
        <textarea name="body" id="" cols="30" row="10"></textarea>
      </div>
      <button class="btn btn-primary"type="submit" name="submit">Submit</button>
    </form>

    <div>
    <table>
     <tr>
         <th>id</th>
         <th>description</th>
         <th>body</th>
         <th>Action</th>
     </tr>
     @foreach($getPost as $item)
      <tr>
          <td>{{$item->id}}</td>
         <td>{{$item->description}}</td>
         <td>{{$item->body}}</td>
         <td><a href="{{route('todo.edit', $item->id )}}"><button>Edit</button></a></td>
      </tr>
      @endforeach
    </table>
    </div>
</body>
</html>