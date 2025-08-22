/* =================================
   BADGE MANAGER - MOBILE ELLIPSIS & LIVE FIX
   ================================= */

document.addEventListener('DOMContentLoaded', () => {
    
    function identifyAndFixBadges() {
        // Sélectionner tous les badges dans le layout mobile
        const mobileBadges = document.querySelectorAll('.dtls_headr-mobile .tag li');
        
        mobileBadges.forEach((badge) => {
            const link = badge.querySelector('a') || badge.querySelector('span');
            if (link) {
                const text = link.textContent.trim().toLowerCase();
                
                // Identifier les badges problématiques et leur appliquer des classes spécifiques
                badge.classList.remove('badge-offplan', 'badge-ready', 'badge-forsale', 'badge-rent');
                
                if (text.includes('off-plan') || text.includes('offplan')) {
                    badge.classList.add('badge-offplan');
                    console.log('🏷️ Badge Off-plan détecté et corrigé');
                } else if (text.includes('ready')) {
                    badge.classList.add('badge-ready');
                    console.log('🏷️ Badge Ready détecté et corrigé');
                } else if (text.includes('for sale') || text.includes('sale')) {
                    badge.classList.add('badge-forsale');
                    console.log('🏷️ Badge For Sale détecté et corrigé');
                } else if (text.includes('rent')) {
                    badge.classList.add('badge-rent');
                    console.log('🏷️ Badge Rent détecté et corrigé');
                }
                
                // Marquer les badges longs
                if (text.length > 8) {
                    badge.setAttribute('data-long-text', 'true');
                }
            }
        });
        
        console.log(`✅ Badge Manager: ${mobileBadges.length} badges traités`);
    }
    
    // Fonction pour forcer les dimensions correctes
    function forceBadgeDimensions() {
        const badges = {
            '.badge-offplan': { minWidth: '85px', maxWidth: '85px', fontSize: '11px', padding: '0 10px' },
            '.badge-ready': { minWidth: '75px', maxWidth: '75px', fontSize: '11px', padding: '0 8px' },
            '.badge-forsale': { minWidth: '90px', maxWidth: '90px', fontSize: '11px', padding: '0 10px' },
            '.badge-rent': { minWidth: '65px', maxWidth: '65px', fontSize: '11px', padding: '0 8px' }
        };
        
        Object.entries(badges).forEach(([selector, styles]) => {
            const elements = document.querySelectorAll(selector);
            elements.forEach(element => {
                const link = element.querySelector('a') || element.querySelector('span');
                
                // Appliquer les styles au conteneur
                element.style.minWidth = styles.minWidth;
                element.style.maxWidth = styles.maxWidth;
                element.style.width = styles.maxWidth;
                element.style.boxSizing = 'border-box';
                element.style.overflow = 'hidden';
                
                // Appliquer les styles au lien
                if (link) {
                    link.style.fontSize = styles.fontSize;
                    link.style.padding = styles.padding;
                    link.style.whiteSpace = 'nowrap';
                    link.style.overflow = 'hidden';
                    link.style.textOverflow = 'ellipsis';
                    link.style.display = 'block';
                    link.style.lineHeight = '28px';
                    link.style.height = '28px';
                    link.style.boxSizing = 'border-box';
                    link.style.letterSpacing = '0.3px';
                }
            });
        });
    }
    
    // Ajustement pour très petits écrans
    function adjustForSmallScreens() {
        if (window.innerWidth <= 480) {
            const smallScreenAdjustments = {
                '.badge-offplan': { minWidth: '78px', maxWidth: '78px', fontSize: '10px', padding: '0 8px' },
                '.badge-ready': { minWidth: '68px', maxWidth: '68px', fontSize: '10px', padding: '0 6px' },
                '.badge-forsale': { minWidth: '85px', maxWidth: '85px', fontSize: '10px', padding: '0 8px' },
                '.badge-rent': { minWidth: '60px', maxWidth: '60px', fontSize: '10px', padding: '0 6px' }
            };
            
            Object.entries(smallScreenAdjustments).forEach(([selector, styles]) => {
                const elements = document.querySelectorAll(selector);
                elements.forEach(element => {
                    const link = element.querySelector('a') || element.querySelector('span');
                    
                    element.style.minWidth = styles.minWidth;
                    element.style.maxWidth = styles.maxWidth;
                    element.style.width = styles.maxWidth;
                    
                    if (link) {
                        link.style.fontSize = styles.fontSize;
                        link.style.padding = styles.padding;
                        link.style.lineHeight = '26px';
                        link.style.height = '26px';
                    }
                });
            });
        }
    }
    
    // Exécuter les corrections
    identifyAndFixBadges();
    setTimeout(() => {
        forceBadgeDimensions();
        adjustForSmallScreens();
    }, 100);
    
    // Re-appliquer lors du redimensionnement
    window.addEventListener('resize', () => {
        setTimeout(() => {
            forceBadgeDimensions();
            adjustForSmallScreens();
        }, 100);
    });
    
    // Observer les changements DOM pour les badges chargés dynamiquement
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                setTimeout(() => {
                    identifyAndFixBadges();
                    forceBadgeDimensions();
                    adjustForSmallScreens();
                }, 50);
            }
        });
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});

/* =================================
   PROTECTION CSS DYNAMIQUE
   ================================= */

// Ajouter des styles CSS dynamiques pour une protection renforcée
const additionalStyles = document.createElement('style');
additionalStyles.textContent = `
    @media (max-width: 360px) {
        .dtls_headr-mobile .tag li {
            max-width: 70px !important;
            font-size: 10px !important;
        }
        
        .dtls_headr-mobile .tag li a,
        .dtls_headr-mobile .tag li span {
            font-size: 10px !important;
            padding: 0 4px !important;
        }
    }
    
    @media (max-width: 320px) {
        .dtls_headr-mobile .tag li {
            max-width: 60px !important;
            font-size: 9px !important;
        }
    }
    
    /* Animation pour un rendu plus fluide */
    .dtls_headr-mobile .tag li {
        transition: max-width 0.3s ease, font-size 0.3s ease !important;
    }
`;

document.head.appendChild(additionalStyles);
console.log('🎨 Styles CSS dynamiques pour badges ajoutés');
