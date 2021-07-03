@extends('layouts/app')

@section('title', 'Multichannel Messaging Platform | IMIconnect')

@section('content')

    <section class="container grid grid-cols-1 gap-5 mx-auto my-20 md:grid-cols-2 md:my-30">
        <div>
            <h1 class="mb-6 font-bold leading-tight text-purple-900 text-8 md:text-10">Enterprise Cloud Communications Platform with Visual Flow Builder</h1>
            <div class="mb-10 leading-normal text-gray-700">
                <p>Rapidly build, test and launch omnichannel communication workflows in a low-code, serverless environment. Alternatively, use our APIs to communicate over 10+ channels from any application.</p>
            </div>
            <div class="flex flex-col items-center text-center md:flex-row md:text-left">
                <a class="inline-block px-8 py-5 mb-6 font-bold text-white bg-purple-900 rounded shadow lg:px-12 hover:shadow-lg md:mb-0" href="/contact">Request a demo</a><a class="text-purple-700 border-b border-gray-100 md:ml-10 hover:text-purple-900 hover:border-purple-900" href="#start">Find out more</a>
            </div>
        </div>
        <div class="pt-10 md:pt-0">
            <img class="w-full" src="/images/imiconnect.gif" alt="An example of the IMIconnect app flow builder">
        </div>
    </section>

    <section class="my-20 md:my-30" id="start">
        
        <div>
            <h2 class="sr-only">Why choose IMIconnect?</h2>
        </div>

        <div class="container grid grid-cols-1 mx-auto md:grid-cols-2 gap-15 md:gap-30">
            <article>
                <img class="mb-6" src="/images/buildingblock.svg" alt="">
                <h3 class="mb-4 font-semibold text-purple-900 uppercase tracking-loose">Spend less time coding</h3>
                <div class="leading-normal text-gray-600">
                <p>Leverage pre-built integrations with CRM, marketing, and contact center systems to consume events, process data, or trigger actions. Flexibly integrate with any backend system over a variety of interfaces, including REST/SOAP APIs, message queues, FTP/sFTP.</p>
                    <p>Expose custom integrations as reusable nodes across flows and quickly weave multiple systems into your customer journeys.</p>
                </div>
            </article>
            <article>
                <img class="mb-6" src="/images/engagement.svg" alt="">
                <h3 class="mb-4 font-semibold text-purple-900 uppercase tracking-loose">Drive customer engagement</h3>
                <div class="leading-normal text-gray-600">
                    <p>Improve customer experience using social hour and consent checks, contact policies, and rule-based channel routing. Build and manage comprehensive customer profiles along with their channel IDs. Securely access the data via both nodes and APIs.</p>
                    <p>Maximise response rates using powerful features such as geofencing, smartlinks, and deep linking.</p>
                </div>
            </article>
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

    <section>

        <div>
            <h2 class="sr-only">IMIconnect is perfect for developers</h2>
        </div>

        <div class="container grid grid-cols-1 gap-5 mx-auto md:grid-cols-2">
            <div class="flex items-center justify-between py-8 bg-white rounded shadow-md">
                <img class="flex-shrink-0 w-28" src="/images/launch.svg" aria-hidden>
                <div class="pl-8 leading-normal text-gray-600 pr-15">
                    <h3 class="mb-5 font-semibold text-purple-900 uppercase text-5">Quicker time to deploy</h3>
                    <p>Quickly add new channels to your communications mix. Build and launch multichannel customer journeys 10X faster using our visual designer.</p>
                </div>
            </div>
            <div class="flex items-center justify-between py-8 bg-white rounded shadow-md">
                <img class="flex-shrink-0 w-28" src="/images/global.svg" aria-hidden>
                <div class="pl-8 leading-normal text-gray-600 pr-15">
                    <h3 class="mb-5 font-semibold text-purple-900 uppercase text-5">Go zero devops</h3>
                    <p>Get rid of deployment and hosting challenges by leveraging our serverless architecture. Launch complex communication flows with zero DevOps.</p>
                </div>
            </div>
        </div>

    </section>

    <section class="py-20 md:py-30">

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