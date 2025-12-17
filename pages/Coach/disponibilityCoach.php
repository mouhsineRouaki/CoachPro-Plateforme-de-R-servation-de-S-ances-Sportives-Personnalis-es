<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gérer mes Disponibilités - Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
  <aside class="hidden sm:flex sm:flex-col">
    <a href="" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
      <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
        <title>Sport Coach Platform</title>
        <path d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z" fill="#fff"/>
      </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
      <nav class="flex flex-col mx-4 my-6 space-y-4">
        <a href="./dashbordCoach.php" class="inline-flex items-center justify-center py-3  rounded-lg">
          <span class="sr-only">Dashboard</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
        <a href="./reservationCoach.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700  rounded-lg">
          <span class="sr-only">Réservations</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="./disponibilityCoach.php" class="inline-flex items-center text-purple-600 bg-white justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Disponibilités</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
        <a href="./profilCoach.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
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

  <div class="flex-1 flex flex-col">
    <header class="bg-purple-600 text-white pt-1  h-20 flex align-centre justify-center">
      <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Gérer mes Disponibilités</h1>
        <p class="text-sm opacity-90">Ajoutez et gérez vos créneaux horaires disponibles</p>
      </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 py-8">
      
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-600">Créneaux disponibles</p>
              <p class="text-2xl font-bold text-purple-600" id="availableCount">0</p>
            </div>
            <div class="bg-purple-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-600">Créneaux réservés</p>
              <p class="text-2xl font-bold text-green-600" id="reservedCount">0</p>
            </div>
            <div class="bg-green-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-600">Cette semaine</p>
              <p class="text-2xl font-bold text-blue-600" id="weekCount">0</p>
            </div>
            <div class="bg-blue-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-600">Total créneaux</p>
              <p class="text-2xl font-bold text-gray-800" id="totalCount">0</p>
            </div>
            <div class="bg-gray-100 p-3 rounded-full">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6 mb-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div class="flex-1">
            <h2 class="text-xl font-bold text-gray-800 mb-2">Mes Créneaux Horaires</h2>
            <div class="flex gap-2">
              <button onclick="filterSlots('all')" class="filter-btn active px-4 py-2 rounded-lg text-sm font-medium transition" data-filter="all">
                Tous
              </button>
              <button onclick="filterSlots('available')" class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition" data-filter="available">
                Disponibles
              </button>
              <button onclick="filterSlots('reserved')" class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition" data-filter="reserved">
                Réservés
              </button>
            </div>
          </div>
          <button onclick="openAddModal()" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Ajouter un créneau
          </button>
        </div>
      </div>

      <div id="availabilityGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Les créneaux seront générés par JavaScript -->
      </div>

      <div id="noSlots" class="hidden bg-white rounded-lg shadow p-12 text-center">
        <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <p class="text-xl text-gray-600 mb-2">Aucun créneau disponible</p>
        <p class="text-sm text-gray-500">Commencez par ajouter vos créneaux horaires</p>
      </div>

    </main>

    <footer class="bg-gray-900 text-white py-6">
      <div class="max-w-7xl mx-auto px-4 text-center text-sm">
        © 2025 Plateforme Coach & Sportif - Tous droits réservés
      </div>
    </footer>
  </div>
</div>

<!-- Modal Ajouter un créneau -->
<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
  <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
    <div class="flex items-center justify-between p-6 border-b">
      <h3 class="text-xl font-bold text-gray-800">Ajouter un créneau</h3>
      <button onclick="closeAddModal()" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="p-6">
      <form id="addForm" onsubmit="addSlot(event)">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
          <input type="date" id="newDate" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure de début</label>
          <input type="time" id="newStartTime" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure de fin</label>
          <input type="time" id="newEndTime" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="flex gap-3">
          <button type="button" onclick="closeAddModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition">
            Annuler
          </button>
          <button type="submit" class="flex-1 px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
            Ajouter
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Modifier un créneau -->
<div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
  <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
    <div class="flex items-center justify-between p-6 border-b">
      <h3 class="text-xl font-bold text-gray-800">Modifier le créneau</h3>
      <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="p-6">
      <form id="editForm" onsubmit="updateSlot(event)">
        <input type="hidden" id="editId">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
          <input type="date" id="editDate" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure de début</label>
          <input type="time" id="editStartTime" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-2">Heure de fin</label>
          <input type="time" id="editEndTime" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        </div>
        <div class="flex gap-3">
          <button type="button" onclick="closeEditModal()" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition">
            Annuler
          </button>
          <button type="submit" class="flex-1 px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
            Enregistrer
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Toast notification -->
<div id="toast" class="hidden fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-lg z-50">
  <p id="toastMessage"></p>
