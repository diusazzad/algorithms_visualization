<div class="border m-2 w-full">
    <h2 class="text-center">{{ $category }}</h2>
    <div class="p-4">
        <h2 class="text-xl font-semibold">{{ $category }}</h2>
        <ul class="list-disc list-inside">
            @foreach ($dataStructures as $ds)
                <li>
                    <div class="flex items-center justify-between">
                        <span>{{ $ds }}</span>
                        <input type="text" class="border rounded-lg px-2 py-1 w-24 h-8">
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
