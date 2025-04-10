<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenHiring</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-inter">
<!-- Navbar -->
<header class="fixed w-full bg-gray-900 bg-opacity-80 backdrop-blur-md py-4 z-50 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-6">
        <h1 class="text-2xl font-bold text-blue-500">Dirk van Gelderen</h1>
        <a href="/" class="text-lg hover:text-blue-400 transition">Terug naar Home</a>
    </div>
</header>

<!-- Project Inhoud -->
<main class="pt-32 pb-20 px-6 max-w-4xl mx-auto">
    <h2 class="text-4xl font-bold text-blue-400 mb-6">OpenHiring voor IO Digital</h2>

    <!-- Video -->
    <div class="mb-10">
        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
            <iframe
                src="{{ $videoUrl ?? 'https://www.youtube.com/embed/dQw4w9WgXcQ' }}"
                title="Project Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="w-full h-96 rounded-lg">
            </iframe>
        </div>
    </div>

    <!-- Wat heb ik gedaan -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Wat heb ik gedaan:</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-300">
            <li>Opzetten van de volledige back-end met Laravel</li>
            <li>Gebruik van Tailwind CSS voor de front-end styling</li>
            <li>Implementatie van een inlogsysteem en gebruikersrollen</li>
            <li>CRUD-functionaliteiten voor werkgevers om banen aan te bieden</li>
            <li>Geanonimiseerde uitnodiging functionaliteit voor sollicitanten</li>
            <li>Responsief en gebruiksvriendelijk design</li>
        </ul>
    </section>

    <!-- Samenvatting -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Samenvatting van het project:</h3>
        <p class="text-gray-300">
            Dit project werd uitgevoerd in samenwerking met IO Digital en richtte zich op het concept van <strong>OpenHiring</strong>: solliciteren zonder CV, zonder motivatiebrief en zonder drempels. In plaats daarvan worden kandidaten op willekeurige basis uitgenodigd. Onze focus lag op de kant van de werkgever: bedrijven kunnen een account aanmaken, vacatures publiceren en anoniem mensen uitnodigen op een specifieke datum en tijd. Dit project gaf mij niet alleen technische ervaring, maar ook inzicht in maatschappelijke thema’s zoals kansengelijkheid op de arbeidsmarkt.
        </p>
    </section>

    <!-- Wat heb ik geleerd -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Wat heb ik geleerd:</h3>
        <p class="text-gray-300">
            Naast het verdiepen in Laravel, Tailwind en user authentication, heb ik ook geleerd hoe het is om als “werkgever” te denken. Het bouwen van dit platform gaf me bovendien een waardevol perspectief op hoe moeilijk het kan zijn om werk te vinden als je niet voldoet aan traditionele eisen zoals een diploma of ervaring. Dit project maakte mij bewust van het belang van inclusiviteit en het wegnemen van barrières in de arbeidsmarkt.
        </p>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 text-center mt-10">
    <p>&copy; 2024 Dirk van Gelderen. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
