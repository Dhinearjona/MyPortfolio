<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include_once 'components/head.php'; ?>

<body
    class="font-sans bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 min-h-screen">
    <!-- Theme Toggle -->
    <div class="fixed top-6 right-6 z-50">
        <button id="theme-toggle"
            class="p-3 bg-white dark:bg-gray-800 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300"
            aria-label="Toggle dark mode" title="Toggle dark mode">
            <i id="theme-icon" class="w-5 h-5" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Header Section -->
    <header class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-4xl mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <!-- Profile Picture -->
                <div class="flex-shrink-0">
                    <div
                        class="w-32 h-32 rounded-full overflow-hidden border-4 border-white dark:border-gray-800 shadow-lg">
                        <img src="img/profile.png" alt="Dhine Franklin Arjona - Professional Web Developer Headshot"
                            class="w-full h-full bg-white object-cover" width="128" height="128">
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                        Dhine Franklin Arjona
                    </h1>
                    <h2 class="text-lg text-gray-600 dark:text-gray-300 mt-1">
                        Freelance Web Developer
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                        Malabon City, Philippines
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start mt-6">
                        <a href="mailto:dhinearjona16@gmail.com"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-linkedin text-white rounded-full hover:bg-blue-700 transition-colors duration-200"
                            aria-label="Send email to Dhine Franklin Arjona">
                            <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Contact</span>
                        </a>
                        <a href="https://calendly.com/dhinearjona/15min" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 text-linkedin border border-linkedin rounded-full hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-200"
                            aria-label="Schedule a meeting with Dhine Franklin Arjona">
                            <i data-lucide="calendar" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Schedule Meeting</span>
                        </a>
                        <a href="https://www.linkedin.com/in/dhinearjona/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-full hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
                            aria-label="Connect with Dhine Franklin Arjona on LinkedIn">
                            <i data-lucide="linkedin" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Connect</span>
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start mt-6">
                        <a href="https://www.facebook.com/dhinearjona" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 dark:text-gray-400 hover:text-linkedin dark:hover:text-linkedin transition-colors"
                            aria-label="Follow Dhine Franklin Arjona on Facebook">
                            <i data-lucide="facebook" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://github.com/Dhinearjona" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 dark:text-gray-400 hover:text-linkedin dark:hover:text-linkedin transition-colors"
                            aria-label="View Dhine Franklin Arjona's GitHub profile">
                            <i data-lucide="github" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://x.com/dhinearjona16" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 dark:text-gray-400 hover:text-linkedin dark:hover:text-linkedin transition-colors"
                            aria-label="Follow Dhine Franklin Arjona on X (Twitter)">
                            <i data-lucide="twitter" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/dhn_arjs/" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 dark:text-gray-400 hover:text-linkedin dark:hover:text-linkedin transition-colors"
                            aria-label="Follow Dhine Franklin Arjona on Instagram">
                            <i data-lucide="instagram" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Left Column - About & Skills -->
            <div class="lg:col-span-2 space-y-6">
                <!-- About Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">About</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        Hi, I'm <span class="font-semibold">Dhine</span> — a passionate Web Developer specializing in
                        <span class="font-semibold">PHP, Laravel, and MySQL</span>. I build scalable and efficient web
                        systems with clean, maintainable code. I enjoy turning ideas into functional websites that help
                        businesses grow online.
                    </p>
                </section>

                <!-- Education Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Education</h2>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-linkedin bg-opacity-10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="graduation-cap" class="w-6 h-6 text-linkedin"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">BS Information Technology</h3>
                            <p class="text-gray-600 dark:text-gray-400">Datamex College of Saint Adeline</p>
                            <p class="text-sm text-gray-500 dark:text-gray-500">2020 - 2024</p>
                        </div>
                    </div>
                </section>

                <!-- Experience Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Professional Experience</h2>
                    <div class="space-y-6 relative">
                        <!-- Experience 1 -->
                        <div class="pl-4 relative border-l-2 border-gray-300 dark:border-gray-600">
                            <div
                                class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-linkedin border-2 border-white dark:border-gray-800">
                            </div>
                            <div class="mt-[-4px]">
                                <div class="flex items-start gap-3 mb-2">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded flex items-center justify-center text-white font-semibold text-lg">
                                        MI
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Senior Full Stack
                                            Developer</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Myracle Innovation Inc. ·
                                            Full-time</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-500">Jul 2025 - Present · <span
                                                id="myracle-months">4</span> mos · Philippines</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">National Capital
                                            Region, Philippines</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span
                                                class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded text-[11px] font-medium">REST
                                                APIs</span>
                                            <span
                                                class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded text-[11px] font-medium">Google
                                                Cloud Platform (GCP)</span>
                                            <span
                                                class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded text-[11px] font-medium">Web
                                                Hosting</span>
                                            <span
                                                class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded text-[11px] font-medium">AI
                                                Integration</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div class="pl-4 relative border-l-2 border-gray-300 dark:border-gray-600">
                            <div
                                class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-linkedin border-2 border-white dark:border-gray-800">
                            </div>
                            <div class="mt-[-4px]">
                                <div class="flex items-start gap-3 mb-2">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded flex items-center justify-center text-white font-semibold text-lg">
                                        MI
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Junior Full stack
                                            Developer</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Myracle Innovation Inc.</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-500">Apr 2025 - Jul 2025 · 4 mos
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">National Capital
                                            Region, Philippines</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">Bootstrap</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">Git</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">HTML</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">MySQL</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">PHP</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">CSS</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">JavaScript</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">TailwindCSS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Experience 3 -->
                        <div class="pl-4 relative">
                            <div
                                class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-linkedin border-2 border-white dark:border-gray-800">
                            </div>
                            <div class="mt-[-4px]">
                                <div class="flex items-start gap-3 mb-2">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-700 rounded flex items-center justify-center text-white font-semibold text-lg">
                                        GI
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Web Developer</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Gerrman IT Solutions ·
                                            Full-time</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-500">Nov 2023 - May 2025 · 1 yr
                                            6 mos</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">Manila, Philippines ·
                                            Asia</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">Laravel</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">PHP</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">MySQL</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">Git</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">GitLab</span>
                                            <span
                                                class="px-2 py-0.5 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-[11px] font-medium">Firebase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Myracle Innovation SaaS</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Construction management platform
                            </p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Bootstrap</span>
                            </div>
                            <a href="https://www.myracle.ph/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Gerrman IT Solutions</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Corporate website & services</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Laravel</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Tailwind
                                    CSS</span>
                            </div>
                            <a href="https://gerrmanitsolutions.com/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Servicio Mobile App</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Digital services platform</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Laravel</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                            </div>
                            <a href="https://servicio.world/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">iNurse Review Center</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Educational platform</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">WIX</span>
                            </div>
                            <a href="https://www.inursereviewcenter.com/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Filipino Hardware</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">E-commerce platform</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Laravel</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Tailwind
                                    CSS</span>
                            </div>
                            <a href="https://filipinohardware.com/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Evacuation Shelter System</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Emergency management platform for
                                tracking shelters and capacity</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Bootstrap</span>
                            </div>
                            <a href="https://evacuationshelter.online/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Point of Sale System</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Complete POS solution for retail
                                businesses</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">JavaScript</span>
                            </div>
                            <a href="https://pos.dhinearjona.online/login.php" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Inventory Management System</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Centralized platform for inventory
                                tracking and stock control</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Bootstrap</span>
                            </div>
                            <a href="https://inventory.dhinearjona.online/" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Rental Management System</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Property and equipment rental
                                management platform</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">Bootstrap</span>
                            </div>
                            <a href="https://rental.dhinearjona.online/login.php" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Classroom Management System</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Educational platform for managing
                                classrooms and students</p>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">PHP</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">MySQL</span>
                                <span
                                    class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs font-medium">CSS3</span>
                            </div>
                            <a href="https://school.dhinearjona.online/login.php" target="_blank"
                                class="text-linkedin hover:underline text-sm">View Project →</a>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Right Sidebar -->
            <aside class="space-y-6">
                <!-- Skills Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Technical Skills</h2>
                        <button id="view-all-skills" class="text-sm text-linkedin hover:underline">View All</button>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Frontend</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">HTML5</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">CSS3</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">JavaScript</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Bootstrap</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">TailwindCSS</span>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Backend</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">PHP</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">MySQL</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">REST
                                    APIs</span>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Cloud & Hosting
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Google
                                    Cloud Platform</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Web
                                    Hosting</span>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Tools & Others</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Git</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">GitHub</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">GitLab</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Figma</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">Firebase</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm">AI
                                    Integration</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Blog Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Recent Blog Posts</h2>
                    <a href="blog/bowling.php" class="block group">
                        <h3
                            class="font-semibold text-gray-900 dark:text-white group-hover:text-linkedin transition-colors mb-2">
                            Bowling
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">September 5, 2025 • 3 min read</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">
                            Reflections on focus, timing, consistency, and learning to enjoy the game even when every
                            throw isn't a strike.
                        </p>
                    </a>
                </section>

                <!-- Contact Section -->
                <section
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Contact Information</h2>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                            <span class="text-sm">dhinearjona16@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-600 dark:text-gray-400">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                            <span class="text-sm">Malabon City, Philippines</span>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 dark:border-gray-800 mt-12">
        <div class="max-w-4xl mx-auto px-6 py-6">
            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                © 2025 Dhine Franklin Arjona. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Chatbot Trigger -->
    <button id="chatbot-toggle"
        class="fixed bottom-6 right-6 z-40 p-4 bg-linkedin text-white rounded-full shadow-xl hover:shadow-2xl transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900"
        aria-label="Open chat assistant">
        <i data-lucide="message-circle" class="w-6 h-6"></i>
    </button>

    <!-- Chatbot Widget -->
    <div id="chatbot-panel"
        class="fixed bottom-24 right-6 z-40 w-full max-w-sm sm:max-w-md bg-white dark:bg-gray-900/95 border border-gray-200/80 dark:border-gray-700/60 rounded-3xl shadow-[0_20px_45px_rgba(10,102,194,0.20)] backdrop-blur-lg overflow-hidden hidden">
        <div class="flex items-center justify-between px-5 py-4 bg-gradient-to-r from-linkedin to-blue-500 text-white">
            <div class="space-y-0.5">
                <p class="font-semibold text-base">Chat with Dhine</p>
                <p class="text-xs text-blue-100/90" id="chatbot-status">Typically responds within a few minutes</p>
            </div>
            <button id="chatbot-close" class="text-white/80 hover:text-white focus:outline-none" aria-label="Close chat">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
        <div id="chatbot-messages"
            class="max-h-[26rem] overflow-y-auto px-5 py-5 space-y-4 bg-gradient-to-br from-gray-50 via-white to-blue-50/40 dark:from-gray-900 dark:via-gray-900 dark:to-slate-900 text-sm">
            <div class="flex items-start gap-3">
                <div
                    class="w-9 p-2 flex items-center justify-center rounded-full bg-white/90 border border-white/40 text-linkedin font-semibold shadow">
                    DF
                </div>
                <div
                    class="bg-white/90 dark:bg-gray-800/90 border border-blue-100/70 dark:border-gray-700 rounded-2xl px-4 py-3 shadow-md leading-relaxed text-gray-700 dark:text-gray-200">
                    Hi! I'm your virtual assistant. Ask me about projects, services, or how to get started.
                </div>
            </div>
        </div>
        <form id="chatbot-form"
            class="px-5 py-4 bg-white/95 dark:bg-gray-900 border-t border-gray-200/80 dark:border-gray-800">
            <label for="chatbot-input" class="sr-only">Your message</label>
            <div class="flex items-center gap-3">
                <input id="chatbot-input" name="message" type="text" autocomplete="off"
                    class="flex-1 rounded-full border border-gray-300/80 dark:border-gray-700 bg-white/95 dark:bg-gray-900/70 px-4 py-2.5 text-sm text-gray-900 dark:text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-linkedin"
                    placeholder="Ask about projects, skills, or the blog..." maxlength="280">
                <button type="submit"
                    class="p-2.5 rounded-full bg-linkedin text-white hover:bg-blue-700 transition-colors shadow focus:outline-none focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-700"
                    aria-label="Send message">
                    <i data-lucide="send" class="w-4 h-4"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Skills Modal -->
    <div id="skills-modal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4 transition-opacity duration-200 opacity-0">
        <div id="skills-modal-panel"
            class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-2xl w-full max-h-[80vh] overflow-y-auto transform transition-all duration-200 ease-out opacity-0 scale-95 translate-y-1">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">All Skills</h2>
                    <button id="close-skills-modal"
                        class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>

                <div class="space-y-6">
                    <!-- Senior Full Stack Developer Skills -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                            Senior Full Stack Developer
                        </h3>
                        <div class="space-y-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Backend & APIs
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">REST
                                        APIs</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Cloud & Hosting
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Google
                                        Cloud Platform (GCP)</span>
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Web
                                        Hosting</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">AI & Integration
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">AI
                                        Integration</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Junior Full Stack Developer Skills -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            Junior Full Stack Developer
                        </h3>
                        <div class="space-y-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Frontend</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">HTML5</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">CSS3</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">JavaScript</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Bootstrap</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">TailwindCSS</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Backend</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">PHP</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">MySQL</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tools</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Git</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">GitHub</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">GitLab</span>
                                    <span
                                        class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Figma</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Initialize Lucide icons after DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });

        // Real-time month calculation for current positions
        function calculateMonths(startDate) {
            const start = new Date(startDate);
            const now = new Date();
            const diffTime = Math.abs(now - start);
            const diffMonths = Math.ceil(diffTime / (1000 * 60 * 60 * 24 * 30.44)); // Average days per month
            return diffMonths;
        }

        // Update month counters
        function updateMonthCounters() {
            const myracleMonths = calculateMonths('2025-07-01'); // July 2025

            const myracleElement = document.getElementById('myracle-months');

            if (myracleElement) myracleElement.textContent = myracleMonths;
            // Gerrman IT Solutions is no longer current position, so no need to calculate months
        }

        // Update counters on page load
        updateMonthCounters();

        // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const html = document.documentElement;

        // Check for saved theme preference or default to light mode
        const currentTheme = localStorage.getItem('theme') || 'light';
        html.classList.toggle('dark', currentTheme === 'dark');
        updateThemeIcon();

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const newTheme = html.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', newTheme);
            updateThemeIcon();
        });

        function updateThemeIcon() {
            if (html.classList.contains('dark')) {
                themeIcon.innerHTML =
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';
            } else {
                themeIcon.innerHTML =
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';
            }
        }

        // Skills Modal functionality
        const viewAllSkillsBtn = document.getElementById('view-all-skills');
        const skillsModal = document.getElementById('skills-modal');
        const closeSkillsModalBtn = document.getElementById('close-skills-modal');

        viewAllSkillsBtn.addEventListener('click', () => {
            skillsModal.classList.remove('hidden');
            // allow next frame to apply transition classes
            requestAnimationFrame(() => {
                skillsModal.classList.remove('opacity-0');
                const panel = document.getElementById('skills-modal-panel');
                panel.classList.remove('opacity-0', 'scale-95', 'translate-y-1');
            });
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });

        function closeSkills() {
            // start fade/scale out
            skillsModal.classList.add('opacity-0');
            const panel = document.getElementById('skills-modal-panel');
            panel.classList.add('opacity-0', 'scale-95', 'translate-y-1');
            // wait for transition to finish then hide
            setTimeout(() => {
                skillsModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 200);
        }

        closeSkillsModalBtn.addEventListener('click', closeSkills);

        // Close modal when clicking outside
        skillsModal.addEventListener('click', (e) => {
            if (e.target === skillsModal) closeSkills();
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !skillsModal.classList.contains('hidden')) closeSkills();
        });

        // Chatbot widget interactions
        const chatbotToggle = document.getElementById('chatbot-toggle');
        const chatbotPanel = document.getElementById('chatbot-panel');
        const chatbotClose = document.getElementById('chatbot-close');
        const chatbotForm = document.getElementById('chatbot-form');
        const chatbotInput = document.getElementById('chatbot-input');
        const chatbotMessages = document.getElementById('chatbot-messages');
        const chatbotStatus = document.getElementById('chatbot-status');

        function toggleChatbot(open) {
            const shouldOpen = typeof open === 'boolean' ? open : chatbotPanel.classList.contains('hidden');
            if (shouldOpen) {
                chatbotPanel.classList.remove('hidden');
                chatbotToggle.classList.add('hidden');
                chatbotInput.focus();
            } else {
                chatbotPanel.classList.add('hidden');
                chatbotToggle.classList.remove('hidden');
            }
        }

        const createBubble = (content, sender) => {
            const bubble = document.createElement('div');
            const text = document.createElement('p');
            text.className = 'whitespace-pre-line leading-relaxed';
            text.textContent = content;
            bubble.appendChild(text);

            if (sender === 'user') {
                bubble.className = 'max-w-[85%] bg-gradient-to-r from-linkedin to-blue-500 text-white rounded-2xl px-4 py-3 shadow-lg';
            } else {
                bubble.className = 'max-w-[85%] bg-white/95 dark:bg-gray-800/90 border border-blue-100/70 dark:border-gray-700 rounded-2xl px-4 py-3 shadow-lg text-gray-700 dark:text-gray-200';
            }

            return bubble;
        };

        function appendMessage(content, sender) {
            const wrapper = document.createElement('div');
            wrapper.className = sender === 'user'
                ? 'flex justify-end'
                : 'flex items-start gap-3';

            if (sender === 'user') {
                wrapper.appendChild(createBubble(content, sender));
            } else {
                const avatar = document.createElement('div');
                avatar.className = 'w-9 h-9 flex items-center justify-center rounded-full bg-white/90 border border-white/40 text-linkedin font-semibold shadow flex-shrink-0';
                avatar.textContent = 'DF';
                wrapper.appendChild(avatar);
                wrapper.appendChild(createBubble(content, sender));
            }

            chatbotMessages.appendChild(wrapper);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }

        chatbotToggle.addEventListener('click', () => toggleChatbot(true));
        chatbotClose.addEventListener('click', () => toggleChatbot(false));

        chatbotForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const message = chatbotInput.value.trim();
            if (!message) {
                chatbotInput.focus();
                return;
            }

            appendMessage(message, 'user');
            chatbotInput.value = '';
            chatbotInput.disabled = true;
            chatbotForm.querySelector('button[type="submit"]').disabled = true;
            chatbotStatus.textContent = 'Thinking...';

            try {
                const response = await fetch('chatbot.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ message })
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                const reply = typeof data.reply === 'string' && data.reply.trim() !== ''
                    ? data.reply.trim()
                    : "I'm here to help! Could you try rephrasing your question?";
                appendMessage(reply, 'bot');
            } catch (error) {
                appendMessage('Sorry, I had trouble reaching the server. Please try again in a moment.', 'bot');
            } finally {
                chatbotInput.disabled = false;
                chatbotForm.querySelector('button[type="submit"]').disabled = false;
                chatbotInput.focus();
                chatbotStatus.textContent = 'Typically responds within a few minutes';
            }
        });

        // Close chatbot on Escape when open
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && !chatbotPanel.classList.contains('hidden')) {
                toggleChatbot(false);
            }
        });
    </script>
</body>

</html>