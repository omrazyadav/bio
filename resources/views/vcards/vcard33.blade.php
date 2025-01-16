<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Musician</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">

    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard33.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
</head>

<body>
    <div class="container p-0">
        <div class="main-content mx-auto w-100 overflow-hidden position-relative bg-black">
            <div class="banner-section position-relative">
                <div class="banner-img">
                    <img src="{{ asset('assets/img/vcard33/banner-img.png') }}" class="w-100 h-100 object-fit-cover"
                        alt="banner" />
                </div>
                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3">
                    <div class="language pt-3 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 mt-0">
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/english.png') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/spain.png') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/france.png') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/arabic.svg') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/german.png') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/russian.jpeg') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/vcard1/turkish.png') }}" width="25px"
                                            height="20px" class="me-3" loading="lazy"><a href="#">Turkish</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile-section px-40 pb-60">
                <div class="card d-flex flex-sm-row gap-4 mb-5">
                    <div class="card-img position-relative">
                        <img src="{{ asset('assets/img/vcard33/profile-img.png') }}" class="w-100 h-100 object-fit-cover" />
                        <div class="profile-bg">
                            <img src="{{ asset('assets/img/vcard33/headphone.png') }}" alt="bg-img" />
                        </div>
                    </div>
                    <div class="card-body pt-sm-4 mt-sm-3 p-0 text-sm-start text-center">
                        <div class="profile-name">
                            <h2 class="text-white mb-0 fs-28 fw-6">John Smith</h2>
                            <p class="fs-20 text-primary mb-0 fw-6">Musician</p>
                        </div>
                    </div>
                </div>
                <p class="text-gray profile-desc mb-0 fs-14 text-sm-start text-center">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="social-media-section px-40">
                <div class="social-media d-flex flex-wrap justify-content-center">
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="13" height="25" viewBox="0 0 13 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.73824 14.111C3.18372 14.111 2.67459 14.111 2.16547 14.111C1.73123 14.111 1.297 14.1191 0.863524 14.1077C0.409622 14.0963 0.261348 13.9494 0.257565 13.4637C0.24773 12.1911 0.246974 10.9177 0.258322 9.64513C0.262861 9.16352 0.421726 9.01088 0.869577 9.00761C1.7093 9.0019 2.54901 9.00598 3.38949 9.00598C3.49237 9.00598 3.59526 9.00598 3.73824 9.00598C3.73824 8.86803 3.73673 8.74967 3.73824 8.63213C3.75791 7.47219 3.71706 6.30737 3.80935 5.15396C4.04311 2.21618 6.12123 0.118347 8.85372 0.0228425C9.96578 -0.0163388 11.0809 0.00570066 12.1937 0.00896577C12.5855 0.00978205 12.7444 0.182833 12.7459 0.607297C12.7512 1.79825 12.7512 2.99001 12.7467 4.18096C12.7452 4.63726 12.5969 4.80297 12.1619 4.81358C11.3978 4.83317 10.6338 4.83317 9.86894 4.84623C9.01183 4.8601 8.65173 5.22172 8.63357 6.13513C8.61542 7.05834 8.62979 7.98318 8.62979 8.94231C8.75915 8.94231 8.85977 8.94231 8.96038 8.94231C9.93249 8.94231 10.9046 8.94068 11.8767 8.94313C12.4895 8.94394 12.6332 9.0974 12.634 9.74716C12.6347 10.9585 12.6362 12.1707 12.6332 13.382C12.6317 13.9241 12.4993 14.0702 11.994 14.0726C10.8902 14.0775 9.78649 14.0742 8.63055 14.0742C8.63055 14.2163 8.63055 14.3428 8.63055 14.4685C8.63055 17.6553 8.63055 20.8428 8.63055 24.0296C8.63055 24.9079 8.54431 24.9993 7.71669 24.9993C6.63111 24.9993 5.54628 25.0009 4.4607 24.9985C3.8797 24.9977 3.73824 24.8467 3.73824 24.2263C3.73748 20.9881 3.73748 17.7499 3.73748 14.5126C3.73824 14.3926 3.73824 14.2726 3.73824 14.111Z"
                                fill="#0C0A0B" />
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25 11.2255C25 11.7142 25 12.2023 25 12.691C24.9608 13.0127 24.9289 13.3351 24.8818 13.6556C24.5001 16.2477 23.401 18.4907 21.5606 20.3586C19.5879 22.3612 17.1968 23.5417 14.4032 23.8652C11.9606 24.1484 9.63499 23.7203 7.44909 22.582C7.29838 22.5037 7.17034 22.4731 6.99451 22.5361C5.70062 22.9998 4.40059 23.4456 3.10363 23.9013C2.06827 24.2646 1.03475 24.6335 0 24.9998C0.0214424 24.8977 0.0312446 24.7919 0.0655525 24.694C0.831352 22.5006 1.59593 20.306 2.37398 18.1169C2.46526 17.8607 2.45852 17.6619 2.3311 17.4136C1.15666 15.1284 0.770088 12.702 1.14686 10.1692C1.52547 7.62348 2.62516 5.41175 4.44715 3.58781C7.14951 0.883092 10.4339 -0.285771 14.2347 0.0585876C16.545 0.267772 18.6224 1.12041 20.4358 2.57308C22.7976 4.4643 24.2746 6.89378 24.8101 9.87863C24.8897 10.3245 24.9375 10.7765 25 11.2255ZM10.2899 9.86701C10.3052 9.8401 10.3077 9.83153 10.3132 9.82603C10.6287 9.50797 10.946 9.19236 11.2591 8.87247C11.6267 8.4963 11.6267 8.092 11.2554 7.71706C10.7224 7.17942 10.187 6.64361 9.64785 6.11148C9.26802 5.73654 8.86796 5.73654 8.48935 6.10903C8.09481 6.49743 7.71498 6.90112 7.31063 7.27912C6.85299 7.70727 6.71698 8.23146 6.77886 8.82965C6.8824 9.82419 7.29287 10.708 7.80013 11.5466C9.11915 13.7265 10.8688 15.4985 12.9929 16.9004C13.8518 17.4674 14.764 17.9322 15.7871 18.139C16.5737 18.298 17.2673 18.1848 17.826 17.5389C18.1446 17.1707 18.514 16.8459 18.8583 16.4991C19.2528 16.1009 19.2522 15.707 18.8546 15.3064C18.3498 14.7981 17.8413 14.2929 17.334 13.7871C16.8684 13.3228 16.5008 13.3216 16.0377 13.7834C15.7338 14.0868 15.4312 14.3914 15.131 14.6923C12.9506 13.625 11.3485 12.0249 10.2899 9.86701Z"
                                fill="#0C0A0B" />
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.9835 15.1364C24.9754 13.9761 24.8597 12.8224 24.5223 11.7013C24.1002 10.2972 23.3351 9.16794 21.9702 8.52381C20.9158 8.02643 19.7914 7.88701 18.6425 7.92125C16.6314 7.98159 15.0042 8.75781 13.9164 10.5125C13.9042 10.532 13.8716 10.5394 13.8031 10.5785C13.8031 9.808 13.8031 9.07173 13.8031 8.33464C12.1303 8.33464 10.4982 8.33464 8.87012 8.33464C8.87012 13.9036 8.87012 19.4505 8.87012 24.9999C10.5935 24.9999 12.2892 24.9999 14.0288 24.9999C14.0288 24.8474 14.0288 24.7267 14.0288 24.6052C14.0288 22.001 14.0215 19.3959 14.0346 16.7916C14.037 16.2135 14.0745 15.6313 14.1568 15.0598C14.3817 13.4926 15.1786 12.6455 16.6257 12.4742C18.2155 12.2867 19.3253 12.8664 19.6398 14.573C19.7514 15.1796 19.8003 15.805 19.8044 16.4222C19.8223 19.1488 19.8142 21.8754 19.815 24.602C19.815 24.7194 19.815 24.836 19.815 24.9477C21.5669 24.9477 23.2699 24.9477 24.9884 24.9477C24.9933 24.8792 25.0006 24.8303 25.0006 24.7805C24.9965 21.5664 25.0047 18.3514 24.9835 15.1364Z"
                                fill="#0C0A0B" />
                            <path
                                d="M0.430664 24.9884C2.1573 24.9884 3.86764 24.9884 5.58369 24.9884C5.58369 19.4268 5.58369 13.8881 5.58369 8.33054C3.86357 8.33054 2.16056 8.33054 0.430664 8.33054C0.430664 13.8987 0.430664 19.4382 0.430664 24.9884Z"
                                fill="#0C0A0B" />
                            <path
                                d="M2.98067 -3.34959e-05C1.34204 0.0146431 -0.000814466 1.36815 3.70634e-07 3.00377C0.000815207 4.66711 1.37381 6.04345 3.02223 6.03366C4.66168 6.02388 6.00616 4.64999 5.99638 2.99235C5.98742 1.32901 4.63316 -0.0147101 2.98067 -3.34959e-05Z"
                                fill="#0C0A0B" />
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.9972 5.76109C24.9972 10.2528 24.9972 14.7438 24.9972 19.2356C24.8986 19.7025 24.8405 20.1833 24.6945 20.635C23.8431 23.2619 21.4807 24.9853 18.7086 24.993C14.5676 25.0044 10.4267 24.9991 6.28576 24.9945C4.95589 24.993 3.72997 24.6254 2.65308 23.8381C0.873808 22.5373 0.000985528 20.768 0.000985528 18.566C0.000221236 14.539 -0.00207164 10.5119 0.00480699 6.48487C0.00557128 6.07215 0.0246786 5.65179 0.098815 5.24672C0.518412 2.93702 1.8307 1.3259 3.99824 0.443901C4.55388 0.217671 5.17219 0.143534 5.76146 -0.000152588C10.2532 -0.000152588 14.7442 -0.000152588 19.2359 -0.000152588C19.411 0.0311834 19.5867 0.0602265 19.761 0.0930911C22.0554 0.526445 23.662 1.82574 24.5455 3.97723C24.7771 4.53898 24.8512 5.16494 24.9972 5.76109ZM22.8992 12.4983C22.9022 12.4983 22.9053 12.4983 22.9084 12.4983C22.9084 10.4645 22.9045 8.43076 22.9107 6.39621C22.9122 5.74427 22.8251 5.11144 22.5339 4.52522C21.7451 2.93626 20.4588 2.0963 18.6803 2.09019C14.5554 2.07567 10.4305 2.08484 6.30564 2.0879C6.06259 2.0879 5.81802 2.11082 5.57803 2.14522C3.68488 2.41196 2.11731 4.12397 2.10508 6.04082C2.0768 10.2956 2.09362 14.5505 2.09133 18.8053C2.09133 19.3831 2.20444 19.941 2.45895 20.4577C3.2584 22.0772 4.56916 22.9042 6.37824 22.9065C10.4542 22.9126 14.5302 22.9095 18.6062 22.9057C18.8813 22.9057 19.1587 22.8843 19.4316 22.8468C21.2881 22.5923 22.8671 20.8612 22.8923 18.9895C22.9221 16.8265 22.8992 14.6628 22.8992 12.4983Z"
                                fill="#0C0A0B" />
                            <path
                                d="M18.7465 12.5289C18.7136 15.9896 15.8788 18.7908 12.4548 18.7457C8.99792 18.7006 6.21742 15.8872 6.25029 12.4663C6.28315 9.00401 9.11562 6.20593 12.5412 6.24949C15.9988 6.29459 18.7793 9.10795 18.7465 12.5289ZM12.5022 8.33754C10.2032 8.33372 8.34751 10.1833 8.33834 12.4884C8.3284 14.7844 10.1765 16.6439 12.4831 16.6592C14.7859 16.6737 16.6615 14.8042 16.6592 12.4961C16.6569 10.194 14.8043 8.34136 12.5022 8.33754Z"
                                fill="#0C0A0B" />
                            <path
                                d="M19.2807 7.28205C18.4109 7.28816 17.7139 6.59648 17.7139 5.72747C17.7146 4.87223 18.3987 4.18055 19.257 4.16679C20.1046 4.15303 20.8322 4.87452 20.8314 5.72824C20.8314 6.5789 20.1351 7.27593 19.2807 7.28205Z"
                                fill="#0C0A0B" />
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="25" height="22" viewBox="0 0 25 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.3889 16.6212C5.04233 16.3166 3.48547 15.211 2.60551 12.9999C3.36137 12.9999 4.02699 12.9999 4.68132 12.9999C2.3009 12.0635 0.958396 10.4277 0.789172 7.83289C1.51119 8.03595 2.17681 8.22774 2.84242 8.40825C2.87627 8.36312 2.91011 8.31799 2.94395 8.27287C1.95118 7.47188 1.24044 6.4791 0.99224 5.21556C0.744045 3.95202 0.856861 2.73361 1.54504 1.48135C4.388 4.71917 7.86273 6.60319 12.1384 6.87395C12.1384 6.40012 12.1272 5.99399 12.1384 5.58785C12.2061 3.43307 13.2666 1.86493 15.1958 0.996244C17.0798 0.150124 18.93 0.375756 20.5545 1.70698C21.0058 2.07928 21.4119 2.15825 21.9196 1.95518C22.698 1.65058 23.4764 1.34597 24.3226 1.03009C23.9616 2.15825 23.217 2.9254 22.4385 3.76023C23.2508 3.54588 24.0631 3.32025 24.8754 3.1059C24.9092 3.13975 24.9543 3.17359 24.9882 3.20743C24.3451 3.87305 23.7359 4.59507 23.0365 5.19299C22.6529 5.52016 22.5062 5.84733 22.4949 6.33243C22.4273 9.72819 21.4119 12.8081 19.3135 15.4931C16.4931 19.1145 12.7477 20.9421 8.13348 21.0323C5.49359 21.0888 3.02293 20.536 0.698919 19.2837C0.473287 19.1596 0.247656 19.0242 0.0107422 18.8324C2.68448 18.9565 5.1213 18.3248 7.3889 16.6212Z"
                                fill="#0C0A0B" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contact-section pt-60 px-40">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="contact-box d-flex align-items-center">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <svg width="22" height="15" viewBox="0 0 22 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0229 0.00124986C13.824 0.00124986 16.6195 -0.00374959 19.4206 0.00624932C19.7869 0.00624932 20.1589 0.0412455 20.5139 0.111238C21.1508 0.241224 21.5904 0.601185 21.8666 1.12113C22.1089 1.57608 22.03 1.82605 21.5566 2.09102C20.9423 2.43599 20.3223 2.77595 19.708 3.12091C17.0253 4.63575 14.3425 6.14058 11.671 7.66542C11.1863 7.94539 10.8031 7.93539 10.3184 7.66042C7.06643 5.80562 3.79755 3.97582 0.534299 2.13602C0.466667 2.09602 0.393399 2.06103 0.331403 2.02103C0.0101504 1.82605 -0.0518457 1.67107 0.0608744 1.3461C0.337039 0.546191 1.02463 0.0812412 2.03348 0.0312466C2.43927 0.0112488 2.84506 0.0112488 3.24522 0.00624932C5.83778 0.00624932 8.43034 0.00624932 11.0229 0.00124986Z"
                                        fill="#0BC5FF" />
                                    <path
                                        d="M10.9765 14.995C8.13035 14.995 5.2898 15 2.44362 14.99C2.08855 14.99 1.72221 14.955 1.37841 14.87C0.685182 14.695 0.256845 14.2601 0.0483128 13.6551C-0.0587713 13.3402 0.00322478 13.1852 0.324477 13.0052C2.95086 11.5404 5.57723 10.0755 8.20361 8.61069C8.47978 8.4557 8.77285 8.4557 9.04901 8.60069C9.54498 8.86066 10.0297 9.13063 10.5144 9.4056C10.9145 9.63558 11.0836 9.64058 11.4725 9.4156C11.9854 9.12063 12.5039 8.83566 13.0168 8.54069C13.2929 8.38071 13.5409 8.43071 13.7945 8.57569C14.6343 9.05564 15.4741 9.53059 16.3195 10.0055C18.0441 10.9754 19.7743 11.9353 21.499 12.9052C22.0287 13.2002 22.1133 13.4452 21.854 13.9401C21.499 14.61 20.8564 14.895 20.073 14.98C19.8758 15 19.6785 15 19.4813 15C16.6464 14.995 13.8114 14.995 10.9765 14.995Z"
                                        fill="#0BC5FF" />
                                    <path
                                        d="M0.0429635 11.5204C0.0429635 8.83066 0.0429635 6.18595 0.0429635 3.49624C2.42136 4.8411 4.76594 6.16095 7.14997 7.50581C4.77157 8.85066 2.42699 10.1755 0.0429635 11.5204Z"
                                        fill="#0BC5FF" />
                                    <path
                                        d="M14.871 7.50581C17.2438 6.16596 19.5884 4.8411 21.9667 3.49624C21.9667 6.17595 21.9667 8.81567 21.9667 11.5104C19.594 10.1755 17.2494 8.85067 14.871 7.50581Z"
                                        fill="#0BC5FF" />
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <a href="mailto:john@gmail.com" class="text-white fw-5">john@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="contact-box d-flex align-items-center">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.03788 8.65636C5.68074 11.8074 8.01407 14.1974 11.0974 15.8383C11.2284 15.9096 11.5379 15.8264 11.6688 15.7075C12.3712 15.0416 13.0617 14.3639 13.7284 13.6623C14.0974 13.2699 14.5022 13.2105 15.0141 13.3056C16.2284 13.5196 17.4545 13.7337 18.6807 13.8763C19.6569 13.9952 20.0022 14.3163 20.0022 15.3151C20.0022 16.3853 20.0022 17.4435 20.0022 18.5137C20.0022 19.6671 19.6331 20.0238 18.4545 20C10.0736 19.8573 2.57359 13.912 0.597401 5.75505C0.252163 4.31629 0.14502 2.80618 0.0140678 1.31986C-0.0692655 0.439952 0.41883 0.0118906 1.29978 0.0118906C2.46645 0 3.63312 0 4.79978 0C5.65693 0 6.01407 0.39239 6.12121 1.24851C6.28788 2.50892 6.51407 3.76932 6.75216 5.01784C6.8474 5.55291 6.75216 5.98098 6.35931 6.36147C5.57359 7.12247 4.81169 7.88347 4.03788 8.65636Z"
                                        fill="#0BC5FF" />
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <a href="tel:+1 4078461474" class="text-white fw-5">+1 4078461474</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-sm-0 mb-4">
                        <div class="contact-box d-flex align-items-center">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1990_491)">
                                        <path
                                            d="M0.31262 20C0.211822 19.8165 0.0505452 19.6427 0.0203058 19.4495C-0.0300932 19.1019 0.0203058 18.7446 0.000146203 18.3969C-0.0099336 18.0782 0.131184 17.9141 0.473897 17.9237C0.574695 17.9237 0.675493 17.9237 0.776291 17.9237C8.26558 17.9237 15.7448 17.9237 23.2341 17.9334C23.4861 17.9334 23.7381 18.0299 23.9901 18.0782C23.9901 18.7156 23.9901 19.3626 23.9901 20C16.1077 20 8.2051 20 0.31262 20Z"
                                            fill="#0BC5FF" />
                                        <path
                                            d="M12.0254 8.18927C14.7167 8.18927 17.408 8.18927 20.1094 8.18927C21.6315 8.18927 22.3774 8.91356 22.3874 10.3814C22.3874 10.4008 22.3874 10.4104 22.3874 10.4297C22.5689 11.2796 22.1556 11.7624 21.3694 12.0908C20.5731 12.4191 19.807 12.4867 19.1115 11.9169C18.7688 11.6369 18.4866 11.2989 18.2043 10.9609C17.8314 10.5263 17.4786 10.5166 17.0956 10.9416C16.8436 11.2216 16.5916 11.5017 16.3093 11.7431C15.513 12.4288 14.6361 12.506 13.739 11.9556C13.3358 11.7045 12.9729 11.3858 12.6201 11.0671C12.1363 10.6325 11.9246 10.6325 11.4509 11.0864C11.1787 11.3472 10.8965 11.5983 10.584 11.8107C9.52563 12.5447 8.56805 12.4964 7.58023 11.6852C7.42903 11.5596 7.28791 11.4244 7.15687 11.2796C6.48153 10.536 6.34041 10.536 5.66506 11.3085C4.7478 12.3515 3.58863 12.5833 2.29841 12.0232C1.79442 11.8011 1.60291 11.4631 1.6533 10.9609C1.68354 10.7194 1.71378 10.478 1.68354 10.2462C1.51219 9.05842 2.51009 8.16996 3.8003 8.17961C6.53193 8.20858 9.27363 8.18927 12.0254 8.18927Z"
                                            fill="#0BC5FF" />
                                        <path
                                            d="M22.1861 16.62C15.4024 16.62 8.64894 16.62 1.86523 16.62C1.86523 15.606 1.86523 14.592 1.86523 13.5394C3.54856 14.0802 5.02021 13.7325 6.22979 12.4867C8.24575 14.3409 10.1004 14.0898 12.0458 12.4288C14.4549 14.4375 16.1886 13.9739 17.8316 12.3998C18.386 12.9696 18.9908 13.4911 19.8174 13.6939C20.6338 13.8967 21.3999 13.7325 22.2063 13.4042C22.1861 14.4858 22.1861 15.5287 22.1861 16.62Z"
                                            fill="#0BC5FF" />
                                        <path
                                            d="M10.5836 7.2815C10.5836 6.32544 10.5735 5.3887 10.5937 4.44229C10.6037 4.13326 10.8356 3.94978 11.1682 3.94978C11.7226 3.94012 12.277 3.94012 12.8213 3.94978C13.2043 3.94978 13.4261 4.16224 13.4261 4.51955C13.4462 5.42732 13.4362 6.34475 13.4362 7.2815C12.4786 7.2815 11.5512 7.2815 10.5836 7.2815Z"
                                            fill="#0BC5FF" />
                                        <path
                                            d="M12.015 0C12.257 0.424915 12.5392 0.907774 12.8113 1.40029C12.9323 1.6224 13.0936 1.84452 13.1641 2.08595C13.3153 2.61709 13.0734 3.19652 12.64 3.4283C12.2066 3.66007 11.5413 3.59247 11.1885 3.28344C10.8155 2.94544 10.6946 2.29841 10.9567 1.82521C11.2994 1.18783 11.6723 0.569773 12.015 0Z"
                                            fill="#0BC5FF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1990_491">
                                            <rect width="24" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <p class="mb-0 text-white fw-5">12th June, 1990</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-box d-flex align-items-center">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <svg width="18" height="24" viewBox="0 0 18 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1990_518)">
                                        <path
                                            d="M8.99374 19.6847C8.69236 19.3226 8.4028 18.979 8.11915 18.6322C6.58862 16.7439 5.14082 14.7906 3.88803 12.6887C3.32368 11.7446 2.83024 10.7633 2.40772 9.73866C1.63064 7.84726 1.7636 5.98682 2.62046 4.1852C3.72847 1.85732 5.54561 0.470506 8.00392 0.0835592C11.7859 -0.510791 15.3788 2.26904 15.9964 6.19732C16.1973 7.48508 16.0052 8.69236 15.5236 9.87487C14.9859 11.1936 14.2915 12.4194 13.5351 13.605C12.1848 15.7162 10.675 17.6943 9.06761 19.595C9.04988 19.6166 9.0292 19.6414 8.99374 19.6847ZM12.5482 6.80405C12.5512 4.75478 10.9557 3.08627 8.9967 3.08627C7.03478 3.08627 5.4422 4.75169 5.4422 6.80096C5.4422 8.85023 7.03478 10.5187 8.99374 10.5187C10.9527 10.5187 12.5453 8.85642 12.5482 6.80405Z"
                                            fill="#0BC5FF" />
                                        <path
                                            d="M6.23156 17.1619C5.88881 17.2145 5.54902 17.264 5.21219 17.3259C4.19577 17.5086 3.20004 17.7655 2.26045 18.2267C1.89406 18.4094 1.54541 18.6199 1.25881 18.9263C0.797873 19.4216 0.797873 19.9293 1.27062 20.4153C1.67246 20.8301 2.17181 21.0716 2.68888 21.2821C3.69052 21.6845 4.73648 21.9043 5.79722 22.0529C7.25979 22.2603 8.73123 22.3098 10.2056 22.2355C11.8573 22.1519 13.4912 21.9352 15.0661 21.3719C15.5329 21.2047 15.988 21.0066 16.3898 20.697C16.57 20.5577 16.7444 20.3967 16.8832 20.2141C17.1521 19.8612 17.161 19.4681 16.8832 19.1245C16.6941 18.8892 16.4607 18.6756 16.2125 18.5084C15.5182 18.041 14.7381 17.7748 13.9404 17.5829C13.2785 17.425 12.6078 17.3228 11.94 17.1959C11.8809 17.1835 11.8248 17.1743 11.7657 17.165C11.875 16.9235 11.8957 16.9173 12.135 16.9359C13.1219 17.0164 14.1058 17.1278 15.072 17.3538C15.5979 17.4745 16.118 17.62 16.5937 17.8831C16.8921 18.0472 17.1876 18.2391 17.4328 18.4744C18.0622 19.0811 18.1744 19.9231 17.7726 20.7156C17.5569 21.1428 17.2407 21.4802 16.8803 21.7743C16.0943 22.4151 15.1991 22.8392 14.2595 23.1642C12.2828 23.8483 10.247 24.0743 8.17279 23.9814C6.58021 23.9071 5.02309 23.6378 3.51619 23.0744C2.58842 22.7277 1.70496 22.2943 0.948562 21.6133C0.617636 21.3161 0.33694 20.9694 0.159659 20.5453C-0.138766 19.8303 -0.00284963 19.0749 0.520131 18.5208C0.957426 18.0565 1.50995 17.7996 2.08612 17.5983C2.87502 17.3228 3.69052 17.1804 4.51192 17.0752C4.96695 17.0164 5.42197 16.9823 5.87995 16.9328C6.10155 16.9111 6.11928 16.9235 6.23156 17.1619Z"
                                            fill="#0BC5FF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1990_518">
                                            <rect width="18" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="contact-desc">
                                <p class="mb-0 text-white fw-5">New York, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section pt-60 position-relative">
                <div class="gallery-bg text-end">
                    <img src="{{ asset('assets/img/vcard33/gallery-bg.png') }}" alt="bg-img" />
                </div>
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Gallery</h2>
                </div>
                <div class="gallery-slider px-sm-0 px-40">
                    <div>
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard33/gallery-img1.png') }}"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                    </div>
                    <div>
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard33/gallery-img2.png') }}"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                    </div>
                    <div>
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard33/gallery-img3.png') }}"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services-section pt-60 px-40">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Our Services</h2>
                </div>
                <div class="services">
                    <div class="row">
                        <div class="col-sm-6 mb-sm-0 mb-40">
                            <div class="service-card h-100">
                                <div class="card-img d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('assets/img/vcard33/service-img1.png') }}" class="h-100" />
                                </div>
                                <div class="card-body p-0">
                                    <h3 class="card-title fs-18 fw-6 text-white mb-10">
                                        Lorem Ipsum
                                    </h3>
                                    <p class="mb-0 fs-14 text-gray">
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-card h-100">
                                <div class="card-img d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('assets/img/vcard33/service-img2.png') }}" class="h-100" />
                                </div>
                                <div class="card-body p-0">
                                    <h3 class="card-title fs-18 fw-6 text-white mb-10">
                                        Lorem Ipsum
                                    </h3>
                                    <p class="mb-0 fs-14 text-gray">
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appointment-section pt-60 px-40">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Make an Appointment</h2>
                </div>
                <div class="appointment">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="mt-sm-3 mb-2 fw-5 text-white">Date:</label>
                            </div>
                            <div class="col-sm-10 mb-4">
                                <div class="position-relative">
                                    <input type="text" class="form-control appointment-input"
                                        placeholder="Pick a Date" />
                                    <span class="calendar-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.25 9.375V10.625C6.25 10.9705 5.97047 11.25 5.625 11.25H4.375C4.02953 11.25 3.75 10.9705 3.75 10.625V9.375C3.75 9.02953 4.02953 8.75 4.375 8.75H5.625C5.97047 8.75 6.25 9.02953 6.25 9.375ZM5.625 13.75H4.375C4.02953 13.75 3.75 14.0295 3.75 14.375V15.625C3.75 15.9705 4.02953 16.25 4.375 16.25H5.625C5.97047 16.25 6.25 15.9705 6.25 15.625V14.375C6.25 14.0295 5.97047 13.75 5.625 13.75ZM10.625 8.75H9.375C9.02953 8.75 8.75 9.02953 8.75 9.375V10.625C8.75 10.9705 9.02953 11.25 9.375 11.25H10.625C10.9705 11.25 11.25 10.9705 11.25 10.625V9.375C11.25 9.02953 10.9705 8.75 10.625 8.75ZM10.625 13.75H9.375C9.02953 13.75 8.75 14.0295 8.75 14.375V15.625C8.75 15.9705 9.02953 16.25 9.375 16.25H10.625C10.9705 16.25 11.25 15.9705 11.25 15.625V14.375C11.25 14.0295 10.9705 13.75 10.625 13.75ZM15.625 8.75H14.375C14.0295 8.75 13.75 9.02953 13.75 9.375V10.625C13.75 10.9705 14.0295 11.25 14.375 11.25H15.625C15.9705 11.25 16.25 10.9705 16.25 10.625V9.375C16.25 9.02953 15.9705 8.75 15.625 8.75ZM15.625 13.75H14.375C14.0295 13.75 13.75 14.0295 13.75 14.375V15.625C13.75 15.9705 14.0295 16.25 14.375 16.25H15.625C15.9705 16.25 16.25 15.9705 16.25 15.625V14.375C16.25 14.0295 15.9705 13.75 15.625 13.75ZM4.375 3.75H5.625C5.97047 3.75 6.25 3.47047 6.25 3.125V0.625C6.25 0.279531 5.97047 0 5.625 0H4.375C4.02953 0 3.75 0.279531 3.75 0.625V3.125C3.75 3.47047 4.02953 3.75 4.375 3.75ZM20 5V17.5C20 18.8806 18.8806 20 17.5 20H2.5C1.11937 20 0 18.8806 0 17.5V5C0 3.61937 1.11937 2.5 2.5 2.5H3.125V3.125C3.125 3.81348 3.6859 4.375 4.375 4.375H5.625C6.3141 4.375 6.875 3.81348 6.875 3.125V2.5H13.125V3.125C13.125 3.81348 13.6865 4.375 14.375 4.375H15.625C16.3135 4.375 16.875 3.81348 16.875 3.125V2.5H17.5C18.8806 2.5 20 3.61937 20 5ZM18.75 7.5C18.75 6.81152 18.1897 6.25 17.5 6.25H2.5C1.8109 6.25 1.25 6.81152 1.25 7.5V17.5C1.25 18.1897 1.8109 18.75 2.5 18.75H17.5C18.1897 18.75 18.75 18.1897 18.75 17.5V7.5ZM14.375 3.75H15.625C15.9705 3.75 16.25 3.47047 16.25 3.125V0.625C16.25 0.279531 15.9705 0 15.625 0H14.375C14.0295 0 13.75 0.279531 13.75 0.625V3.125C13.75 3.47047 14.0295 3.75 14.375 3.75Z"
                                                fill="#0BC5FF" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="mt-sm-3 mb-2 fw-5 text-white">Hour:</label>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-6 pe-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-white">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ps-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-white">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pe-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-white">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ps-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-white">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-gradient w-100">
                                        Make an Appointment
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="product-section pt-60 px-4 position-relative">
                <div class="product-bg">
                    <img src="{{ asset('assets/img/vcard33/product-bg.png') }}" alt="bg-img" />
                </div>
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Products</h2>
                </div>
                <div class="product-slider">
                    <div>
                        <div class="product-card card">
                            <div class="product-img card-img position-relative">
                                <img src="{{ asset('assets/img/vcard33/product-img1.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="product-desc card-body">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h3 class="text-white fs-18 fw-5 mb-0">Lorem Ipsum</h3>
                                    <p class="amount fs-18 mb-0 fw-6 text-primary">$200</p>
                                </div>
                                <p class="fs-14 text-gray mb-0">There are many variations</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-card card">
                            <div class="product-img card-img position-relative">
                                <img src="{{ asset('assets/img/vcard33/product-img2.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="product-desc card-body">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h3 class="text-white fs-18 fw-5 mb-0">Lorem Ipsum</h3>
                                    <p class="amount fs-18 mb-0 fw-6 text-primary">$200</p>
                                </div>
                                <p class="fs-14 text-gray mb-0">There are many variations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section pt-60 px-40">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Testimonials</h2>
                </div>
                <div class="testimonial-slider">
                    <div>
                        <div class="testimonial-card card">
                            <div class="card-img testimonial-profile-img mb-4">
                                <img src="{{ asset('assets/img/vcard33/testimonial-profile-img.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body p-0 text-center">
                                <h3 class="text-white fs-18 mb-10">Richard Madden</h3>
                                <p class="desc text-gray fs-14 mb-0">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-card card">
                            <div class="card-img testimonial-profile-img mb-4">
                                <img src="{{ asset('assets/img/vcard33/testimonial-profile-img.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body p-0 text-center">
                                <h3 class="text-white fs-18 mb-10">Richard Madden</h3>
                                <p class="desc text-gray fs-14 mb-0">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a
                                    type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-section pt-60">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Blog</h2>
                </div>
                <div class="blog-slider px-30">
                    <div>
                        <div class="blog-card card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard33/blog-img1.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body">
                                <h2 class="fs-18 fw-5 text-white mb-10">Lorem Ipsum</h2>
                                <p class="text-gray blog-desc fw-5 fs-14 mb-0">
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard33/blog-img2.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body">
                                <h2 class="fs-18 fw-5 text-white mb-10">Lorem Ipsum</h2>
                                <p class="text-gray blog-desc fw-5 fs-14 mb-0">
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard33/blog-img1.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body">
                                <h2 class="fs-18 fw-5 text-white mb-10">Lorem Ipsum</h2>
                                <p class="text-gray blog-desc fw-5 fs-14 mb-0">
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-card card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard33/blog-img2.png') }}"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="card-body">
                                <h2 class="fs-18 fw-5 text-white mb-10">Lorem Ipsum</h2>
                                <p class="text-gray blog-desc fw-5 fs-14 mb-0">
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="business-hour-section pt-60 pb-60 px-40">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Business Hours</h2>
                </div>
                <div class="business-hour-card row justify-content-center">
                    <div class="col-sm-6 mb-3 pe-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Sunday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 ps-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Monday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 pe-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Tueday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 ps-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Wednesday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 pe-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Thursday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 ps-sm-2">
                        <div class="business-hour">
                            <span class="me-2">Friday:</span>
                            <span>08:10 - 20:00</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="business-hour">
                            <span class="me-2">Saturday:</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qr-code-section pt-30 pb-60 px-40">
                <div class="section-heading mb-5 pb-30 text-center text-white">
                    <h2 class="mb-0 fw-6">QR Code</h2>
                </div>
                <div class="qr-code mx-auto mt-5 position-relative">
                    <div class="qr-profile-img">
                        <img src="{{ asset('assets/img/vcard33/qr-profile-img.png') }}" class="w-100 h-100 object-fit-cover" />
                    </div>
                    <div class="qr-code-img mx-auto">
                        <img src="{{ asset('assets/img/vcard33/qr-code-img.png') }}" class="w-100 h-100 object-fit-cover" />
                    </div>
                </div>
            </div>
            <div class="contact-us-section pt-60 pb-40 px-40">
                <div class="section-heading mb-5 text-center text-white">
                    <h2 class="mb-0 fw-6">Contact Us</h2>
                </div>
                <div class="contact-form">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Full Name" />
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" class="form-control" placeholder="Phone Number" />
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="col-12 mb-5">
                                <textarea class="form-control h-100" placeholder="Your Message" rows="3"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-gradient w-100" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="create-vcard-img">
                <img src="{{ asset('assets/img/vcard33/create-vcard.png') }}" class="w-100" alt="bg-img" />
            </div>
            <div class="create-vcard-section pt-40 pb-60 px-40">
                <div class="content">
                    <div class="section-heading mb-5 text-center text-white">
                        <h2 class="mb-0 fw-6">Create Your VCard</h2>
                    </div>
                    <div class="pb-5">
                        <div class="vcard-link-card card mx-sm-4 mb-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="https://vcards.infyom.com/marlonbrasil"
                                    class="text-white link-text fw-5">https://vcards.infyom.com/marlonbrasil</a>
                                <svg class="icon ms-3" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3965 7.95047H13.2665C13.0325 7.95047 12.8428 8.14019 12.8428 8.37421V13.5261C12.8428 13.7996 12.6203 14.0221 12.3468 14.0221H2.47324C2.19984 14.0221 1.97746 13.7996 1.97746 13.5261V3.65272C1.97746 3.37921 2.19984 3.15666 2.47324 3.15666H7.88893C8.12295 3.15666 8.31267 2.96693 8.31267 2.73292V1.60294C8.31267 1.36892 8.12295 1.1792 7.88893 1.1792H2.47324C1.10947 1.1792 0 2.28884 0 3.65272V13.5262C0 14.89 1.10952 15.9996 2.47324 15.9996H12.3467C13.7106 15.9996 14.8202 14.89 14.8202 13.5262V8.37427C14.8203 8.14019 14.6305 7.95047 14.3965 7.95047Z"
                                        fill="url(#paint0_linear_4020_805)" />
                                    <path
                                        d="M15.5754 0.000488281H11.0808C10.8468 0.000488281 10.657 0.190211 10.657 0.424229V1.55421C10.657 1.78822 10.8468 1.97795 11.0808 1.97795H12.6234L6.81845 7.7828C6.65296 7.94829 6.65296 8.21655 6.81845 8.38209L7.61746 9.18115C7.69695 9.26064 7.80469 9.30528 7.91713 9.30528C8.0295 9.30528 8.1373 9.26064 8.21674 9.18115L14.0217 3.37618V4.91877C14.0217 5.15278 14.2114 5.34251 14.4455 5.34251H15.5754C15.8094 5.34251 15.9992 5.15278 15.9992 4.91877V0.424229C15.9992 0.190211 15.8094 0.000488281 15.5754 0.000488281Z"
                                        fill="url(#paint1_linear_4020_805)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_4020_805" x1="8.96383" y1="-4.13143"
                                            x2="-1.77526" y2="0.436721" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#158FFF" />
                                            <stop offset="1" stop-color="#01FCFF" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_4020_805" x1="12.3223" y1="-3.33373"
                                            x2="5.57978" y2="-0.465591" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#158FFF" />
                                            <stop offset="1" stop-color="#01FCFF" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="add-to-contact-section">
                        <div class="text-center">
                            <button class="btn btn-gradient">Add to Contact</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-section cursor-pointer">
                <div class="fixed-btn-section">
                    <div class="bars-btn marriage-bars-btn">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.4135 0.540405H22.4891C23.5721 0.540405 24.4602 1.42855 24.4602 2.51152V9.58713C24.4602 10.6773 23.5732 11.5582 22.4891 11.5582H15.4135C14.3223 11.5582 13.4424 10.6783 13.4424 9.58713V2.51152C13.4424 1.42746 14.3234 0.540405 15.4135 0.540405Z"
                                stroke="#0C0A0B" />
                            <path
                                d="M2.97143 0.5H8.74589C10.1129 0.5 11.2173 1.6122 11.2173 2.97143V8.74589C11.2173 10.1139 10.1139 11.2173 8.74589 11.2173H2.97143C1.6122 11.2173 0.5 10.1129 0.5 8.74589V2.97143C0.5 1.61328 1.61328 0.5 2.97143 0.5Z"
                                stroke="#0C0A0B" />
                            <path
                                d="M2.97143 13.7828H8.74589C10.1139 13.7828 11.2173 14.8862 11.2173 16.2543V22.0287C11.2173 23.388 10.1129 24.5002 8.74589 24.5002H2.97143C1.61328 24.5002 0.5 23.3869 0.5 22.0287V16.2543C0.5 14.8873 1.6122 13.7828 2.97143 13.7828Z"
                                stroke="#0C0A0B" />
                            <path
                                d="M16.2537 13.7828H22.0281C23.3873 13.7828 24.4995 14.8873 24.4995 16.2543V22.0287C24.4995 23.3869 23.3863 24.5002 22.0281 24.5002H16.2537C14.8867 24.5002 13.7822 23.388 13.7822 22.0287V16.2543C13.7822 14.8862 14.8856 13.7828 16.2537 13.7828Z"
                                stroke="#0C0A0B" />
                        </svg>
                    </div>
                    <div class="sub-btn">
                        <div class="social-btn musician-sub-btn wp-btn">
                            <i class="fa-brands fa-whatsapp icon-gradient"></i>
                        </div>
                        <div class="social-btn musician-sub-btn mt-3">
                            <i class="fa-solid fa-share-nodes icon-gradient"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('vcardTemplates.template.templates')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
<script>
    $().ready(function() {
        $(".gallery-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            arrows: false,
            dots: false,
            speed: 300,
            centerPadding: "124px",
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        centerPadding: "104px",
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        centerPadding: "0",
                    },
                },
            ],
        });
        $(".product-slider").slick({
            arrows: false,
            infinite: true,
            dots: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                },
            }, ],
        });
        $(".testimonial-slider").slick({
            arrows: false,
            infinite: true,
            dots: false,
            slidesToShow: 1,
            autoplay: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
            responsive: [{
                breakpoint: 575,
                settings: {
                    arrows: false,
                },
            }, ],
        });
        $(".blog-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            speed: 300,
            infinite: true,
            autoplay: true,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                },
            }, ],
        });
    });
</script>
<script>
    $("#myID").flatpickr();
</script>

<script>
    $(document).ready(function() {
        $('.dropdown1').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
        });
    });
</script>
</html>
