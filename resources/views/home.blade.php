<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    @auth
     <h2 style="font-family:Lucida Handwriting; text-align: center; color:rgb(3, 86, 97);">Therefore I write!</h2> 
     <h3 style="color:rgb(194, 167, 14)">Home</h3>

     <div >
<h2 style="font-family: Brush Script MT";>Create new post</h2>
<form action="/create-post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="post title">
    <textarea name="body" placeholder="Body content..."></textarea>
    <button>save post</button>
</form>
     </div>
     
     <div style="border:3px solid rgb(99, 80, 121);">
        <h2>All posts</h2>
        @foreach($posts as $post)
            <div style="background-color: rgba(111, 102, 136, 0.842); padding: 10px; margin: 10px;">

                <h3>{{$post['title']}}</h3>
                {{$post['body']}}
                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                <form action="/delete-posts/{{$post->id}}" method="POST">
                @csrf
                @method('delete')
                <button>Delete</button>
                </form>

            </div>
        @endforeach
        
    </div>
     

    @else 
    <div>
       
    </div>
    
    @endauth
  
</body>
</html> 