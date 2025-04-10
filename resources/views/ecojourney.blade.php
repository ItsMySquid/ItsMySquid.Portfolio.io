<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecojourney</title>
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
    <h2 class="text-4xl font-bold text-blue-400 mb-6">Ecojourney</h2>

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
            <li>Opzetten van de back-end in Laravel</li>
            <li>Gebruik van Tailwind CSS voor de styling</li>
            <li>Implementeren van een inlogsysteem</li>
            <li>Toevoegen van een database met CRUD-functionaliteiten</li>
            <li>Responsief maken van de website</li>
        </ul>
    </section>

    <!-- Samenvatting -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Samenvatting van het project:</h3>
        <p class="text-gray-300">
            In dit project heb ik geleerd hoe ik een complete webapplicatie kan bouwen met behulp van Laravel en Tailwind CSS. Van planning tot realisatie heb ik het hele traject zelfstandig uitgevoerd, waarbij ik veel heb geleerd over routing, controllers, views en security.
        </p>
    </section>

    <!-- Wat heb ik geleerd -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Wat heb ik geleerd:</h3>
        <p class="text-gray-300">
            Ik heb geleerd hoe ik Laravel effectief kan gebruiken voor het opzetten van schaalbare en veilige applicaties. Daarnaast heb ik mijn vaardigheden in front-end design verbeterd met Tailwind CSS, en ervaring opgedaan met versiebeheer en het werken volgens de MVC-structuur.
        </p>
    </section>

    <!-- Unieke aspecten van het project -->
    <section>
        <h3 class="text-2xl font-semibold mb-4 text-white">Unieke aspecten van het project:</h3>
        <p class="text-gray-300">
            Dit project was voor mij bijzonder omdat we voor het eerst een <strong>barcode scanner</strong> en <strong>externe API's</strong> gebruikten om realtime informatie op te halen. De app gaf gebruikers direct inzicht in de <strong>eco-score</strong> van producten in de supermarkt. Hierdoor ben ik mij meer bewust geworden van de ecologische impact van consumptiegoederen. We hebben daarnaast uitgebreid onderzoek gedaan naar hoe zo'n eco-score wordt opgebouwd, wat zorgde voor een nieuwe manier van werken: minder puur bouwen, en meer verdiepen in inhoudelijke achtergronden. Dit project liet mij ervaren hoe technologie kan bijdragen aan <strong>duurzaam bewustzijn</strong>.
        </p>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 text-center mt-10">
    <p>&copy; 2024 Dirk van Gelderen. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
