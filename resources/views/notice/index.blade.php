@extends('layouts.base', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')
@livewireStyles
@endsection

@section('content')
@include('layouts.shared.navbar-two', [
    'menuPosition' => 'fixed',
    'navItems' => [
        (object)['id' => '홈','name' => '홈', 'url' => '/'],
        (object)['id' => '선교회','name' => '선교회', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/mission'],
            (object)['name' => '조직도', 'url' => '/mission-organization'],
            (object)['name' => '로고', 'url' => '/mission-logo'],
            
        ]],
        (object)['id' => '장학회','name' => '장학회', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/scholarship'],
            (object)['name' => '장학금 신청', 'url' => '/scholarship-register'],
            
        ]],
        (object)['id' => '엔젤리더스','name' => '엔젤리더스', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/leader'],
            (object)['name' => '졸업생 사진', 'url' => '/leader-graduate'],
           
            
        ]],
        (object)['id' => '게시판','name' => '게시판', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '공지사항', 'url' => '/notice'],
            (object)['name' => '게시판', 'url' => '/notice-ask'],
            (object)['name' => 'FAQ', 'url' => '/notice-faq'],
            
        ]],
        (object)['id' => '후원안내','name' => '후원안내', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '후원안내', 'url' => '/donation'],            
        ]],
        ]
    ])

<section id="home" class="relative overflow-hidden active mt-24">
    <div class="px-4 md:px-10">
        <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover bg-center" style="background-image: url(/images/header_image.png);">
            <div class="bg-black/20 rounded-2xl">
                <div class="container">
                    <div class="p-6 relative">
                        <div class="flex h-full items-center justify-center py-5">
                            <div class="text-center max-w-3xl mx-auto relative">
                                <span class="py-1 px-3 rounded-md text-sm font-medium uppercase tracking-wider text-white bg-white/10">Notice</span>
                                <h1 class="md:text-5xl/snug text-3xl font-bold text-white mt-3">공지사항</h1>
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container End -->
</section>
<section>
    <div class="bg-white py-24 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @livewire('notice-search')
            <div class="mx-auto text-center mt-10">
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                  <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                  <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                  </a>
                </nav>
              </div>
        </div>
      </div>
</section>


    
<footer>
    <div class="border-y border-default-200">
        <div class="container py-20">
            <div class="grid xl:grid-cols-5 md:grid-cols-3 gap-10 lg:gap-16">
                <div class="xl:col-span-2 md:col-span-3">
                    <div>
                        <a href="#">
                            <img src="{{ asset('images/logo.png') }}" width="180" alt="Logo">
                        </a>
                        <p class="text-base font-medium  text-default-800 mt-6">에녹메리선교회 장학금 신청은 회원가입 이후에 가능합니다. 아래 버튼을 클릭하여 가입하세요.</p>
                        <div class="relative mt-5">
                            <a href="/registration/form" class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-white transition-all hover:bg-primary-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"></path>
                              </svg>
                               회원가입 하기
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right size-6"><path d="M18 8L22 12L18 16"></path><path d="M2 12H22"></path></svg>
                            </a>
                        </div>
                    </div>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Mission</h5>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">선교회</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">장학회</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">엔젤리더스</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">게시판</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">후원안내</a>
                        </li>
                    </ul>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Social Media</h5>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-5 group">
                                <a href="https://pf.kakao.com/_MSxcmG" class="relative">
                                <img src="images/kakao_icon.png" width="40px" class="absolute" />
                                <h5 class="text-base font-medium text-default-800 ml-14 mt-2">카카오톡 채널</h5>
                                </a>
                            </li>
                            <li class="flex items-center gap-5 group">
                                <a href="https://youtube.com/@enochmarymissions?feature=shared" class="relative">
                                <img src="images/youtube_icon.png" width="40px" class="absolute mt-2" />
                                <h5 class="text-base font-medium text-default-800 ml-14 mt-4">유튜브 채널</h5>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Legal &amp; Term</h5>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div><!-- col End -->
            </div><!-- grid End -->
        </div><!-- Container End -->
    </div>

    <div class="py-4">
        <div class="container flex flex-wrap justify-center items-center h-full md:justify-between text-center md:text-start">
            <p class="text-base font-medium text-default-800">
                <script>document.write(new Date().getFullYear())</script>
                © Enoch & Mary Missions Organization</a>
            </p>
            <p class="text-base font-medium text-default-800">
                <a href="#">Terms Conditions &amp; Policy</a>
            </p>
        </div><!-- Flex End -->
    </div>
</footer>
@endsection

@section('script-bottom')
@livewireScripts
@vite(['resources/js/swiper.js'])
@endsection
