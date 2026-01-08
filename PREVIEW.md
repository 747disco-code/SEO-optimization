# 747 Disco - Anteprima del Sito

## 🚀 Come Visualizzare il Sito Localmente

### Opzione 1: Apertura Diretta
1. Naviga alla cartella del progetto
2. Fai doppio clic su `index.html`
3. Il sito si aprirà nel tuo browser predefinito

### Opzione 2: Server Locale con Python
```bash
# Se hai Python 3 installato
cd /percorso/del/progetto
python3 -m http.server 8000

# Apri il browser e vai a:
# http://localhost:8000
```

### Opzione 3: Server Locale con Node.js
```bash
# Installa http-server globalmente
npm install -g http-server

# Avvia il server
cd /percorso/del/progetto
http-server

# Apri il browser all'indirizzo indicato (di solito http://localhost:8080)
```

### Opzione 4: Live Server (VS Code)
1. Installa l'estensione "Live Server" in VS Code
2. Apri la cartella del progetto in VS Code
3. Fai clic destro su `index.html`
4. Seleziona "Open with Live Server"

## 📱 Test Responsive

### Dimensioni da Testare
- **Desktop**: 1920x1080, 1366x768
- **Tablet**: 768x1024 (iPad)
- **Mobile**: 375x667 (iPhone), 360x640 (Android)

### Come Testare
1. Apri il sito in Chrome/Firefox
2. Premi F12 per aprire DevTools
3. Clicca sull'icona del dispositivo mobile
4. Seleziona diverse dimensioni dal menu a tendina

## ✅ Checklist di Verifica

### Funzionalità da Testare
- [ ] Slider hero funziona automaticamente
- [ ] Pulsanti freccia slider funzionano
- [ ] Scroll fluido ai link di navigazione
- [ ] Form di contatto mostra validazione
- [ ] Pulsanti WhatsApp e telefono funzionano
- [ ] Mappa Google Maps si carica correttamente
- [ ] Layout responsive su mobile
- [ ] Barra CTA mobile visibile solo su mobile

### SEO da Verificare
- [ ] Meta description presente
- [ ] Open Graph tags corretti
- [ ] Titolo pagina ottimizzato
- [ ] Headings gerarchici (H1 → H2 → H3)
- [ ] Alt text su immagini

## 🎨 Personalizzazione Rapida

### Cambiare Colori
Apri `style.css` e modifica le variabili CSS:
```css
:root {
    --color-primary: #917F59;  /* Oro/Bronzo principale */
    --color-secondary: #8D7B57; /* Oro secondario */
    --color-dark: #222222;      /* Sfondo scuro */
}
```

### Modificare Testi
Apri `index.html` e cerca il testo che vuoi modificare. Tutti i contenuti sono in italiano.

### Aggiungere Immagini
1. Sostituisci i placeholder URL nelle sezioni background-image in `style.css`
2. Aggiungi le tue immagini nella cartella `/images/`
3. Aggiorna i percorsi nel CSS e HTML

## 📝 Note Importanti

### Form di Contatto
I form attualmente puntano a un placeholder Formspree. Per attivarli:
1. Vai su https://formspree.io
2. Crea un account gratuito
3. Ottieni il tuo Form ID
4. Sostituisci `YOUR_FORM_ID` in `index.html`

### Google Maps
L'iframe della mappa punta a Viale J. F. Kennedy, 131, Ciampino. Se l'indirizzo è diverso:
1. Vai su Google Maps
2. Cerca il nuovo indirizzo
3. Clicca "Condividi" → "Incorpora una mappa"
4. Copia il nuovo codice iframe
5. Sostituisci in `index.html` (sezione location)

## 🔧 Risoluzione Problemi

### Il sito non si apre
- Verifica che tutti i file siano nella stessa cartella
- Controlla che `style.css` e `script.js` siano presenti

### Lo slider non funziona
- Controlla la console del browser (F12)
- Verifica che `script.js` sia caricato correttamente

### I form non inviano
- Configura prima Formspree o un altro servizio
- Oppure usa il widget form di WordPress/Elementor

### Layout rotto su mobile
- Svuota la cache del browser
- Verifica che il viewport meta tag sia presente
- Controlla i CSS in DevTools

## 📞 Supporto

Per assistenza tecnica:
- Email: info@747disco.it
- Tel: +39 347 181 1119
- WhatsApp: +39 347 181 1119

## 🎯 Prossimi Passi

1. **Test Completo**: Verifica tutte le funzionalità
2. **Aggiungi Immagini**: Sostituisci i placeholder
3. **Configura Form**: Imposta Formspree o alternativa
4. **Import WordPress**: Segui le istruzioni in README.md
5. **SEO**: Aggiungi Google Analytics e Search Console

---

**Buon lavoro!** 🎉
