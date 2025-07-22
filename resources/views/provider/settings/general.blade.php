@extends('provider.master')

@section('admin-content')

<div class="mx-auto max-w-7xl p-4 md:p-6">
    <!-- Breadcrumb -->
    <div>
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90">Course</h2>
            <nav>
                <ol class="flex items-center gap-1.5">
                    <li>
                        <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400" href="">
                            Home
                            <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="text-sm text-gray-800 dark:text-white/90">Course</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Form Section -->
    <form action="{{route('settings-general-update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 space-y-6">
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-5 py-4 sm:px-6 sm:py-5">
                        <h3 class="text-base font-medium text-gray-950 dark:text-white/90">Setting Form</h3>
                    </div>
                    <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">

                        <!-- Website Name -->
                        <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-800 dark:text-gray-800">
                            Website Name
                        </label>
                        <input type="text" name="website_name" placeholder="Enter Your Website Name"
                            class="h-11 w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm shadow-theme-xs focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-600 dark:text-gray-900 dark:placeholder:text-gray-500" />
                        </div>

                        <!-- Logo -->
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-700">
                                Logo (Recommended size: 100x100px .png, .jpg, .jpeg)
                            </label>
                            <input type="file" name="logo" accept=".png, .jpg, .jpeg"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-white dark:bg-white px-4 py-2.5 text-sm shadow-theme-xs focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-300 dark:text-gray-900 dark:placeholder:text-gray-500" />
                        </div>
                        <!-- Favicon -->
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-700">
                                Favicon (Recommended size: 100x100px .png, .jpg, .jpeg)
                            </label>
                            <input type="file" name="favicon" accept=".png, .jpg, .jpeg"
                                class="h-11 w-full rounded-lg border border-gray-300 bg-white dark:bg-white px-4 py-2.5 text-sm shadow-theme-xs focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-300 dark:text-gray-900 dark:placeholder:text-gray-500" />
                        </div>

                        <!-- Short Description -->
                        <div>
                            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-700">
                                Website Description
                            </label>
                            <textarea name="website_description" placeholder="Enter Your Website Description"
                                class="w-full rounded-lg border border-gray-300 bg-white dark:bg-white p-2 text-gray-800 dark:text-gray-900 dark:border-gray-300 dark:placeholder:text-gray-500"></textarea>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex justify-start gap-4 mt-6 px-5 sm:px-6 pb-6">
                            <!-- Back Button -->
                            <a href="{{route('admin-dashboard')}}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                                ← Back
                            </a>

                            <!-- Create Button -->
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

