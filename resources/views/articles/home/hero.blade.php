@guest
<div class="u-hero-content w-full flex items-center bg-dark p-8">
    <div class="wrapper-content items-center">
        <div class="w-3/5">
            <h1 class="text-6xl font-bold">Let's make learning.</h1>
            <p class="my-6 font-bold">
                Leonは、エンジニアリングに関するチュートリアルを作成・共有するためのサービスです。<br>
                沢山の学びをチュートリアルにまとめ、他のエンジニアと知見を共有し、<br>
                Leonを皆にとって「最高の学び場」にしましょう！！
            </p>
        </div>
        <div class="w-2/5">
            <img src="/images/home/code.svg" alt="">
        </div>
    </div>
</div>

<div class="flex justify-center">
    <ul class="flex items-center">
        <li class="">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/javascript.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">JavaScript</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/react.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">React</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/typescript.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Typescript</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/vue.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Vue.js</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/sass.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Sass</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/tailwindcss.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Tailwind.css</span>
            </a>
        </li>
    </ul>
</div>
@else

@endguest

@auth
<div class="flex justify-center">
    <ul class="flex items-center">
        <li class="">
            <a href="{{ url('/tags/Javascript') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/javascript.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">JavaScript</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="{{ url('/tags/React') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/react.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">React</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="{{ url('/tags/Typescript') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/typescript.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Typescript</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="{{ url('/tags/Vue.js') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/vue.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Vue.js</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="{{ url('/tags/Sass') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/sass.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Sass</span>
            </a>
        </li>
        <li class="ml-8">
            <a href="{{ url('/tags/Tailwind.css') }}" class="flex flex-col justify-around items-center my-4 btn-up">
                <div class="p-8 bg-dark_two rounded-leon primary-shadow">
                    <img src="/images/logo/tailwindcss.svg" class="flex-shrink-0 w-16 h-16" alt="">
                </div>
                <span class="mt-4 font-bold">Tailwind.css</span>
            </a>
        </li>
    </ul>
</div>
@endauth
