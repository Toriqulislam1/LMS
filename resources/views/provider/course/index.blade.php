{{-- @extends('provider.master')
@section('admin-content')
<!-- ===== Main Content Start ===== -->
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: `Basic Tables` }">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>

            <nav>
                <ol class="flex items-center gap-1.5">
                    <li>
                        <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                            href="index.html">
                            Home
                            <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="px-5 py-4 sm:px-6 sm:py-5">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-medium text-black dark:text-white">
                        <a href="{{route('courses.index')}}"
                            class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                            Back
                        </a>
                    </h3>
                    <a href="{{route('courses.create')}}"
                        class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                        Create
                    </a>
                </div>
            </div>
            <div class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6">
                <!-- ====== Table Six Start -->
                <div
                    class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full">
                            <!-- table header start -->
                            <thead>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Title
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Thumbnail
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Price
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Discount
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Status
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Action
                                            </p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- table header end -->
                            <!-- table body start -->
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                <tr>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 overflow-hidden rounded-full">
                                                    <img src="src/images/user/user-17.jpg" alt="brand" />
                                                </div>

                                                <div>
                                                    <span
                                                        class="block font-medium text-gray-800 text-theme-sm dark:text-white/90">
                                                        Lindsey Curtis
                                                    </span>
                                                    <span class="block text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Web Designer
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                Agency Website
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <div class="flex -space-x-2">
                                                <div
                                                    class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900">
                                                    <img src="src/images/user/user-22.jpg" alt="user" />
                                                </div>
                                                <div
                                                    class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900">
                                                    <img src="src/images/user/user-23.jpg" alt="user" />
                                                </div>
                                                <div
                                                    class="w-6 h-6 overflow-hidden border-2 border-white rounded-full dark:border-gray-900">
                                                    <img src="src/images/user/user-24.jpg" alt="user" />
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <p
                                                class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500">
                                                Active
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">3.9K</p>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">3.9K</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ====== Table Six End -->
            </div>
        </div>
    </div>
</div>
<!-- ===== Main Content End ===== -->
@endsection --}}


