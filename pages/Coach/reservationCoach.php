<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des Réservations - Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
  <!-- Sidebar -->
    <aside class="hidden sm:flex sm:flex-col">
    <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
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
        <a href="./reservationCoach.php" class="inline-flex items-center text-purple-600 bg-white justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
          <span class="sr-only">Réservations</span>
          <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </a>
        <a href="./disponibilityCoach.php" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
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
        <h1 class="text-3xl font-bold">Gestion des Réservations</h1>
        <p class="text-sm opacity-90">Gérez vos réservations reçues et votre planning</p>
      </div>
    </header>

    <section class="bg-white shadow-md">
      <div class="max-w-7xl mx-auto px-4 py-6">
        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
          <div class="bg-purple-50 rounded-lg p-4">
            <p class="text-sm text-gray-600">En attente</p>
            <p class="text-3xl font-bold text-purple-600" id="pendingCount">0</p>
          </div>
          <div class="bg-green-50 rounded-lg p-4">
            <p class="text-sm text-gray-600">Confirmées</p>
            <p class="text-3xl font-bold text-green-600" id="confirmedCount">0</p>
          </div>
          <div class="bg-blue-50 rounded-lg p-4">
            <p class="text-sm text-gray-600">Aujourd'hui</p>
            <p class="text-3xl font-bold text-blue-600" id="todayCount">0</p>
          </div>
          <div class="bg-red-50 rounded-lg p-4">
            <p class="text-sm text-gray-600">Refusées</p>
            <p class="text-3xl font-bold text-red-600" id="rejectedCount">0</p>
          </div>
        </div>

        <!-- Filtres -->
        <div class="flex flex-wrap gap-3">
          <button onclick="filterReservations('all')" class="filter-btn active px-4 py-2 rounded-lg font-semibold transition">
            Toutes
          </button>
          <button onclick="filterReservations('pending')" class="filter-btn px-4 py-2 rounded-lg font-semibold transition">
            En attente
          </button>
          <button onclick="filterReservations('confirmed')" class="filter-btn px-4 py-2 rounded-lg font-semibold transition">
            Confirmées
          </button>
          <button onclick="filterReservations('rejected')" class="filter-btn px-4 py-2 rounded-lg font-semibold transition">
            Refusées
          </button>
        </div>
      </div>
    </section>

    <main class="max-w-7xl mx-auto px-1 py-10 flex-1">
      <div id="reservationsList" class=" grid gap-4 grid-cols-3">
        <!-- Les réservations seront générées par JavaScript -->
      </div>

      <div id="noReservations" class="hidden text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <p class="text-xl text-gray-600">Aucune réservation</p>
        <p class="text-sm text-gray-500 mt-2">Vous n'avez pas encore de réservations</p>
      </div>
    </main>

    <footer class="bg-gray-900 text-white py-6">
      <div class="max-w-7xl mx-auto px-4 text-center text-sm">
        © 2025 Plateforme Coach & Sportif — Tous droits réservés
      </div>
    </footer>
  </div>
</div>

<!-- Modal Détails Réservation -->
<div id="detailsModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
    <div class="p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Détails de la Réservation</h2>
        <button onclick="closeDetailsModal()" class="text-gray-400 hover:text-gray-600">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="space-y-4">
        <div class="bg-gray-50 rounded-lg p-4">
          <h3 class="font-semibold text-gray-700 mb-2">Informations Client</h3>
          <p class="text-sm"><span class="font-medium">Nom:</span> <span id="clientName"></span></p>
          <p class="text-sm"><span class="font-medium">Email:</span> <span id="clientEmail"></span></p>
          <p class="text-sm"><span class="font-medium">Téléphone:</span> <span id="clientPhone"></span></p>
        </div>

        <div class="bg-gray-50 rounded-lg p-4">
          <h3 class="font-semibold text-gray-700 mb-2">Détails de la Séance</h3>
          <p class="text-sm"><span class="font-medium">Sport:</span> <span id="sessionSport"></span></p>
          <p class="text-sm"><span class="font-medium">Date:</span> <span id="sessionDate"></span></p>
          <p class="text-sm"><span class="font-medium">Horaire:</span> <span id="sessionTime"></span></p>
          <p class="text-sm"><span class="font-medium">Durée:</span> <span id="sessionDuration"></span></p>
        </div>
        <div id="actionButtons" class="flex gap-3 pt-4">
          <!-- Buttons will be dynamically added -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Toast Notification -->
