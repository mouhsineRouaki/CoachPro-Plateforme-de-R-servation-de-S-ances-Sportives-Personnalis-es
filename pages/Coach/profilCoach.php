<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Profil Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
  <!-- Sidebar -->
  <aside class="hidden sm:flex sm:flex-col w-20">
    <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
        <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
            <title>Sport Platform</title>
            <path d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z" fill="#fff" />
        </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-6 space-y-4">
            <a href="index.html" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Accueil</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
            <a href="#" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Coachs</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </a>
            <a href="reservations.html" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Mes Réservations</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
                <span class="sr-only">Mon Profil</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
        </nav>
        <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
            <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Paramètres</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
        </div>
    </div>
  </aside>

  <!-- Contenu principal -->
  <div class="flex-1 flex flex-col">
    <header class="bg-purple-600 text-white py-6">
      <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Gestion de Mon Profil Coach</h1>
        <p class="text-sm opacity-90">Gérez toutes vos informations professionnelles</p>
      </div>
    </header>

    <main class="flex-1 max-w-6xl mx-auto px-4 py-8 w-full">
      
      <!-- Photo de profil -->
      <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center space-x-6">
          <div class="relative">
            <img id="profileImage" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=150&h=150&fit=crop" alt="Photo de profil" class="w-32 h-32 rounded-full object-cover border-4 border-purple-200">
            <button onclick="document.getElementById('imageUpload').click()" class="absolute bottom-0 right-0 bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>
            <input type="file" id="imageUpload" accept="image/*" class="hidden">
          </div>
          <div>
            <h2 class="text-2xl font-bold text-gray-800">Coach Mohamed Benali</h2>
            <p class="text-gray-600">Coach Professionnel</p>
            <p class="text-sm text-gray-500">Membre depuis le 15/01/2023</p>
          </div>
        </div>
      </div>

      <!-- Onglets -->
      <div class="bg-white rounded-lg shadow-md mb-6">
        <div class="flex border-b">
          <button onclick="switchTab('info')" id="tab-info" class="px-6 py-3 font-semibold text-purple-600 border-b-2 border-purple-600">
            Informations personnelles
          </button>
          <button onclick="switchTab('bio')" id="tab-bio" class="px-6 py-3 font-semibold text-gray-600 hover:text-purple-600">
            Biographie
          </button>
          <button onclick="switchTab('sports')" id="tab-sports" class="px-6 py-3 font-semibold text-gray-600 hover:text-purple-600">
            Sports & Compétences
          </button>
          <button onclick="switchTab('experience')" id="tab-experience" class="px-6 py-3 font-semibold text-gray-600 hover:text-purple-600">
            Expériences
          </button>
          <button onclick="switchTab('disponibilite')" id="tab-disponibilite" class="px-6 py-3 font-semibold text-gray-600 hover:text-purple-600">
            Disponibilités
          </button>
        </div>
      </div>

      <!-- Contenu des onglets -->
      
      <!-- Onglet Informations personnelles -->
      <div id="content-info" class="tab-content">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Informations Personnelles</h3>
          <form id="infoForm" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                <input type="text" id="nom" value="Benali" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                <input type="text" id="prenom" value="Mohamed" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
              </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" id="email" value="m.benali@coach.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                <input type="tel" id="telephone" value="+212 6 12 34 56 78" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Niveau</label>
              <select id="niveau" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé" selected>Avancé</option>
                <option value="Expert">Expert</option>
              </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
              <button type="button" onclick="showPasswordModal()" class="px-6 py-2 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition">
                Changer le mot de passe
              </button>
              <button type="submit" class="px-6 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
                Enregistrer les modifications
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Onglet Biographie -->
      <div id="content-bio" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-6">Biographie Professionnelle</h3>
          <form id="bioForm" class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Biographie</label>
              <textarea id="biographie" rows="8" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Parlez de votre parcours, vos spécialités, votre approche...">Coach professionnel avec plus de 10 ans d'expérience dans le football et la préparation physique. Diplômé d'État, j'ai accompagné de nombreux athlètes vers leurs objectifs. Ma méthode allie rigueur technique et approche personnalisée pour maximiser les performances de chacun.</textarea>
            </div>
            
            <div class="flex justify-end pt-4">
              <button type="submit" class="px-6 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
                Enregistrer la biographie
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Onglet Sports & Compétences -->
      <div id="content-sports" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow-md p-6">
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">Sports & Compétences</h3>
            <button onclick="openSportModal()" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
              + Ajouter un sport
            </button>
          </div>
          
          <div id="sportsList" class="space-y-3">
            <!-- Les sports seront ajoutés ici -->
          </div>
        </div>
      </div>

      <!-- Onglet Expériences -->
      <div id="content-experience" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow-md p-6">
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">Expériences Professionnelles</h3>
            <button onclick="openExperienceModal()" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
              + Ajouter une expérience
            </button>
          </div>
          
          <div id="experiencesList" class="space-y-4">
            <!-- Les expériences seront ajoutées ici -->
          </div>
        </div>
      </div>

      <!-- Onglet Disponibilités -->
      <div id="content-disponibilite" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow-md p-6">
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">Gérer vos Disponibilités</h3>
            <button onclick="openDisponibiliteModal()" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
              + Ajouter une disponibilité
            </button>
          </div>
          
          <div id="disponibilitesList" class="space-y-3">
            <!-- Les disponibilités seront ajoutées ici -->
          </div>
        </div>
      </div>

    </main>

    <footer class="bg-gray-900 text-white py-6 mt-10">
      <div class="max-w-6xl mx-auto px-4 text-center text-sm">
        © 2025 Plateforme Coach & Sportif — Tous droits réservés
      </div>
    </footer>
  </div>
