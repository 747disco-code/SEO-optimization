# 747 Disco - Modern Website

Sito web moderno per 747 Disco, location per feste ed eventi a Roma, creato con un approccio simile a Lovable AI.

## 🚀 Due Versioni Disponibili

### 1. Sito HTML Statico
File: `index.html`, `styles.css`, `script.js`
- ✅ Più veloce e leggero
- ✅ Hosting economico (GitHub Pages, Netlify, Vercel)
- ✅ Nessun database necessario
- ⚠️ Contenuti hardcoded (modifiche via codice)

### 2. Tema WordPress
File: `wordpress-theme/747disco-theme.zip`
- ✅ Gestione contenuti facile tramite pannello WordPress
- ✅ Aggiornamenti dinamici senza modificare codice
- ✅ Supporto per blog, eventi e gallerie
- ✅ Personalizzabile via Customizer WordPress
- 📖 **Guida installazione**: Vedi `INSTALLAZIONE-WORDPRESS.md`

## Caratteristiche

### Design Moderno
- Layout responsive che si adatta a tutti i dispositivi
- Animazioni fluide e transizioni eleganti
- Effetto particelle animato in background
- Palette colori professionale ispirata al brand

### Sezioni Principali

1. **Hero Section** - Accoglienza con call-to-action prominenti
2. **Chi Siamo** - Presentazione della location con features principali
3. **Eventi** - Showcase dei tipi di eventi organizzati
4. **Location** - Informazioni sugli spazi e servizi
5. **Gallery** - Galleria fotografica degli eventi
6. **Contatti** - Form di contatto e informazioni di contatto

### Tecnologie Utilizzate

- **HTML5** - Struttura semantica e accessibile
- **CSS3** - Styling moderno con:
  - CSS Grid e Flexbox per layout responsive
  - Animazioni CSS personalizzate
  - Variabili CSS per gestione colori
  - Media queries per design responsive
  
- **Vanilla JavaScript** - Interattività senza dipendenze:
  - Smooth scrolling
  - Mobile menu toggle
  - Sistema di particelle animato
  - Validazione form
  - Intersection Observer per animazioni scroll
  - Sistema di notifiche

### Funzionalità

#### Navigation
- Menu fisso in alto con effetto trasparenza
- Smooth scrolling alle sezioni
- Indicatore sezione attiva
- Menu mobile responsive

#### Animazioni
- Particelle animate in background (cerchi ed esagoni)
- Animazioni di ingresso per le sezioni
- Hover effects su cards e bottoni
- Scroll indicator nella hero section

#### Form di Contatto
- Validazione completa dei campi
- Validazione email e telefono
- Messaggi di feedback all'utente
- Design accessibile

#### Responsive Design
- Mobile-first approach
- Breakpoints: 480px, 768px
- Menu hamburger su mobile
- Layout adattivi per tutti i dispositivi

## Struttura File

### Versione HTML
```
/
├── index.html                    # Pagina principale
├── styles.css                    # Tutti gli stili
├── script.js                     # Logica JavaScript
├── README.md                     # Questa documentazione
└── 747disco_bck/                 # Backup WordPress originale
```

### Versione WordPress
```
wordpress-theme/
├── 747disco-theme.zip            # Tema pronto per installazione (44 KB)
├── 747disco/                     # Cartella tema
│   ├── style.css                 # Foglio di stile principale
│   ├── functions.php             # Funzionalità WordPress
│   ├── header.php                # Header e navigazione
│   ├── footer.php                # Footer
│   ├── page-home.php             # Template homepage
│   ├── index.php                 # Template fallback
│   ├── js/script.js              # JavaScript
│   ├── screenshot.png            # Anteprima tema
│   └── README-WORDPRESS.md       # Documentazione tecnica
└── INSTALLAZIONE-WORDPRESS.md    # Guida installazione completa
```

## SEO Optimization

- Meta tags ottimizzati (description, keywords)
- Struttura HTML semantica
- Titoli gerarchici corretti (h1, h2, h3)
- Link interni per navigazione
- Performance ottimizzate:
  - CSS e JS inline minimizzati
  - Lazy loading per sezioni
  - Animazioni ottimizzate per performance

## Come Usare

### Versione HTML Statica

1. **Visualizzazione locale**: 
   - Apri `index.html` in un browser moderno
   - Oppure usa un server locale: `python -m http.server 8000`

2. **Deploy**:
   - Carica i file su qualsiasi hosting web
   - Funziona su GitHub Pages, Netlify, Vercel, etc.

3. **Personalizzazione**:
   - Modifica i colori in `:root` nel file CSS
   - Aggiungi/modifica sezioni nell'HTML
   - Personalizza le animazioni nel CSS

### Versione WordPress

1. **Installazione**:
   - Scarica `wordpress-theme/747disco-theme.zip`
   - Vai su WordPress: Aspetto → Temi → Aggiungi nuovo → Carica tema
   - Carica il file .zip e attiva il tema

2. **Configurazione**:
   - Leggi la guida completa in `INSTALLAZIONE-WORDPRESS.md`
   - Personalizza via Aspetto → Personalizza
   - Crea menu, aggiungi eventi, configura contatti

3. **Gestione Contenuti**:
   - Eventi: Crea articoli nella categoria "eventi"
   - Gallery: Crea articoli nella categoria "gallery" con immagini
   - Contatti: Personalizza via Customizer

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Differenze tra le Due Versioni

### HTML Statico - Vantaggi
- ✅ Caricamento molto più veloce
- ✅ Nessuna dipendenza da plugin
- ✅ Codice pulito e manutenibile
- ✅ Hosting più semplice ed economico
- ✅ Migliore performance SEO
- ✅ Maggiore controllo sul codice

### HTML Statico - Considerazioni
- ⚠️ Non include sistema CMS (contenuti hardcoded)
- ⚠️ Form di contatto necessita backend (attualmente simulato)
- ⚠️ Gallery usa placeholder (necessario aggiungere immagini reali)

### WordPress - Vantaggi
- ✅ Gestione contenuti via pannello admin
- ✅ Nessuna modifica al codice necessaria
- ✅ Eventi e gallery dinamici
- ✅ Form di contatto funzionante (con Contact Form 7)
- ✅ Personalizzazione via Customizer
- ✅ Aggiornamenti facili

### WordPress - Considerazioni
- ⚠️ Richiede hosting WordPress
- ⚠️ Database necessario
- ⚠️ Leggermente più lento (ma comunque ottimizzato)

## Prossimi Passi Suggeriti

1. **Immagini**: Sostituire i placeholder con foto reali degli eventi
2. **Backend**: Implementare endpoint per il form di contatto
3. **CMS Headless**: Integrare con Strapi, Contentful o Sanity per gestione contenuti
4. **Analytics**: Aggiungere Google Analytics o alternative
5. **Cookie Consent**: Implementare banner GDPR se necessario

## Crediti

Creato con un approccio moderno simile a Lovable AI, utilizzando le migliori pratiche di sviluppo web 2026.

## Licenza

Proprietà di 747 Disco - Tutti i diritti riservati
