<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{ asset('css/paket.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    @include('template.header')

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="card mb-4 p-3" style="max-width: 700px">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('storage/'.$post->banner_image) }}" class="card-img rounded-start" alt="Blog Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"><small class="text-muted">Posted on {{ $post->published_at->format('F j, Y') }} by {{ $post->author }}</small></p>
                                <p class="card-text">{!! Str::limit($post->content, 100) !!}</p>
                                <div style="display: none">
                                <a style="display: none" href="{{route('blog.show', $post->slug) }}" class="btn btn-primary text-center">Selengkapnya</a>
                                </div>  
                                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary ms-3">Read more</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('template.footer')
</body>

</html>
