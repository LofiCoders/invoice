<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('site.webmanifest')}}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
       body{
            font-family: 'Lexend', sans-serif !important;
       }
        
    </style>
</head>
<body class="antialiased">
<div class="bg-gray-900 flex h-full flex-col">
    <header class="py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav class="relative z-50 flex justify-between">
                <div class="flex items-center md:gap-x-12"><a aria-label="Dashboard" href="/">
                        <img src="{{ asset('assets/logo/logo-white.png')}}" class="h-14 w-auto">
                    </a>
                    <div class="hidden md:flex md:gap-x-6"><a
                            class="inline-block rounded-lg py-1 px-2 text-xl text-white hover:bg-slate-100 hover:text-slate-900"
                            href="#features">Features</a><a
                            class="inline-block rounded-lg py-1 px-2 text-xl text-white hover:bg-slate-100 hover:text-slate-900"
                            href="#testimonials">Testimonials</a><a
                            class="inline-block rounded-lg py-1 px-2 text-xl text-white hover:bg-slate-100 hover:text-slate-900"
                            href="#pricing">Pricing</a></div>
                </div>
                <div class="flex items-center gap-x-5 md:gap-x-8">
                    <div class="hidden md:block"><a
                            class="inline-block rounded-lg py-1 px-2 text-xl text-white hover:bg-slate-100 hover:text-slate-900"
                            href="{{ route('login') }}">Sign in</a></div>
                    <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600"
                       href="{{ route('register')}}"><span>Get started <span class="hidden lg:inline">today</span></span></a>
                    <div class="-mr-1 md:hidden">
                        <div data-headlessui-state="">
                            <button
                                class="relative z-10 flex h-8 w-8 items-center justify-center [&amp;:not(:focus-visible)]:focus:outline-none"
                                aria-label="Toggle Navigation" type="button" aria-expanded="false"
                                data-headlessui-state="" id="headlessui-popover-button-:r0:">
                                <svg aria-hidden="true" class="h-3.5 w-3.5 overflow-visible stroke-slate-700"
                                     fill="none" stroke-width="2" stroke-linecap="round">
                                    <path d="M0 1H14M0 7H14M0 13H14" class="origin-center transition"></path>
                                    <path d="M2 2L12 12M12 2L2 12"
                                          class="origin-center transition scale-90 opacity-0"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="relative py-24 sm:py-32 lg:pb-40">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Data to enrich your online
                        business</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                           class="rounded-md bg-indigo-500 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get
                            started</a>
                        <a href="#" class="text-base font-semibold leading-7 text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                     alt="App screenshot" width="2432" height="1442"
                     class="mt-16 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 sm:mt-24">
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <svg
                    class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                    viewBox="0 0 1155 678">
                    <path fill="url(#ee0717bf-3e43-49df-b1bd-de36422ed3d3)" fill-opacity=".2"
                          d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"/>
                    <defs>
                        <linearGradient id="ee0717bf-3e43-49df-b1bd-de36422ed3d3" x1="1155.49" x2="-78.208" y1=".177"
                                        y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC"></stop>
                            <stop offset="1" stop-color="#FF80B5"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="bg-indigo-100 py-24" id="features">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 py-20 px-6 sm:rounded-3xl sm:py-24 sm:px-10 lg:py-24 xl:px-24">
                    <div
                        class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
                        <div class="lg:row-start-2 lg:max-w-md">
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your
                                productivity.<br>Start using our app today.</h2>
                            <p class="mt-6 text-lg leading-8 text-gray-300">Ac euismod vel sit maecenas id pellentesque
                                eu sed consectetur. Malesuada adipiscing sagittis vel nulla. Ac euismod vel sit
                                maecenas.</p>
                        </div>
                        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                             alt="Product screenshot"
                             class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none"
                             width="2432" height="1442">
                        <div
                            class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10">
                            <dl class="max-w-xl space-y-8 text-base leading-7 text-gray-300 lg:max-w-none">
                                <div class="relative">
                                    <dt class="ml-9 inline-block font-semibold text-white">
                                        <!-- Heroicon name: mini/cloud-arrow-up -->
                                        <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-500"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Push to deploy.
                                    </dt>
                                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit aute id
                                        magna.
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt class="ml-9 inline-block font-semibold text-white">
                                        <!-- Heroicon name: mini/lock-closed -->
                                        <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-500"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        SSL certificates.
                                    </dt>
                                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                        lorem cupidatat commodo.
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt class="ml-9 inline-block font-semibold text-white">
                                        <!-- Heroicon name: mini/server -->
                                        <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-500"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z"/>
                                            <path fill-rule="evenodd"
                                                  d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <svg
                        class="pointer-events-none absolute top-1/2 left-12 -z-10 h-[42.375rem] -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:bottom-[-12rem] lg:translate-y-0"
                        viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="url(#c0458c57-1330-459f-9d5c-f0d75c210466)" fill-opacity=".25"
                              d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"/>
                        <defs>
                            <linearGradient id="c0458c57-1330-459f-9d5c-f0d75c210466" x1="1155.49" x2="-78.208"
                                            y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#9089FC"></stop>
                                <stop offset="1" stop-color="#FF80B5"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-indigo-700 py-24">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Boost your productivity.</span>
                    <span class="block">Start using Workflow today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">Ac euismod vel sit maecenas id pellentesque eu sed
                    consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                <a href="#"
                   class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                    Sign up for free
                </a>
            </div>
        </div>
        <x-testimonials-component/>
        
        <x-pricing-component/>
        <section id="faq" aria-labelledby="faq-title" class="relative overflow-hidden bg-slate-50 py-20 sm:py-32"><img
                alt="" src="/_next/static/media/background-faqs.55d2e36a.jpg" width="1558" height="946" decoding="async"
                data-nimg="1" class="absolute top-0 left-1/2 max-w-none translate-x-[-30%] -translate-y-1/4"
                loading="lazy" style="color:transparent">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="mx-auto max-w-2xl lg:mx-0"><h2 id="faq-title"
                                                           class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
                        Frequently asked questions</h2>
                    <p class="mt-4 text-lg tracking-tight text-slate-700">If you can’t find what you’re looking for,
                        email our support team and if you’re lucky someone will get back to you.</p></div>
                <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:max-w-none lg:grid-cols-3">
                    <li>
                        <ul role="list" class="flex flex-col gap-y-8">
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">Does TaxPal handle VAT?</h3>
                                <p class="mt-4 text-sm text-slate-700">Well no, but if you move your company offshore
                                    you can probably ignore it.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">Can I pay for my subscription
                                    via purchase order?</h3>
                                <p class="mt-4 text-sm text-slate-700">Absolutely, we are happy to take your money in
                                    all forms.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">How do I apply for a job at
                                    TaxPal?</h3>
                                <p class="mt-4 text-sm text-slate-700">We only hire our customers, so subscribe for a
                                    minimum of 6 months and then let’s talk.</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul role="list" class="flex flex-col gap-y-8">
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">What was that testimonial
                                    about tax fraud all about?</h3>
                                <p class="mt-4 text-sm text-slate-700">TaxPal is just a software application, ultimately
                                    your books are your responsibility.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">TaxPal sounds horrible but why
                                    do I still feel compelled to purchase?</h3>
                                <p class="mt-4 text-sm text-slate-700">This is the power of excellent visual design. You
                                    just can’t resist it, no matter how poorly it actually functions.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">I found other companies called
                                    TaxPal, are you sure you can use this name?</h3>
                                <p class="mt-4 text-sm text-slate-700">Honestly not sure at all. We haven’t actually
                                    incorporated or anything, we just thought it sounded cool and made this website.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul role="list" class="flex flex-col gap-y-8">
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">How do you generate
                                    reports?</h3>
                                <p class="mt-4 text-sm text-slate-700">You just tell us what data you need a report for,
                                    and we get our kids to create beautiful charts for you using only the finest
                                    crayons.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">Can we expect more inventory
                                    features?</h3>
                                <p class="mt-4 text-sm text-slate-700">In life it’s really better to never expect
                                    anything at all.</p></li>
                            <li><h3 class="font-display text-lg leading-7 text-slate-900">I lost my password, how do I
                                    get into my account?</h3>
                                <p class="mt-4 text-sm text-slate-700">Send us an email and we will send you a copy of
                                    our latest password spreadsheet so you can find your information.</p></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="bg-slate-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="py-16">
                <nav class="mt-10 text-sm" aria-label="quick links">
                    <div class="-my-1 flex justify-center gap-x-6"><a
                            class="inline-block rounded-lg py-1 px-2 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900"
                            href="/#features">Features</a><a
                            class="inline-block rounded-lg py-1 px-2 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900"
                            href="/#testimonials">Testimonials</a><a
                            class="inline-block rounded-lg py-1 px-2 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900"
                            href="/#pricing">Pricing</a></div>
                </nav>
            </div>
            <div
                class="flex flex-col items-center border-t border-slate-400/10 py-10 sm:flex-row-reverse sm:justify-between">
                <div class="flex gap-x-6"><a class="group" aria-label="TaxPal on Twitter" href="https://twitter.com">
                        <svg aria-hidden="true" class="h-6 w-6 fill-slate-500 group-hover:fill-slate-700">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 22 5.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 2.8 9.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.093 4.093 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 2 18.407a11.615 11.615 0 0 0 6.29 1.84"></path>
                        </svg>
                    </a><a class="group" aria-label="TaxPal on GitHub" href="https://github.com">
                        <svg aria-hidden="true" class="h-6 w-6 fill-slate-500 group-hover:fill-slate-700">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"></path>
                        </svg>
                    </a></div>
                <p class="mt-6 text-sm text-slate-500 sm:mt-0">Copyright ©
                    <!-- -->{{ date('Y') }}<!-- --> {{ config('app.name') }}. All rights
                    reserved.</p></div>
        </div>
    </footer>
</div>
</body>
</html>
