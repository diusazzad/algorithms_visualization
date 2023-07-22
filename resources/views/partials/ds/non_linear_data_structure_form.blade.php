<div class="border m-2 w-full h-64">
    <h2 class="text-center">{{ $category }}</h2>
    <div class="p-4">
        <h2 class="text-xl font-semibold">{{ $category }}</h2>
        <ul class="list-disc list-inside">
            @foreach ($dataStructures as $ds)
                <li>{{ $ds }}</li>
            @endforeach
        </ul>
        <form action="{{ route('non_linear_data_structure.submit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Tree:</label>
                <input type="text" name="name" id="name" class="border-2 border-black">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Add more form fields as needed -->
            <button type="submit" class="border-2 border-black">Submit</button>
        </form>
    </div>
</div>
