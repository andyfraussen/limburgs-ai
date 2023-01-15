<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-limburg-yellow to-limburg-green flex justify-center items-center h-screen">
<main>
    <div class="container mx-auto">
            <div class="h-full max-w-xl">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h1 class="text-2xl font-bold text-limburg-red py-2">Limburgs-AI</h1>
                    <p class="text-gray-800 italic py-2">Van 't Algemein Besjreve Nederlands naor 't Limbörgs Mestreechs dialek, danksiej Artificiele Intellegensie</p>
                    @yield('content')
                </div>
        </div>
    </div>
</main>
@vite('resources/js/app.js')
</body>
</html>