</div>

<style>
  .filter-btn {
    background-color: #f3f4f6;
    color: #6b7280;
  }
  .filter-btn.active {
    background-color: #9333ea;
    color: white;
  }
  .filter-btn:hover:not(.active) {
    background-color: #e5e7eb;
  }
</style>

<script>
  // Données des créneaux
  let availabilitySlots = [
    { id: 1, date: '2025-01-20', startTime: '09:00', endTime: '10:00', isReserved: false },
    { id: 2, date: '2025-01-20', startTime: '10:00', endTime: '11:00', isReserved: true },
    { id: 3, date: '2025-01-20', startTime: '14:00', endTime: '15:00', isReserved: false },
    { id: 4, date: '2025-01-21', startTime: '09:00', endTime: '10:00', isReserved: false },
    { id: 5, date: '2025-01-21', startTime: '11:00', endTime: '12:00', isReserved: true },
    { id: 6, date: '2025-01-22', startTime: '15:00', endTime: '16:00', isReserved: false },
    { id: 7, date: '2025-01-23', startTime: '10:00', endTime: '11:00', isReserved: false },
    { id: 8, date: '2025-01-24', startTime: '14:00', endTime: '15:00', isReserved: true }
  ];

  let currentFilter = 'all';
  let nextId = 9;

  // Fonction pour formater la date
  function formatDate(dateStr) {
    const date = new Date(dateStr);
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('fr-FR', options);
  }

  // Fonction pour créer une carte de créneau
  function createSlotCard(slot) {
    const statusColor = slot.isReserved ? 'bg-green-100 text-green-800' : 'bg-purple-100 text-purple-800';
    const statusText = slot.isReserved ? 'Réservé' : 'Disponible';
    const statusIcon = slot.isReserved 
      ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />'
      : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />';

    return `
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6">
        <div class="flex items-start justify-between mb-4">
          <div>
            <p class="text-sm text-gray-500 mb-1">${formatDate(slot.date)}</p>
            <p class="text-lg font-bold text-gray-800">${slot.startTime} - ${slot.endTime}</p>
          </div>
          <span class="${statusColor} px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">${statusIcon}</svg>
            ${statusText}
          </span>
        </div>
        <div class="flex gap-2">
          ${!slot.isReserved ? `
            <button onclick="openEditModal(${slot.id})" class="flex-1 px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
              Modifier
            </button>
            <button onclick="deleteSlot(${slot.id})" class="flex-1 px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              Supprimer
            </button>
          ` : `
            <div class="flex-1 text-center text-sm text-gray-500 py-2">
              Ce créneau est réservé et ne peut pas être modifié
            </div>
          `}
        </div>
      </div>
    `;
  }

  // Fonction pour afficher les créneaux
  function displaySlots() {
    const grid = document.getElementById('availabilityGrid');
    const noSlots = document.getElementById('noSlots');
    
    let filtered = availabilitySlots;
    if (currentFilter === 'available') {
      filtered = availabilitySlots.filter(s => !s.isReserved);
    } else if (currentFilter === 'reserved') {
      filtered = availabilitySlots.filter(s => s.isReserved);
    }

    if (filtered.length === 0) {
      grid.classList.add('hidden');
      noSlots.classList.remove('hidden');
    } else {
      grid.classList.remove('hidden');
      noSlots.classList.add('hidden');
      grid.innerHTML = filtered.map(slot => createSlotCard(slot)).join('');
    }

    updateStats();
  }

  // Fonction pour mettre à jour les statistiques
  function updateStats() {
    const available = availabilitySlots.filter(s => !s.isReserved).length;
    const reserved = availabilitySlots.filter(s => s.isReserved).length;
    
    const today = new Date();
    const weekLater = new Date(today.getTime() + 7 * 24 * 60 * 60 * 1000);
    const thisWeek = availabilitySlots.filter(s => {
      const slotDate = new Date(s.date);
      return slotDate >= today && slotDate <= weekLater;
    }).length;

    document.getElementById('availableCount').textContent = available;
    document.getElementById('reservedCount').textContent = reserved;
    document.getElementById('weekCount').textContent = thisWeek;
    document.getElementById('totalCount').textContent = availabilitySlots.length;
  }

  // Fonction pour filtrer les créneaux
  function filterSlots(filter) {
    currentFilter = filter;
    
    // Mettre à jour les boutons actifs
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.classList.remove('active');
    });
    document.querySelector(`[data-filter="${filter}"]`).classList.add('active');
    
    displaySlots();
  }

  // Fonctions pour les modals
  function openAddModal() {
    document.getElementById('addModal').classList.remove('hidden');
    // Définir la date d'aujourd'hui par défaut
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('newDate').value = today;
  }

  function closeAddModal() {
    document.getElementById('addModal').classList.add('hidden');
    document.getElementById('addForm').reset();
  }

  function openEditModal(id) {
    const slot = availabilitySlots.find(s => s.id === id);
    if (slot) {
      document.getElementById('editId').value = slot.id;
      document.getElementById('editDate').value = slot.date;
      document.getElementById('editStartTime').value = slot.startTime;
      document.getElementById('editEndTime').value = slot.endTime;
      document.getElementById('editModal').classList.remove('hidden');
    }
  }

  function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editForm').reset();
  }

  // Fonction pour ajouter un créneau
  function addSlot(event) {
    event.preventDefault();
    
    const date = document.getElementById('newDate').value;
    const startTime = document.getElementById('newStartTime').value;
    const endTime = document.getElementById('newEndTime').value;

    // Validation
    if (startTime >= endTime) {
      showToast('L\'heure de fin doit être après l\'heure de début', 'error');
      return;
    }

    const newSlot = {
      id: nextId++,
      date,
      startTime,
      endTime,
      isReserved: false
    };

    availabilitySlots.push(newSlot);
    availabilitySlots.sort((a, b) => {
      if (a.date !== b.date) return a.date.localeCompare(b.date);
      return a.startTime.localeCompare(b.startTime);
    });

    closeAddModal();
    displaySlots();
    showToast('Créneau ajouté avec succès', 'success');
  }

  // Fonction pour modifier un créneau
  function updateSlot(event) {
    event.preventDefault();
    
    const id = parseInt(document.getElementById('editId').value);
    const date = document.getElementById('editDate').value;
    const startTime = document.getElementById('editStartTime').value;
    const endTime = document.getElementById('editEndTime').value;

    // Validation
    if (startTime >= endTime) {
      showToast('L\'heure de fin doit être après l\'heure de début', 'error');
      return;
    }

    const slot = availabilitySlots.find(s => s.id === id);
    if (slot) {
      slot.date = date;
      slot.startTime = startTime;
      slot.endTime = endTime;

      availabilitySlots.sort((a, b) => {
        if (a.date !== b.date) return a.date.localeCompare(b.date);
        return a.startTime.localeCompare(b.startTime);
      });

      closeEditModal();
      displaySlots();
      showToast('Créneau modifié avec succès', 'success');
    }
  }

  // Fonction pour supprimer un créneau
  function deleteSlot(id) {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce créneau ?')) {
      availabilitySlots = availabilitySlots.filter(s => s.id !== id);
      displaySlots();
      showToast('Créneau supprimé avec succès', 'success');
    }
  }

  // Fonction pour afficher un toast
  function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toastMessage');
    
    toastMessage.textContent = message;
    toast.classList.remove('hidden');
    
    setTimeout(() => {
      toast.classList.add('hidden');
    }, 3000);
  }

  // Initialisation
  displaySlots();
</script>

</body>
</html>