@extends('provider.master')
@section('admin-content')

    <div class="space-y-5 sm:space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="px-5 py-4 sm:px-6 sm:py-5">
          <div class="flex items-center justify-between">
                    <h3 class="text-base font-medium text-black dark:text-white">
                        <a href="{{route('courses.index')}}"
                            class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                            Back
                        </a>
                    </h3>
                    <a href="{{route('courses.create')}}"
                        class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                        Create
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-100 p-5 dark:border-gray-800 sm:p-6">
                <!-- ====== DataTable One Start -->
                <div x-data="dataTable()"
                    class="overflow-hidden rounded-xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex items-center gap-3">
                            <span class="text-gray-500 dark:text-gray-400"> Show </span>
                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                                <select
                                    class="dark:bg-dark-900 h-9 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none py-2 pl-3 pr-8 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
                                    :class="isOptionSelected && 'text-gray-500 dark:text-gray-400'"
                                    @click="isOptionSelected = true" @change="perPage = $event.target.value">
                                    <option value="10" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                                        10
                                    </option>
                                    <option value="8" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                                        8
                                    </option>
                                    <option value="5" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                                        5
                                    </option>
                                </select>
                                <span
                                    class="absolute right-2 top-1/2 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                    <svg class="stroke-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.8335 5.9165L8.00016 10.0832L12.1668 5.9165" stroke=""
                                            stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400"> entries </span>
                        </div>

                        <div class="relative">
                            <button class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"
                                        fill="" />
                                </svg>
                            </button>

                            <input type="text" x-model="search" placeholder="Search..."
                                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-11 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                        </div>
                    </div>

                    <div class="max-w-full overflow-x-auto">
                        <div class="min-w-[1102px]">
                            <!-- table header start -->
                            <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                <div
                                    class="col-span-3 flex items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('user')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Title
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="col-span-2 flex items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('position')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Thumbnail Image
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="col-span-2 flex items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('office')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Price
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="col-span-1 flex items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('age')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Discount
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="col-span-2 flex items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('startDate')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Start date
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-span-2 flex items-center px-4 py-3">
                                    <div class="flex w-full cursor-pointer items-center justify-between"
                                        @click="sortBy('salary')">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">
                                            Action
                                        </p>

                                        <span class="flex flex-col gap-0.5">
                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                    fill="" />
                                            </svg>

                                            <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5"
                                                viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                    fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- table header end -->

                            <!-- table body start -->
                            <template x-for="person in paginatedData" :key="person.id">
                                <!-- table item -->
                                <div class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800">
                                    <div
                                        class="col-span-3 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-10 overflow-hidden rounded-full">
                                                <img :src="person.image" alt="user" />
                                            </div>
                                            <div>
                                                <span
                                                    class="block text-theme-sm font-medium text-gray-800 dark:text-white/90"
                                                    x-text="person.name">
                                                    Lindsey Curtis
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400"
                                            x-text="person.position"></p>
                                    </div>
                                    <div
                                        class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400"
                                            x-text="person.office"></p>
                                    </div>
                                    <div
                                        class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="person.age">
                                        </p>
                                    </div>
                                    <div
                                        class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <p class="text-theme-sm text-gray-700 dark:text-gray-400"
                                            x-text="person.startDate"></p>
                                    </div>
                                    <div class="col-span-1 flex items-center px-4 py-3">
                                        <div class="flex w-full items-center gap-2">
                                        <button class="text-gray-500 hover:text-error-500 dark:text-gray-400 dark:hover:text-error-500">
                                            <svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04142 4.29199C7.04142 3.04935 8.04878 2.04199 9.29142 2.04199H11.7081C12.9507 2.04199 13.9581 3.04935 13.9581 4.29199V4.54199H16.1252H17.166C17.5802 4.54199 17.916 4.87778 17.916 5.29199C17.916 5.70621 17.5802 6.04199 17.166 6.04199H16.8752V8.74687V13.7469V16.7087C16.8752 17.9513 15.8678 18.9587 14.6252 18.9587H6.37516C5.13252 18.9587 4.12516 17.9513 4.12516 16.7087V13.7469V8.74687V6.04199H3.8335C3.41928 6.04199 3.0835 5.70621 3.0835 5.29199C3.0835 4.87778 3.41928 4.54199 3.8335 4.54199H4.87516H7.04142V4.29199ZM15.3752 13.7469V8.74687V6.04199H13.9581H13.2081H7.79142H7.04142H5.62516V8.74687V13.7469V16.7087C5.62516 17.1229 5.96095 17.4587 6.37516 17.4587H14.6252C15.0394 17.4587 15.3752 17.1229 15.3752 16.7087V13.7469ZM8.54142 4.54199H12.4581V4.29199C12.4581 3.87778 12.1223 3.54199 11.7081 3.54199H9.29142C8.87721 3.54199 8.54142 3.87778 8.54142 4.29199V4.54199ZM8.8335 8.50033C9.24771 8.50033 9.5835 8.83611 9.5835 9.25033V14.2503C9.5835 14.6645 9.24771 15.0003 8.8335 15.0003C8.41928 15.0003 8.0835 14.6645 8.0835 14.2503V9.25033C8.0835 8.83611 8.41928 8.50033 8.8335 8.50033ZM12.9168 9.25033C12.9168 8.83611 12.581 8.50033 12.1668 8.50033C11.7526 8.50033 11.4168 8.83611 11.4168 9.25033V14.2503C11.4168 14.6645 11.7526 15.0003 12.1668 15.0003C12.581 15.0003 12.9168 14.6645 12.9168 14.2503V9.25033Z" fill=""></path>
                                            </svg>
                                        </button>

                                        <button class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                            <svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0911 3.53206C16.2124 2.65338 14.7878 2.65338 13.9091 3.53206L5.6074 11.8337C5.29899 12.1421 5.08687 12.5335 4.99684 12.9603L4.26177 16.445C4.20943 16.6931 4.286 16.9508 4.46529 17.1301C4.64458 17.3094 4.90232 17.3859 5.15042 17.3336L8.63507 16.5985C9.06184 16.5085 9.45324 16.2964 9.76165 15.988L18.0633 7.68631C18.942 6.80763 18.942 5.38301 18.0633 4.50433L17.0911 3.53206ZM14.9697 4.59272C15.2626 4.29982 15.7375 4.29982 16.0304 4.59272L17.0027 5.56499C17.2956 5.85788 17.2956 6.33276 17.0027 6.62565L16.1043 7.52402L14.0714 5.49109L14.9697 4.59272ZM13.0107 6.55175L6.66806 12.8944C6.56526 12.9972 6.49455 13.1277 6.46454 13.2699L5.96704 15.6283L8.32547 15.1308C8.46772 15.1008 8.59819 15.0301 8.70099 14.9273L15.0436 8.58468L13.0107 6.55175Z" fill=""></path>
                                            </svg>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <!-- table body end -->
                        </div>
                    </div>

                    <!-- Pagination Controls -->
                    <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                        <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                            <p
                                class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                Showing <span x-text="startEntry"></span> to
                                <span x-text="endEntry"></span> of
                                <span x-text="totalEntries"></span> entries
                            </p>

                            <div class="flex items-center justify-center gap-0.5 pt-4 xl:justify-end xl:pt-0">
                                <button @click="prevPage()"
                                    class="mr-2.5 flex h-10 w-10 items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                    :disabled="currentPage === 1">
                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.58301 9.99868C2.58272 10.1909 2.65588 10.3833 2.80249 10.53L7.79915 15.5301C8.09194 15.8231 8.56682 15.8233 8.85981 15.5305C9.15281 15.2377 9.15297 14.7629 8.86018 14.4699L5.14009 10.7472L16.6675 10.7472C17.0817 10.7472 17.4175 10.4114 17.4175 9.99715C17.4175 9.58294 17.0817 9.24715 16.6675 9.24715L5.14554 9.24715L8.86017 5.53016C9.15297 5.23717 9.15282 4.7623 8.85983 4.4695C8.56684 4.1767 8.09197 4.17685 7.79917 4.46984L2.84167 9.43049C2.68321 9.568 2.58301 9.77087 2.58301 9.99715C2.58301 9.99766 2.58301 9.99817 2.58301 9.99868Z"
                                            fill="" />
                                    </svg>
                                </button>

                                <button @click="goToPage(1)"
                                    :class="currentPage === 1 ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                    1
                                </button>

                                <template x-if="currentPage > 3">
                                    <span
                                        class="flex h-10 w-10 items-center justify-center rounded-lg hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">...</span>
                                </template>

                                <template x-for="page in pagesAroundCurrent" :key="page">
                                    <button @click="goToPage(page)"
                                        :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                        class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                        <span x-text="page"></span>
                                    </button>
                                </template>

                                <template x-if="currentPage < totalPages - 2">
                                    <span
                                        class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:bg-blue-500/[0.08] hover:text-brand-500 dark:text-gray-400 dark:hover:text-brand-500">...</span>
                                </template>

                                <button @click="nextPage()"
                                    class="ml-2.5 flex h-10 w-10 items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                    :disabled="currentPage === totalPages">
                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.4175 9.9986C17.4178 10.1909 17.3446 10.3832 17.198 10.53L12.2013 15.5301C11.9085 15.8231 11.4337 15.8233 11.1407 15.5305C10.8477 15.2377 10.8475 14.7629 11.1403 14.4699L14.8604 10.7472L3.33301 10.7472C2.91879 10.7472 2.58301 10.4114 2.58301 9.99715C2.58301 9.58294 2.91879 9.24715 3.33301 9.24715L14.8549 9.24715L11.1403 5.53016C10.8475 5.23717 10.8477 4.7623 11.1407 4.4695C11.4336 4.1767 11.9085 4.17685 12.2013 4.46984L17.1588 9.43049C17.3173 9.568 17.4175 9.77087 17.4175 9.99715C17.4175 9.99763 17.4175 9.99812 17.4175 9.9986Z"
                                            fill="" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                </script>
                <script>
                    function dataTable() {
    return {
      search: "",
      sortColumn: "name",
      sortDirection: "asc",
      currentPage: 1,
      perPage: 10,
      data: [
        {
          id: 1,
          name: "Lindsey Curtis",
          image: "src/images/user/user-17.jpg",
          position: "Sales Assistant",
          office: "New York",
          age: 33,
          startDate: "12 Feb, 2027",
          salary: "$168,500",
        }
      ],

      get pagesAroundCurrent() {
        let pages = [];
        const startPage = Math.max(2, this.currentPage - 2);
        const endPage = Math.min(this.totalPages - 1, this.currentPage + 2);

        for (let i = startPage; i <= endPage; i++) {
          pages.push(i);
        }
        return pages;
      },

      get filteredData() {
        const searchLower = this.search.toLowerCase();
        return this.data
          .filter(
            (person) =>
              person.name.toLowerCase().includes(searchLower) ||
              person.position.toLowerCase().includes(searchLower) ||
              person.office.toLowerCase().includes(searchLower),
          )
          .sort((a, b) => {
            let modifier = this.sortDirection === "asc" ? 1 : -1;
            if (a[this.sortColumn] < b[this.sortColumn]) return -1 * modifier;
            if (a[this.sortColumn] > b[this.sortColumn]) return 1 * modifier;
            return 0;
          });
      },

      get paginatedData() {
        const start = (this.currentPage - 1) * this.perPage;
        const end = start + this.perPage;
        return this.filteredData.slice(start, end);
      },

      get totalEntries() {
        return this.filteredData.length;
      },

      get startEntry() {
        return (this.currentPage - 1) * this.perPage + 1;
      },

      get endEntry() {
        const end = this.currentPage * this.perPage;
        return end > this.totalEntries ? this.totalEntries : end;
      },

      get totalPages() {
        return Math.ceil(this.filteredData.length / this.perPage);
      },

      goToPage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },

      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.currentPage++;
        }
      },

      prevPage() {
        if (this.currentPage > 1) {
          this.currentPage--;
        }
      },

      sortBy(column) {
        if (this.sortColumn === column) {
          this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
        } else {
          this.sortDirection = "asc";
          this.sortColumn = column;
        }
      },
    };
  }
                </script>
                <!-- ====== DataTable One End -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->

    </script>

    @endsection
