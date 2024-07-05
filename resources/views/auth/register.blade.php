<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/dist/lineIcons/lineicons.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/style.css')}}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >

<div class="flex w-full h-screen ">
    <div class="w-1/2  bg-gray-800 text-white  p-4">
        <div class="flex justify-center items-center">
            <div>
                <img src="{{asset('/dist/images/semantic.png')}}" class="h-12" alt="Flowbite Logo" />
                <br>
                <span class="text-2xl">LaraBoom UI Kit</span>
            </div>
        </div>

    </div>

    <div class="w-1/2  bg-white p-4">
        <div class="flex justify-end">
            <a href="{{route('login')}}" class="font-semibold">Login</a>
        </div>
        <div >
            <div   class="flex justify-center ">
                <div class=" text-center mt-64">
                    <p class="font-bold text-2xl">Créer votre Compte</p>
                    <p>Créer votre compte et utiliser les fonctionnalités de LaraBoom</p>

                    <form class="w-auto mx-auto pt-14" >
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <input type="email" id="default-search" class="block w-96 h-10 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrer votre email"  required />

                        </div>

                        <br>

                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <input type="email" id="default-search" class="block w-96 h-10 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrer votre email"  required />

                        </div>

                        <br>

                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="lni lni-lock"></i>
                            </div>

                            <input type="password" id="default-search" class="block w-96 h-10 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrer votre mot de passe"  required />


                        </div>
                        <br>

                        <div class="flex flex-col gap-y-3">
                            <a href="{{route('login')}}" type="submit" class="text-white bg-gray-800 w-96 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Me Connecter</a>
                            <button type="submit" class=" text-black bg-white border border-slate-200  w-96 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="lni lni-google " style="font-size: 10px;margin-right: 10px;"></i>
                                Me connecter avec Google
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
