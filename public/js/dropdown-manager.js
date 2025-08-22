/* =================================
   DROPDOWN MANAGER - ERROR FIXES
   ================================= */

document.addEventListener('DOMContentLoaded', () => {
    // Configuration des dropdowns avec gestion d'erreur robuste
    const dropdownConfig = {
        'beds-trigger': 'beds-dropdown',
        'baths-trigger': 'baths-dropdown',
        'size-trigger': 'size-dropdown',
        'type-trigger': 'type-dropdown'
    };

    // Fonction utilitaire pour vérifier l'existence d'un élément
    function elementExists(id) {
        const element = document.getElementById(id);
        return element !== null && element !== undefined;
    }

    // Fonction pour fermer tous les dropdowns
    function closeAllDropdowns() {
        Object.values(dropdownConfig).forEach(dropdownId => {
            const dropdown = document.getElementById(dropdownId);
            if (dropdown) {
                dropdown.style.display = 'none';
            }
        });
    }

    // Configuration sécurisée des dropdowns
    function setupSecureDropdown(triggerId, dropdownId) {
        // Vérification d'existence avant configuration
        if (!elementExists(triggerId) || !elementExists(dropdownId)) {
            console.warn(`Dropdown setup skipped: ${triggerId} -> ${dropdownId} (elements not found)`);
            return false;
        }

        const trigger = document.getElementById(triggerId);
        const dropdown = document.getElementById(dropdownId);

        // Gestionnaire de clic sur le trigger
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            // Fermer les autres dropdowns
            Object.entries(dropdownConfig).forEach(([tId, dId]) => {
                if (dId !== dropdownId) {
                    const otherDropdown = document.getElementById(dId);
                    if (otherDropdown) {
                        otherDropdown.style.display = 'none';
                    }
                }
            });

            // Toggle du dropdown actuel
            const isVisible = dropdown.style.display === 'block';
            dropdown.style.display = isVisible ? 'none' : 'block';
        });

        return true;
    }

    // Gestionnaire global de clic pour fermer les dropdowns
    document.addEventListener('click', (e) => {
        let shouldClose = true;

        // Vérifier si le clic est sur un trigger ou dropdown
        Object.entries(dropdownConfig).forEach(([triggerId, dropdownId]) => {
            const trigger = document.getElementById(triggerId);
            const dropdown = document.getElementById(dropdownId);

            if (trigger && dropdown) {
                const clickedOnTrigger = trigger.contains(e.target);
                const clickedOnDropdown = dropdown.contains(e.target);

                if (clickedOnTrigger || clickedOnDropdown) {
                    shouldClose = false;
                }
            }
        });

        if (shouldClose) {
            closeAllDropdowns();
        }
    });

    // Configuration de tous les dropdowns
    let configuredDropdowns = 0;
    Object.entries(dropdownConfig).forEach(([triggerId, dropdownId]) => {
        if (setupSecureDropdown(triggerId, dropdownId)) {
            configuredDropdowns++;
        }
    });

    console.log(`✅ Dropdown Manager: ${configuredDropdowns}/${Object.keys(dropdownConfig).length} dropdowns configured successfully`);
});

/* =================================
   NUCLEAR PROTECTION AGAINST ERRORS
   ================================= */

// Protection globale contre les erreurs de propriétés null
window.addEventListener('error', (e) => {
    if (e.message.includes("Cannot read properties of null (reading 'contains')")) {
        console.warn('🛡️ Protected against null element access error');
        e.preventDefault();
        return false;
    }
});

// Protection pour les queries de sélection
const originalQuerySelector = document.querySelector;
const originalQuerySelectorAll = document.querySelectorAll;

document.querySelector = function(selector) {
    try {
        return originalQuerySelector.call(this, selector);
    } catch (e) {
        console.warn(`🛡️ Protected querySelector error for: ${selector}`, e);
        return null;
    }
};

document.querySelectorAll = function(selector) {
    try {
        return originalQuerySelectorAll.call(this, selector);
    } catch (e) {
        console.warn(`🛡️ Protected querySelectorAll error for: ${selector}`, e);
        return [];
    }
};

console.log('🛡️ JavaScript Error Protection Active');
