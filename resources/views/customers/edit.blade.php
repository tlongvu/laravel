<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chỉnh sửa khách hàng') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" name="username" value="{{ $customer->username }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" readonly>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Mật khẩu mới</label>
                                <input type="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Mã PIN mới</label>
                                <input type="password" name="pass_pin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Tên</label>
                                <input type="text" name="name" value="{{ $customer->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">VIP</label>
                                <input type="number" name="vip" value="{{ $customer->vip }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Hoa hồng (%)</label>
                                <input type="number" name="commission" value="{{ $customer->commission }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Địa chỉ</label>
                                <input type="text" name="address" value="{{ $customer->address }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Tên tài khoản ngân hàng</label>
                                <input type="text" name="vn_account_name" value="{{ $customer->vn_account_name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Số tài khoản ngân hàng</label>
                                <input type="text" name="vn_id_bank" value="{{ $customer->vn_id_bank }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Trạng thái</label>
                                <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="1" {{ $customer->status ? 'selected' : '' }}>Hoạt động</option>
                                    <option value="0" {{ !$customer->status ? 'selected' : '' }}>Khóa</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end">
                            <a href="{{ route('customers.index') }}" class="bg-gray-200 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Hủy
                            </a>
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cập nhật
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
