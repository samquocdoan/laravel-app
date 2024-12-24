<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-lg font-bold">
            <a href="{{ url('/') }}">Laravel App</a>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
