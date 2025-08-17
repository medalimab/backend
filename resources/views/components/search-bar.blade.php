<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>

/*bath style 

/* Beds & Baths dropdown */
.beds-baths-dropdown {
  padding: 16px;
  border-radius: 8px;
  background: #fff;
  max-width: 400px;
}

/* Groupes Beds / Baths */
.filter-group {
  margin-bottom: 15px;
}

.filter-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 8px;
  color: #333;
}

/* Pills style */
.pill-group {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.pill {
  padding: 8px 14px;
  border: 1px solid #ddd;
  border-radius: 20px;
  background: #f9f9f9;
  cursor: pointer;
  font-size: 0.9rem;
  transition: 0.2s;
}

.pill:hover {
  background: #e8f5e9;
  border-color: #1E3A8A;
}

.pill.active {
  background: #1E3A8A;
  color: white;
  border-color: #1E3A8A;
}













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
  background: #1E3A8A;
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
  .tab.active { background: #e8f5e9; color: #1E3A8A; }
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
      background: #1E3A8A;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }
  .btn-search:hover { background: #1E3A8A; color: #fff; }
  .btn-done:hover { background: #16306b; color: #fff; }
  .btn-reset:hover { background: #1E3A8A; color: #fff; }
  .tab:hover { background: #1E3A8A; color: #fff; }

    /* Ligne du bas */
    .bottom-row { display: flex; align-items: center; gap: 10px; }

    /* Status tabs */
    .status-tabs {
      display: flex;
      border-radius: 6px;
      overflow: hidden;
      border: 1px solid #ddd;
    }
    
    /* Masquer les status tabs mobiles sur desktop */
    .mobile-status-tabs {
      display: none;
    }
    .status {
  padding: 8px 16px;
  cursor: pointer;
  font-weight: 600;
  color: #555;
  transition: 0.2s;
  background: #fff;
}
.status:hover {
  background: #1E3A8A;
  color: #fff;
}
    }
  .status.active { background: #e8f5e9; color: #1E3A8A; }

    /* Dropdown */

    .dropdown:hover { border-color: #1E3A8A; }

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
  .tab-sub:hover { background: #1E3A8A; color: #fff; }
      flex: 1;
      text-align: center;
      padding: 8px;
      cursor: pointer;
      font-weight: 600;
      border-radius: 6px 6px 0 0;
    }
    .tab-sub.active {
  background: #e8f5e9;
  color: #1E3A8A;
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
  .btn-done { background: #1E3A8A; color: #fff; }
  
  /* ========== MOBILE RESPONSIVE STYLES ========== */
  @media (max-width: 768px) {
    .search-bar {
      margin: 5px;
      padding: 10px;
      border-radius: 12px;
    }
    
    /* Layout vertical pour mobile */
    .top-row {
      flex-direction: column;
      gap: 12px;
    }
    
    /* Masquer le bouton "Buy" sur mobile */
    .tab {
      display: none;
    }
    
    /* Afficher les status tabs mobiles */
    .mobile-status-tabs {
      display: flex !important;
      justify-content: center;
      margin-bottom: 10px;
    }
    
    /* Afficher les status tabs en haut sur mobile */
    .status-tabs {
      order: -1; /* Place les status tabs avant location */
      margin-bottom: 10px;
    }
    
    .location {
      width: 100%;
      padding: 14px;
      font-size: 16px; /* Évite le zoom automatique */
    }
    
    .btn-search {
      width: 100%;
      padding: 14px;
      font-size: 16px;
    }
    
    /* Bottom row vertical */
    .bottom-row {
      flex-direction: column;
      gap: 10px;
      align-items: stretch;
      order: 1; /* Place après location et search button */
    }
    
    /* Masquer les status-tabs du bottom-row sur mobile */
    .bottom-row .status-tabs {
      display: none;
    }
    
    /* Dropdowns pleine largeur mobile */
    .dropdown {
      width: 100%;
      padding: 12px;
      justify-content: center;
      font-size: 15px;
      /* Masquer tous les dropdowns sur mobile */
      display: none !important;
    }
    
    /* Masquer aussi les contenus dropdown sur mobile */
    .dropdown-content,
    .dropdown-content.large {
      display: none !important;
    }
    
    /* Simplifier le bottom-row puisque plus de dropdowns */
    .bottom-row {
      display: none !important; /* Masquer complètement la section bottom */
    }
  }
  
  /* Extra petits écrans (iPhones, etc.) */
  @media (max-width: 480px) {
    .search-bar {
      margin: 2px;
      padding: 8px;
    }
    
    .dropdown-content {
      width: calc(100vw - 20px) !important;
      padding: 10px;
    }
    
    .pill {
      padding: 10px 14px;
      font-size: 14px;
    }
    
    .status {
      padding: 8px 10px;
      font-size: 13px;
    }
  }
  </style>
</head>
<body>

<form method="GET" action="{{ route('properties.search') }}">
<div class="search-bar">
  <!-- Input caché unique pour listing_status -->
  <input type="hidden" name="listing_status" id="listingStatusInput" value="All">
  <input type="hidden" name="property_completion" id="propertyCompletionInput" value="All">
  
  <!-- Top Row -->
  <div class="top-row">
    <div class="tab active">Buy</div>
    
    <!-- Status tabs pour mobile (cachées sur desktop) -->
    <div class="status-tabs mobile-status-tabs">
      <div class="status active" onclick="setStatus('All')">All</div>
      <div class="status" onclick="setStatus('Ready')">Ready</div>
      <div class="status" onclick="setStatus('Off-Plan')">Off-Plan</div>
    </div>
    
    <input class="location" type="text" name="location" placeholder="Enter location">
    <button class="btn-search" type="submit">Search</button>
  </div>

  <!-- Bottom Row -->
  <div class="bottom-row">
    <div class="status-tabs">
      <div class="status active" onclick="setStatus('All')">All</div>
      <div class="status" onclick="setStatus('Ready')">Ready</div>
      <div class="status" onclick="setStatus('Off-Plan')">Off-Plan</div>
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
          <label><input type="checkbox" name="home_type[]" value="Apartment" /> Apartment</label>
          <label><input type="checkbox" name="home_type[]" value="Townhouse" /> Townhouse</label>
          <label><input type="checkbox" name="home_type[]" value="Villa Compound" /> Villa Compound</label>
          <label><input type="checkbox" name="home_type[]" value="Land" /> Land</label>
          <label><input type="checkbox" name="home_type[]" value="Building" /> Building</label>
          <label><input type="checkbox" name="home_type[]" value="Villa" /> Villa</label>
          <label><input type="checkbox" name="home_type[]" value="Penthouse" /> Penthouse</label>
          <label><input type="checkbox" name="home_type[]" value="Hotel Apartment" /> Hotel Apartment</label>
          <label><input type="checkbox" name="home_type[]" value="Floor" /> Floor</label>
        </div>

        <!-- Commercial -->
        <div class="options commercial">
          <label><input type="checkbox" name="home_type[]" value="Office" /> Office</label>
          <label><input type="checkbox" name="home_type[]" value="Shop" /> Shop</label>
          <label><input type="checkbox" name="home_type[]" value="Warehouse" /> Warehouse</label>
          <label><input type="checkbox" name="home_type[]" value="Labour Camp" /> Labour Camp</label>
          <label><input type="checkbox" name="home_type[]" value="Bulk Unit" /> Bulk Unit</label>
          <label><input type="checkbox" name="home_type[]" value="Factory" /> Factory</label>
          <label><input type="checkbox" name="home_type[]" value="Mixed Use Land" /> Mixed Use Land</label>
          <label><input type="checkbox" name="home_type[]" value="Showroom" /> Showroom</label>
          <label><input type="checkbox" name="home_type[]" value="Other Commercial" /> Other Commercial</label>
        </div>

        <div class="actions">
          <button class="btn-reset">Reset</button>
          <button class="btn-done">Done</button>
        </div>
      </div>
    </div>

    <!-- Beds & Baths -->
    <!-- Beds & Baths -->
<div class="dropdown">
  Beds & Baths <i class="fas fa-chevron-down"></i>
  <div class="dropdown-content large beds-baths-dropdown">
    <div class="filter-group">
      <label><strong>Beds</strong></label>
      <div class="pill-group" id="bedOptions">
        <input type="hidden" name="beds" id="bedsInput">
        <button class="pill" type="button" onclick="setBeds('Studio')">Studio</button>
        <button class="pill" type="button" onclick="setBeds('1')">1</button>
        <button class="pill" type="button" onclick="setBeds('2')">2</button>
        <button class="pill" type="button" onclick="setBeds('3')">3</button>
        <button class="pill" type="button" onclick="setBeds('4')">4</button>
        <button class="pill" type="button" onclick="setBeds('5')">5</button>
        <button class="pill" type="button" onclick="setBeds('6')">6</button>
        <button class="pill" type="button" onclick="setBeds('7')">7</button>
        <button class="pill" type="button" onclick="setBeds('8+')">8+</button>
      </div>
    </div>

    <div class="filter-group">
      <label><strong>Baths</strong></label>
      <div class="pill-group" id="bathOptions">
        <input type="hidden" name="baths" id="bathsInput">
        <button class="pill" type="button" onclick="setBaths('1')">1</button>
        <button class="pill" type="button" onclick="setBaths('2')">2</button>
        <button class="pill" type="button" onclick="setBaths('3')">3</button>
        <button class="pill" type="button" onclick="setBaths('4')">4</button>
        <button class="pill" type="button" onclick="setBaths('5')">5</button>
        <button class="pill" type="button" onclick="setBaths('6+')">6+</button>
      </div>
    </div>

    <div class="actions">
      <button class="btn-reset" type="button" onclick="resetPills()">Reset</button>
      <button class="btn-done" type="button" onclick="submitSearch()">Done</button>
    </div>
  </div>
</div>


    <!-- Price -->
    <div class="dropdown">
      Price (AED) <i class="fas fa-chevron-down"></i>
      <div class="dropdown-content large">
        <div class="price-inputs">
          <input type="number" name="mini_price" placeholder="Minimum" />
          <input type="number" name="max_price" placeholder="Maximum" />
        </div>
        <div class="actions">
          <button class="btn-reset">Reset</button>
          <button class="btn-done">Done</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<script>
// Protection contre les conflits jQuery
(function() {
  'use strict';
  
// Navigation active sur les boutons All, Ready, Off-Plan
document.addEventListener('DOMContentLoaded', function() {
  // Gérer tous les boutons status (mobile et desktop)
  document.querySelectorAll('.status').forEach(function(btn) {
    btn.addEventListener('click', function() {
      console.log('Status button clicked:', this.textContent);
      
      // Retirer la classe active de tous les boutons status
      document.querySelectorAll('.status').forEach(function(b) {
        b.classList.remove('active');
      });
      
      // Ajouter la classe active au bouton cliqué
      this.classList.add('active');
    });
  });
});

// Dropdown open/close logic pour Property Type, Bedroom et Bath
document.addEventListener('DOMContentLoaded', function() {
  // Ne pas initialiser les dropdowns sur mobile
  if (window.innerWidth <= 768) {
    console.log('Mobile detected - dropdowns disabled');
    return;
  }
  
  // Vérifier que les dropdowns existent avant d'ajouter les event listeners
  var dropdowns = document.querySelectorAll('.dropdown');
  
  if(dropdowns.length > 0) {
    dropdowns.forEach(function(drop) {
      var content = drop.querySelector('.dropdown-content');
      if(content) {
        drop.addEventListener('click', function(e) {
          e.stopPropagation();
          // Ferme tous les autres dropdowns
          var allDropdownContent = document.querySelectorAll('.dropdown-content');
          if(allDropdownContent.length > 0) {
            allDropdownContent.forEach(function(dc) {
              if(dc !== content && dc) dc.style.display = 'none';
            });
          }
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
      var allDropdownContent = document.querySelectorAll('.dropdown-content');
      if(allDropdownContent.length > 0) {
        allDropdownContent.forEach(function(dc) {
          if(dc) dc.style.display = 'none';
        });
      }
    });
  }
});

})(); // Fin du wrapper de protection

// Fonctions globales nécessaires pour onclick
window.setStatus = function(val) {
  console.log('setStatus called with:', val);
  
  // Rediriger directement vers la page de listing avec le filtre
  const baseUrl = '/listing_page';
  let filterParam = '';
  
  switch(val) {
    case 'Ready':
      filterParam = 'ready';
      break;
    case 'Off-Plan':
      filterParam = 'off-plan';
      break;
    case 'All':
    default:
      filterParam = 'all';
      break;
  }
  
  const url = `${baseUrl}?filter=${filterParam}`;
  console.log('Redirecting to:', url);
  
  // Redirection immédiate
  window.location.href = url;
};

window.setBeds = function(val) {
  var input = document.getElementById('bedsInput');
  if(input) {
    input.value = val;
    console.log('Beds set to:', val);
  }
};

window.setBaths = function(val) {
  var input = document.getElementById('bathsInput');
  if(input) {
    input.value = val;
    console.log('Baths set to:', val);
  }
};

window.submitSearch = function() {
  var form = document.querySelector('form');
  if(form) {
    form.submit();
  }
};

window.resetPills = function() {
  var bedsInput = document.getElementById('bedsInput');
  if(bedsInput) bedsInput.value = '';
  
  var bathsInput = document.getElementById('bathsInput');
  if(bathsInput) bathsInput.value = '';
  
  var allPills = document.querySelectorAll('.pill');
  if(allPills.length > 0) {
    allPills.forEach(function(pill) {
      pill.classList.remove('active');
    });
  }
  
  console.log('Pills reset');
};

window.showOptions = function(type) {
  var allOptions = document.querySelectorAll('.options');
  var allTabs = document.querySelectorAll('.tab-sub');
  
  if(allOptions.length > 0) {
    allOptions.forEach(opt => opt.classList.remove('active'));
  }
  
  if(allTabs.length > 0) {
    allTabs.forEach(tab => tab.classList.remove('active'));
  }
  
  if(type === 'residential') {
    var residentialOptions = document.querySelector('.options.residential');
    var firstTab = document.querySelector('.tab-sub:nth-child(1)');
    
    if(residentialOptions) residentialOptions.classList.add('active');
    if(firstTab) firstTab.classList.add('active');
  } else {
    var commercialOptions = document.querySelector('.options.commercial');
    var secondTab = document.querySelector('.tab-sub:nth-child(2)');
    
    if(commercialOptions) commercialOptions.classList.add('active');
    if(secondTab) secondTab.classList.add('active');
  }
  
  var parentDropdown = document.querySelector('.dropdown-content.large');
  if(parentDropdown) {
    parentDropdown.style.display = 'block';
  }
};
</script>

</body>
</html>
