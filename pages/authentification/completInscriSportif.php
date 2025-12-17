<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Compléter profil Sportif</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="../../sportif-profile.css">
</head>
<body>

<div id="sportifModal" class="modal active">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Complétez votre profil Sportif</h2>
      <p>Ajoutez vos informations pour trouver le coach idéal</p>
    </div>

    <form id="sportifProfileForm" method="POST" action="">

      <div class="form-section">
        <h3><i class="fas fa-running"></i> Informations sportives</h3>

        <div class="form-group">
          <label>Niveau actuel</label>
          <select name="niveau" required>
            <option value="">Sélectionnez</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermédiaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
          </select>
        </div>

        <div class="form-group">
          <input type="url" name="url_image" id="url_image" placeholder="URL de l'image">
        </div>

        <div class="form-group">
          <textarea name="bio" id="bio" placeholder="Biographie"></textarea>
        </div>
      </div>

      <div class="modal-actions">
        <button type="button" class="btn-skip" id="skipBtn">Passer</button>
        <button type="submit" class="btn-save">Enregistrer</button>
      </div>

    </form>
  </div>
</div>

<!-- JS -->
<script src="../../sportif-profile.js"></script>
</body>
</html>
