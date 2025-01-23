<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="flex flex-col w-64 h-full px-5 py-8 overflow-y-auto bg-white border-r dark:bg-gray-900 dark:border-gray-700">
            <a href="#" class="mb-6">
                <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt="Logo">
            </a>

            <nav class="flex flex-col flex-1 space-y-6">
                <!-- Analytics Section -->
                <div class="space-y-3">
                    <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Analytics</label>
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 transition rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25" />
                        </svg>
                        <span class="ml-3 text-sm font-medium">Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 transition rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m-6-6h6m6 0h6" />
                        </svg>
                        <span class="ml-3 text-sm font-medium">Performance</span>
                    </a>
                </div>

                <!-- Content Section -->
                <div class="space-y-3">
                    <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Content</label>
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 transition rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5" />
                        </svg>
                        <span class="ml-3 text-sm font-medium">Guides</span>
                    </a>
                </div>

                <!-- Customization Section -->
                <div class="space-y-3">
                    <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Customization</label>
                    <a href="#" class="flex items-center px-3 py-2 text-gray-600 transition rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94" />
                        </svg>
                        <span class="ml-3 text-sm font-medium">Settings</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-900">
            <h1 class="text-2xl font-bold">Dashboard Overview</h1>

            <!-- Stats Section -->
            <div class="grid gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Stat Card 1 -->
                <div class="stats shadow">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="stat-title">Total Likes</div>
                        <div class="stat-value text-primary">25.6K</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="stats shadow">
                    <div class="stat">
                        <div class="stat-figure text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="stat-title">Page Views</div>
                        <div class="stat-value text-secondary">2.6M</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="stats shadow">
                    <div class="stat">
                        <div class="stat-figure text-secondary">
                            <div class="avatar online">
                                <div class="w-16 rounded-full">
                                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="Profile">
                                </div>
                            </div>
                        </div>
                        <div class="stat-value">86%</div>
                        <div class="stat-title">Tasks Done</div>
                        <div class="stat-desc text-secondary">31 tasks remaining</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
