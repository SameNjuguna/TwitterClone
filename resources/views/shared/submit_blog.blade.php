<h4> Share yours Blogs </h4>
<div class="row">
    <form action="{{ route('blog.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="blog" class="form-control" id="blog" rows="3"></textarea>
            @error('blog')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
