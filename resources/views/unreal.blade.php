<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unreal Engine</title>
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
    <h2 class="text-4xl font-bold text-blue-400 mb-6">Unreal Engine Shooter Game</h2>

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
            <li>Voor het eerst gewerkt met Unreal Engine</li>
            <li>Ontwikkeld in een team van vijf personen</li>
            <li>Hoofdverantwoordelijk voor de schietmechanics van het spel</li>
            <li>Bijgedragen aan de movement van de speler</li>
            <li>Meegedacht en gebouwd aan de eastereggs binnen de game</li>
            <li>Gezorgd dat het project centraal en overzichtelijk bleef voor het hele team</li>
        </ul>
    </section>

    <!-- Samenvatting -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Samenvatting van het project:</h3>
        <p class="text-gray-300">
            Dit project markeerde mijn eerste ervaring met Unreal Engine, waarin ik samen met vier andere teamleden een shooter game heb gebouwd. Binnen het team had ik een leidende rol in het realiseren van de schietmechanics. Daarnaast heb ik bijgedragen aan de basisbewegingen van de speler en het inbouwen van leuke eastereggs. We hebben het project zo ingericht dat iedereen betrokken kon blijven bij elkaars werk, zodat we van elkaar konden leren en een breder begrip kregen van Unreal Engine.
        </p>
    </section>

    <!-- Wat heb ik geleerd -->
    <section>
        <h3 class="text-2xl font-semibold mb-4 text-white">Wat heb ik geleerd:</h3>
        <p class="text-gray-300">
            Ik heb geleerd hoe ik Unreal Engine effectief kan inzetten voor het bouwen van een game in teamverband. Het werken aan schietmechanics gaf me inzicht in het combineren van gameplaylogica met animatie en physics. Daarnaast leerde ik het belang van goede communicatie en samenwerking binnen een multidisciplinair team. Ook heb ik gezien hoe waardevol het is om elkaars werk mee te volgen en kennis te delen binnen het proces.
        </p>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 text-center mt-10">
    <p>&copy; 2024 Dirk van Gelderen. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
