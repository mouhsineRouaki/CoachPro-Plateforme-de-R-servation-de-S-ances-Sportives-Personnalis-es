<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Détails Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- ===== HEADER ===== -->
<header class="bg-purple-600 text-white py-6">
  <div class="max-w-6xl mx-auto px-4">
    <h1 class="text-3xl font-bold">Détails du Coach</h1>
    <p class="text-sm opacity-90">Découvrez le profil et réservez une séance</p>
  </div>
</header>

<!-- ===== MAIN ===== -->
<main class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">

  <!-- ===== PROFIL COACH ===== -->
  <section class="bg-white rounded-xl shadow p-6 lg:col-span-2">
    <div class="flex flex-col md:flex-row gap-6">
      <img src="https://via.placeholder.com/200"
           alt="Coach"
           class="w-48 h-48 rounded-xl object-cover mx-auto md:mx-0">

      <div>
        <h2 class="text-2xl font-bold text-gray-800">Coach Mohamed</h2>
        <p class="text-purple-600 font-semibold mt-1">Coach Professionnel</p>

        <p class="text-gray-600 mt-4">
          Coach sportif certifié avec plus de 8 ans d’expérience dans
          l’entraînement personnalisé et la préparation physique.
        </p>

        <!-- Sports -->
        <div class="mt-4">
          <h3 class="font-semibold text-gray-700 mb-2">Disciplines :</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Football</span>
            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Préparation Physique</span>
            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Athlétisme</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FORMULAIRE RESERVATION ===== -->
  <aside class="bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Réserver une séance</h3>

    <form class="space-y-4">
      <!-- Sport -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Discipline
        </label>
        <select class="w-full p-2 border border-gray-300 rounded-md">
          <option>Choisir un sport</option>
          <option>Football</option>
          <option>Préparation Physique</option>
          <option>Athlétisme</option>
        </select>
      </div>

      <!-- Date -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Date
        </label>
        <input type="date"
               class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <!-- Créneau -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Créneau disponible
        </label>
        <select class="w-full p-2 border border-gray-300 rounded-md">
          <option>08:00 - 10:00</option>
          <option>14:00 - 16:00</option>
          <option>18:00 - 20:00</option>
        </select>
      </div>

      <!-- Bouton -->
      <button type="button"
        class="w-full py-3 bg-purple-600 text-white font-semibold rounded-md hover:bg-purple-700 transition">
        Réserver la séance
      </button>
    </form>
  </aside>

  <!-- ===== EXPERIENCES ===== -->
  <section class="bg-white rounded-xl shadow p-6 lg:col-span-2">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Expériences</h3>

    <ul class="space-y-4">
      <li class="border-l-4 border-purple-600 pl-4">
        <h4 class="font-semibold text-gray-800">Salle Fitness Pro</h4>
        <p class="text-sm text-gray-600">2018 - 2022</p>
      </li>

      <li class="border-l-4 border-purple-600 pl-4">
        <h4 class="font-semibold text-gray-800">Centre Sportif Elite</h4>
        <p class="text-sm text-gray-600">2022 - Présent</p>
      </li>
    </ul>
  </section>

  <!-- ===== DISPONIBILITES ===== -->
  <section class="bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Disponibilités</h3>

    <ul class="space-y-3">
      <li class="flex justify-between items-center">
        <span class="text-gray-700">20/12/2024</span>
        <span class="text-green-600 font-semibold">08:00 - 10:00</span>
      </li>

      <li class="flex justify-between items-center">
        <span class="text-gray-700">21/12/2024</span>
        <span class="text-green-600 font-semibold">14:00 - 16:00</span>
      </li>

      <li class="flex justify-between items-center">
        <span class="text-gray-700">22/12/2024</span>
        <span class="text-red-500 font-semibold">Indisponible</span>
      </li>
    </ul>
  </section>

</main>

<!-- ===== FOOTER ===== -->
<footer class="bg-gray-900 text-white py-6 mt-10">
  <div class="max-w-6xl mx-auto px-4 text-center text-sm">
    © 2025 Plateforme Coach & Sportif — Tous droits réservés
  </div>
</footer>

</body>
</html>
