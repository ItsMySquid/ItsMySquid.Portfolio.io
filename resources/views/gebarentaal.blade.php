<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebarentaal</title>
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
    <h2 class="text-4xl font-bold text-blue-400 mb-6">Gebarentaal voor intake</h2>

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
            <li>Testen van functionaliteiten en opnemen/bewerken van instructievideo’s</li>
            <li>Leiding nemen over mijn groep van 5 studenten</li>
            <li>Coördineren van de samenwerking met een tweede groep van 5 studenten die onze backend maakte.</li>
        </ul>
    </section>

    <!-- Samenvatting -->
    <section class="mb-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Samenvatting van het project:</h3>
        <p class="text-gray-300">
            Voor dit project werkten we samen met twee docenten van het keuzevak gebarentaal bij intake op de hogeschool. Zij wilden hun lesmateriaal digitaler en interactiever maken. We hebben daarop een leeromgeving gebouwd waarin studenten gebaren kunnen oefenen via een multiple choice-systeem. Als projectleider zorgde ik voor de structuur binnen mijn eigen team én de samenwerking met een andere groep studenten. Samen hebben we een toegankelijke tool ontwikkeld die visueel aantrekkelijk is, duidelijke feedback geeft, en geschikt is voor studenten van uiteenlopende opleidingen.
        </p>
    </section>

    <!-- Wat heb ik geleerd -->
    <section>
        <h3 class="text-2xl font-semibold mb-4 text-white">Wat heb ik geleerd:</h3>
        <p class="text-gray-300">
            Tijdens dit project heb ik veel geleerd over het aansturen van een groep en het samenwerken met andere disciplines. Ik heb ervaren hoe belangrijk duidelijke communicatie en taakverdeling zijn bij groepsprojecten. Ook heb ik geleerd hoe je omgaat met een echte opdrachtgever en hun wensen vertaalt naar een concreet en bruikbaar eindproduct. Daarnaast heb ik mezelf technisch verder ontwikkeld in Laravel, Tailwind CSS en het testen van gebruikersinteracties.
        </p>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 text-center mt-10">
    <p>&copy; 2024 Dirk van Gelderen. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
