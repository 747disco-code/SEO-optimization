# 747 Disco - HTML Website for WordPress + Elementor

Questo repository contiene il sito web in HTML per 747 Disco, una location esclusiva per feste ed eventi a Roma.

## 📋 Contenuto del Progetto

- `index.html` - Pagina principale del sito
- `style.css` - Foglio di stile personalizzato
- `script.js` - Script JavaScript per interattività
- `747disco_bck/` - Backup WordPress/Elementor originale
- `README.md` - Questo file

## 🎯 Caratteristiche del Sito

### SEO Ottimizzato
- Meta tags completi (description, keywords, Open Graph)
- Struttura HTML semantica
- Headings gerarchici (H1, H2, H3)
- Alt text per immagini
- URL amichevoli per SEO

### Responsive Design
- Layout ottimizzato per desktop, tablet e mobile
- Mobile-first approach
- Barra CTA fissa su mobile (chiamata e WhatsApp)

### Sezioni Principali
1. **Hero Slider** - Carousel con 3 slide principali
2. **Introduzione** - Presentazione della location con USP
3. **Recensioni** - Sezione testimonial
4. **Form di Contatto** - Due form per richieste informazioni
5. **Eventi** - Griglia con tipologie di eventi:
   - Feste 18 anni
   - Feste di laurea
   - Eventi aziendali
   - Altri compleanni (30, 40, 50 anni)
6. **Foto e Video** - Sezione gallery
7. **Location** - Mappa e informazioni su dove trovarci
8. **Footer** - Informazioni di contatto e social

## 📱 Funzionalità JavaScript

- Slider automatico per hero section (5 secondi)
- Scroll fluido per navigazione interna
- Animazioni scroll-triggered
- Validazione form lato client
- Eventi tracking per Google Analytics

## 🎨 Design e Colori

### Palette Colori
- Primario: `#917F59` (oro/bronzo)
- Secondario: `#8D7B57`
- Scuro: `#222222`
- Testo: `#FFFFFF`

### Tipografia
- Display: 'Mr Dafoe' (titoli creativi)
- Corpo: 'Work Sans' (testo e UI)

## 🚀 Come Usare con WordPress + Elementor

### Opzione 1: Importazione Diretta in Elementor

1. **Accedi a WordPress**
   - Login al pannello amministrativo

2. **Crea una Nuova Pagina**
   - Vai su Pagine → Aggiungi Nuova
   - Titolo: "Home" o "747 Disco"

3. **Modifica con Elementor**
   - Clicca su "Modifica con Elementor"

4. **Importa il Contenuto HTML**
   - Usa il widget "HTML" di Elementor
   - Copia sezioni da `index.html`
   - Incolla nel widget HTML

5. **Aggiungi CSS Personalizzato**
   - Vai su Elementor → Impostazioni Sito → CSS Personalizzato
   - Copia e incolla il contenuto di `style.css`

6. **Aggiungi JavaScript**
   - Installa plugin "Code Snippets" o "Insert Headers and Footers"
   - Aggiungi il contenuto di `script.js` nel footer

### Opzione 2: Tema Child

1. **Crea un Tema Child**
   ```
   themes/
   └── astra-child/
       ├── style.css
       ├── functions.php
       └── page-templates/
           └── template-747disco.php
   ```

2. **Copia i File**
   - Copia `index.html` → `template-747disco.php`
   - Copia `style.css` → `astra-child/style.css`
   - Copia `script.js` → `astra-child/js/custom.js`

3. **Registra il Template**
   ```php
   <?php
   /*
   Template Name: 747 Disco Home
   */
   get_header();
   // Contenuto HTML qui
   get_footer();
   ?>
   ```

### Opzione 3: Plugin HTML to Elementor

1. **Installa Plugin**
   - Cerca "HTML to Elementor" nel repository WordPress
   - Installa e attiva

2. **Importa HTML**
   - Copia il contenuto HTML
   - Usa il plugin per convertire in blocchi Elementor

## 📝 Personalizzazione

### Modificare i Contenuti

1. **Testi**
   - Apri `index.html`
   - Cerca il testo da modificare
   - Salva e ricarica

2. **Colori**
   - Apri `style.css`
   - Modifica le variabili CSS in `:root`
   ```css
   :root {
       --color-primary: #917F59;  /* Cambia qui */
   }
   ```

3. **Immagini**
   - Sostituisci i placeholder con le tue immagini
   - Mantieni proporzioni simili per il layout

### Form di Contatto

Il sito usa Formspree come esempio. Per attivarlo:

1. Vai su [formspree.io](https://formspree.io)
2. Crea un account gratuito
3. Ottieni il tuo endpoint form
4. Sostituisci `YOUR_FORM_ID` in `index.html`:
   ```html
   <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
   ```

Oppure usa:
- WPForms (già presente nel backup)
- Contact Form 7
- Elementor Form Widget

## 🗺️ Google Maps

Per aggiornare la mappa:

1. Vai su [Google Maps](https://maps.google.com)
2. Cerca: "Viale J. F. Kennedy, 131, Ciampino"
3. Clicca su "Condividi" → "Incorpora una mappa"
4. Copia il codice iframe
5. Sostituisci in `index.html` nella sezione location

## 📊 SEO e Analytics

### Google Analytics
Aggiungi prima del tag `</head>`:
```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Google Search Console
1. Verifica la proprietà del sito
2. Invia la sitemap
3. Monitora le performance

## 🔧 Plugin WordPress Consigliati

Dal backup originale, questi plugin sono già configurati:
- **Elementor Pro** - Page builder
- **Rank Math SEO** - SEO optimization
- **WPForms** - Form builder
- **LiteSpeed Cache** - Performance
- **ShortPixel** - Image optimization

## 📞 Contatti

**747 Disco**
- Indirizzo: Viale J. F. Kennedy, 131, 00043 Ciampino (Roma)
- Telefono: [+39 347 181 1119](tel:+393471811119)
- WhatsApp: [+39 347 181 1119](https://wa.me/393471811119)
- Sito: https://747disco.it

## 📄 Licenza

Questo progetto è stato creato per 747 Disco. Tutti i diritti riservati.

## 🆘 Supporto

Per assistenza tecnica o modifiche:
1. Contatta il webmaster di 747 Disco
2. Consulta la documentazione Elementor
3. Visita i forum di supporto WordPress

---

**Versione:** 1.0  
**Data:** Gennaio 2026  
**Autore:** 747 Disco Code Team
