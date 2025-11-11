<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../img/profile.png" />
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
        <a href="../index.html"
            class="inline-flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-linkedin transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
            <span>Back to Home</span>
        </a>
    </div>

    <!-- Article Content -->
    <div class="max-w-4xl mx-auto px-6 py-8">
        <!-- Header Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden mb-6">
            <img src="../img/bowling.jpg" alt="Bowling"
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
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-8 prose prose-lg max-w-none dark:prose-invert">
            <p>
                Noong nakaraan, naglaro kami ng bowling. Sa totoo lang, akala ko madali lang pili ng bola,
                konting takbo, bitaw, tapos magic na lang kung strike o gutter. Pero iba pala pag ikaw na yung nasa
                lane.
            </p>

            <p>
                Una, challenge pa lang yung pagpili ng bola. Yung easy, parang laruan lang halos madulas sa kamay. Yung medium, sakto lang
                sa buhat pero minsan biglang parang mabigat na bato. Yung heavy ball naman, parang may
                gustong ipahamak sayo kasi habang hawak mo siya, pakiramdam mo buo mong kaluluwa ang
                kasama.
            </p>

            <img src="../img/score.jpg" alt="Score" class="w-full h-auto rounded-lg my-8">

            <p>
                Pero eto yung nakakatawa: may isang round, ako lang yung naka-perfect strike. As in lahat
                ng pins, bagsak. Strike pa more! Ang saya ng tunog nung "kraaashhh" na parang fireworks sa
                tenga.
            </p>

            <p>
                Yung mga kasama ko? Hahaha, sorry guys pero karamihan ng bola nila, derecho gutter. Imagine
                mo tatlong sunod-sunod na tira sabay sabay pa kami nagtitinginan tapos walang tumatama sa
                pins. Parang bowling lane yung nananalo, hindi kami. May isa pa nga na parang may sariling
                buhay yung bola kasi kahit anong effort niya na itama, dumidiretso pa rin sa gutter.
            </p>

            <p>
                Doon ko narealize na iba talaga yung mix ng swerte, timing, at konting diskarte. Minsan
                kahit anong pilit mo, hindi talaga tatama. Pero may mga pagkakataon din na biglang ikaw yung
                tatama ng perfect.
            </p>

            <p>
                At the end of the day, natawa lang kami nang natawa. Hindi na mahalaga kung sino yung panalo
                kasi honestly, ang panalo talaga yung nag-eenjoy. Kahit gutter ball, may halakhak. Kahit
                mintis, may kwento.
            </p>

            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">Key Takeaways</h2>
            
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-linkedin flex-shrink-0 mt-0.5"></i>
                    <span>Hindi lahat ng tira magiging strike. May mga araw na feeling mo ang galing mo na, pero sa gutter pa rin bagsak.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-linkedin flex-shrink-0 mt-0.5"></i>
                    <span>Hindi rin tungkol sa lakas. Kailangan ng focus at timing.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-linkedin flex-shrink-0 mt-0.5"></i>
                    <span>Ang mahalaga, tuloy lang. Bawat tira, kahit sablay, nadadagdagan ang experience.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-linkedin flex-shrink-0 mt-0.5"></i>
                    <span>Pinakaimportante: huwag kalimutang mag-enjoy. Yung tawa, bloopers, at kwentuhan ang tunay na strike.</span>
                </li>
            </ul>

            <!-- Quote Box -->
            <div
                class="mt-8 p-6 rounded-lg bg-blue-50 dark:bg-blue-900/20 border-l-4 border-linkedin">
                <p class="text-lg italic text-gray-700 dark:text-gray-300">
                    "Life isn't about hitting strikes every time. It's about showing up, rolling the ball,
                    laughing at the gutters, and enjoying the journey with the people around you."
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <a href="../index.html"
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
