<x-frontend>
    <div class="md:flex mt-10 pb-3 border-b">
        <div class="w-1/2 md:w-1/3 text-center m-auto">
            <img src="{{asset('img/user.jpg')}}"
                 class="rounded-full"
                 alt="Al Imran Ahmed"/>
        </div>
        <div class="w-full md:w-2/3 mt-10 md:ml-10">
            <h3>Hi</h3>
            <h1><span class="text-gray-500">I am </span>Masoud Hosseiny</h1>
            <section class="text-gray-600">
                An experienced web artisan who loves building challenging web application.
            </section>
            <x-frontend.social-links class="mt-3"/>
        </div>
    </div>

{{--    <div class="md:flex mt-10 pb-3 border-b">--}}
{{--        <div class="w-full md:w-2/3 mt-10 md:ml-10">--}}
{{--            <h3>Projects</h3>--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <button>first</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="md:flex justify-between mt-5 md:mt-20">
        <section>
            <h2>Experienced on</h2>
            <ul>
                <li>- Web Development Workflow</li>
                <li>- PHP, Laravel</li>
                <li>- Javascript, VueJS</li>
                <li>- Bootstrap</li>
                <li>- Git</li>
                <li>- Docker</li>
                <li>- Github, Gitlab</li>
                <li>- JiRA, Trello, Slack</li>
            </ul>
        </section>

        <section class="mt-5 md:mt-0">
            <h2>Current Interests</h2>
            <ul class="">
                <li>- OSINT</li>
                <li>- Machine Learning</li>
                <li>- Artificial Intelligence</li>
                <li>- Blockchain Technology</li>
            </ul>
        </section>
    </div>
</x-frontend>
