@extends('Frontend.layout.app')
@section('style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .input-container {
            position: relative;
            width: 100%;
            height: 50px;
            overflow-x: clip;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;


            transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
            transform: translateX(100%);

        }

        .visible {
            transform: translateX(0);
        }

        .hidden {
            transform: translateX(-100%);
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .toggle-button {


            border-radius: 6px;
            cursor: pointer;
            background: #eff6ff;
            border: none;
            font-size: 18px;
            padding: 3px 6px;
            padding-left: 0px;
        }

        .input-wrapper input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
        }

        .or {
            margin: 0 10px;
            font-weight: 700
        }
    </style>
@endsection
@section('content')
    <!-- Contact Form with Left Image Slide -->
    <section class="container pb-md-5 pt-4 pt-md-0">
        <div class="row py-2 py-md-5">
            <div class="col-md-6 px-md-5 pb-5 pb-md-0">
                <div id="carouselExampleCaptions" class="px-md-5 carousel slide" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <span class="offer-box">
                        <p class="mb-0" style="font-size: 12px">Special Offer</p>
                        <strong>20% <span style="font-size: 12px">Off</span></strong>
                    </span>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img src="{{ asset('Frontend/images/cf/cf-1.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-2.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Digital Marketing</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Graphics Design</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-4.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Management Software</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-5.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mobile App Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-6.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SAAS</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-7.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>UI UX Design</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-8.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Video Editing</h5>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span aria-hidden="true">
                            <svg fill="#155AB4" height="25px" width="25px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512.006 512.006" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M388.419,475.59L168.834,256.005L388.418,36.421c8.341-8.341,8.341-21.824,0-30.165s-21.824-8.341-30.165,0
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    L123.586,240.923c-8.341,8.341-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c5.461,0,10.923-2.091,15.083-6.251C396.76,497.414,396.76,483.931,388.419,475.59z" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span aria-hidden="true">
                            <svg fill="#155AB4" height="25px" width="25px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 330 330" xml:space="preserve">
                                <path id="XMLID_222_"
                                    d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Right Side Contact Form -->
            <div class="col-md-6 pb-5 pb-md-0">
                <div class="section-title mb-4">
                    <h1>Grow Your <span class="section-title1">Business</span><br /> By <span
                            class="section-title1">Connecting</span> with Us</h1>
                </div>
                <p>Get in touch for personalized support and expert solutions tailored to your needs.</p>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" id="name" name="name" class="form-control" style="width: 100%"
                            placeholder="Name*" required value="{{ old('name') }}">
                    </div>
                    <input type="hidden" name="country_code" id="countryCode">
                    <div class="mb-3">
                        <div class="row gx-2">
                            <div class="col-lg-12">
                                <div class="input-container">
                                    <div id="email-input" class="input-wrapper hidden">
                                        <input id="number" pattern="[0-9]*" name="number" type="number"
                                            placeholder="Whatsapp Number" class="form-control" disabled />
                                        <span class="or ">Or</span>

                                        <button type="button" class="toggle-button" onclick="toggleInput()">
                                            <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z"
                                                    fill="white" />
                                                <path
                                                    d="M22.0515 8.52295L16.0644 13.1954L9.94043 8.52295V8.52421L9.94783 8.53053V15.0732L15.9954 19.8466L22.0515 15.2575V8.52295Z"
                                                    fill="#EA4335" />
                                                <path
                                                    d="M23.6231 7.38639L22.0508 8.52292V15.2575L26.9983 11.459V9.17074C26.9983 9.17074 26.3978 5.90258 23.6231 7.38639Z"
                                                    fill="#FBBC05" />
                                                <path
                                                    d="M22.0508 15.2575V23.9924H25.8428C25.8428 23.9924 26.9219 23.8813 26.9995 22.6513V11.459L22.0508 15.2575Z"
                                                    fill="#34A853" />
                                                <path d="M9.94811 24.0001V15.0732L9.94043 15.0669L9.94811 24.0001Z"
                                                    fill="#C5221F" />
                                                <path
                                                    d="M9.94014 8.52404L8.37646 7.39382C5.60179 5.91001 5 9.17692 5 9.17692V11.4651L9.94014 15.0667V8.52404Z"
                                                    fill="#C5221F" />
                                                <path d="M9.94043 8.52441V15.0671L9.94811 15.0734V8.53073L9.94043 8.52441Z"
                                                    fill="#C5221F" />
                                                <path
                                                    d="M5 11.4668V22.6591C5.07646 23.8904 6.15673 24.0003 6.15673 24.0003H9.94877L9.94014 15.0671L5 11.4668Z"
                                                    fill="#4285F4" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="whatsapp-input" class="input-wrapper visible">
                                        <input name="email" id="email" class="form-control" type="email"
                                            placeholder="Example@example.com" required="true" />
                                        <span class="or">Or</span>
                                        <button type="button" class="toggle-button" onclick="toggleInput()">
                                            <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z"
                                                    fill="#BFC8D0" />
                                                <path
                                                    d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                                    fill="url(#paint0_linear_87_7264)" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z"
                                                    fill="white" />
                                                <path
                                                    d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z"
                                                    fill="white" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_87_7264" x1="26.5"
                                                        y1="7" x2="4" y2="28"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#5BD066" />
                                                        <stop offset="1" stop-color="#27B43E" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select id="category" name="category" class="form-select" required>
                            <option value="">Select a Category*</option>
                            <option value="management-software">Management Software</option>
                            <option value="saas">SaaS (Software as a Service)</option>
                            <option value="web-development">Web Development</option>
                            <option value="app-development">Mobile App Development</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="ui-design">UI UX Design</option>
                            <option value="graphics-design">Graphics Design</option>
                            <option value="video-editing">Video Editing</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Send a Message*" required> {{ old('message') }}</textarea>
                    </div>
                    <button id="send" type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </section>

    <!-- Schedule -->
    <section class="container-fluid bg-testimonial">
        <div class="container py-5">
            <div class="row ">
                <div class="col-lg-6 text-start d-flex justify-content-center align-items-center pb-5">
                    <div class="w-100">
                        <h3 class="section-title text-light pb-3">Make Your Plan Happen</h3>
                        <p class="pb-3 text-white">Let's unite and craft something truly remarkable. We're excited
                            to collaborate and bring visionary ideas to life.</p>
                        <a href="{{ route('schedule') }}" class="btn-default btn btn-white font-main"
                            id="calendly-btn">Schedule A Meeting
                            <svg class="ms-3" width="15" height="14" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 14L14.5 1M14.5 1L14.5 13.48M14.5 1L2.02 1" class="icon-path"
                                    stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="{{ asset('Frontend') }}/images/src/x1.png" alt="synex">
                </div>
            </div>

        </div>
    </section>

    <!-- News Letter-->
    <x-newsletter />
