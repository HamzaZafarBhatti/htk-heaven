<header class="fi-header flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
    <div>
        <x-filament::breadcrumbs :breadcrumbs="$breadcrumbs" :class="'mb-2 hidden sm:block'" />

        <h1 class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
            {!! $title !!}
        </h1>
        <p class="mt-2 text-sm text-gray-500">{{ $description }}</p>
    </div>
</header>
