<div class="card menu">
    <div class="card-body">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100 mb-3">Dashboard</a>
        <hr>
        <p class="font-weight-bold text-uppercase">Category Menu</p>
        <a href="{{ route('category.index') }}" class="btn btn-outline-secondary w-100 mb-3">Category List</a>
        <a href="{{ route('category.create') }}" class="btn btn-outline-secondary w-100 mb-3">Add Category</a>
        <hr>
        <p class="font-weight-bold text-uppercase">Post Menu</p>
        <a href="{{ route('post.index') }}" class="btn btn-outline-secondary w-100 mb-3">Post List</a>
        <a href="{{ route('post.create') }}" class="btn btn-outline-secondary w-100 mb-3">Add Post</a>
    </div>
</div>
