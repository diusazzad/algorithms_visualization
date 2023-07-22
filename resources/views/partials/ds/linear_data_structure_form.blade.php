<div class="border m-2 w-full h-64">
    <h2 class="text-center">{{ $category }}</h2>
    <div class="p-4">
        <h2 class="text-xl font-semibold">{{ $category }}</h2>
        <ul class="list-disc list-inside">
            @foreach ($dataStructures as $ds)
                <li>{{ $ds }}</li>
            @endforeach
        </ul>
        <!-- Your form inputs for the Linear Data Structure go here -->
    </div>
</div>
