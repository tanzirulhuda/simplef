@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <div class="container m-auto text-center px-10 lg:px-48 opacity-100 py-10 lg:pt-36 lg:pb-20">
        <h2 class="text-3xl md:text-4xl font-bold mb-2 text-gray-800">Everything we do is driven by working to make <span
                class="text-sky-500">something different</span>
            and <span class="text-blue-400">simple</span>.</h2>
        <h3 class="text-xl md:text-2xl mb-8 text-gray-500">The general purpose of <span
                class="text-violet-600 font-semibold">Simplef</span>
            is to develop and promote advanced information technologies for multi-user operation.</h3>
        <a href="#explore">
            <button
                class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider hover:border-transparent hover:text-white hover:bg-violet-600">Explore</button>
        </a>
    </div>

    <!-- Products -->
    <section id="explore" class="container mx-auto px-6 p-10">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-28">Our Products</h2>
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 pr-10">
                <h4 class="text-3xl text-violet-600 font-bold mb-5">Notificationpro</h4>
                <p class="text-gray-600 mb-5">One of the best marketing tools ever with easy setup & integration on any
                    website. Do something cool and attractive to engage and keep your website visitors. You can create
                    different types of notifications to engage with your visitors and grow your online business. The cost to
                    run these campaigns from other companies is up to $500/year where we give the lowest price ever.</p>
                <a href="https://notificationpro.simplef.xyz"
                    class="bg-gradient-to-r from-violet-600 via-blue-500 to-sky-500 py-3 px-5 rounded-full text-center text-white hover:from-sky-500 hover:to-violet-600">Learn
                    more</a>
            </div>
            <div class="w-full md:w-1/2 mt-12 md:mt-0 shadow-lg">
                <img class="rounded-lg" src="{{ asset('img/notificationpro.png') }}" alt="Notificationpro" />
            </div>
        </div>
        {{-- <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
                <img class="rounded-lg" src="https://www.thesun.co.uk/wp-content/uploads/2019/06/SWJFO-EAPlay-08-1.jpg"
                    alt="use the force" />
            </div>
            <div class="w-full md:w-1/2 pl-10">
                <h4 class="text-3xl text-gray-800 font-bold mb-3">Use the Force!</h4>
                <p class="text-gray-600 mb-8">We'll never get it out now. So certain are you. Always with you it cannot be
                    done. Hear you nothing that I say? Master, moving stones around is one thing. This is totally different.
                    No! No different!</p>
            </div>
        </div>
        <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 pr-10">
                <h4 class="text-3xl text-gray-800 font-bold mb-3">Life creates it</h4>
                <p class="text-gray-600 mb-8">There is no try. I can't. It's too big. Size matters not. Look at me. Judge me
                    by my size, do you? Hm? Mmmm. And well you should not. For my ally in the Force. And a powerful ally it
                    is.</p>
            </div>
            <div class="w-full md:w-1/2">
                <img class="rounded-lg"
                    src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Ferikkain%2Ffiles%2F2018%2F01%2FRey-Luke.jpg"
                    alt="Syncing" />
            </div>
        </div> --}}
    </section>

    {{-- Teams --}}
    {{-- <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                    <p class="text-lg leading-relaxed m-4 text-slate-500">According to the National Oceanic and Atmospheric
                        Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6"><img alt="..."
                            src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-1-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto">
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ryan Tompson</h5>
                            <p class="mt-1 text-sm text-slate-400 uppercase font-semibold">Web Developer</p>
                            <div class="mt-6"><button
                                    class="bg-sky-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-twitter"></i></button><button
                                    class="bg-sky-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-facebook-square"></i></button><button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-dribbble"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6"><img alt="..."
                            data-cfsrc="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" data-cfstyle="max-width:120px"
                            style="max-width:120px"
                            src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg">
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Romina Hadid</h5>
                            <p class="mt-1 text-sm text-slate-400 uppercase font-semibold">Marketing Specialist</p>
                            <div class="mt-6"><button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-google"></i></button><button
                                    class="bg-sky-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-facebook-square"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6"><img alt="..."
                            data-cfsrc="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-3-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" data-cfstyle="max-width:120px"
                            style="max-width:120px"
                            src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-3-800x800.jpg">
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Alexa Smith</h5>
                            <p class="mt-1 text-sm text-slate-400 uppercase font-semibold">UI/UX Designer</p>
                            <div class="mt-6"><button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-google"></i></button><button
                                    class="bg-sky-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-twitter"></i></button><button
                                    class="bg-slate-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-instagram"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6"><img alt="..."
                            data-cfsrc="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-4-470x470.png"
                            class="shadow-lg rounded-full max-w-full mx-auto" data-cfstyle="max-width:120px"
                            style="max-width:120px"
                            src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-4-470x470.png">
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Jenna Kardi</h5>
                            <p class="mt-1 text-sm text-slate-400 uppercase font-semibold">Founder and CEO</p>
                            <div class="mt-6"><button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-dribbble"></i></button><button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-google"></i></button><button
                                    class="bg-sky-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-twitter"></i></button><button
                                    class="bg-slate-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button"><i class="fab fa-instagram"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonials -->




    <!--Call to Action-->
    <section style="background-color: #667eea">
        <div class="container mx-auto px-6 text-center py-20">
            <h2 class="mb-6 text-4xl font-bold text-center text-white">We would love to hear from you
            </h2>
            <h3 class="my-4 text-2xl text-white">We will get back to you.</h3>
            <button
                class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:border-violet-600 hover:text-white hover:bg-violet-600"><a
                    href="{{ route('contact') }}">Contact</a> </button>
        </div>
    </section>



@endsection

@section('footer')

    <!--Footer-->
    <footer class="relative bg-slate-200 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height:81px"><svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-slate-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg></div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-slate-600">Find us on any of these platforms, we respond 1-2 business
                        days.</h5>
                    <div class="mt-6">
                        <a href="https://www.facebook.com/simplef22" target="_blank">
                            <i
                                class="fab fa-facebook-square bg-white text-sky-600 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i
                                class="fab fa-twitter bg-white text-sky-400 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"></i>
                        </a>
                        </a>
                        <a href="#" target="_blank">
                            <i
                                class="fa-brands fa-instagram bg-white text-red-500 shadow-lg font-lg p-3 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 inline-block text-center"></i>

                        </a>
                    </div>

                </div>
                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full md:w-6/12 xl:w-4/12 pt-6 md:pt-0 md:px-4 ml-auto"><span
                                class="block uppercase text-slate-500 text-sm font-semibold mb-2">Products</span>
                            <ul class="list-unstyled">
                                <li><a class="text-slate-600 hover:text-slate-800 font-semibold block pb-2 text-sm"
                                        href="https://notificationpro.simplef.xyz" target="_blank">Notificationpro</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-6/12 xl:w-4/12 pt-6 md:pt-0 md:px-4 ml-auto"><span
                                class="block uppercase text-slate-500 text-sm font-semibold mb-2">USEFUL LINKS</span>
                            <ul class="list-unstyled">
                                <li><a class="text-slate-600 hover:text-slate-800 font-semibold block pb-2 text-sm"
                                        href="#" target="_blank">About us</a></li>
                                <li><a class="text-slate-600 hover:text-slate-800 font-semibold block pb-2 text-sm"
                                        href="#" target="_blank">Terms &amp; Conditions</a>
                                </li>
                                <li><a class="text-slate-600 hover:text-slate-800 font-semibold block pb-2 text-sm"
                                        href="#" target="_blank">Privacy Policy</a></li>
                                <li><a class="text-slate-600 hover:text-slate-800 font-semibold block pb-2 text-sm"
                                        href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-slate-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-slate-500 font-semibold py-1">Copyright © {{ now()->year }}
                        <!-- --> <a href="{{ url('/') }}" class="text-slate-500 hover:text-slate-800"
                            target="_blank">Simplef</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>


@endsection