@endsection

@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    <script>
        function toggleInput() {
            const emailInput = document.getElementById('email-input');
            const whatsappInput = document.getElementById('whatsapp-input');
            const emailField = emailInput.querySelector('input');
            const whatsappField = whatsappInput.querySelector('input');

            if (emailInput.classList.contains('visible')) {
                emailInput.classList.remove('visible');
                emailInput.classList.add('hidden');

                whatsappInput.classList.remove('hidden');
                whatsappInput.classList.add('visible');

                whatsappField.setAttribute('required', 'true');
                emailField.setAttribute('required', 'false');
                // Set disabled attribute
                whatsappField.removeAttribute('disabled');
                emailField.setAttribute('disabled', 'disabled');
            } else {
                whatsappInput.classList.remove('visible');
                whatsappInput.classList.add('hidden');

                emailInput.classList.remove('hidden');
                emailInput.classList.add('visible');


                whatsappField.removeAttribute('required');
                emailField.setAttribute('required', 'true');
                // Set disabled attribute
                emailField.removeAttribute('disabled');
                whatsappField.setAttribute('disabled', 'disabled');

            }

        }
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#number");

            // Function to initialize intl-tel-input
            function initializeIntlTelInput(initialCountry) {
                return window.intlTelInput(input, {
                    initialCountry: initialCountry,
                    separateDialCode: true,
                    // Uncomment the line below to use the utils script if needed
                    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
                });
            }

            // Function to get the selected country code
            function getCountryCode() {
                const countryData = iti.getSelectedCountryData();
                $('#countryCode').val(countryData.dialCode);
            }

            // Fetch the user's country code
            fetch('https://ipinfo.io?token=d54f029935345c') // Replace 'YOUR_ACCESS_TOKEN' with your IPinfo token
                .then(response => response.json())
                .then(data => {
                    const countryCode = data.country ? data.country.toLowerCase() :
                    'us'; // Default to 'us' if no country code is found
                    iti = initializeIntlTelInput(
                    countryCode); // Initialize intl-tel-input with the detected country code
                })
                .catch(error => {
                    console.error('Error fetching country code:', error);
                    iti = initializeIntlTelInput('us'); // Fallback to default country if there's an error
                });

            // Add event listener to the button
            document.querySelector("#send").addEventListener("click", getCountryCode);
        });
    </script>
@endsection
