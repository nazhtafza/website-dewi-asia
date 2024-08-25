<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="{{ asset('css/paket.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner{
            width: 100%; /* Adjust this value as needed */
            /* height: auto; */
            max-height: 500px;
            object-fit: cover;
        }
          .content img {
            width: 100%;
            max-width: 400px; /* Adjust this value as needed */
            height: auto;
            object-fit: cover;
        }
    </style>
</head>

<body>
    @include('template.header')

    <div class="container" style="margin-top: 100px">
        <h1>{{ $post->title }}</h1>
        <p><small class="text-muted">Posted on {{ $post->published_at->format('F j, Y') }} by {{ $post->author }}</small></p>
        <img src="{{ asset('storage/'.$post->banner_image) }}" class=" banner" alt="Banner Image">
        <div class="content mt-4">
            {!! preg_replace('/<figcaption.*?<\/figcaption>/', '', $post->content) !!}
        </div>
        

        <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">Back to Blog</a>
    </div>

    @include('template.footer')
</body>

</html>