<div id="toast" class="hidden fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-opacity">
  <p id="toastMessage"></p>
</div>

<script>
  let reservations = [
    {
      id: 1,
      clientName: "Ahmed Ben Ali",
      clientEmail: "ahmed@email.com",
      clientPhone: "+216 98 123 456",
      sport: "Football",
      date: "2025-01-20",
      time: "09:00 - 10:00",
      duration: "60 min",
      status: "pending",
      notes: "Je souhaite améliorer ma technique de tir"
    },
    {
      id: 2,
      clientName: "Fatima Mansour",
      clientEmail: "fatima@email.com",
      clientPhone: "+216 98 234 567",
      sport: "Fitness",
      date: "2025-01-20",
      time: "14:00 - 15:00",
      duration: "60 min",
      status: "confirmed",
      notes: "Programme de perte de poids"
    },
    {
      id: 3,
      clientName: "Karim Slimani",
      clientEmail: "karim@email.com",
      clientPhone: "+216 98 345 678",
      sport: "Tennis",
      date: "2025-01-21",
      time: "10:00 - 11:30",
      duration: "90 min",
      status: "pending",
      notes: "Préparation pour un tournoi"
    },
    {
      id: 4,
      clientName: "Sarah Trabelsi",
      clientEmail: "sarah@email.com",
      clientPhone: "+216 98 456 789",
      sport: "Natation",
      date: "2025-01-19",
      time: "16:00 - 17:00",
      duration: "60 min",
      status: "confirmed",
      notes: "Cours de perfectionnement"
    },
    {
      id: 5,
      clientName: "Mohamed Gharbi",
      clientEmail: "mohamed@email.com",
      clientPhone: "+216 98 567 890",
      sport: "Boxe",
      date: "2025-01-18",
      time: "18:00 - 19:00",
      duration: "60 min",
      status: "rejected",
      notes: "Initiation à la boxe anglaise"
    }
  ];

  let currentFilter = 'all';

  // Fonction pour obtenir le badge de statut
  function getStatusBadge(status) {
    const badges = {
      pending: '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>',
      confirmed: '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Confirmée</span>',
      rejected: '<span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Refusée</span>'
    };
    return badges[status] || '';
  }

  // Fonction pour créer une carte de réservation
  function createReservationCard(reservation) {
    const isPending = reservation.status === 'pending';
    const isConfirmed = reservation.status === 'confirmed';
    
    return `
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
          <div class="flex-1">
            <div class="flex items-center gap-3 mb-2">
              <h3 class="text-lg font-bold text-gray-800">${reservation.clientName}</h3>
              ${getStatusBadge(reservation.status)}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-gray-600">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>${reservation.date}</span>
              </div>
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>${reservation.time}</span>
              </div>
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <span>${reservation.sport}</span>
              </div>
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>${reservation.clientPhone}</span>
              </div>
            </div>
          </div>
          
          <div class="flex flex-wrap gap-2">
            <button onclick="viewDetails(${reservation.id})" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition font-semibold text-sm">
              Détails
            </button>
            ${isPending ? `
              <button onclick="confirmReservation(${reservation.id})" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-semibold text-sm">
                Confirmer
              </button>
              <button onclick="rejectReservation(${reservation.id})" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold text-sm">
                Refuser
              </button>
            ` : ''}
            ${isConfirmed ? `
              <button onclick="cancelReservation(${reservation.id})" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold text-sm">
                Annuler
              </button>
            ` : ''}
          </div>
        </div>
      </div>
    `;
  }

  // Fonction pour afficher les réservations
  function displayReservations() {
    const list = document.getElementById('reservationsList');
    const noReservations = document.getElementById('noReservations');
    
    let filtered = reservations;
    if (currentFilter !== 'all') {
      filtered = reservations.filter(r => r.status === currentFilter);
    }

    if (filtered.length === 0) {
      list.classList.add('hidden');
      noReservations.classList.remove('hidden');
    } else {
      list.classList.remove('hidden');
      noReservations.classList.add('hidden');
      list.innerHTML = filtered.map(r => createReservationCard(r)).join('');
    }

    updateStatistics();
  }

  // Fonction pour mettre à jour les statistiques
  function updateStatistics() {
    const today = new Date().toISOString().split('T')[0];
    
    document.getElementById('pendingCount').textContent = 
      reservations.filter(r => r.status === 'pending').length;
    document.getElementById('confirmedCount').textContent = 
      reservations.filter(r => r.status === 'confirmed').length;
    document.getElementById('todayCount').textContent = 
      reservations.filter(r => r.date === today && r.status !== 'rejected').length;
    document.getElementById('rejectedCount').textContent = 
      reservations.filter(r => r.status === 'rejected').length;
  }

  // Fonction pour filtrer les réservations
  function filterReservations(filter) {
    currentFilter = filter;
    
    // Mise à jour des boutons actifs
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.classList.remove('active', 'bg-purple-600', 'text-white');
      btn.classList.add('bg-gray-100', 'text-gray-700');
    });
    
    event.target.classList.add('active', 'bg-purple-600', 'text-white');
    event.target.classList.remove('bg-gray-100', 'text-gray-700');
    
    displayReservations();
  }

  // Fonction pour voir les détails
  function viewDetails(id) {
    const reservation = reservations.find(r => r.id === id);
    if (!reservation) return;

    document.getElementById('clientName').textContent = reservation.clientName;
    document.getElementById('clientEmail').textContent = reservation.clientEmail;
    document.getElementById('clientPhone').textContent = reservation.clientPhone;
    document.getElementById('sessionSport').textContent = reservation.sport;
    document.getElementById('sessionDate').textContent = reservation.date;
    document.getElementById('sessionTime').textContent = reservation.time;
    document.getElementById('sessionDuration').textContent = reservation.duration;
    document.getElementById('clientNotes').textContent = reservation.notes;

    const actionButtons = document.getElementById('actionButtons');
    if (reservation.status === 'pending') {
      actionButtons.innerHTML = `
        <button onclick="confirmReservation(${id}); closeDetailsModal();" class="flex-1 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-semibold">
          Confirmer
        </button>
        <button onclick="rejectReservation(${id}); closeDetailsModal();" class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold">
          Refuser
        </button>
      `;
    } else if (reservation.status === 'confirmed') {
      actionButtons.innerHTML = `
        <button onclick="cancelReservation(${id}); closeDetailsModal();" class="flex-1 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold">
          Annuler la réservation
        </button>
      `;
    } else {
      actionButtons.innerHTML = '';
    }

    document.getElementById('detailsModal').classList.remove('hidden');
  }

  // Fonction pour fermer le modal
  function closeDetailsModal() {
    document.getElementById('detailsModal').classList.add('hidden');
  }

  // Fonction pour confirmer une réservation
  function confirmReservation(id) {
    const reservation = reservations.find(r => r.id === id);
    if (reservation) {
      reservation.status = 'confirmed';
      displayReservations();
      showToast('Réservation confirmée avec succès');
    }
  }

  // Fonction pour refuser une réservation
  function rejectReservation(id) {
    const reservation = reservations.find(r => r.id === id);
    if (reservation) {
      reservation.status = 'rejected';
      displayReservations();
      showToast('Réservation refusée');
    }
  }

  // Fonction pour annuler une réservation
  function cancelReservation(id) {
    const reservation = reservations.find(r => r.id === id);
    if (reservation) {
      reservation.status = 'rejected';
      displayReservations();
      showToast('Réservation annulée');
    }
  }

  // Fonction pour afficher un toast
  function showToast(message) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toastMessage');
    toastMessage.textContent = message;
    toast.classList.remove('hidden');
    setTimeout(() => {
      toast.classList.add('hidden');
    }, 3000);
  }

  // Style pour les boutons de filtre
  const style = document.createElement('style');
  style.textContent = `
    .filter-btn {
      background-color: #f3f4f6;
      color: #374151;
    }
    .filter-btn.active {
      background-color: #9333ea;
      color: white;
    }
    .filter-btn:hover {
      opacity: 0.9;
    }
  `;
  document.head.appendChild(style);

  // Affichage initial
  displayReservations();
</script>

</body>
</html>
