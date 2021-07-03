@extends('layouts/app')

@section('title', 'Pricing | IMIconnect')

@section('content')

    <section class="container grid grid-cols-1 gap-5 mx-auto my-20 md:grid-cols-2 md:my-30">
        <div>
            <h1 class="mb-6 font-bold leading-tight text-purple-900 text-8 md:text-10">Easy to understand pricing...<br>just like our API.</h1>
            <div class="mb-10 font-semibold leading-normal text-white xs:font-normal xs:text-gray-700">
                <p>Rapidly build, test and launch omnichannel communication workflows in a low-code, serverless environment. Alternatively, use our APIs to communicate over 10+ channels from any application.</p>
            </div>
        </div>
    </section>

    <section>

        <div>
            <h2 class="sr-only">IMIconnect is perfect for developers</h2>
        </div>

        <div class="container grid grid-cols-1 gap-5 mx-auto md:grid-cols-2">
            <div class="flex items-start justify-between py-8 bg-white rounded shadow-md">
                <img class="flex-shrink-0 w-28" src="/images/launch.svg" aria-hidden>
                <div class="pl-8 leading-normal text-gray-600 pr-15">
                    <h3 class="flex justify-between mb-5 font-semibold text-purple-900 uppercase text-5"><span>Starter</span> <span class="self-end">$199p/m</span></h3>
                    <p>Select this plan if you have limited needs, and want to start small and scale as your communications volumes increase.</p>
                    <ul class="leading-none">
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">5000 flow executions. Additional flow executions to cost £0.09/flow</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">All channels. Channel usage charged separately.</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Limited pre-built integrations</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Unlimited self-service addition of new integrations [REST, SOAP]</span>
                        </li>
                        <li class="flex flex-row items-start">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Up to 10 users</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-start justify-between py-8 bg-white rounded shadow-md">
                <img class="flex-shrink-0 w-28" src="/images/global.svg" aria-hidden>
                <div class="pl-8 leading-normal text-gray-600 pr-15">
                    <h3 class="flex justify-between mb-5 font-semibold text-purple-900 uppercase text-5"><span>Enterprise</span> <span class="self-end">POA</span></h3>
                    <p>Looking for advanced features, high-performance and scalable infrastructure? We can share a customized plan to suit your unique requirements.</p>
                    <ul class="leading-none">
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">All channels. Channel usage charged separately.</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">All pre-built integrations</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Unlimited users along with role based access control</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Custom TPS to support high transaction volume</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Additional product support via live chat and phone</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Operations support via ticketing</span>
                        </li>
                        <li class="flex flex-row items-start mb-3">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Option for private cloud hosting (EU)</span>
                        </li>
                        <li class="flex flex-row items-start">
                            <img class="flex-shrink-0 mr-3" src="/images/tick.svg" aria-hidden><span class="leading-tight">Option for private cloud hosting (EU)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="container mx-auto my-20 md:my-30">
        <ul class="flex flex-col items-center justify-between -mx-4 md:flex-row">
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/greenpeace.svg" alt="Greenpeace relies on IMIconnect for multichannel communication">
            </li>
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/bookers.svg" alt="Booker relies on IMIconnect for multichannel communication">
            </li>
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/tastecard.svg" alt="Tastecard relies on IMIconnect for multichannel communication">
            </li>
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/johnlewis.svg" alt="John Lewis relies on IMIconnect for multichannel communication">
            </li>
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/latasca.svg" alt="La Tasca relies on IMIconnect for multichannel communication">
            </li>
            <li class="px-4 my-4 md:my-0">
                <img src="/images/logos/justeat.svg" alt="Just Eat relies on IMIconnect for multichannel communication">
            </li>
        </ul>
    </section>

    <section class="my-20 md:my-30">

        <div class="container flex flex-col justify-between mx-auto lg:flex-row lg:items-end">
            <div class="mb-10 text-center lg:mb-0 md:text-left">
                <h2 class="mb-3 text-purple-700 text-5 md:text-8">Ready to get started?</h2>
                <p class="font-bold text-purple-900 text-8 md:text-10">Get in touch or book a demo</p>
            </div>
            <div class="flex flex-col text-center md:flex-row md:text-left md:items-center">
                <a class="inline-block px-12 py-5 mb-4 font-bold text-white bg-purple-900 rounded shadow hover:shadow-lg md:mb-0" href="/contact">Request a demo</a><a class="text-purple-700 border-b border-gray-100 md:ml-10 hover:text-purple-900 hover:border-purple-900" href="/contact">Contact us</a>
            </div>
        </div>

    </section>

@endsection