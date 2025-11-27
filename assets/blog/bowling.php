<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/profile.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", "system-ui", "sans-serif"],
                    },
                    colors: {
                        linkedin: '#0A66C2',
                    },
                },
            },
        };
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <title>Bowling — Dhine Franklin Arjona</title>
</head>

<body class="font-sans bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 min-h-screen">
    <!-- Theme Toggle -->
    <div class="fixed top-6 right-6 z-50">
        <button id="theme-toggle"
            class="p-3 bg-white dark:bg-gray-800 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300">
            <i id="theme-icon" class="w-5 h-5"></i>
        </button>
    </div>

    <!-- Back Button -->
    <div class="max-w-4xl mx-auto px-6 pt-6">
        <a href="../../index.php"
            class="inline-flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-linkedin transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
            <span>Back to Home</span>
        </a>
    </div>

    <!-- Article Content -->
    <div class="max-w-4xl mx-auto px-6 py-8">
        <!-- Header Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden mb-6">
            <img src="../../assets/img/bowling.jpg" alt="Bowling"
                class="w-full h-80 object-cover" />
            <div class="p-8">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Bowling Chronicles
                </h1>

                <div class="flex items-center gap-6 text-sm text-gray-600 dark:text-gray-400">
                    <button id="like-button"
                        class="inline-flex items-center gap-2 hover:text-red-500 transition-colors">
                        <i id="like-icon" data-lucide="heart" class="w-5 h-5"></i>
                        <span id="like-count" class="font-medium">0</span>
                    </button>
                    <div class="inline-flex items-center gap-2">
                        <i data-lucide="eye" class="w-5 h-5"></i>
                        <span id="view-count" class="font-medium">0</span>
                    </div>
                    <div class="inline-flex items-center gap-2">
                        <i data-lucide="calendar" class="w-5 h-5"></i>
                        <span>September 5, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article Content Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-8 md:p-12 prose prose-lg max-w-none dark:prose-invert">
            <!-- Opening -->
            <div class="mb-8">
                <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 mb-6 first-letter:text-5xl first-letter:font-bold first-letter:text-linkedin first-letter:mr-2 first-letter:float-left">
                    Noong nakaraan, naglaro kami ng bowling. Sa totoo lang, akala ko madali lang—pili ng bola, konting takbo, bitaw, tapos magic na lang kung strike o gutter. Simple, diba? Pero iba pala pag ikaw na yung nasa lane. Yung bola na mukhang ang gaan-gaan, biglang parang may sariling isip na.
                </p>
            </div>

            <!-- The Ball Selection -->
            <div class="my-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700/50 dark:to-gray-600/50 rounded-xl border-l-4 border-linkedin">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <i data-lucide="target" class="w-5 h-5 text-linkedin"></i>
                    Ang Hamon ng Pagpili
                </h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Una, challenge pa lang yung pagpili ng bola. Yung <em class="text-linkedin font-medium">easy</em>, parang laruan lang—halos madulas sa kamay, parang gustong mag-dance sa palad mo. Pero ang hirap i-control! Yung <em class="text-linkedin font-medium">medium</em>, sakto lang sa buhat—pero minsan biglang parang mabigat na bato na ayaw mong bitawan.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Pero yung <em class="text-linkedin font-medium">heavy ball</em>? Aba, yun ang may attitude! Parang may gustong ipahamak sayo kasi habang hawak mo siya, pakiramdam mo buo mong kaluluwa ang kasama. Each ball has its own personality—and trust me, hindi lahat sila cooperative.
                </p>
            </div>

            <!-- The Strike Moment -->
            <div class="my-8">
                <img src="../../assets/img/score.jpg" alt="Score" class="w-full h-auto rounded-xl shadow-lg my-8 border border-gray-200 dark:border-gray-700">
            </div>

            <div class="my-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-gray-700/50 dark:to-gray-600/50 rounded-xl border-l-4 border-green-500">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <i data-lucide="sparkles" class="w-5 h-5 text-green-500"></i>
                    Ang Perfect Strike
                </h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Pero eto yung nakakatawa—at nakakaproud! May isang round, ako lang yung naka-perfect strike. As in lahat ng pins, bagsak. Strike pa more! 
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Ang saya ng tunog nung <strong class="text-green-600 dark:text-green-400">"kraaashhh"</strong> na parang fireworks sa tenga. Yung feeling na parang world champion ka kahit first time mo lang ulit mag-bowling. That moment? That's what makes the whole experience worth it.
                </p>
            </div>

            <!-- The Comedic Relief -->
            <div class="my-8 p-6 bg-gradient-to-r from-amber-50 to-orange-50 dark:from-gray-700/50 dark:to-gray-600/50 rounded-xl border-l-4 border-amber-500">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <i data-lucide="laugh" class="w-5 h-5 text-amber-500"></i>
                    Ang Bloopers ng Kaibiganan
                </h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Yung mga kasama ko? Hahaha, sorry guys pero karamihan ng bola nila, derecho gutter. Imagine mo: tatlong sunod-sunod na tira, sabay-sabay pa kami nagtitinginan, tapos walang tumatama sa pins. Parang synchronized failure in motion!
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Parang bowling lane yung nananalo, hindi kami. May isa pa nga na parang may sariling buhay yung bola—kahit anong effort niya na itama, kahit anong angle, kahit anong prayer, dumidiretso pa rin sa gutter. Yung type na "Lord, please!" pero si Lord parang "Sorry, better luck next time!" 😂
                </p>
            </div>

            <!-- The Realization -->
            <div class="my-8 p-6 bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700/50 dark:to-gray-600/50 rounded-xl border-l-4 border-purple-500">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                    <i data-lucide="lightbulb" class="w-5 h-5 text-purple-500"></i>
                    Ang Realization
                </h3>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Doon ko narealize na iba talaga yung mix ng swerte, timing, at konting diskarte. Minsan kahit anong pilit mo, kahit anong technique, hindi talaga tatama. Pero may mga pagkakataon din na biglang ikaw yung tatama ng perfect—yung type na parang Universe na mismo ang nag-align para sayo. It's a beautiful, chaotic dance between skill and chance.
                </p>
            </div>

            <!-- The Lesson -->
            <div class="my-8">
                <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                    At the end of the day, natawa lang kami nang natawa. Hindi na mahalaga kung sino yung panalo kasi honestly, <strong class="text-linkedin dark:text-blue-400">ang panalo talaga yung nag-eenjoy</strong>. Kahit gutter ball, may halakhak. Kahit mintis, may kwento. Kahit strike, may memory na tatatak.
                </p>
            </div>

            <!-- Key Takeaways -->
            <div class="my-10 p-8 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-gray-800/80 dark:to-gray-700/80 rounded-2xl border border-gray-200 dark:border-gray-600 shadow-sm">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
                    <i data-lucide="book-open" class="w-8 h-8 text-linkedin"></i>
                    Key Takeaways
                </h2>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-5 bg-white/80 dark:bg-gray-800/60 rounded-xl border-l-4 border-linkedin hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-linkedin flex-shrink-0 mt-0.5"></i>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                <strong class="text-linkedin">Hindi lahat ng tira magiging strike.</strong> May mga araw na feeling mo ang galing mo na, pero sa gutter pa rin bagsak. And that's okay.
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-5 bg-white/80 dark:bg-gray-800/60 rounded-xl border-l-4 border-green-500 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5"></i>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                <strong class="text-green-600 dark:text-green-400">Hindi rin tungkol sa lakas.</strong> Kailangan ng focus, timing, at konting swerte. Balance lang.
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-5 bg-white/80 dark:bg-gray-800/60 rounded-xl border-l-4 border-purple-500 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-purple-500 flex-shrink-0 mt-0.5"></i>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                <strong class="text-purple-600 dark:text-purple-400">Ang mahalaga, tuloy lang.</strong> Bawat tira, kahit sablay, nadadagdagan ang experience. Every attempt is a lesson.
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-5 bg-white/80 dark:bg-gray-800/60 rounded-xl border-l-4 border-amber-500 hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-amber-500 flex-shrink-0 mt-0.5"></i>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                <strong class="text-amber-600 dark:text-amber-400">Pinakaimportante: huwag kalimutang mag-enjoy.</strong> Yung tawa, bloopers, at kwentuhan ang tunay na strike—the memories that matter.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quote Box -->
            <div class="mt-10 p-8 rounded-2xl bg-gradient-to-r from-linkedin to-blue-600 text-white shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                <div class="relative z-10">
                    <i data-lucide="quote" class="w-10 h-10 text-white/30 mb-4"></i>
                    <p class="text-xl md:text-2xl italic leading-relaxed font-light">
                        "Life isn't about hitting strikes every time. It's about showing up, rolling the ball, laughing at the gutters, and enjoying the journey with the people around you."
                    </p>
                    <div class="mt-6 flex items-center gap-3 text-white/80">
                        <div class="w-px h-6 bg-white/30"></div>
                        <p class="text-sm font-medium">— Dhine Franklin Arjona</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <a href="../index.php"
                class="inline-flex items-center gap-2 px-6 py-3 bg-linkedin text-white rounded-full hover:bg-blue-700 transition-colors">
                <i data-lucide="arrow-left" class="w-5 h-5"></i>
                <span>Back to Portfolio</span>
            </a>
        </div>
    </div>

    <script>
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
                themeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';
            } else {
                themeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';
            }
        }

        // Like & View functionality
        const likeButton = document.getElementById("like-button");
        const likeIcon = document.getElementById("like-icon");
        const likeCountEl = document.getElementById("like-count");
        const viewCountEl = document.getElementById("view-count");
        const storageKey = "engagement_bowling_v1";

        // LocalStorage helpers
        function readStore() {
            try {
                const raw = localStorage.getItem(storageKey);
                if (!raw) return {
                    likes: 0,
                    liked: false,
                    views: 0
                };
                const parsed = JSON.parse(raw);
                return {
                    likes: Number.isFinite(parsed.likes) ? parsed.likes : 0,
                    liked: !!parsed.liked,
                    views: Number.isFinite(parsed.views) ? parsed.views : 0,
                };
            } catch {
                return {
                    likes: 0,
                    liked: false,
                    views: 0
                };
            }
        }

        function writeStore(data) {
            try {
                localStorage.setItem(storageKey, JSON.stringify(data));
            } catch {}
        }

        // Update Like button UI
        function renderLikeState() {
            const { liked, likes } = readStore();
            likeCountEl.textContent = String(likes);
            const svg = likeIcon;
            if (svg) {
                svg.classList.toggle("text-red-500", liked);
                svg.classList.toggle("fill-red-500", liked);
            }
        }

        // Init views & likes on load
        function initEngagement() {
            const current = readStore();
            current.views = (current.views || 0) + 1;
            writeStore(current);
            viewCountEl.textContent = String(current.views);
            renderLikeState();
        }

        // Heart click event
        likeButton?.addEventListener("click", () => {
            const current = readStore();
            if (current.liked) {
                current.likes = Math.max(0, current.likes - 1);
                current.liked = false;
            } else {
                current.likes = current.likes + 1;
                current.liked = true;
            }
            writeStore(current);
            renderLikeState();
        });

        initEngagement();
    </script>
</body>

</html>