</div>

<!-- Modal Mot de passe -->
<div id="passwordModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg p-6 w-full max-w-md">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Changer le mot de passe</h3>
    <form id="passwordForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Ancien mot de passe</label>
        <input type="password" id="oldPassword" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de passe</label>
        <input type="password" id="newPassword" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
        <input type="password" id="confirmPassword" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div class="flex justify-end space-x-3 pt-4">
        <button type="button" onclick="closePasswordModal()" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Changer
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Sport -->
<div id="sportModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg p-6 w-full max-w-md">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Ajouter un sport</h3>
    <form id="sportForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Sport</label>
        <select id="sportName" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
          <option value="">Sélectionner un sport</option>
          <option value="Football">Football</option>
          <option value="Basket">Basket</option>
          <option value="Tennis">Tennis</option>
          <option value="Natation">Natation</option>
          <option value="Fitness">Fitness</option>
          <option value="Yoga">Yoga</option>
          <option value="Boxe">Boxe</option>
          <option value="Préparation Physique">Préparation Physique</option>
        </select>
      </div>
      <div class="flex justify-end space-x-3 pt-4">
        <button type="button" onclick="closeSportModal()" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Ajouter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Expérience -->
<div id="experienceModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg p-6 w-full max-w-md">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Ajouter une expérience</h3>
    <form id="experienceForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Domaine</label>
        <input type="text" id="expDomaine" required placeholder="Ex: Coach Football Professionnel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Date début</label>
          <input type="date" id="expDateDebut" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Date fin</label>
          <input type="date" id="expDateFin" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
        </div>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Durée (années)</label>
        <input type="number" id="expDuree" required placeholder="Ex: 3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div class="flex justify-end space-x-3 pt-4">
        <button type="button" onclick="closeExperienceModal()" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Ajouter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Disponibilité -->
<div id="disponibiliteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg p-6 w-full max-w-md">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Ajouter une disponibilité</h3>
    <form id="disponibiliteForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
        <input type="date" id="dispDate" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure début</label>
          <input type="time" id="dispHeureDebut" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure fin</label>
          <input type="time" id="dispHeureFin" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
        </div>
      </div>
      <div class="flex justify-end space-x-3 pt-4">
        <button type="button" onclick="closeDisponibiliteModal()" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
          Ajouter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Toast notification -->
<div id="toast" class="hidden fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
  Modifications enregistrées avec succès !
</div>

<script>
// Données initiales
let sports = [
  { id: 1, name: 'Football' },
  { id: 2, name: 'Préparation Physique' }
];

let experiences = [
  { id: 1, domaine: 'Coach Football Professionnel', dateDebut: '2018-01-01', dateFin: '2023-12-31', duree: 5 },
  { id: 2, domaine: 'Préparateur Physique équipe nationale', dateDebut: '2015-01-01', dateFin: '2017-12-31', duree: 3 }
];

