<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trouver un Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
<aside class="hidden sm:flex sm:flex-col w-20">
    <a href="#"
        class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
        <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
            <title>Sport Platform</title>
            <path
                d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z"
                fill="#fff" />
        </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-6 space-y-4">
            <a href="./dashbordSportif.php" 
                class="inline-flex items-center justify-center py-3 rounded-lg">
                <span class="sr-only">Accueil</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
            <a href="./decouvrirCoach.php"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 bg-white text-purple-600  rounded-lg">
                <span class="sr-only">Coachs</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </a>
            <a href="reservationSportif.php"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Mes Réservations</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="profilSportif.php"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Mon Profil</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
        </nav>
        <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
            <button
                class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Paramètres</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31 2.37 2.37a1.724 1.724 0 002.572 1.065.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
        </div>
    </div>
  </aside>

  <!-- Contenu principal -->
  <div class="flex-1 flex flex-col">
     <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <button
                class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
                <span class="sr-only">Menu</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </button>
            <div class="flex flex-shrink-0 items-center ml-auto">
                <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
                    <span class="sr-only">Menu Utilisateur</span>
                    <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                        <span class="font-semibold">Karim Sportif</span>
                        <span class="text-sm text-gray-600">Membre depuis 2024</span>
                    </div>
                    <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                            alt="photo de profil" class="h-full w-full object-cover">
                    </span>
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                        class="hidden sm:block h-6 w-6 text-gray-300">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="border-l pl-3 ml-3 space-x-1">
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Notifications</span>
                        <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                        <span
                            class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Déconnexion</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

<section class="bg-white shadow-md">
  <div class="max-w-6xl mx-auto px-4 py-6">
    <!-- Barre de recherche -->
    <div class="mb-6">
      <div class="relative">
        <input 
          id="searchInput"
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
        <select id="disciplineFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toutes les disciplines</option>
          <option value="football">Football</option>
          <option value="preparation">Préparation Physique</option>
          <option value="natation">Natation</option>
          <option value="tennis">Tennis</option>
          <option value="fitness">Fitness</option>
          <option value="yoga">Yoga</option>
          <option value="boxe">Boxe</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Disponibilité</label>
        <select id="availabilityFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toutes les dates</option>
          <option value="today">Aujourd'hui</option>
          <option value="week">Cette semaine</option>
          <option value="month">Ce mois</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Expérience</label>
        <select id="experienceFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Toute expérience</option>
          <option value="1-5">1-5 ans</option>
          <option value="6-10">6-10 ans</option>
          <option value="10+">10+ ans</option>
        </select>
      </div>

      <div class="flex items-end">
        <button id="resetBtn" class="w-full px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition">
          Réinitialiser
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Container dynamique pour les résultats -->
<main class="max-w-6xl mx-auto px-4 py-10">
  <div class="mb-6">
    <p class="text-gray-700"><span id="resultCount" class="font-semibold">12 coachs</span> trouvés</p>
  </div>

  <div id="coachGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
    <!-- Les cartes seront générées par JavaScript -->
  </div>

  <!-- Message si aucun résultat -->
  <div id="noResults" class="hidden text-center py-12">
    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <p class="text-xl text-gray-600">Aucun coach trouvé</p>
    <p class="text-sm text-gray-500 mt-2">Essayez de modifier vos critères de recherche</p>
  </div>
</main>

    <footer class="bg-gray-900 text-white py-6 mt-10">
      <div class="max-w-6xl mx-auto px-4 text-center text-sm">
        © 2025 Plateforme Coach & Sportif — Tous droits réservés
      </div>
    </footer>
  </div>
</div>
<!-- Fin du container flex -->

