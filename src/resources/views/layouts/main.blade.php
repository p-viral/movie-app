<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch-Man</title>
    <link href="/css/main.css" rel="stylesheet" />
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">Watch-Man</a>
                </li>
                <li class="mt-3 md:mt-0 md:ml-16">
                    <a href="#">Movies</a>
                </li>
                <li class="mt-3 md:mt-0 md:ml-6">
                    <a href="#">TV Shows</a>
                </li>
                <li class="mt-3 md:mt-0 md:ml-6">
                    <a href="#">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search"/>
                </div>
                <div class="mt-3 md:mt-0 md:ml-4">
                    <a href="#">
                        <img src="/img/avatar.jpg" class="rounded-full w-8 h-8" />
                    </a>
                </div>
            </div>
        </div>
    </nav>

@yield('content')
</body>
</html>