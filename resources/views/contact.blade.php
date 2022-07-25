@extends('layouts.master')
@section('title', 'Contact')

@section('content')

    <section class="pb-0 relative block bg-white">
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                </div>
            </div>

        </div>
    </section>
    <section class="relative block py-24 lg:pt-0 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-200">
                        <form action="{{route('contact-us')}}" method="POST">
                            @csrf
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">We would love to hear from you?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-slate-500">Complete this form and we will get back to
                                    you in 24 hours.</p>
                                <div class="relative w-full mb-3 mt-8"><label
                                        class="block uppercase text-slate-600 text-xs font-bold mb-2" for="full-name">Full
                                        Name</label><input type="text"
                                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Full Name" name="name" required></div>
                                <div class="relative w-full mb-3"><label
                                        class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email"
                                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Email" name="email" required></div>
                                <div class="relative w-full mb-3"><label
                                        class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                        for="subject">Subject</label><input type="text"
                                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Subject" name="subject" required></div>
                                <div class="relative w-full mb-3"><label
                                        class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                        for="message">Message</label>
                                    <textarea rows="4" cols="80"
                                        class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Type a message..." name="message" required></textarea>
                                </div>
                                <div class="text-center mt-6"><button
                                        class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="submit">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                        href="{{ route('contact') }}" target="_blank">Contact Us</a></li>
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
