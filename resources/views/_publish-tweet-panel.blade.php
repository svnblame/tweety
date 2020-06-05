<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweet">
        @csrf

        <textarea class="w-full" name="body" placeholder="What's up doc?"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img class="rounded-full mr-2" src="{{ auth()->user()->avatar }}" alt="Avatar">

            <button
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
                type="submit">
                Tweet-a-roo!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>
