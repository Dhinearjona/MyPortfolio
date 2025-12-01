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

    <!-- Hero / Header -->
    <header id="hero" class="border-b border-gray-100 dark:border-gray-900">
        <div class="cover-photo">
            <div class="max-w-5xl mx-auto px-6 pt-16 pb-20 md:pt-20 md:pb-24">
                <div class="grid gap-10 md:grid-cols-[auto,1fr] items-center">
                    <!-- Profile Picture -->
                    <div class="flex justify-center md:justify-start">
                        <div
                            class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-white/80 dark:border-black/80 shadow-lg">
                            <img src="assets/img/profile.png"
                                alt="Dhine Franklin Arjona - Professional Web Developer Headshot"
                                class="w-full h-full bg-gray-100 dark:bg-gray-900 object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                width="128" height="128">
                        </div>
                    </div>

                    <!-- Hero Content -->
                    <div class="text-center md:text-left text-white">
                        <p class="text-xs font-semibold tracking-[0.3em] uppercase text-white/80 mb-3">
                            Full Stack Web Developer
                        </p>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                            Building reliable web systems for real businesses.
                        </h1>
                        <p class="mt-4 text-sm md:text-base text-white/80 max-w-xl md:max-w-2xl">
                            I design, build, and ship production-ready SaaS platforms, internal tools, and landing pages
                            using PHP (Laravel & Native), MySQL, JavaScript, Bootstrap 5, and Tailwind CSS.
                        </p>

                        <!-- Hero CTAs -->
                        <div class="mt-8 flex flex-wrap items-center justify-center md:justify-start gap-3">
                            <a href="mailto:dhinearjona16@gmail.com"
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium linkedin-gradient text-white shadow hover:shadow-lg transition-shadow"
                                aria-label="Send email to Dhine Franklin Arjona">
                                <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                                <span>Hire Me</span>
                            </a>
                            <a href="assets/documents/DhineArjonaResume.pdf" download
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-white/50 text-white text-sm font-medium hover:bg-white hover:text-black transition-colors"
                                aria-label="Download Resume of Dhine Franklin Arjona">
                                <i data-lucide="download" class="w-4 h-4" aria-hidden="true"></i>
                                <span>Download Resume</span>
                            </a>
                            <a href="#projects"
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-medium text-white/90 hover:text-white">
                                <i data-lucide="layout-dashboard" class="w-4 h-4" aria-hidden="true"></i>
                                <span>View Projects</span>
                            </a>
                        </div>

                        <!-- Quick Links / Portfolio Buttons -->
                        <div class="mt-6 flex flex-wrap items-center justify-center md:justify-start gap-4 text-sm">
                            <a href="https://github.com/Dhinearjona" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-white/80 hover:text-white">
                                <i data-lucide="github" class="w-4 h-4" aria-hidden="true"></i>
                                <span>GitHub Portfolio</span>
                            </a>
                            <span class="hidden md:inline-block text-white/30">•</span>
                            <a href="https://www.linkedin.com/in/dhinearjona/" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-white/80 hover:text-white">
                                <i data-lucide="linkedin" class="w-4 h-4" aria-hidden="true"></i>
                                <span>LinkedIn</span>
                            </a>
                            <span class="hidden md:inline-block text-white/30">•</span>
                            <a href="https://calendly.com/dhinearjona/15min" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-white/80 hover:text-white">
                                <i data-lucide="calendar" class="w-4 h-4" aria-hidden="true"></i>
                                <span>Book a Call</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-12 md:py-16 space-y-20 md:space-y-24">

        <!-- About Section -->
        <section id="about" class="border-b border-gray-100 dark:border-gray-900 pb-12 md:pb-16">
            <div class="flex items-center justify-between gap-4 mb-4">
                <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-400 dark:text-gray-500">
                    About Me
                </h2>
                <p class="hidden md:block text-xs text-gray-400 dark:text-gray-500">
                    Malabon City, Philippines
                </p>
            </div>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                I’m a Full Stack Web Developer with 2+ years of experience building landing pages, internal systems, and
                SaaS applications for real businesses. I work end-to-end—from scoping and database design to frontend,
                backend, deployment, and hosting automation—focusing on clean, scalable, and maintainable code.
            </p>
            <p class="mt-4 text-gray-600 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                My main tools are PHP (Laravel & Native), MySQL, JavaScript, Bootstrap 5, Tailwind CSS, and Git. I enjoy
                collaborating with non-technical stakeholders, translating business needs into reliable web systems that
                ship on time and perform well in production.
            </p>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="border-b border-gray-100 dark:border-gray-900 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-400 dark:text-gray-500 mb-6">
                Skills
            </h2>
            <div class="grid gap-6 md:grid-cols-2">
                <div class="space-y-3">
                    <h3 class="text-xs font-medium text-gray-500 dark:text-gray-400">Programming & Frameworks</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">PHP
                            (Native & Laravel)</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">JavaScript</span>
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xs font-medium text-gray-500 dark:text-gray-400">Frontend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">Bootstrap
                            5</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">Tailwind
                            CSS</span>
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xs font-medium text-gray-500 dark:text-gray-400">Database & Storage</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">MySQL</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">Firebase</span>
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xs font-medium text-gray-500 dark:text-gray-400">Version Control & Deployment</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">Git</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">GitHub</span>
                        <span
                            class="px-3 py-1.5 border border-gray-200 dark:border-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-xs">GitLab</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience & Education (portfolio-style highlight) -->
        <section class="border-b border-gray-100 dark:border-gray-900 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-400 dark:text-gray-500 mb-6">
                Experience
            </h2>

            <div class="grid gap-6 md:grid-cols-2">
                <!-- Experience 1 -->
                <article
                    class="rounded-lg border border-gray-100 dark:border-gray-800 p-4 bg-white/60 dark:bg-black/40 backdrop-blur-sm">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <h3 class="font-semibold text-black dark:text-white text-sm md:text-base">
                                Full Stack Web Developer
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                                Myracle Innovation Inc.
                            </p>
                        </div>
                        <p class="text-[10px] text-gray-400 dark:text-gray-500 text-right">
                            2025
                        </p>
                    </div>
                    <p class="mt-3 text-xs md:text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Built and maintained SaaS tools and internal systems for real construction and operations
                        teams, from inventory and job orders to sales tracking and order fulfillment.
                    </p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            PHP · MySQL
                        </span>
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            Bootstrap 5
                        </span>
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            Git · Deployment
                        </span>
                    </div>
                </article>

                <!-- Experience 2 -->
                <article
                    class="rounded-lg border border-gray-100 dark:border-gray-800 p-4 bg-white/60 dark:bg-black/40 backdrop-blur-sm">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <h3 class="font-semibold text-black dark:text-white text-sm md:text-base">
                                Web Developer
                            </h3>
                            <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                                Gerrman IT Solutions Inc.
                            </p>
                        </div>
                        <p class="text-[10px] text-gray-400 dark:text-gray-500 text-right">
                            2023 – 2025
                        </p>
                    </div>
                    <p class="mt-3 text-xs md:text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Delivered marketing sites and internal tools for different brands, focusing on responsive UI,
                        performance, and smooth deployment workflows.
                    </p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            Laravel · JavaScript
                        </span>
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            Tailwind CSS · Bootstrap 5
                        </span>
                        <span
                            class="px-2 py-1 rounded-full border border-gray-200 dark:border-gray-800 text-[11px] text-gray-600 dark:text-gray-400">
                            Git · GitLab
                        </span>
                    </div>
                </article>
            </div>

            <!-- Education Highlight -->
            <div class="mt-8">
                <h3 class="text-xs font-medium uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-3">
                    Education
                </h3>
                <div
                    class="rounded-lg border border-gray-100 dark:border-gray-800 p-4 bg-white/40 dark:bg-black/40 flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                    <div>
                        <p class="font-semibold text-black dark:text-white text-sm md:text-base">
                            BS Information Technology
                        </p>
                        <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                            Datamex College of Saint Adeline
                        </p>
                    </div>
                    <p class="text-[11px] text-gray-400 dark:text-gray-500">
                        2020 — 2024
                    </p>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="border-b border-gray-100 dark:border-gray-900 pb-12 md:pb-16">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-400 dark:text-gray-500 mb-6">
                Projects (Real-World Impact)
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Each card is a live project demo link -->
                <a href="https://www.myracle.ph/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Myracle Innovation SaaS
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Construction management platform for tracking projects, jobs, and documentation.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · Bootstrap
                    </p>
                </a>

                <a href="https://gerrmanitsolutions.com/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Gerrman IT Solutions
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Corporate site showcasing IT services, portfolio, and lead-generation forms.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        Laravel · Tailwind CSS
                    </p>
                </a>

                <a href="https://servicio.world/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Servicio Mobile App
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Digital services platform connecting users with providers via web.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        Laravel · MySQL
                    </p>
                </a>

                <a href="https://www.inursereviewcenter.com/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            iNurse Review Center
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Educational platform for nursing review and course information.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        WIX
                    </p>
                </a>

                <a href="https://filipinohardware.com/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Filipino Hardware
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        E‑commerce platform for hardware products with product catalog and inquiries.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        Laravel · Tailwind CSS
                    </p>
                </a>

                <a href="https://evacuationshelter.online/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Evacuation Shelter System
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Emergency management platform for tracking shelters, capacity, and evacuees.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://pos.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Point of Sale System
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        POS solution for retail stores with inventory, billing, and reporting.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · MySQL · JavaScript
                    </p>
                </a>

                <a href="https://inventory.dhinearjona.online/" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Inventory Management
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Inventory tracking system for monitoring stock levels and movements.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://rental.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Rental Management
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Property rental system for managing tenants, units, and payments.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · MySQL · Bootstrap
                    </p>
                </a>

                <a href="https://school.dhinearjona.online/login.php" target="_blank"
                    class="group block rounded-lg border border-gray-100 dark:border-gray-800 p-4 hover:border-gray-300 dark:hover:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-900/40 transition-colors duration-200">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-black dark:text-white group-hover:underline">
                            Classroom Management
                        </h3>
                        <span
                            class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-gray-500 flex items-center gap-1">
                            Live Demo
                            <i data-lucide="external-link" class="w-3 h-3" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Educational platform for managing students, classes, and grading.
                    </p>
                    <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
                        PHP · MySQL · CSS
                    </p>
                </a>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="pb-4 md:pb-6">
            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-gray-400 dark:text-gray-500 mb-6">
                Contact
            </h2>

            <!-- Contact Info & CTAs (no form) -->
            <div class="space-y-4">
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-400 leading-relaxed">
                    Looking for a developer to help you build a new system or improve an existing product?
                    Reach out via email or schedule a quick call and I’ll get back to you as soon as possible.
                </p>

                <div class="space-y-3 text-sm">
                    <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                        <i data-lucide="mail" class="w-4 h-4" aria-hidden="true"></i>
                        <a href="mailto:dhinearjona16@gmail.com" class="hover:underline">
                            dhinearjona16@gmail.com
                        </a>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                        <i data-lucide="map-pin" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Malabon City, Philippines · Open to remote work</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                        <i data-lucide="calendar" class="w-4 h-4" aria-hidden="true"></i>
                        <a href="https://calendly.com/dhinearjona/15min" target="_blank" rel="noopener noreferrer"
                            class="hover:underline">Schedule a 15‑minute intro call</a>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="https://github.com/Dhinearjona" target="_blank" rel="noopener noreferrer"
                        class="text-gray-500 hover:text-black dark:text-gray-400 dark:hover:text-white transition-colors duration-200 inline-flex items-center gap-2">
                        <i data-lucide="github" class="w-5 h-5" aria-hidden="true"></i>
                        <span class="text-xs">GitHub</span>
                    </a>
                    <a href="https://x.com/dhinearjona16" target="_blank" rel="noopener noreferrer"
                        class="text-gray-500 hover:text-black dark:text-gray-400 dark:hover:text-white transition-colors duration-200 inline-flex items-center gap-2">
                        <i data-lucide="twitter" class="w-5 h-5" aria-hidden="true"></i>
                        <span class="text-xs">X (Twitter)</span>
                    </a>
                    <a href="https://www.facebook.com/dhinearjona" target="_blank" rel="noopener noreferrer"
                        class="text-gray-500 hover:text-black dark:text-gray-400 dark:hover:text-white transition-colors duration-200 inline-flex items-center gap-2">
                        <i data-lucide="facebook" class="w-5 h-5" aria-hidden="true"></i>
                        <span class="text-xs">Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/dhn_arjs/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-500 hover:text-black dark:text-gray-400 dark:hover:text-white transition-colors duration-200 inline-flex items-center gap-2">
                        <i data-lucide="instagram" class="w-5 h-5" aria-hidden="true"></i>
                        <span class="text-xs">Instagram</span>
                    </a>
                </div>
            </div>
        </section>
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
