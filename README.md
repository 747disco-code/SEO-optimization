# 747 Disco - Modern Website

Sito web moderno per 747 Disco, location per feste ed eventi a Roma, creato con un approccio simile a Lovable AI.

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

```
/
├── index.html          # Pagina principale
├── styles.css          # Tutti gli stili
├── script.js           # Logica JavaScript
├── README.md           # Questa documentazione
└── 747disco_bck/       # Backup WordPress originale
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

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Differenze dal WordPress Originale

### Vantaggi
- ✅ Caricamento molto più veloce
- ✅ Nessuna dipendenza da plugin
- ✅ Codice pulito e manutenibile
- ✅ Hosting più semplice ed economico
- ✅ Migliore performance SEO
- ✅ Maggiore controllo sul codice

### Considerazioni
- ⚠️ Non include sistema CMS (contenuti hardcoded)
- ⚠️ Form di contatto necessita backend (attualmente simulato)
- ⚠️ Gallery usa placeholder (necessario aggiungere immagini reali)

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
