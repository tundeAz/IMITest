@extends('layouts/app')

@section('title', 'Contact Us | IMIconnect')

@section('content')

    <section class="container grid grid-cols-1 gap-5 mx-auto my-20 md:grid-cols-2 md:mt-30">
        <div>
            <h1 class="mb-6 font-bold leading-tight text-purple-900 text-8 md:text-10">Discover how IMIconnect can help your business.</h1>
            <div class="font-semibold leading-normal text-white xs:font-normal xs:text-gray-700">
                <p>Rapidly build, test and launch omnichannel communication workflows in a low-code, serverless environment. Alternatively, use our APIs to communicate over 10+ channels from any application.</p>
            </div>
        </div>
    </section>

    <section>
      @if(session()->has('message'))
      <div class="container mx-auto ">
          <strong class="bg-purple-500">Message Delivered Successfully!</strong><br>
          {{session()->get('message') }}
      </div>
      @endif
</section>

    <section class="my-20">
    <div class="container mx-auto">
        
            <form action="/contact" method="POST">
                <div class="form-group mb-2 ">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control py-3 bg-purple-200"/>
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control py-3 bg-purple-200"/>
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group mb-6">
                    <label for="name">Message</label>
                    <textarea name="message" id="" cols="30" rows="10"
                        class="form-control bg-purple-200">{{ old('message') }}
                    </textarea>
                    <div>{{ $errors->first('message') }}</div>
                </div>

                @csrf 

                <div class="flex flex-col text-center md:flex-row md:text-left md:items-center">
                  <button type="submit" class="inline-block px-12 py-5 mb-4 font-bold text-white bg-purple-900 
                  rounded shadow hover:shadow-lg md:mb-0" href="/contact">
                     Submit
                 </button>
                </div>
                
            </form>
       
    </div>
</section>

@endsection
