<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-indigo-600 hover:text-gray-900 dark:text-indigo-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-gray-900 dark:text-indigo-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-indigo-600 hover:text-gray-900 dark:text-indigo-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 375 228" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="m322.91 227.58c-0.88959-0.88959-43.228-9.8273-83.032-17.528-44.933-8.6933-48.854-9.0869-68.901-6.9154-11.718 1.2693-12.724 0.99338-24.429-6.7001-7.18-4.72-17.54-5.83-79.05-8.44-56.573-2.4-67.5-4.02-67.5-10.06 0-4.15 14.07-40.54 45.206-116.94 14.012-34.379 12.708-32.206 19.111-31.866 4.9272 0.26152 4.9761 0.23399 6.5738-3.6999 2.4197-5.9579 2.6326-6.1527 10.916-9.9852 47.181-21.829 96.25-20.354 131.54 3.955l6.8478 4.7168 8.6522-2.0234c53.695-12.557 98.884-4.6733 125.15 21.834 9.0848 9.1676 11.239 11.863 10.71 13.397-0.22243 0.64444 2.0018 4.0821 4.9428 7.6391 2.941 3.5571 5.3472 7.0709 5.3472 7.8085 0 6.7526-29.538 108.13-39.634 136.02-5.6707 15.669-9.6149 21.618-12.452 18.78zm1.95-10.83c9.27-23.14 42.14-134.24 42.14-142.43 0-2.0183-3.8353-7.8214-4.6384-7.0183-0.22571 0.22571-8.023 30.02-17.327 66.209l-16.917 65.798-4.7711 4.844c-5.7994 5.8879-6.382 5.9142-14.994 0.67686-34.857-21.198-96.895-29.452-133.15-17.715-2.9957 0.9699-3.7641 0.7434-8.5-2.5053-20.033-13.742-64.567-20.288-120.11-17.655-13.214 0.62649-24.213 1.3265-24.442 1.5556-5.1054 5.1054-4.2686-8.8089 1.2637-21.013 0.74796-1.65 10.684-27.075 22.081-56.5 11.396-29.425 20.946-53.875 21.222-54.334 0.27599-0.45875-0.494-0.68375-1.7111-0.5-2.473 0.379-0.45-4.252-27.452 62.84-8.9648 22.275-19.084 48.15-22.488 57.5-3.4033 9.35-6.5823 17.735-7.0644 18.633-1.4231 2.6507 11.278 3.845 67.494 6.3467 60.773 2.7045 64.976 3.2884 77.125 10.712l8.3985 5.1322 10.738-1.1632c19.601-2.1232 23.134-1.7653 67.982 6.8866 22.941 4.4258 50.272 9.991 60.734 12.367 23.78 5.4006 22.78 5.3458 24.386 1.336zm-5.4638-18.913c-3.91-6.33-58.91-36.57-76.4-42-16.287-5.0604-38.823-2.7941-55.248 5.5556l-8.1923 4.1648-1.5963 7.0317-1.5963 7.0317 6.5662-1.235c42.647-8.0209 91.728-0.77021 125.08 18.477 8.1144 4.6835 13.994 5.1857 11.39 0.97291zm4.54-10.59c2.89-10.4 33.06-129.11 33.06-130.05 0-2.153-13.07-14.103-20.47-18.716-26.81-16.711-69.35-20.001-111.07-8.592l-3.96 1.084-9.95 32.762c-7.8143 25.733-19.066 61.937-28.122 90.483-0.47232 1.4889 0.21015 1.3863 5.0674-0.76176 18.781-8.3059 40.315-9.5362 58.861-3.3628 14.737 4.9056 53.714 25.784 68.642 36.768 6.7659 4.9787 6.6738 4.9742 7.945 0.38613zm-29.482-39.298c-16.408-21.324-52.473-28.344-89.35-17.393-7.4286 2.2061-12.281-2.6774-5.3631-5.398 35.352-13.904 82.541-5.2109 100.06 18.432 7.968 10.755 2.8125 14.96-5.3445 4.3593zm11.162-18.666c-20.58-24.68-48.29-31.227-89.49-21.14-13.607 3.3314-16.454-2.5282-3.0677-6.314 38.776-10.966 77.439-3.0703 94.687 19.337 6.6964 8.6995 4.7048 16.312-2.1251 8.123zm6.52-23.53c-15.8-21.17-44.59-28.515-81.14-20.703-15.992 3.4183-15.888 3.4093-16.641 1.4451-3.8651-10.072 48.252-14.932 72.872-6.7948 16.923 5.5931 37.443 24.171 32.833 29.726-2.1599 2.6025-3.8039 1.84-7.9208-3.6733zm9.0678-20.942c-15.66-22.749-56.78-31.364-91.55-19.179-6.63 2.323-11.39-3.241-4.91-5.739 16.81-6.482 48.3-8.041 66.61-3.296 16.77 4.345 38.31 21.275 37.42 29.406-0.48117 4.3678-4.134 3.7923-7.5647-1.192zm8.43-21.558c-14.08-22.182-53.61-30.865-90.14-19.799-5.4889 1.6627-7.9836 1.3374-8.9444-1.1663-2.9596-7.7126 46.963-13.497 67.944-7.8729 15.213 4.0781 32.625 16.168 37.841 26.275 3.5148 6.8103-2.5313 9.1245-6.697 2.5633zm-158.72 109.7c1.6023-7.4713 1.6316-7.4086-5.7094-12.245-39.21-25.82-87.678-29.66-129.71-10.26-6.2224 2.8718-7.1257 3.6488-8.1319 6.9946l-1.1319 3.764 10.132-0.73946c50.59-3.6923 106.45 2.6668 127.13 14.472 6.5346 3.7304 6.1717 3.8273 7.4171-1.9801zm27.59-90.45l16.422-53-3.2146-2.8142c-26.44-23.141-82.26-25.746-125.08-5.839l-7.856 3.653-21.847 56.5c-12.016 31.075-22.562 58.018-23.435 59.873-1.4995 3.1871-1.4882 3.3333 0.20551 2.6482 48.247-19.52 96.092-15.34 135.79 11.85l5 3.4244 3.7924-11.646c2.09-6.41 11.18-35.5 20.22-64.65zm-43.006 53.376c-16.19-16.69-48.37-22.7-85-15.86-18.448 3.4429-18.388 3.4383-19.149 1.4546-3.5777-9.3234 52.542-14.614 78.653-7.4145 18.138 5.001 38.144 19.445 33.943 24.506-1.9701 2.3738-4.2348 1.6529-8.4463-2.6883zm6.1813-21.409c-17.45-16.521-50.81-21.53-89.68-13.47-11.926 2.4739-12.716 2.4672-13.535-0.11455-2.828-8.9101 52.3-13.726 78.988-6.9005 15.378 3.9332 35.212 17.276 34.384 23.131-0.588 4.1578-3.864 3.3023-10.155-2.6521zm7.6409-19.84c-16.37-16.673-49.35-21.619-90.146-13.523-11.061 2.195-13.174 2.042-13.174-0.953 0-8.359 52.685-12.788 78-6.5565 15.844 3.8997 38.354 19.218 35.398 24.087-1.9742 3.2518-4.6864 2.4287-10.075-3.0574zm7.1635-20.412c-16.29-15.489-48.53-20.952-83.98-14.235-18.816 3.566-18.201 3.533-19.004 1.003-2.927-9.222 53.334-14.13 79.504-6.936 19.435 5.3429 40.87 22.1 32.418 25.343-2.4543 0.94179-2.5526 0.88478-8.9319-5.1778zm8.3424-19.533c-17.42-16.353-47.27-21.444-85.353-14.563-15.979 2.887-17.89 2.917-18.265 0.29-1.288-9.015 54.248-13.44 79.768-6.355 17.99 4.991 37.71 19.859 32.83 24.743-1.9546 1.9546-3.0188 1.4662-8.9713-4.1181zm6.683-14.67c-10.01-10.264-29.87-16.764-54.49-17.839-16.333-0.71306-18.457-1.5249-14.972-5.7242 2.8433-3.4259 33.431-0.81852 48.707 4.1519 15.623 5.0834 31.722 16.783 29.306 21.297-1.6709 3.1222-4.1925 2.5644-8.5413-1.8892z" fill="#4f46e5"/>
                    </svg>
                    <p class="mt-4 text-indigo-600 dark:text-indigo-600 text-5xl leading-relaxed">Libraryan's friend</p>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-users text-red-600 text-3xl"></i>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">HANDLE SUBSCRIBERS WITH EASE</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Manage existing and old library subscribers in real time. <br> 
                                Create and administer their relevant personal data hassle free.
                                </p>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-server text-red-600 text-3xl"></i>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">DIGITIZATION & DIGITALIZATION</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                It's time to move away from pen and paper! Become a better friend to nature by digitizing your process, while harnessing the full power of digitalization.
                                </p>
                            </div>
                        </div>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-arrow-trend-up text-red-600 text-3xl"></i>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">FOCUS ON INVENTORY</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Gone will be the days of old school inventories.<br>
                                Current inventory reports are only several clicks away.
                                </p>
                            </div>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <i class="fa-solid fa-info text-red-600 text-3xl"></i>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">BEFORE YOU START</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Our quick user guide will get you up to speed in less than one hour. For additional details you can always revert to the full documentation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                                <a href="https://www.google.com" target = blank><i class="fa-brands fa-linkedin fa-2xl text-grey-600 hover:text-indigo-600 dark:text-grey-400 dark:hover:text-indigo-600"></i></a>
                                <a href="https://www.google.com" target = blank><i class="fa-brands fa-square-facebook fa-2xl text-grey-600 hover:text-indigo-600 dark:text-grey-400 dark:hover:text-indigo-600"></i></a> 
                                <a href="https://www.google.com" target = blank><i class="fa-brands fa-square-github fa-2xl text-grey-600 hover:text-indigo-600 dark:text-grey-400 dark:hover:text-indigo-600"></i></a> 
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-m text-gray-600 dark:text-gray-400 sm:text-right sm:ml-0 font-bold">
                        <!-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) -->
                        Caliman Bogdan
                    </div>
                </div>
            </div>
        </div>
  <h1 class="text-3xl text-red-500 font-bold underline">
    Hello world!
  </h1>
</body>
</html>