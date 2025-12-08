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

    <!-- Hero -->
    <header id="hero" class="border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-5xl mx-auto px-6 pt-20 pb-16 md:pt-24 md:pb-20">
            <div class="text-center">
                <div class="flex justify-center mb-6">
                    <div class="w-24 h-24 md:w-28 md:h-28 rounded-full overflow-hidden border-2 border-black dark:border-white">
                        <img src="assets/img/profile.png"
                            alt="Dhine Franklin Arjona"
                            class="w-full h-full bg-gray-100 dark:bg-gray-900 object-cover transition-all duration-500"
                            width="112" height="112">
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-black dark:text-white mb-3">
                    Dhine Franklin Arjona
                </h1>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-400 mb-8">
                    Full Stack Web Developer
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 text-sm">
                    <a href="mailto:dhinearjona16@gmail.com"
                        class="inline-flex items-center gap-2 px-5 py-2.5 border border-black dark:border-white text-black dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-all duration-200"
                        aria-label="Send email">
                        <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Contact</span>
                    </a>
                    <a href="assets/documents/DhineArjonaResume.pdf" download
                        class="inline-flex items-center gap-2 px-5 py-2.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:border-black dark:hover:border-white hover:text-black dark:hover:text-white transition-all duration-200"
                        aria-label="Download Resume">
                        <i data-lucide="download" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Resume</span>
                    </a>
                    <a href="#projects"
                        class="inline-flex items-center gap-2 px-5 py-2.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:border-black dark:hover:border-white hover:text-black dark:hover:text-white transition-all duration-200">
                        <i data-lucide="layout-dashboard" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-12 md:py-16 space-y-20 md:space-y-24">

        <!-- About Section -->
        <section id="about" class="border-b border-gray-200 dark:border-gray-800 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-500 dark:text-gray-500 mb-6">
                About
            </h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-sm md:text-base max-w-3xl">
                Full Stack Web Developer building SaaS platforms, internal systems, and landing pages. 
                I work with PHP (Laravel & Native), MySQL, JavaScript, Bootstrap 5, and Tailwind CSS to deliver 
                production-ready solutions from concept to deployment.
            </p>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="border-b border-gray-200 dark:border-gray-800 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-500 dark:text-gray-500 mb-6">
                Skills
            </h2>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">PHP (Laravel & Native)</span>
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">JavaScript</span>
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">MySQL</span>
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">Bootstrap 5</span>
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">Tailwind CSS</span>
                <span class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 text-xs">Git</span>
            </div>
        </section>


        <!-- Projects Section -->
        <section id="projects" class="border-b border-gray-200 dark:border-gray-800 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-500 dark:text-gray-500 mb-6">
                Projects
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Each card is a live project demo link -->
                <button onclick="openVideoModal()"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200 text-left w-full">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Job Order Tracker
                        </h3>
                        <i data-lucide="play" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </button>

                <a href="https://gerrmanitsolutions.com/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Gerrman IT Solutions
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        Laravel · Tailwind CSS
                    </p>
                </a>

                <a href="https://servicio.world/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Servicio Mobile App
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        Laravel · MySQL
                    </p>
                </a>

                <a href="https://www.inursereviewcenter.com/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            iNurse Review Center
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        WIX
                    </p>
                </a>

                <a href="https://filipinohardware.com/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Filipino Hardware
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        Laravel · Tailwind CSS
                    </p>
                </a>

                <a href="https://evacuationshelter.online/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Evacuation Shelter System
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://pos.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Point of Sale System
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · JavaScript
                    </p>
                </a>

                <a href="https://inventory.dhinearjona.online/" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Inventory Management
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://rental.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Rental Management
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://school.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-300 dark:border-gray-700 p-4 hover:border-black dark:hover:border-white transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Classroom Management
                        </h3>
                        <i data-lucide="external-link" class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"></i>
                    </div>
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-500">
                        PHP · MySQL · CSS
                    </p>
                </a>
            </div>
        </section>

        <section id="contact" class="pb-4 md:pb-6">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-500 dark:text-gray-500 mb-6">
                Contact
            </h2>
            <div class="space-y-3 text-sm">
                <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                    <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                    <a href="mailto:dhinearjona16@gmail.com" class="hover:underline">
                        dhinearjona16@gmail.com
                    </a>
                </div>
                <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                    <i data-lucide="map-pin" class="w-4 h-4" aria-hidden="true"></i>
                    <span>Malabon City, Philippines</span>
                </div>
                <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                    <i data-lucide="calendar" class="w-4 h-4" aria-hidden="true"></i>
                    <a href="https://calendly.com/dhinearjona/15min" target="_blank" rel="noopener noreferrer"
                        class="hover:underline">Schedule a call</a>
                </div>
            </div>
            <div class="flex flex-wrap gap-4 mt-6">
                <a href="https://github.com/Dhinearjona" target="_blank" rel="noopener noreferrer"
                    class="text-gray-500 hover:text-black dark:text-gray-500 dark:hover:text-white transition-colors duration-200">
                    <i data-lucide="github" class="w-5 h-5" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/dhinearjona/" target="_blank" rel="noopener noreferrer"
                    class="text-gray-500 hover:text-black dark:text-gray-500 dark:hover:text-white transition-colors duration-200">
                    <i data-lucide="linkedin" class="w-5 h-5" aria-hidden="true"></i>
                </a>
            </div>
        </section>
    </main>

    <footer class="border-t border-gray-200 dark:border-gray-800 mt-16">
        <div class="max-w-4xl mx-auto px-6 py-8">
            <p class="text-center text-xs text-gray-500 dark:text-gray-500">
                © 2025 Dhine Franklin Arjona
            </p>
        </div>
    </footer>

    <div id="video-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/80 backdrop-blur-sm p-4 opacity-0 transition-opacity duration-300 ease-in-out">
        <div id="video-modal-content" class="relative w-full max-w-4xl transform scale-95 transition-transform duration-300 ease-in-out">
            <button onclick="closeVideoModal()"
                class="absolute -top-10 right-0 text-white hover:text-gray-300 transition-colors z-10 p-2"
                aria-label="Close video modal">
                <i data-lucide="x" class="w-6 h-6" aria-hidden="true"></i>
            </button>
            <div class="relative bg-black rounded-lg overflow-hidden shadow-2xl">
                <video id="job-order-video" class="w-full h-auto" controls>
                    <source src="assets/video/JobOrderTracker.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        lucide.createIcons();

        const themeToggle = document.getElementById("theme-toggle");
        const themeIcon = document.getElementById("theme-icon");
        const html = document.documentElement;

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

        function openVideoModal() {
            const modal = document.getElementById("video-modal");
            const modalContent = document.getElementById("video-modal-content");
            const video = document.getElementById("job-order-video");
            
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.style.overflow = "hidden";
            
            requestAnimationFrame(() => {
                modal.classList.remove("opacity-0");
                modal.classList.add("opacity-100");
                modalContent.classList.remove("scale-95");
                modalContent.classList.add("scale-100");
            });
            
            setTimeout(() => {
                video.play();
            }, 150);
                
            lucide.createIcons();
        }

        function closeVideoModal() {
            const modal = document.getElementById("video-modal");
            const modalContent = document.getElementById("video-modal-content");
            const video = document.getElementById("job-order-video");
            
            modal.classList.remove("opacity-100");
            modal.classList.add("opacity-0");
            modalContent.classList.remove("scale-100");
            modalContent.classList.add("scale-95");
            
            video.pause();
            
            setTimeout(() => {
                modal.classList.add("hidden");
                modal.classList.remove("flex");
                document.body.style.overflow = "";
                video.currentTime = 0;
            }, 300);
        }

        document.getElementById("video-modal")?.addEventListener("click", function(e) {
            if (e.target === this) {
                closeVideoModal();
            }
        });

        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape") {
                const modal = document.getElementById("video-modal");
                if (!modal.classList.contains("hidden")) {
                    closeVideoModal();
                }
            }
        });
    </script>
</body>

</html>
