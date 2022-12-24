<x-app-layout>
    <div class="text-white flex flex-col px-24">
        <h1 class="text-4xl font-bold my-8">Where do you want to go?</h1>
        <h4 class="text-xl font-semibold">Explore Places</h4>
        <nav class="flex ">
            <ul
                class="flex flex-row flex-wrap justify-around gap-x-28 text-white/60 font-bold my-6 bg-[#FF4C29] px-8 py-3 rounded-xl">
                <li>All</li>
                <li class="text-white">Popular</li>
                <li>Recommended</li>
                <li>Most Viewed</li>
                <li>Most Likes</li>
                <li>Recent Visited</li>
            </ul>
        </nav>
        <div class="flex flex-row justify-around gap-16 my-8">
            <a href="/">
                <img class="hover:scale-110" src="./img/bunaken-detail-card.png" alt="missing img">
            </a>
            <a href="/">
                <img class="hover:scale-110" src="./img/kerinci-detail-card.png" alt="missing img">
            </a>
            <a href="/destination/wakatobi">
                <img class="hover:scale-110" src="./img/wakatobi-detail-card.png" alt="missing img">
            </a>
            <a href="/">
                <img class="hover:scale-110" src="./img/labuan-detail-card.png" alt="missing img">
            </a>
        </div>
        <div class="bg-suggestion-bg h-[400px] bg-cover my-32 rounded-2xl">
            <h1 class="text-4xl font-bold text-center my-24 mb-16">Lets us know your suggestion!</h1>
            <div class="mx-32">
                <x-text-input placeholder="Write here for your suggestion for our beloved website..." id="suggestion"
                    class="block mt-1 w-full bg-transparent border-white border py-2 px-4 text-white placeholder-white placeholder:text-sm"
                    type="suggestion" name="suggestion" :value="old('suggestion')" required autofocus />
                <x-input-error :messages="$errors->get('suggestion')" class="mt-2" />
            </div>
        </div>
    </div>
</x-app-layout>
