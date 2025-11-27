<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include_once 'components/head.php'; ?>

<body class="font-sans bg-white dark:bg-black text-gray-900 dark:text-white transition-colors duration-300 min-h-screen">

    <!-- Theme Toggle -->
    <div class="fixed top-6 right-6 z-50">
        <button id="theme-toggle"
            class="p-3 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-full hover:bg-gray-50 dark:hover:bg-gray-900 transition-all duration-300"
            aria-label="Toggle dark mode" title="Toggle dark mode">
            <i id="theme-icon" class="w-5 h-5" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Header Section -->
    <header class="border-b border-gray-100 dark:border-gray-900">
        <div class="max-w-4xl mx-auto px-6 py-12 md:py-16">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <!-- Profile Picture -->
                <div class="flex-shrink-0">
                    <div
                        class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden border border-gray-200 dark:border-gray-800">
                        <img src="assets/img/profile.png"
                            alt="Dhine Franklin Arjona - Professional Web Developer Headshot"
                            class="w-full h-full bg-gray-100 dark:bg-gray-900 object-cover grayscale hover:grayscale-0 transition-all duration-500"
                            width="128" height="128">
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-black dark:text-white">
                        Dhine Franklin Arjona
                    </h1>
                    <h2 class="text-lg text-gray-600 dark:text-gray-400 mt-2 font-medium">
                        Full Stack Web Developer
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">
                        Malabon City, Philippines
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start mt-8">
                        <a href="mailto:dhinearjona16@gmail.com"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-black dark:bg-white text-white dark:text-black rounded-full hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 text-sm font-medium"
                            aria-label="Send email to Dhine Franklin Arjona">
                            <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Contact</span>
                        </a>
                        <a href="assets/documents/DhineArjonaResume.pdf" download
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-black dark:bg-white text-white dark:text-black rounded-full hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors duration-200 text-sm font-medium"
                            aria-label="Download Resume of Dhine Franklin Arjona">
                            <i data-lucide="download" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Resume</span>
                        </a>
                        <a href="https://calendly.com/dhinearjona/15min" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-5 py-2.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 rounded-full hover:border-black dark:hover:border-white hover:text-black dark:hover:text-white transition-colors duration-200 text-sm font-medium"
                            aria-label="Schedule a meeting with Dhine Franklin Arjona">
                            <i data-lucide="calendar" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Schedule</span>
                        </a>
                        <a href="https://www.linkedin.com/in/dhinearjona/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-5 py-2.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 rounded-full hover:border-black dark:hover:border-white hover:text-black dark:hover:text-white transition-colors duration-200 text-sm font-medium"
                            aria-label="Connect with Dhine Franklin Arjona on LinkedIn">
                            <i data-lucide="linkedin" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Connect</span>
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start mt-6">
                        <a href="https://www.facebook.com/dhinearjona" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-black dark:hover:text-white transition-colors duration-200"
                            aria-label="Follow Dhine Franklin Arjona on Facebook">
                            <i data-lucide="facebook" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://github.com/Dhinearjona" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-black dark:hover:text-white transition-colors duration-200"
                            aria-label="View Dhine Franklin Arjona's GitHub profile">
                            <i data-lucide="github" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://x.com/dhinearjona16" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-black dark:hover:text-white transition-colors duration-200"
                            aria-label="Follow Dhine Franklin Arjona on X (Twitter)">
                            <i data-lucide="twitter" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/dhn_arjs/" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-black dark:hover:text-white transition-colors duration-200"
                            aria-label="Follow Dhine Franklin Arjona on Instagram">
                            <i data-lucide="instagram" class="w-5 h-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column - About & Skills -->
            <div class="lg:col-span-2 space-y-8">
                <!-- About Section -->
                <section class="pb-8 border-b border-gray-100 dark:border-gray-900">
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-4">
                        About</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Full Stack Web Developer with experience building and maintaining internal SaaS tools and
                        responsive web applications using PHP (native and Laravel), MySQL, JavaScript, Tailwind CSS, and
                        Bootstrap. Skilled in OOP, clean code practices, Git-based version control, and full development
                        lifecycle, including requirement gathering, coding, testing, deployment, and maintenance. Proven
                        ability to deliver scalable, user-friendly solutions, integrate cloud storage systems like
                        Firebase, and optimize application performance across devices.
                    </p>
                </section>

                <!-- Education Section -->
                <section class="pb-8 border-b border-gray-100 dark:border-gray-900">
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-4">
                        Education</h2>
                    <div>
                        <h3 class="font-semibold text-black dark:text-white">BS Information Technology</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Datamex College of Saint Adeline</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">2020 — 2024</p>
                    </div>
                </section>

                <!-- Experience Section -->
                <section class="pb-8 border-b border-gray-100 dark:border-gray-900">
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-6">
                        Experience</h2>
                    <div class="space-y-8">
                        <!-- Experience 1 -->
                        <div>
                            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-1 mb-3">
                                <div>
                                    <h3 class="font-semibold text-black dark:text-white">Full Stack Developer</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Myracle Innovation Inc.</p>
                                </div>
                                <p class="text-xs text-gray-400 dark:text-gray-500 md:text-right">Apr 2025 — Nov 2025
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-2">
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Developed and maintained multiple internal SaaS tools using native PHP with
                                        OOP and MySQL.</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Wrote clean, maintainable code using PHP, MySQL, JavaScript, JQuery, and
                                        Bootstrap.</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Managed version control through GitHub, including testing, debugging, and code
                                        reviews.</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Participated in the full development lifecycle, from requirement gathering to
                                        deployment.</span>
                                </li>
                            </ul>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">PHP</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">MySQL</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">JavaScript</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">Bootstrap</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">Git</span>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div>
                            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-1 mb-3">
                                <div>
                                    <h3 class="font-semibold text-black dark:text-white">Web Developer</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Gerrman IT Solutions</p>
                                </div>
                                <p class="te xt-xs text-gray-400 dark:text-gray-500 md:text-right">Nov 2023 — May 2025
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-2">
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Designed and implemented modern, responsive web pages using Laravel and
                                        Tailwind CSS, enhancing user experience and
                                        cross-device compatibility.
                                    </span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Developed modern, responsive pages using Laravel and Tailwind CSS.</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Integrated Firebase Storage for real-time image uploads and cloud storage
                                        solutions.</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-gray-300 dark:text-gray-600">—</span>
                                    <span>Collaborated with clients to gather requirements and deliver user-friendly web
                                        solutions.</span>
                                </li>
                            </ul>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">Laravel</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">PHP</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">Tailwind
                                    CSS</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">MySQL</span>
                                <span
                                    class="px-2 py-1 border border-gray-200 dark:border-gray-800 text-gray-500 dark:text-gray-400 rounded text-xs">Firebase</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section>
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-6">
                        Projects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <a href="https://www.myracle.ph/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Myracle Innovation
                                SaaS</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Construction management platform
                            </p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · Bootstrap</p>
                        </a>

                        <a href="https://gerrmanitsolutions.com/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Gerrman IT
                                Solutions</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Corporate website & services</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Laravel · Tailwind CSS</p>
                        </a>

                        <a href="https://servicio.world/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Servicio Mobile
                                App</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Digital services platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Laravel · MySQL</p>
                        </a>

                        <a href="https://www.inursereviewcenter.com/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">iNurse Review
                                Center</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Educational platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">WIX</p>
                        </a>

                        <a href="https://filipinohardware.com/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Filipino Hardware
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">E-commerce platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">Laravel · Tailwind CSS</p>
                        </a>

                        <a href="https://evacuationshelter.online/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Evacuation Shelter
                                System</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Emergency management platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · MySQL · Bootstrap</p>
                        </a>

                        <a href="https://pos.dhinearjona.online/login.php" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Point of Sale
                                System</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">POS solution for retail</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · MySQL · JavaScript</p>
                        </a>

                        <a href="https://inventory.dhinearjona.online/" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Inventory
                                Management</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Inventory tracking system</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · MySQL · Bootstrap</p>
                        </a>

                        <a href="https://rental.dhinearjona.online/login.php" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Rental Management
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Property rental platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · MySQL · Bootstrap</p>
                        </a>

                        <a href="https://school.dhinearjona.online/login.php" target="_blank"
                            class="group block p-4 -m-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900/50 transition-colors duration-200">
                            <h3 class="font-medium text-black dark:text-white group-hover:underline">Classroom
                                Management</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Educational platform</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">PHP · MySQL · CSS</p>
                        </a>
                    </div>
                </section>
            </div>

            <!-- Right Sidebar -->
            <aside class="space-y-8">
                <!-- Skills Section -->
                <section class="pb-8 border-b border-gray-100 dark:border-gray-900 lg:border-0">
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-4">
                        Skills</h2>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">HTML</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">CSS</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">JavaScript</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">PHP</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">Laravel</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">MySQL</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">Bootstrap</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">Tailwind
                            CSS</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">Git</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 rounded-full text-xs">Firebase</span>
                    </div>
                </section>

                <!-- Blog Section -->
                <section class="pb-8 border-b border-gray-100 dark:border-gray-900 lg:border-0">
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-4">
                        Writing</h2>
                    <a href="assets/blog/bowling.php" class="group block">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">Bowling</h3>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">September 5, 2025</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-2 line-clamp-2">
                            Reflections on focus, timing, and learning to enjoy the game.
                        </p>
                    </a>
                </section>

                <!-- Contact Section -->
                <section>
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-4">
                        Contact</h2>
                    <div class="space-y-3">
                        <a href="mailto:dhinearjona16@gmail.com"
                            class="flex items-center gap-3 text-gray-500 dark:text-gray-400 hover:text-black dark:hover:text-white transition-colors text-sm">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            <span>dhinearjona16@gmail.com</span>
                        </a>
                        <div class="flex items-center gap-3 text-gray-500 dark:text-gray-400 text-sm">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Malabon City, Philippines</span>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-100 dark:border-gray-900 mt-16">
        <div class="max-w-4xl mx-auto px-6 py-8">
            <p class="text-center text-xs text-gray-400 dark:text-gray-500">
                © 2025 Dhine Franklin Arjona
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Theme toggle functionality
        const themeToggle = document.getElementById("theme-toggle");
        const themeIcon = document.getElementById("theme-icon");
        const html = document.documentElement;

        // Check for saved theme preference or default to light mode
        const currentTheme = localStorage.getItem("theme") || "light";
        html.classList.toggle("dark", currentTheme === "dark");
        updateThemeIcon();

        themeToggle.addEventListener("click", () => {
            html.classList.toggle("dark");
            const newTheme = html.classList.contains("dark") ? "dark" : "light";
            localStorage.setItem("theme", newTheme);
            updateThemeIcon();
        });

        function updateThemeIcon() {
            if (html.classList.contains("dark")) {
                themeIcon.innerHTML =
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';
            } else {
                themeIcon.innerHTML =
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';
            }
        }
    </script>
</body>

</html>
