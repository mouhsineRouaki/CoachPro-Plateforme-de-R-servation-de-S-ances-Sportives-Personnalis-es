<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Détails Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-purple-600 text-white py-6">
  <div class="max-w-6xl mx-auto px-4">
    <h1 class="text-3xl font-bold">Trouver un Coach</h1>
    <p class="text-sm opacity-90">Recherchez et réservez votre coach idéal</p>
  </div>
</header>

<!-- Ajout de la section recherche et filtres -->
<section class="bg-white shadow-md">
  <div class="max-w-6xl mx-auto px-4 py-6">
    <!-- Barre de recherche -->
    <div class="mb-6">
      <div class="relative">
        <input 
          type="text" 
          placeholder="Rechercher un coach par nom, discipline..." 
          class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        >
        <svg class="absolute left-4 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
    </div>

    <!-- Filtres -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Discipline</label>
        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toutes les disciplines</option>
          <option value="football">Football</option>
          <option value="preparation">Préparation Physique</option>
          <option value="athletisme">Athlétisme</option>
          <option value="natation">Natation</option>
          <option value="tennis">Tennis</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Disponibilité</label>
        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toutes les dates</option>
          <option value="today">Aujourd'hui</option>
          <option value="week">Cette semaine</option>
          <option value="month">Ce mois</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Expérience</label>
        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toute expérience</option>
          <option value="1-3">1-3 ans</option>
          <option value="3-5">3-5 ans</option>
          <option value="5+">5+ ans</option>
        </select>
      </div>

      <div class="flex items-end">
        <button class="w-full px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Filtrer
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Container pour afficher les résultats -->
<main class="max-w-6xl mx-auto px-4 py-10">
  <!-- Message de résultats -->
  <div class="mb-6">
    <p class="text-gray-700"><span class="font-semibold">12 coachs</span> trouvés</p>
  </div>

  <!-- Grille des coachs -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
    <!-- Coach Card 1 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Mohamed</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">8 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Football</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Préparation</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>

    <!-- Coach Card 2 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Sarah</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">5 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Natation</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Fitness</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>

    <!-- Coach Card 3 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Karim</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">10 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Tennis</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Athlétisme</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>

    <!-- Coach Card 4 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Amina</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">6 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Yoga</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Pilates</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>

    <!-- Coach Card 5 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Youssef</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">12 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Football</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Basket</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>

    <!-- Coach Card 6 -->
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6">
      <img src="https://via.placeholder.com/300x200" alt="Coach" class="w-full h-48 object-cover rounded-lg mb-4">
      <h3 class="text-xl font-bold text-gray-800">Coach Leila</h3>
      <p class="text-purple-600 font-semibold text-sm mb-2">7 ans d'expérience</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Boxe</span>
        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Musculation</span>
      </div>
      <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
        Voir le profil
      </button>
    </div>
  </div>
</main>

<!-- ===== FOOTER ===== -->
<footer class="bg-gray-900 text-white py-6 mt-10">
  <div class="max-w-6xl mx-auto px-4 text-center text-sm">
    © 2025 Plateforme Coach & Sportif — Tous droits réservés
  </div>
</footer>

</body>
</html>
