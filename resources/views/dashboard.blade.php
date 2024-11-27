<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('TikTok Shop') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 overflow-x-hidden">
            <div class="mb-6">
                <div class="relative">
                    <!-- Slider container -->
                    <div class="overflow-hidden rounded-lg h-40">
                        <!-- Slides -->
                        <div class="flex transition-transform duration-500 ease-in-out transform" id="slider">
                            <div class="min-w-full">
                                <img src="{{ asset('images/image-1693640581657.jpg') }}" alt="Advertisement 1" class="w-full h-40 object-contain bg-white-900">
                            </div>
                            <div class="min-w-full">
                                <img src="{{ asset('images/image-1693640622010.jpg') }}" alt="Advertisement 2" class="w-full h-40 object-contain bg-white-900">
                            </div>
                            <div class="min-w-full">
                                <img src="{{ asset('images/image-1693640657511.jpg') }}" alt="Advertisement 3" class="w-full h-40 object-contain bg-white-900">
                            </div>
                            <div class="min-w-full">
                                <img src="{{ asset('images/image-1693640710190.jpg') }}" alt="Advertisement 3" class="w-full h-40 object-contain bg-white-900">
                            </div>
                            <div class="min-w-full">
                                <img src="{{ asset('images/image-1693640753534.jpg') }}" alt="Advertisement 3" class="w-full h-40 object-contain bg-white-900">
                            </div>
                        </div>

                        <!-- Navigation buttons -->
                        <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-r-lg" onclick="moveSlide(-1)">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-l-lg" onclick="moveSlide(1)">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>

                        <!-- Dots indicator -->
                        <div class="absolute bottom-4 left-0 right-0">
                            <div class="flex justify-center space-x-2">
                                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100" onclick="goToSlide(0)"></button>
                                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100" onclick="goToSlide(1)"></button>
                                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100" onclick="goToSlide(2)"></button>
                                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100" onclick="goToSlide(3)"></button>
                                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100" onclick="goToSlide(4)"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                let currentSlide = 0;
                const slides = document.querySelectorAll('#slider > div');
                const totalSlides = slides.length;

                function moveSlide(direction) {
                    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                    updateSlider();
                }

                function goToSlide(slideIndex) {
                    currentSlide = slideIndex;
                    updateSlider();
                }

                function updateSlider() {
                    const slider = document.getElementById('slider');
                    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                }

                // Auto-advance slides every 5 seconds
                setInterval(() => moveSlide(1), 5000);
            </script>
            <div class="grid grid-cols-5 gap-0 mb-6 w-full">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm border-r dark:border-gray-700"> 
                    <div class="text-center">
                        <img src="{{ asset('images/paymentApp.png') }}" alt="Logo" class="w-8 h-8 mx-auto">
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">Nạp tiền</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center">
                        <img src="{{ asset('images/paywithDraw.png') }}" alt="Logo" class="w-8 h-8 mx-auto">
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">Rút tiền</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center">
                        <img src="{{ asset('images/support.png') }}" alt="Logo" class="w-8 h-8 mx-auto">
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">CSKH</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center">
                        <img src="{{ asset('images/paymentApp.png') }}" alt="Logo" class="w-8 h-8 mx-auto">
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">Đầu tư</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center">
                    <img src="{{ asset('images/notification.png') }}" alt="Logo" class="w-8 h-8 mx-auto">
                        <p class="mt-1 text-sm font-medium text-gray-900 dark:text-gray-100 whitespace-nowrap">Thông báo</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full h-12">
                <input 
                    type="text" 
                    class="w-full h-10 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                    placeholder="Tìm kiếm sản phẩm...">
            </div>
            <br>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Chiết khấu, Open box</h3>
                    <p class="text-gray-600 dark:text-gray-400">Ưu đãi đến 40% cho đơn đầu tiên</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Thanh toán an toàn</h3>
                    <p class="text-gray-600 dark:text-gray-400">Ưu đãi đến 30%</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="/images/image.png" alt="Sản phẩm 1" class="w-full h-70 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">iPhone 14 Pro Max</h3>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                <p class="text-red-600 dark:text-red-400 font-bold">27.990.000 VND</p>
                                <p class="text-gray-500 dark:text-gray-400 line-through text-sm">
                                    29.990.000 VND
                                </p>
                            </div>
                            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded">
                                -15%
                            </span>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="/images/image.png" alt="Sản phẩm 2" class="w-full h-70 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">Samsung Galaxy S23 Ultra</h3>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                <p class="text-red-600 dark:text-red-400 font-bold">25.990.000 VND</p>
                                <p class="text-gray-500 dark:text-gray-400 line-through text-sm">
                                    28.990.000 VND
                                </p>
                            </div>
                            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded">
                                -10%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="/images/image.png" alt="Sản phẩm 3" class="w-full h-70 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">Samsung Galaxy S23 Ultra</h3>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                <p class="text-red-600 dark:text-red-400 font-bold">25.990.000 VND</p>
                                <p class="text-gray-500 dark:text-gray-400 line-through text-sm">
                                    28.990.000 VND
                                </p>
                            </div>
                            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded">
                                -10%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="/images/image.png" alt="Sản phẩm 3" class="w-full h-70 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">Samsung Galaxy S23 Ultra</h3>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                <p class="text-red-600 dark:text-red-400 font-bold">25.990.000 VND</p>
                                <p class="text-gray-500 dark:text-gray-400 line-through text-sm">
                                    28.990.000 VND
                                </p>
                            </div>
                            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded">
                                -10%
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="/images/image.png" alt="Sản phẩm 3" class="w-full h-70 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">Samsung Galaxy S23 Ultra</h3>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                <p class="text-red-600 dark:text-red-400 font-bold">25.990.000 VND</p>
                                <p class="text-gray-500 dark:text-gray-400 line-through text-sm">
                                    28.990.000 VND
                                </p>
                            </div>
                            <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded">
                                -10%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-5 gap-4 py-3">
                <a href="#" class="text-center">
                    <img src="{{ asset('images/homepage.png') }}" alt="Logo" class="w-6 h-6 mx-auto">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Trang chủ</span>
                </a>
                
                <a href="#" class="text-center">
                    <img src="{{ asset('images/discount.png') }}" alt="Logo" class="w-6 h-6 mx-auto">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Ưu đãi</span>
                </a>

                <a href="#" class="text-center relative">
                    <div class="w-14 h-14 bg-indigo-500 rounded-full flex items-center justify-center -mt-5 mx-auto">
                        <img src="{{ asset('images/logorandom.png') }}" alt="Logo" class="w-8 h-8">
                    </div>
                </a>

                <a href="#" class="text-center">
                    <img src="{{ asset('images/hotline.png') }}" alt="Logo" class="w-6 h-6 mx-auto">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Hỗ trợ</span>
                </a>

                <a href="#" class="text-center">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="w-6 h-6 mx-auto">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Tài khoản</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
