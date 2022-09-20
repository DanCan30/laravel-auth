<form action="{{ $actionRoute }}" method="POST" class="container d-flex flex-column">
    @csrf
    @method($method)

    <label class="h2 mt-5" for="title">Post title</label>
    <input type="text" name="title" value="{{ $post->title }}" class="h3 p-1 mt-3">

    <label class="h2" for="content">Post content</label>
    <textarea name="content" cols="30" rows="10" class="h4 mt-3">
        {{ $post->content }}
    </textarea>

    <label class="h2" for="post_image_url">Post image</label>
    <input type="text" name="post_image_url" value="{{ $post->post_image_url }}" class="mb-5 mt-3 h3">

    <button type="submit" class="w-25 align-self-center btn btn-primary">{{ $submitMessage }}</button>

</form>