<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Compléter profil Coach</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="../../css/coach-profile.css">
</head>
<body>

<div id="coachModal" class="modal active">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Complétez votre profil Coach</h2>
      <p>Ajoutez vos informations professionnelles pour commencer</p>
    </div>

    <form id="coachProfileForm">

      <!-- Biographie -->
      <div class="form-section">
        <h3><i class="fas fa-user-circle"></i> Biographie</h3>
        <div class="form-group">
          <label>Présentez-vous</label>
          <textarea name="biographie" placeholder="Parlez de votre parcours..."></textarea>
        </div>

        <div class="form-group">
          <label>Niveau</label>
          <select name="niveau">
            <option value="">-- Sélectionnez --</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermédiaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expert">Expert</option>
          </select>
        </div>
      </div>

      <!-- Sports -->
      <div class="form-section">
        <h3><i class="fas fa-dumbbell"></i> Sports & Compétences</h3>

        <div class="sports-list" id="sportsList"></div>

        <div class="form-group inline">
          <input type="text" id="sportInput" placeholder="Football, Tennis...">
          <button type="button" class="add-sport-btn" id="addSportBtn">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>

      <!-- Expérience -->
      <div class="form-section">
        <h3><i class="fas fa-briefcase"></i> Expérience professionnelle</h3>

        <input type="text" id="expDomaine" placeholder="Domaine">
        <input type="date" id="expDateDebut">
        <input type="date" id="expDateFin">
        <input type="nombre" id="expDure" placeholder="5 ans">

        <button type="button" class="btn-save" id="addExperienceBtn">
          Ajouter l'expérience
        </button>

        <div id="experiencesList"></div>
      </div>

      <!-- Certifications -->
      <div class="form-section">
        <h3><i class="fas fa-certificate"></i> Certifications</h3>

        <input type="text" id="certTitre" placeholder="Titre">
        <input type="text" id="certOrganisme" placeholder="Organisme">
        <input type="number" id="certAnnee" placeholder="Année">

        <button type="button" class="btn-save" id="addCertBtn">
          Ajouter la certification
        </button>

        <div id="certificatsList"></div>
      </div>

      <div class="modal-actions">
        <button type="button" class="btn-skip" id="skipBtn">Passer</button>
        <button type="submit" class="btn-save">Enregistrer</button>
      </div>

    </form>
  </div>
</div>

<!-- JS -->
<script src="../../js/coach-profile.js"></script>
</body>
</html>
