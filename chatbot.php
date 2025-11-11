<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

$rawInput = file_get_contents('php://input');
$payload = json_decode($rawInput ?? '', true);

$message = '';
if (is_array($payload) && isset($payload['message'])) {
    $message = trim((string) $payload['message']);
} elseif (isset($_POST['message'])) {
    $message = trim((string) $_POST['message']);
}

if ($message === '') {
    echo json_encode([
        'reply' => "Hi! I'm your virtual assistant. Ask me about services, projects, or ways to get in touch."
    ]);
    exit;
}

$lowerMessage = strtolower($message);

$knowledgeBase = [
    [
        'keywords' => ['about', 'who', 'ikaw', 'profile'],
        'reply' => 'Ako si Dhine Franklin Arjona, isang Freelance Web Developer mula Malabon City, Philippines. Focus ko ang PHP, Laravel, at MySQL para bumuo ng scalable web systems.'
    ],
    [
        'keywords' => ['education', 'school', 'study'],
        'reply' => 'Graduate ako ng BS Information Technology sa Datamex College of Saint Adeline, batch 2020-2024.'
    ],
    [
        'keywords' => ['experience', 'work', 'job', 'career', 'trabaho'],
        'reply' => 'Currently Senior Full Stack Developer ako sa Myracle Innovation Inc. since July 2025, at dati akong Junior Full Stack Developer doon, plus Web Developer sa Gerrman IT Solutions.'
    ],
    [
        'keywords' => ['service', 'offer', 'specialize', 'expertise', 'anong ginagawa'],
        'reply' => 'Nagbu-build ako ng custom SaaS dashboards, inventory at management systems gamit ang PHP, Laravel, MySQL, TailwindCSS, at Bootstrap—lahat makikita mo sa featured projects ko.'
    ],
    [
        'keywords' => ['contact', 'email', 'reach', 'connect', 'message'],
        'reply' => 'Pwede mo akong i-email sa dhinearjona16@gmail.com, o mag-book ng call sa calendly.com/dhinearjona/15min. Nasa portfolio page din ang social links ko.'
    ],
    [
        'keywords' => ['project', 'portfolio', 'sample', 'work', 'gawa', 'featured'],
        'reply' => 'Featured ko ang Myracle Innovation SaaS, Gerrman IT Solutions, Servicio Mobile App, Filipino Hardware, Evacuation Shelter System, POS, Inventory, Rental, at Classroom Management Systems. Sabihin mo kung alin ang gusto mong i-preview.'
    ],
    [
        'keywords' => ['skill', 'stack', 'tech', 'kaya', 'tools'],
        'reply' => 'Technical stack ko: Frontend (HTML5, CSS3, JavaScript, Bootstrap, TailwindCSS) at Backend (PHP, Laravel, MySQL, REST APIs). Marunong din ako sa Google Cloud Platform, Git/GitHub/GitLab, Figma, Firebase, at AI Integration.'
    ],
    [
        'keywords' => ['blog', 'article', 'bowling', 'post'],
        'reply' => 'May fresh blog ako na “Bowling Chronicles” noong September 5, 2025. Kinukwento ko doon yung experience namin sa bowling—focus, timing, at masayang bloopers.'
    ],
    [
        'keywords' => ['availability', 'hire', 'rate', 'pricing', 'cost', 'open'],
        'reply' => 'Open ako for new projects. Bigyan mo lang ako ng details ng kailangan mo para makapag-prepare ako ng timeline at proposal.'
    ],
    [
        'keywords' => ['location', 'saan ka', 'city'],
        'reply' => 'Base ako sa Malabon City, Philippines, at nagta-trabaho ako with clients online.'
    ],
    [
        'keywords' => ['hello', 'hi', 'kumusta', 'good day'],
        'reply' => 'Hello! Kumusta? Let me know kung anong gusto mong malaman tungkol sa portfolio or blog ko.'
    ]
];

foreach ($knowledgeBase as $entry) {
    foreach ($entry['keywords'] as $keyword) {
        if (str_contains($lowerMessage, $keyword)) {
            echo json_encode(['reply' => $entry['reply']]);
            exit;
        }
    }
}

$defaultReplies = [
    "Salamat sa message! Pwede kitang tulungan about featured projects, skills, experience, or yung Bowling Chronicles blog ko. Paki-share lang kung alin.",
    "Game ako mag-assist! Tanong ka lang tungkol sa portfolio details, contact info, or kung paano tayo makakapag-collab.",
    "Need mo ng info about my services, background, or blog? Nandito ako, just let me know how I can help."
];

echo json_encode([
    'reply' => $defaultReplies[array_rand($defaultReplies)]
]);

