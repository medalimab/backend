<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>

.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: max-content; 
  min-width: 300px;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-top: 6px;
  padding: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.12);
  z-index: 9999; /* >>> évite qu’il passe sous Beds & Baths */
  max-height: 400px; /* limite hauteur visible */
  overflow-y: auto;  /* scroll si trop long */
}





/* Actions sous les options */
.actions {
  display: grid;
  grid-template-columns: 1fr 1fr; /* 2 colonnes égales */
  gap: 12px;
  margin-top: 15px;
  width: 100%; /* occupe toute la largeur */
}

.btn-reset, .btn-done {
  border: none;
  padding: 12px;
  border-radius: 6px;
  font-weight: 600;
  cursor: pointer;
  width: 100%; /* bouton prend toute la largeur de sa colonne */
  text-align: center;
}

.btn-reset {
  background: #f5f5f5;
  color: #333;
}

.btn-done {
  background: #1abc9c;
  color: #fff;
}









    .search-bar {
      background: #fff;
      border-radius: 8px;
      padding: 15px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      max-width: 1000px;
      margin: 20px auto;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Ligne du haut */
    .top-row { display: flex; align-items: center; gap: 10px; }
    .tab {
      padding: 10px 20px;
      border-radius: 6px;
      background: #f8f9fa;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      color: #2c3e50;
    }
    .tab.active { background: #e8f5e9; color: #2e7d32; }
    .location {
      flex: 1;
      padding: 10px 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      display: flex;
      align-items: center;
      gap: 6px;
      color: #555;
      font-size: 0.95rem;
    }
    .btn-search {
      background: #1abc9c;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }
    .btn-search:hover { background: #16a085; }

    /* Ligne du bas */
    .bottom-row { display: flex; align-items: center; gap: 10px; }

    /* Status tabs */
    .status-tabs {
      display: flex;
      border-radius: 6px;
      overflow: hidden;
      border: 1px solid #ddd;
    }
    .status {
      padding: 8px 16px;
      cursor: pointer;
      font-weight: 600;
      color: #555;
      transition: 0.2s;
      background: #fff;
    }
    .status.active { background: #e8f5e9; color: #2e7d32; }

    /* Dropdown */
    
    .dropdown:hover { border-color: #1abc9c; }

   /* Chaque dropdown devient un conteneur relatif */
.dropdown {
  position: relative;
  flex: 1;
  padding: 8px 16px;
  border: 1px solid #ddd;
  border-radius: 6px;
  background: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-weight: 500;
}

/* Le contenu reste au-dessus de son bouton */
.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;   /* juste en dessous du bouton */
  left: 0;
  width: 100%; /* même largeur que le bouton parent */
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-top: 6px;
  padding: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.12);
  z-index: 1000; /* reste toujours au-dessus */
  max-height: 400px;
  overflow-y: auto;
}

/* Menu large (Property Type, Price, etc.) */
.dropdown-content.large {
  width: 100%;   /* reste aligné avec le bouton parent */
  max-width: 420px;
}

    .dropdown-content.large {
  width: 420px;
  min-width: 250px;
  max-width: 90vw;
    }

    /* Onglets Residential / Commercial */
    .tabs {
      display: flex;
      border-bottom: 1px solid #ddd;
      margin-bottom: 10px;
    }
    .tab-sub {
      flex: 1;
      text-align: center;
      padding: 8px;
      cursor: pointer;
      font-weight: 600;
      border-radius: 6px 6px 0 0;
    }
    .tab-sub.active {
      background: #e8f5e9;
      color: #2e7d32;
    }

    /* Options */
    .options { display: none; flex-direction: column; gap: 8px; margin-top: 10px; max-height: 200px; overflow-y: auto; }
  .options { display: none; flex-direction: column; gap: 8px; margin-top: 10px; }
    .options.active {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
  width: 100%;
    }
    .options label {
      flex: 1 1 30%;
      min-width: 150px;
      cursor: pointer;
      padding: 10px;
      border-radius: 4px;
      box-sizing: border-box;
      text-align: left;
    }
    .options label:hover { background: #f9f9f9; }

    /* Price inputs */
    .price-inputs { display: flex; gap: 10px; margin-bottom: 15px; }
    .price-inputs input {
      flex: 1;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
    }

    /* Actions */
    .actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .btn-reset, .btn-done {
  border: none;
  padding: 10px;
  border-radius: 6px;
  font-weight: 600;
  cursor: pointer;
  width: 100%;
    }
    .btn-reset { background: #f5f5f5; color: #333; }
    .btn-done { background: #1abc9c; color: #fff; }
  </style>
</head>
<body>

<div class="search-bar">
  <!-- Top Row -->
  <div class="top-row">
    <div class="tab active">Buy</div>
    <div class="tab"></div>
    <div class="location"><i class="fas fa-map-marker-alt"></i> Enter location</div>
    <button class="btn-search">Search</button>
  </div>

  <!-- Bottom Row -->
  <div class="bottom-row">
    <div class="status-tabs">
      <div class="status active">All</div>
      <div class="status">Ready</div>
      <div class="status">Off-Plan</div>
    </div>

    <!-- Property Type -->
    <div class="dropdown">
      Property Type <i class="fas fa-chevron-down"></i>
      <div class="dropdown-content large">
        <div class="tabs">
          <div class="tab-sub active" onclick="showOptions('residential')">Residential</div>
          <div class="tab-sub" onclick="showOptions('commercial')">Commercial</div>
        </div>

        <!-- Residential -->
        <div class="options residential active">
          <label><input type="checkbox" name="res[]" value="Apartment" /> Apartment</label>
          <label><input type="checkbox" name="res[]" value="Townhouse" /> Townhouse</label>
          <label><input type="checkbox" name="res[]" value="Villa Compound" /> Villa Compound</label>
          <label><input type="checkbox" name="res[]" value="Land" /> Land</label>
          <label><input type="checkbox" name="res[]" value="Building" /> Building</label>
          <label><input type="checkbox" name="res[]" value="Villa" /> Villa</label>
          <label><input type="checkbox" name="res[]" value="Penthouse" /> Penthouse</label>
          <label><input type="checkbox" name="res[]" value="Hotel Apartment" /> Hotel Apartment</label>
          <label><input type="checkbox" name="res[]" value="Floor" /> Floor</label>
        </div>

        <!-- Commercial -->
        <div class="options commercial">
          <label><input type="checkbox" name="com[]" value="Office" /> Office</label>
          <label><input type="checkbox" name="com[]" value="Shop" /> Shop</label>
          <label><input type="checkbox" name="com[]" value="Warehouse" /> Warehouse</label>
          <label><input type="checkbox" name="com[]" value="Labour Camp" /> Labour Camp</label>
          <label><input type="checkbox" name="com[]" value="Bulk Unit" /> Bulk Unit</label>
          <label><input type="checkbox" name="com[]" value="Factory" /> Factory</label>
          <label><input type="checkbox" name="com[]" value="Mixed Use Land" /> Mixed Use Land</label>
          <label><input type="checkbox" name="com[]" value="Showroom" /> Showroom</label>
          <label><input type="checkbox" name="com[]" value="Other Commercial" /> Other Commercial</label>
        </div>

        <div class="actions">
          <button class="btn-reset">Reset</button>
          <button class="btn-done">Done</button>
        </div>
      </div>
    </div>

    <!-- Beds & Baths -->
    <div class="dropdown">Beds & Baths <i class="fas fa-chevron-down"></i></div>

    <!-- Price -->
    <div class="dropdown">
      Price (AED) <i class="fas fa-chevron-down"></i>
      <div class="dropdown-content large">
        <div class="price-inputs">
          <input type="number" placeholder="Minimum" />
          <input type="number" placeholder="Maximum" />
        </div>
        <div class="actions">
          <button class="btn-reset">Reset</button>
          <button class="btn-done">Done</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function showOptions(type) {
  document.querySelectorAll('.options').forEach(opt => opt.classList.remove('active'));
  document.querySelectorAll('.tab-sub').forEach(tab => tab.classList.remove('active'));
  if(type === 'residential') {
    document.querySelector('.options.residential').classList.add('active');
    document.querySelector('.tab-sub:nth-child(1)').classList.add('active');
  } else {
    document.querySelector('.options.commercial').classList.add('active');
    document.querySelector('.tab-sub:nth-child(2)').classList.add('active');
  }
  // Empêche la fermeture du dropdown lors du changement d'onglet
  var parentDropdown = document.querySelector('.dropdown-content.large');
  if(parentDropdown) {
    parentDropdown.style.display = 'block';
  }
}

// Dropdown open/close logic pour Property Type, Bedroom et Bath
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.dropdown').forEach(function(drop) {
    var content = drop.querySelector('.dropdown-content');
    if(content) {
      drop.addEventListener('click', function(e) {
        e.stopPropagation();
        // Ferme tous les autres dropdowns
        document.querySelectorAll('.dropdown-content').forEach(function(dc) {
          if(dc !== content) dc.style.display = 'none';
        });
        // Toggle ce dropdown
        if(content.style.display === 'block') {
          content.style.display = 'none';
        } else {
          content.style.display = 'block';
        }
      });
      // Empêche la fermeture lors du clic sur les onglets ou options
      content.addEventListener('click', function(e) {
        e.stopPropagation();
      });
    }
  });
  // Ferme le dropdown au clic extérieur
  document.addEventListener('click', function(e) {
    document.querySelectorAll('.dropdown-content').forEach(function(dc) {
      dc.style.display = 'none';
    });
  });
});
</script>

</body>
</html>