let disponibilites = [
  { id: 1, date: '2025-01-20', heureDebut: '09:00', heureFin: '12:00', isReserved: false },
  { id: 2, date: '2025-01-21', heureDebut: '14:00', heureFin: '17:00', isReserved: false },
  { id: 3, date: '2025-01-22', heureDebut: '10:00', heureFin: '13:00', isReserved: true }
];

// Gestion des onglets
function switchTab(tabName) {
  // Cacher tous les contenus
  document.querySelectorAll('.tab-content').forEach(content => {
    content.classList.add('hidden');
  });
  
  // Réinitialiser tous les onglets
  document.querySelectorAll('[id^="tab-"]').forEach(tab => {
    tab.classList.remove('text-purple-600', 'border-b-2', 'border-purple-600');
    tab.classList.add('text-gray-600');
  });
  
  // Activer l'onglet sélectionné
  document.getElementById(`content-${tabName}`).classList.remove('hidden');
  const activeTab = document.getElementById(`tab-${tabName}`);
  activeTab.classList.add('text-purple-600', 'border-b-2', 'border-purple-600');
  activeTab.classList.remove('text-gray-600');
}

// Toast notification
function showToast(message = 'Modifications enregistrées avec succès !') {
  const toast = document.getElementById('toast');
  toast.textContent = message;
  toast.classList.remove('hidden');
  setTimeout(() => {
    toast.classList.add('hidden');
  }, 3000);
}

// Gestion du formulaire d'informations
document.getElementById('infoForm').addEventListener('submit', function(e) {
  e.preventDefault();
  showToast('Informations personnelles mises à jour !');
});

// Gestion du formulaire de biographie
document.getElementById('bioForm').addEventListener('submit', function(e) {
  e.preventDefault();
  showToast('Biographie mise à jour !');
});

// Gestion de l'upload d'image
document.getElementById('imageUpload').addEventListener('change', function(e) {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('profileImage').src = e.target.result;
      showToast('Photo de profil mise à jour !');
    };
    reader.readAsDataURL(file);
  }
});

// Modal Mot de passe
function showPasswordModal() {
  document.getElementById('passwordModal').classList.remove('hidden');
}

function closePasswordModal() {
  document.getElementById('passwordModal').classList.add('hidden');
  document.getElementById('passwordForm').reset();
}

document.getElementById('passwordForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const newPass = document.getElementById('newPassword').value;
  const confirmPass = document.getElementById('confirmPassword').value;
  
  if (newPass !== confirmPass) {
    alert('Les mots de passe ne correspondent pas !');
    return;
  }
  
  closePasswordModal();
  showToast('Mot de passe modifié avec succès !');
});

// Gestion des sports
function renderSports() {
  const list = document.getElementById('sportsList');
  list.innerHTML = sports.map(sport => `
    <div class="flex items-center justify-between bg-purple-50 px-4 py-3 rounded-lg">
      <div class="flex items-center space-x-3">
        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="font-semibold text-gray-800">${sport.name}</span>
      </div>
      <button onclick="deleteSport(${sport.id})" class="text-red-600 hover:text-red-700">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
      </button>
    </div>
  `).join('');
}

function openSportModal() {
  document.getElementById('sportModal').classList.remove('hidden');
}

function closeSportModal() {
  document.getElementById('sportModal').classList.add('hidden');
  document.getElementById('sportForm').reset();
}

function deleteSport(id) {
  if (confirm('Êtes-vous sûr de vouloir supprimer ce sport ?')) {
    sports = sports.filter(s => s.id !== id);
    renderSports();
    showToast('Sport supprimé !');
  }
}

document.getElementById('sportForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const name = document.getElementById('sportName').value;
  const newId = sports.length > 0 ? Math.max(...sports.map(s => s.id)) + 1 : 1;
  sports.push({ id: newId, name });
  renderSports();
  closeSportModal();
  showToast('Sport ajouté !');
});

