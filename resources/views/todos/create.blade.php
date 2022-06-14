{{-- <div class="container my-4 form-control">
        <h3>Add New Todo</h3>
        <form action="/todos" method="post" class="form-control px-4">
            @csrf
            {{ csrf_field() }}
            {{-- @{{ csrf_field() }} --}}
{{-- <div class="row">
                <p class="col-3">Title:
                </p>
                <input class="ml-3 col-9" type="text" name="title" id="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row my-2">

                <p class="col-3">Description:</p>
                <textarea class="ml-3 col-9" name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Add" class="btn btn-primary offset-5 col-2">
        </form>
    </div>
</body> --}}

{{-- </html> --}}
@extends('./layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <form action="/" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>
@endsection
