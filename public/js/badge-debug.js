/* =================================
   DEBUG SCRIPT POUR BADGES LIVE
   ================================= */

// Script à exécuter dans la console du navigateur pour tester les badges

console.log('🔍 DÉMARRAGE DEBUG BADGES');

// Fonction de test pour vérifier les badges
function debugBadges() {
    const badges = document.querySelectorAll('.dtls_headr-mobile .tag li');
    console.log(`Total badges trouvés: ${badges.length}`);
    
    badges.forEach((badge, index) => {
        const link = badge.querySelector('a') || badge.querySelector('span');
        if (link) {
            const text = link.textContent.trim();
            const computedStyle = window.getComputedStyle(badge);
            const linkComputedStyle = window.getComputedStyle(link);
            
            console.log(`\n🏷️ Badge ${index + 1}: "${text}"`);
            console.log(`- Largeur min: ${computedStyle.minWidth}`);
            console.log(`- Largeur max: ${computedStyle.maxWidth}`);
            console.log(`- Largeur actuelle: ${computedStyle.width}`);
            console.log(`- Font size: ${linkComputedStyle.fontSize}`);
            console.log(`- Padding: ${linkComputedStyle.padding}`);
            console.log(`- Overflow: ${linkComputedStyle.overflow}`);
            console.log(`- Classes: ${badge.classList.toString()}`);
            
            // Vérifier si le texte est tronqué
            if (link.scrollWidth > link.clientWidth) {
                console.warn(`⚠️  Badge "${text}" est tronqué!`);
                console.log(`- ScrollWidth: ${link.scrollWidth}px`);
                console.log(`- ClientWidth: ${link.clientWidth}px`);
            } else {
                console.log(`✅ Badge "${text}" s'affiche correctement`);
            }
        }
    });
}

// Exécuter le debug
debugBadges();

// Fonction pour forcer la correction des badges
function forceFixBadges() {
    console.log('🔧 FORÇAGE CORRECTION BADGES');
    
    const badges = document.querySelectorAll('.dtls_headr-mobile .tag li');
    badges.forEach((badge) => {
        const link = badge.querySelector('a') || badge.querySelector('span');
        if (link) {
            const text = link.textContent.trim().toLowerCase();
            
            // Forcer les styles pour Off-plan
            if (text.includes('off-plan') || text.includes('offplan')) {
                badge.style.minWidth = '85px';
                badge.style.maxWidth = '85px';
                badge.style.width = '85px';
                link.style.fontSize = '11px';
                link.style.padding = '0 10px';
                link.style.overflow = 'hidden';
                link.style.textOverflow = 'ellipsis';
                link.style.whiteSpace = 'nowrap';
                badge.classList.add('badge-offplan');
                console.log('🔧 Badge Off-plan corrigé');
            }
            
            // Forcer les styles pour Ready
            if (text.includes('ready')) {
                badge.style.minWidth = '75px';
                badge.style.maxWidth = '75px';
                badge.style.width = '75px';
                link.style.fontSize = '11px';
                link.style.padding = '0 8px';
                link.style.overflow = 'hidden';
                link.style.textOverflow = 'ellipsis';
                link.style.whiteSpace = 'nowrap';
                badge.classList.add('badge-ready');
                console.log('🔧 Badge Ready corrigé');
            }
        }
    });
    
    // Re-vérifier après correction
    setTimeout(() => {
        console.log('\n📋 VÉRIFICATION APRÈS CORRECTION:');
        debugBadges();
    }, 100);
}

// Ajouter les fonctions au window pour utilisation facile
window.debugBadges = debugBadges;
window.forceFixBadges = forceFixBadges;

console.log('✅ DEBUG SCRIPT CHARGÉ - Utilisez debugBadges() ou forceFixBadges() dans la console');
