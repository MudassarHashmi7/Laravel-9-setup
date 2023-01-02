<x-app-layout>
    <main class="mt-5 pt-3">


        @if($errors->any())
            <div class="alert alert-danger" style="width: 60%;margin:auto">
                <strong>Oops! There were some problems with your input.</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if($subcategories)
        <form action="{{ route('subcategory.update',$subcategories->id) }}" style="width: 60%;margin: auto" method="POST">
{{--        <form action="{{ route('test') }}" style="width: 60%;margin: auto" method="PUT">--}}
            @csrf


            <div class="mb-3 mt-3">
                <label for="name">SubCategory:</label>
                <input type="text" class="form-control" id="name1" placeholder="Enter name" name="name1" value="{{ $subcategories->name1 }}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            @endif

    </main>

</x-app-layout>