<!-- Ajout du JavaScript pour la fonctionnalité dynamique -->
<script>
  // Données des coachs
  const coaches = [
    {
      id: 1,
      name: "Coach Mohamed",
      experience: 8,
      disciplines: ["Football", "Préparation"],
      image: "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=300&h=200&fit=crop",
      available: "today"
    },
    {
      id: 2,
      name: "Coach Sarah",
      experience: 5,
      disciplines: ["Natation", "Fitness"],
      image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=200&fit=crop",
      available: "week"
    },
    {
      id: 3,
      name: "Coach Karim",
      experience: 10,
      disciplines: ["Tennis", "Athlétisme"],
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop",
      available: "month"
    },
    {
      id: 4,
      name: "Coach Amina",
      experience: 6,
      disciplines: ["Yoga", "Pilates"],
      image: "https://images.unsplash.com/photo-1544005313942-b8d87734a5a2?w=300&h=200&fit=crop",
      available: "today"
    },
    {
      id: 5,
      name: "Coach Youssef",
      experience: 12,
      disciplines: ["Football", "Basket"],
      image: "https://images.unsplash.com/photo-1500648767791-15a19d654956?w=300&h=200&fit=crop",
      available: "week"
    },
    {
      id: 6,
      name: "Coach Leila",
      experience: 7,
      disciplines: ["Boxe", "Musculation"],
      image: "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=300&h=200&fit=crop",
      available: "month"
    },
    {
      id: 7,
      name: "Coach Ahmed",
      experience: 9,
      disciplines: ["Football", "Préparation"],
      image: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&h=200&fit=crop",
      available: "today"
    },
    {
      id: 8,
      name: "Coach Fatima",
      experience: 4,
      disciplines: ["Fitness", "Yoga"],
      image: "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=300&h=200&fit=crop",
      available: "week"
    }
  ];

  // Fonction pour créer une carte de coach
  function createCoachCard(coach) {
    return `
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 p-6 transform hover:-translate-y-1">
        <img src="${coach.image}" alt="${coach.name}" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800">${coach.name}</h3>
        <p class="text-purple-600 font-semibold text-sm mb-2">${coach.experience} ans d'expérience</p>
        <div class="flex flex-wrap gap-2 mb-4">
          ${coach.disciplines.map(d => `
            <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">${d}</span>
          `).join('')}
        </div>
        <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Voir le profil
        </button>
      </div>
    `;
  }

  // Fonction pour afficher les coachs
  function displayCoaches(coachList) {
    const grid = document.getElementById('coachGrid');
    const noResults = document.getElementById('noResults');
    const resultCount = document.getElementById('resultCount');

    if (coachList.length === 0) {
      grid.classList.add('hidden');
      noResults.classList.remove('hidden');
      resultCount.textContent = '0 coach';
    } else {
      grid.classList.remove('hidden');
      noResults.classList.add('hidden');
      grid.innerHTML = coachList.map(coach => createCoachCard(coach)).join('');
      resultCount.textContent = `${coachList.length} coach${coachList.length > 1 ? 's' : ''}`;
    }
  }

  // Fonction de filtrage
  function filterCoaches() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const disciplineFilter = document.getElementById('disciplineFilter').value.toLowerCase();
    const availabilityFilter = document.getElementById('availabilityFilter').value;
    const experienceFilter = document.getElementById('experienceFilter').value;

    const filtered = coaches.filter(coach => {
      // Filtre de recherche
      const matchesSearch = coach.name.toLowerCase().includes(searchTerm) || 
                           coach.disciplines.some(d => d.toLowerCase().includes(searchTerm));
      
      // Filtre de discipline
      const matchesDiscipline = !disciplineFilter || 
                               coach.disciplines.some(d => d.toLowerCase().includes(disciplineFilter));
      
      // Filtre de disponibilité
      const matchesAvailability = !availabilityFilter || coach.available === availabilityFilter;
      
      // Filtre d'expérience
      let matchesExperience = true;
      if (experienceFilter === '1-5') {
        matchesExperience = coach.experience >= 1 && coach.experience <= 5;
      } else if (experienceFilter === '6-10') {
        matchesExperience = coach.experience >= 6 && coach.experience <= 10;
      } else if (experienceFilter === '10+') {
        matchesExperience = coach.experience > 10;
      }

      return matchesSearch && matchesDiscipline && matchesAvailability && matchesExperience;
    });

    displayCoaches(filtered);
  }

  // Fonction de réinitialisation
  function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('disciplineFilter').value = '';
    document.getElementById('availabilityFilter').value = '';
    document.getElementById('experienceFilter').value = '';
    displayCoaches(coaches);
  }

  // Event listeners
  document.getElementById('searchInput').addEventListener('input', filterCoaches);
  document.getElementById('disciplineFilter').addEventListener('change', filterCoaches);
  document.getElementById('availabilityFilter').addEventListener('change', filterCoaches);
  document.getElementById('experienceFilter').addEventListener('change', filterCoaches);
  document.getElementById('resetBtn').addEventListener('click', resetFilters);

  // Affichage initial
  displayCoaches(coaches);
</script>

</body>
</html>
