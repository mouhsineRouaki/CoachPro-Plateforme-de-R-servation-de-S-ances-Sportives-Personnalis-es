<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion & Inscription</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    /* Ajout du style moderne avec scrollbar et animations */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background: #ddd;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      width: 760px;
      height: 480px;
      background: #fff;
      position: relative;
      overflow: hidden;
      display: flex;
      border-radius: 10px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    .forms-container {
      width: 50%;
      position: relative;
    }

    .form-control {
      position: absolute;
      width: 100%;
      height: 480px;
      padding-top: 20px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column;
      transition: 0.5s ease;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .form-control::-webkit-scrollbar {
      width: 6px;
    }

    .form-control::-webkit-scrollbar-thumb {
      background: #10b981;
      border-radius: 10px;
    }

    .form-control form {
      width: 100%;
      padding: 0 30px 30px;
      display: flex;
      flex-direction: column;
    }

    .form-control h2 {
      margin-bottom: 10px;
      text-align: center;
      font-weight: 600;
      color: #333;
    }

    .form-control input,
    .form-control select {
      margin: 8px 0;
      padding: 14px;
      border: none;
      background: #efefef;
      border-radius: 5px;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
      outline: none;
      transition: all 0.3s;
    }

    .form-control input:focus,
    .form-control select:focus {
      background: #e0e0e0;
    }

    .form-control button {
      margin-top: 10px;
      padding: 14px;
      border: none;
      border-radius: 5px;
      background: #059669;
      color: white;
      cursor: pointer;
      font-size: 15px;
      font-weight: 500;
      transition: all 0.3s;
    }

    .form-control button:hover {
      background: #047857;
    }

    .signup-form {
      opacity: 0;
      left: 100%;
    }

    .signin-form {
      opacity: 1;
      left: 0;
    }

    .intros-container {
      width: 50%;
      position: relative;
    }

    .intro-control {
      position: absolute;
      width: 100%;
      height: 480px;
      background: linear-gradient(170deg, #34d399, #059669);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.5s ease;
    }

    .intro-control__inner {
      padding: 30px;
      text-align: center;
    }

    .intro-control h2 {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .intro-control p {
      font-size: 15px;
      margin-bottom: 20px;
      opacity: 0.95;
    }

    .intro-control button {
      margin-top: 15px;
      padding: 12px 30px;
      border: none;
      border-radius: 50px;
      background: #10b981;
      color: white;
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
      transition: all 0.3s;
    }

    .intro-control button:hover {
      background: #059669;
      transform: scale(1.05);
    }

    .signup-intro {
      opacity: 0;
    }

    .container.change .signup-form {
      opacity: 1;
      left: 0;
    }

    .container.change .signin-form {
      opacity: 0;
      left: -100%;
    }

    .container.change .intros-container .signin-intro {
      opacity: 0;
    }

    .container.change .intros-container .signup-intro {
      opacity: 1;
      background: linear-gradient(170deg, #3b82f6, #2563eb);
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1000;
      align-items: center;
      justify-content: center;
      padding: 20px;
      overflow-y: auto;
    }

    .modal.active {
      display: flex;
    }

    .modal-content {
      background: white;
      border-radius: 10px;
      max-width: 700px;
      width: 100%;
      max-height: 90vh;
      overflow-y: auto;
      padding: 40px;
      animation: slideIn 0.3s ease-out;
    }

    .modal-content::-webkit-scrollbar {
      width: 6px;
    }

    .modal-content::-webkit-scrollbar-thumb {
      background: #10b981;
      border-radius: 10px;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .modal-header {
      margin-bottom: 30px;
    }

    .modal-header h2 {
      font-size: 26px;
      font-weight: 600;
      color: #059669;
      margin-bottom: 8px;
    }

    .modal-header p {
      color: #6b7280;
      font-size: 14px;
    }

    .form-section {
      margin-bottom: 25px;
    }

    .form-section h3 {
      font-size: 17px;
      font-weight: 600;
      color: #333;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 13px;
      font-weight: 500;
      color: #374151;
      margin-bottom: 6px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #e5e7eb;
      background: #efefef;
      border-radius: 5px;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
      outline: none;
      transition: all 0.3s;
    }

    .form-group textarea {
      min-height: 100px;
      resize: vertical;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      background: #e0e0e0;
      border-color: #059669;
    }

    .sports-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 15px;
    }

    .sport-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 14px;
      background: #d1fae5;
      color: #059669;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 500;
    }

    .sport-tag button {
      background: none;
      border: none;
      color: #059669;
      cursor: pointer;
      padding: 0;
      width: 18px;
      height: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: all 0.3s;
    }

    .sport-tag button:hover {
      background: #059669;
      color: white;
    }

    .add-sport-btn {
      padding: 12px 20px;
      background: #059669;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s;
    }

    .add-sport-btn:hover {
      background: #047857;
    }

    .modal-actions {
      display: flex;
      gap: 12px;
      margin-top: 25px;
      padding-top: 25px;
      border-top: 1px solid #e5e7eb;
    }

    .modal-actions button {
      flex: 1;
      padding: 13px;
      border: none;
      border-radius: 5px;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn-skip {
      background: #f3f4f6;
      color: #6b7280;
    }

    .btn-skip:hover {
      background: #e5e7eb;
    }

    .btn-save {
      background: #059669;
      color: white;
    }

    .btn-save:hover {
      background: #047857;
    }

    @media (max-width: 480px) {
      body {
        align-items: flex-start;
      }

      .container {
        width: 100%;
        height: 100vh;
        flex-direction: column;
      }

      .forms-container,
      .intros-container {
        width: 100%;
        height: 50vh;
      }

      .form-control,
      .intro-control {
        height: 50vh;
      }
    }
  </style>
</head>
<body>

  <!-- Main Container -->
  <div class="container" id="container">
    <div class="forms-container">
      <!-- Signup Form -->
      <div class="form-control signup-form">
        <form id="signupForm">
          <h2>Inscription</h2>
          <input type="text" placeholder="Nom" name="nom" required>
          <input type="text" placeholder="Prénom" name="prenom" required>
          <input type="email" placeholder="Email" name="email" required>
          <input type="text" placeholder="Téléphone" name="telephone" required>
          <select name="role" required>
            <option value="">-- Choisir rôle --</option>
            <option value="coach">Coach</option>
            <option value="sportif">Sportif</option>
          </select>
          <input type="password" placeholder="Mot de passe" name="password" required>
          <input type="password" placeholder="Confirmer mot de passe" name="confirmPassword" required>
          <button type="submit">S'inscrire</button>
        </form>
      </div>

      <!-- Signin Form -->
      <div class="form-control signin-form">
        <form id="signinForm">
          <h2>Connexion</h2>
          <input type="email" placeholder="Email" name="email" required>
          <input type="password" placeholder="Mot de passe" name="password" required>
          <button type="submit">Se connecter</button>
        </form>
      </div>
    </div>

    <div class="intros-container">
      <!-- Signin Intro -->
      <div class="intro-control signin-intro">
        <div class="intro-control__inner">
          <h2>Rejoignez-nous</h2>
          <p>Inscrivez-vous en tant que coach ou sportif.</p>
          <button id="signup-btn">J'ai déjà un compte</button>
        </div>
      </div>

      <!-- Signup Intro -->
      <div class="intro-control signup-intro">
        <div class="intro-control__inner">
          <h2>Bienvenue</h2>
          <p>Connectez-vous pour continuer.</p>
          <button id="signin-btn">Créer un compte</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Coach Complete Profile Modal -->
  <div id="coachModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Complétez votre profil Coach</h2>
        <p>Ajoutez vos informations professionnelles pour commencer</p>
      </div>

      <form id="coachProfileForm">
        <!-- Biographie -->
        <div class="form-section">
          <h3>
            <i class="fas fa-user-circle" style="color: #059669;"></i>
            Biographie
          </h3>
          <div class="form-group">
            <label>Présentez-vous</label>
            <textarea name="biographie" placeholder="Parlez de votre parcours, votre passion pour le sport..."></textarea>
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

        <!-- Sports & Compétences -->
        <div class="form-section">
          <h3>
            <i class="fas fa-dumbbell" style="color: #059669;"></i>
            Sports & Compétences
          </h3>
          <div class="sports-list" id="sportsList"></div>
          <div class="form-group">
            <label>Ajouter un sport</label>
            <div style="display: flex; gap: 10px;">
              <input type="text" id="sportInput" placeholder="Ex: Football, Tennis, Fitness...">
              <button type="button" class="add-sport-btn" onclick="addSport()">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Expérience -->
        <div class="form-section">
          <h3>
            <i class="fas fa-briefcase" style="color: #059669;"></i>
            Expérience professionnelle
          </h3>
          <div class="form-group">
            <label>Poste</label>
            <input type="text" id="expPoste" placeholder="Ex: Coach de football">
          </div>
          <div class="form-group">
            <label>Organisation</label>
            <input type="text" id="expOrganisation" placeholder="Ex: École de football">
          </div>
          <div class="form-group">
            <label>Date de début</label>
            <input type="date" id="expDateDebut">
          </div>
          <div class="form-group">
            <label>Date de fin</label>
            <input type="date" id="expDateFin">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea id="expDescription" placeholder="Description de votre expérience..."></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn-save" onclick="addExperience()">Ajouter l'expérience</button>
          </div>
          <div id="experiencesList"></div>
        </div>

        <!-- Certifications -->
        <div class="form-section">
          <h3>
            <i class="fas fa-certificate" style="color: #059669;"></i>
            Certifications
          </h3>
          <div class="form-group">
            <label>Titre</label>
            <input type="text" id="certTitre" placeholder="Ex: Diplôme de coach">
          </div>
          <div class="form-group">
            <label>Organisme</label>
            <input type="text" id="certOrganisme" placeholder="Ex: Fédération de football">
          </div>
          <div class="form-group">
            <label>Année</label>
            <input type="number" id="certAnnee" placeholder="Ex: 2020">
          </div>
          <div class="form-group">
            <button type="button" class="btn-save" onclick="addCertificat()">Ajouter la certification</button>
          </div>
          <div id="certificatsList"></div>
        </div>

        <div class="modal-actions">
          <button type="button" class="btn-skip" onclick="skipCoachProfile()">Passer</button>
          <button type="submit" class="btn-save">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>

  <div id="sportifModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Complétez votre profil Sportif</h2>
        <p>Ajoutez vos informations pour trouver le coach idéal</p>
      </div>

      <form id="sportifProfileForm">
        <div class="form-section">
          <h3>
            <i class="fas fa-running" style="color: #059669;"></i>
            Informations sportives
          </h3>
          <div class="form-group">
            <label>Niveau actuel</label>
            <select name="niveau" required>
              <option value="">-- Sélectionnez --</option>
              <option value="Débutant">Débutant</option>
              <option value="Intermédiaire">Intermédiaire</option>
              <option value="Avancé">Avancé</option>
            </select>
          </div>
          <div class="form-group">
            <input type="url" name="url_image" id="url_image" placeholder="url_image">
          </div>
          <div class="form-group">
            <textarea name="bio" id="bio" placeholder="biographie"></textarea>
          </div>
          
        </div>

        <div class="modal-actions">
          <button type="button" class="btn-skip" onclick="skipSportifProfile()">Passer</button>
          <button type="submit" class="btn-save">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const nameRegex = /^[A-Za-zÀ-ÿ\s]{2,}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^(?:\+212|0)(6|7)\d{8}$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

    const container = document.getElementById('container');
    const signUpButton = document.getElementById('signup-btn');
    const signInButton = document.getElementById('signin-btn');
    const signupForm = document.getElementById('signupForm');
    const signinForm = document.getElementById('signinForm');
    const coachModal = document.getElementById('coachModal');
    const sportifModal = document.getElementById('sportifModal');
    const coachProfileForm = document.getElementById('coachProfileForm');
    const sportifProfileForm = document.getElementById('sportifProfileForm');

    let coachSports = [];
    let sportifSports = [];
    let coachExperiences = [];
    let coachCertificats = [];

    signUpButton.addEventListener('click', () => {
      container.classList.remove('change');
    });

    signInButton.addEventListener('click', () => {
      container.classList.add('change');
    });

    signupForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(signupForm);
      
      const nom = formData.get('nom').trim();
      const prenom = formData.get('prenom').trim();
      const email = formData.get('email').trim();
      const telephone = formData.get('telephone').trim();
      const role = formData.get('role');
      const password = formData.get('password');
      const confirmPassword = formData.get('confirmPassword');

      if (!nameRegex.test(nom)) {
        alert("Nom invalide (minimum 2 caractères, lettres uniquement)");
        return;
      }

      if (!nameRegex.test(prenom)) {
        alert("Prénom invalide (minimum 2 caractères, lettres uniquement)");
        return;
      }

      if (!emailRegex.test(email)) {
        alert("Email invalide");
        return;
      }

      if (!phoneRegex.test(telephone)) {
        alert("Téléphone invalide (format: 0612345678 ou +212612345678)");
        return;
      }

      if (role === "") {
        alert("Veuillez choisir un rôle");
        return;
      }

      if (!passwordRegex.test(password)) {
        alert("Mot de passe faible (minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre)");
        return;
      }

      if (password !== confirmPassword) {
        alert("Les mots de passe ne correspondent pas");
        return;
      }

      alert('Inscription réussie! Connectez-vous maintenant.');
      container.classList.remove('change');
      signupForm.reset();
    });

    signinForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(signinForm);
      const email = formData.get('email').trim();
      const password = formData.get('password');

      if (!emailRegex.test(email)) {
        alert("Email invalide");
        return;
      }

      if (password === "") {
        alert("Mot de passe requis");
        return;
      }

      const isProfileComplete = false;
      const userRole = Math.random() > 0.5 ? 'coach' : 'sportif';

      if (!isProfileComplete) {
        if (userRole === 'coach') {
          showCoachModal();
        } else {
          showSportifModal();
        }
      } else {
        alert('Connexion réussie! Redirection vers le tableau de bord...');
        window.location.href = 'index.html';
      }
    });

    function addSport() {
      const input = document.getElementById('sportInput');
      const sport = input.value.trim();
      
      if (sport && !coachSports.includes(sport)) {
        coachSports.push(sport);
        renderCoachSports();
        input.value = '';
      }
    }

    function removeCoachSport(sport) {
      coachSports = coachSports.filter(s => s !== sport);
      renderCoachSports();
    }

    function renderCoachSports() {
      const list = document.getElementById('sportsList');
      list.innerHTML = coachSports.map(sport => `
        <span class="sport-tag">
          ${sport}
          <button type="button" onclick="removeCoachSport('${sport}')">
            <i class="fas fa-times"></i>
          </button>
        </span>
      `).join('');
    }

    function addExperience() {
      const poste = document.getElementById('expPoste').value.trim();
      const organisation = document.getElementById('expOrganisation').value.trim();
      const dateDebut = document.getElementById('expDateDebut').value;
      const dateFin = document.getElementById('expDateFin').value;
      const description = document.getElementById('expDescription').value.trim();

      if (!poste || !organisation || !dateDebut) {
        alert('Veuillez remplir tous les champs obligatoires');
        return;
      }

      coachExperiences.push({
        id: Date.now(),
        poste,
        organisation,
        dateDebut,
        dateFin: dateFin || 'Présent',
        description
      });

      renderExperiences();
      clearExperienceForm();
    }

    function removeExperience(id) {
      coachExperiences = coachExperiences.filter(exp => exp.id !== id);
      renderExperiences();
    }

    function renderExperiences() {
      const container = document.getElementById('experiencesList');
      container.innerHTML = coachExperiences.map(exp => `
        <div class="experience-item" style="background: #f9fafb; padding: 15px; border-radius: 8px; margin-bottom: 10px; border-left: 3px solid #059669;">
          <div style="display: flex; justify-content: space-between; align-items: start;">
            <div style="flex: 1;">
              <h4 style="font-size: 15px; font-weight: 600; color: #059669; margin-bottom: 5px;">${exp.poste}</h4>
              <p style="font-size: 13px; color: #6b7280; margin-bottom: 3px;"><i class="fas fa-building"></i> ${exp.organisation}</p>
              <p style="font-size: 12px; color: #9ca3af;"><i class="fas fa-calendar"></i> ${exp.dateDebut} - ${exp.dateFin}</p>
              ${exp.description ? `<p style="font-size: 13px; color: #4b5563; margin-top: 8px;">${exp.description}</p>` : ''}
            </div>
            <button type="button" onclick="removeExperience(${exp.id})" style="background: #fee2e2; color: #dc2626; border: none; padding: 6px 10px; border-radius: 5px; cursor: pointer; font-size: 12px;">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </div>
      `).join('');
    }

    function clearExperienceForm() {
      document.getElementById('expPoste').value = '';
      document.getElementById('expOrganisation').value = '';
      document.getElementById('expDateDebut').value = '';
      document.getElementById('expDateFin').value = '';
      document.getElementById('expDescription').value = '';
    }

    function addCertificat() {
      const titre = document.getElementById('certTitre').value.trim();
      const organisme = document.getElementById('certOrganisme').value.trim();
      const annee = document.getElementById('certAnnee').value;

      if (!titre || !organisme) {
        alert('Veuillez remplir le titre et l\'organisme');
        return;
      }

      coachCertificats.push({
        id: Date.now(),
        titre,
        organisme,
        annee: annee || 'Non spécifié'
      });

      renderCertificats();
      clearCertificatForm();
    }

    function removeCertificat(id) {
      coachCertificats = coachCertificats.filter(cert => cert.id !== id);
      renderCertificats();
    }

    function renderCertificats() {
      const container = document.getElementById('certificatsList');
      container.innerHTML = coachCertificats.map(cert => `
        <div class="certificat-item" style="background: #f0fdf4; padding: 12px 15px; border-radius: 8px; margin-bottom: 8px; display: flex; justify-content: space-between; align-items: center; border-left: 3px solid #10b981;">
          <div>
            <h4 style="font-size: 14px; font-weight: 600; color: #059669; margin-bottom: 3px;">${cert.titre}</h4>
            <p style="font-size: 12px; color: #6b7280;"><i class="fas fa-certificate"></i> ${cert.organisme} ${cert.annee !== 'Non spécifié' ? `(${cert.annee})` : ''}</p>
          </div>
          <button type="button" onclick="removeCertificat(${cert.id})" style="background: #fee2e2; color: #dc2626; border: none; padding: 6px 10px; border-radius: 5px; cursor: pointer; font-size: 12px;">
            <i class="fas fa-trash"></i>
          </button>
        </div>
      `).join('');
    }

    function clearCertificatForm() {
      document.getElementById('certTitre').value = '';
      document.getElementById('certOrganisme').value = '';
      document.getElementById('certAnnee').value = '';
    }

    function addSportifSport() {
      const input = document.getElementById('sportifSportInput');
      const sport = input.value.trim();
      
      if (sport && !sportifSports.includes(sport)) {
        sportifSports.push(sport);
        renderSportifSports();
        input.value = '';
      }
    }

    function removeSportifSport(sport) {
      sportifSports = sportifSports.filter(s => s !== sport);
      renderSportifSports();
    }

    function renderSportifSports() {
      const list = document.getElementById('sportifSportsList');
      list.innerHTML = sportifSports.map(sport => `
        <span class="sport-tag">
          ${sport}
          <button type="button" onclick="removeSportifSport('${sport}')">
            <i class="fas fa-times"></i>
          </button>
        </span>
      `).join('');
    }

    function showCoachModal() {
      coachModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function hideCoachModal() {
      coachModal.classList.remove('active');
      document.body.style.overflow = 'auto';
    }

    function showSportifModal() {
      sportifModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
    showSportifModal()

    function hideSportifModal() {
      sportifModal.classList.remove('active');
      document.body.style.overflow = 'auto';
    }

    function skipCoachProfile() {
      hideCoachModal();
      alert('Profil ignoré. Vous pourrez le compléter plus tard.');
      window.location.href = 'index.html';
    }

    function skipSportifProfile() {
      hideSportifModal();
      alert('Profil ignoré. Vous pourrez le compléter plus tard.');
      window.location.href = 'index.html';
    }

    coachProfileForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(coachProfileForm);
      
      console.log('Coach Profile Data:', {
        biographie: formData.get('biographie'),
        niveau: formData.get('niveau'),
        sports: coachSports,
        experiences: coachExperiences,
        certificats: coachCertificats
      });

      hideCoachModal();
      alert('Profil coach enregistré avec succès!');
      window.location.href = 'coach-reservations.html';
    });

    sportifProfileForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(sportifProfileForm);
      
      console.log('Sportif Profile Data:', {
        niveau: formData.get('niveau'),
        objectif: formData.get('objectif'),
        sports: sportifSports,
        frequence: formData.get('frequence'),
        creneaux: formData.get('creneaux'),
        notes: formData.get('notes')
      });

      hideSportifModal();
      alert('Profil sportif enregistré avec succès!');
      window.location.href = 'index.html';
    });

    document.getElementById('sportInput')?.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        addSport();
      }
    });

    document.getElementById('sportifSportInput')?.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        addSportifSport();
      }
    });
  </script>
</body>
</html>
