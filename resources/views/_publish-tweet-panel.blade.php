<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweet">
        @csrf

        <textarea
            class="w-full"
            name="body"
            placeholder="What's up doc?"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2" src="{{ current_user()->avatar }}" alt="Avatar">

            <x-publish-button></x-publish-button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>
