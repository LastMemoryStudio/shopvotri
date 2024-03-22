<div id="loginModal" tabindex="-1" aria-hidden="true" class="fixed flex justify-center hidden items-center z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] h-screen" style="background: rgba(113, 113, 122, 0.5)"> 
    <div id="ModalDiv" class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Đăng nhập</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tên đăng nhập hoặc email</label>
                        <input type="email" name="email" id="email" class="bg-transparent border border-gray-200 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nghiaomg@gmail.com" >
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-transparent border border-gray-200 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" >
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Lưu đăng nhập</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline">Quên mật khẩu?</a>
                    </div>
                    <button type="button" class="w-full text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Đăng nhập
                    </button>
                    
                    <div class="text-sm font-medium text-gray-500">
                        Tôi chưa có tài khoản? <a href="#" class="text-blue-500 hover:underline">Tạo tài khoản</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

<script>
    $('#ModalDiv').click(function(event) {
        event.stopPropagation();
    });

    $('#loginModal').click(function() {
        $('#loginModal').addClass('hidden');
    });

    $('#ModalDiv button[data-modal-hide="authentication-modal"]').click(function(event) {
        event.stopPropagation();
        
        $('#loginModal').addClass('hidden');
    });
</script>