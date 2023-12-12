<x-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="flex flex-col items-center justify-center rounded-2xl w-[800px] h-[500px] bg-slate-700 text-white relative">
            <h1 class="font-semibold text-3xl underline self-center">Register</h1>
            <div>
                <form action="/register" method="post" class="space-y-2 w-[300px]">
                    @csrf
                    <div class="flex flex-col text-xl">
                        <label for="name">Benutzername:</label>
                        <input type="text" id="name" name="name" class="text-black">
                    </div>
                    <div class="flex flex-col text-xl">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="text-black">
                    </div>
                    <div class="flex flex-col text-xl">
                        <label for="password">Passwort:</label>
                        <input type="password" id="password" name="password" class="text-black">
                    </div>
                    <div class="flex flex-col text-xl">
                        <label for="password_confirmation">Passwort bestätigen:</label>
                        <input type="password" class="text-black" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="absolute bottom-6 right-8">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8">Fertig</button>
                    </div>
                </form>
            </div>
            <div class="absolute bottom-6 left-8">
                <p class="text-xl font-semibold mb-2">Noch kein Konto?</p>
                <a href="/" class="rounded-md font-semibold bg-red-500 hover:bg-red-600 cursor-pointer py-2 px-8">Login</a>
            </div>
        </div>
    </div>
</x-layout>
