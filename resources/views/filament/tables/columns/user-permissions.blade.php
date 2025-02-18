<div class="flex flex-wrap gap-1">
    @foreach ($getRecord()->permissions as $permission)
        <span
            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
            {{ $permission->name }}
        </span>
    @endforeach
</div>