// Gestion des expériences
function renderExperiences() {
  const list = document.getElementById('experiencesList');
  list.innerHTML = experiences.map(exp => `
    <div class="bg-gray-50 px-6 py-4 rounded-lg border-l-4 border-purple-600">
      <div class="flex justify-between items-start">
        <div class="flex-1">
          <h4 class="font-bold text-gray-800 text-lg">${exp.domaine}</h4>
          <p class="text-gray-600 text-sm mt-1">
            ${new Date(exp.dateDebut).toLocaleDateString('fr-FR')} - ${exp.dateFin ? new Date(exp.dateFin).toLocaleDateString('fr-FR') : 'Présent'}
          </p>
          <p class="text-purple-600 font-semibold text-sm mt-2">${exp.duree} ans</p>
        </div>
        <button onclick="deleteExperience(${exp.id})" class="text-red-600 hover:text-red-700 ml-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
      </div>
    </div>
  `).join('');
}

function openExperienceModal() {
  document.getElementById('experienceModal').classList.remove('hidden');
}

function closeExperienceModal() {
  document.getElementById('experienceModal').classList.add('hidden');
  document.getElementById('experienceForm').reset();
}

function deleteExperience(id) {
  if (confirm('Êtes-vous sûr de vouloir supprimer cette expérience ?')) {
    experiences = experiences.filter(e => e.id !== id);
    renderExperiences();
    showToast('Expérience supprimée !');
  }
}

document.getElementById('experienceForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const domaine = document.getElementById('expDomaine').value;
  const dateDebut = document.getElementById('expDateDebut').value;
  const dateFin = document.getElementById('expDateFin').value;
  const duree = parseInt(document.getElementById('expDuree').value);
  
  const newId = experiences.length > 0 ? Math.max(...experiences.map(e => e.id)) + 1 : 1;
  experiences.push({ id: newId, domaine, dateDebut, dateFin, duree });
  renderExperiences();
  closeExperienceModal();
  showToast('Expérience ajoutée !');
});

// Gestion des disponibilités
function renderDisponibilites() {
  const list = document.getElementById('disponibilitesList');
  list.innerHTML = disponibilites.map(disp => `
    <div class="flex items-center justify-between bg-gray-50 px-4 py-3 rounded-lg border-l-4 ${disp.isReserved ? 'border-red-500' : 'border-green-500'}">
      <div class="flex-1">
        <p class="font-semibold text-gray-800">
          ${new Date(disp.date).toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' })}
        </p>
        <p class="text-gray-600 text-sm">${disp.heureDebut} - ${disp.heureFin}</p>
        <span class="inline-block mt-2 px-2 py-1 text-xs font-semibold rounded ${disp.isReserved ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700'}">
          ${disp.isReserved ? 'Réservé' : 'Disponible'}
        </span>
      </div>
      <button onclick="deleteDisponibilite(${disp.id})" class="text-red-600 hover:text-red-700 ml-4" ${disp.isReserved ? 'disabled title="Ne peut pas supprimer une disponibilité réservée"' : ''}>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
      </button>
    </div>
  `).join('');
}

function openDisponibiliteModal() {
  document.getElementById('disponibiliteModal').classList.remove('hidden');
}

function closeDisponibiliteModal() {
  document.getElementById('disponibiliteModal').classList.add('hidden');
  document.getElementById('disponibiliteForm').reset();
}

function deleteDisponibilite(id) {
  const disp = disponibilites.find(d => d.id === id);
  if (disp && disp.isReserved) {
    alert('Vous ne pouvez pas supprimer une disponibilité déjà réservée !');
    return;
  }
  
  if (confirm('Êtes-vous sûr de vouloir supprimer cette disponibilité ?')) {
    disponibilites = disponibilites.filter(d => d.id !== id);
    renderDisponibilites();
    showToast('Disponibilité supprimée !');
  }
}

document.getElementById('disponibiliteForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const date = document.getElementById('dispDate').value;
  const heureDebut = document.getElementById('dispHeureDebut').value;
  const heureFin = document.getElementById('dispHeureFin').value;
  
  const newId = disponibilites.length > 0 ? Math.max(...disponibilites.map(d => d.id)) + 1 : 1;
  disponibilites.push({ id: newId, date, heureDebut, heureFin, isReserved: false });
  renderDisponibilites();
  closeDisponibiliteModal();
  showToast('Disponibilité ajoutée !');
});

// Initialisation
renderSports();
renderExperiences();
renderDisponibilites();
</script>

</body>
</html>
