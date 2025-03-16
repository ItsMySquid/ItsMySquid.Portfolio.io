<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Dirk van Gelderen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-inter">
<!-- Navbar -->
<header class="fixed w-full bg-gray-900 bg-opacity-80 backdrop-blur-md py-4 z-50 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-6">
        <h1 class="text-3xl font-bold text-blue-500">Dirk van Gelderen - Portfolio</h1>
        <nav>
            <ul class="flex space-x-6 text-lg">
                <li><a href="#about" class="hover:text-blue-400 transition">Over Mij</a></li>
                <li><a href="#projects" class="hover:text-blue-400 transition">Projecten</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('/images/AdobeStock_599289625_Preview.jpeg'); background-size: 130%;">
    <div class="text-center backdrop-blur-xl bg-gray-800 bg-opacity-60 p-10 rounded-lg">
        <h2 class="text-5xl font-extrabold mb-4">Welkom op mijn Portfolio</h2>
        <p class="text-lg">Bekijk mijn projecten en ontdek wat ik doe!</p>
    </div>
</section>



<!-- About Section -->
<section id="about" class="py-20 text-center">
    <h3 class="text-4xl font-bold mb-6 text-blue-400">Over Mij</h3>
    <p class="text-lg max-w-3xl mx-auto">Mijn naam is Dirk van Gelderen, en ik ben een gepassioneerde webontwikkelaar met ervaring in verschillende moderne technologieën. Ik heb een achtergrond in het ontwikkelen van webapplicaties met frameworks zoals Laravel en front-end tools zoals Tailwind CSS. Ik heb altijd interesse gehad in technologie en hoe deze de wereld kan verbeteren, en dit heeft mijn carrière gevormd.</p>
    <p class="text-lg max-w-3xl mx-auto mt-6">In mijn werk streef ik er altijd naar om intuïtieve, responsieve en toegankelijke websites te creëren. Ik ben altijd op zoek naar nieuwe uitdagingen en kansen om mijn vaardigheden verder te ontwikkelen. Of het nu gaat om een persoonlijke website, een bedrijfsoplossing, of een innovatieve applicatie, ik ben ervan overtuigd dat technologie het verschil kan maken.</p>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <h3 class="text-4xl font-bold text-center text-blue-400 mb-10">Mijn Projecten</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Project Card -->
            <a href="/Unreal" class="group block overflow-hidden bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="/images/WCCFunrealengine59.jpg" alt="Unreal Project" class="w-full h-64 object-cover group-hover:opacity-80 transition">
                <div class="p-5">
                    <h4 class="text-2xl font-bold text-white">Unreal</h4>
                    <p class="text-gray-300 mt-2">Dit Unreal engine project heb ik aan het einde van mijn eerste jaar CMGT gemaakt. Als eindopdracht van jaar 1.</p>
                </div>
            </a>

            <a href="/Ecojourney" class="group block overflow-hidden bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="/images/Eco-Journey.jpg" alt="Ecojourney Project" class="w-full h-64 object-cover group-hover:opacity-80 transition">
                <div class="p-5">
                    <h4 class="text-2xl font-bold text-white">Ecojourney</h4>
                    <p class="text-gray-300 mt-2">Een korte beschrijving van het Ecojourney-project.</p>
                </div>
            </a>

            <a href="/Io Digital" class="group block overflow-hidden bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="/images/OpenHiring.jpg" alt="Io Digital Project" class="w-full h-64 object-cover group-hover:opacity-80 transition">
                <div class="p-5">
                    <h4 class="text-2xl font-bold text-white">Io Digital</h4>
                    <p class="text-gray-300 mt-2">In samenwerken met IO Digital hebben wij met school de opdracht gekregen om een vacaturen pagina te maken voor Open Hiring.</p>
                </div>
            </a>

            <a href="/Gebarentaal" class="group block overflow-hidden bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="/images/HR-banner.png" alt="Gebarentaal Project" class="w-full h-64 object-cover group-hover:opacity-80 transition">
                <div class="p-5">
                    <h4 class="text-2xl font-bold text-white">Gebarentaal</h4>
                    <p class="text-gray-300 mt-2">Binnen dit project heb ik kennis gemaakt met mensen die het keuzevak gebarentaal bij intake volgen op de Hogeschool.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 text-center mt-10">
    <p>&copy; 2024 Dirk van Gelderen. Alle rechten voorbehouden.</p>
</footer>
</body>
</html>
