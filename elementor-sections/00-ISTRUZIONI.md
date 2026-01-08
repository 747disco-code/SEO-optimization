# 747 Disco - Codice HTML per Elementor

## 📋 Come Usare Questi File

Ogni file in questa cartella contiene una **sezione completa** da inserire in Elementor.

### Passo 1: Apri Elementor
1. Vai su WordPress → Pagine
2. Crea una nuova pagina o modifica quella esistente
3. Clicca su "Modifica con Elementor"

### Passo 2: Aggiungi Widget HTML
1. Dal pannello sinistro, cerca il widget **"HTML"**
2. Trascinalo nella posizione desiderata

### Passo 3: Incolla il Codice
1. Apri uno dei file di questa cartella (es. `01-hero-section.html`)
2. Copia **TUTTO** il contenuto del file
3. Incolla nel campo HTML del widget Elementor
4. Clicca "Aggiorna" per salvare

### Passo 4: Ripeti per Ogni Sezione
Segui l'ordine numerico dei file:
1. `01-hero-section.html` - Hero/Slider principale
2. `02-intro-section.html` - Introduzione e presentazione
3. `03-reviews-section.html` - Recensioni Google
4. `04-contact-form.html` - Form di contatto
5. `05-events-grid.html` - Griglia tipi di eventi
6. `06-photos-section.html` - Foto e video
7. `07-location-section.html` - Mappa e dove siamo
8. `08-mobile-cta.html` - Barra CTA mobile (fisso)

## 🎨 Personalizzazione

### Cambiare Colori
Ogni sezione ha una sezione `<style>` all'inizio. Cerca:
```css
/* COLORI - Modifica qui */
--color-gold: #917F59;
```

Cambia il valore esadecimale con il tuo colore.

### Cambiare Testi
Cerca il testo nel codice HTML e modificalo direttamente.

### Cambiare Immagini
Cerca gli URL delle immagini (es. `url('https://...')`) e sostituiscili con:
1. URL pubblico della tua immagine
2. Oppure carica in WordPress Media Library e usa quell'URL

## 📱 Mobile

Il codice è già responsive! Si adatta automaticamente a desktop, tablet e mobile.

## ⚠️ Note Importanti

1. **Non modificare la struttura** - Copia/incolla senza modifiche HTML
2. **CSS inline** - Ogni sezione ha il suo CSS incluso
3. **JavaScript inline** - Solo dove necessario, già incluso
4. **Compatibilità** - Testato con Elementor Free e Pro

## 🔧 Risoluzione Problemi

### Il layout è rotto
- Verifica di aver copiato TUTTO il codice, incluso `<style>` e `<script>`
- Controlla che non ci siano altri CSS personalizzati che vanno in conflitto

### Le immagini non si vedono
- Le immagini placeholder vanno sostituite con le tue
- Carica le immagini in WordPress Media Library
- Copia l'URL e sostituiscilo nel codice

### I link non funzionano
- Aggiorna gli URL dei link con quelli corretti del tuo sito
- I link con `#` sono ancore interne alla pagina

## 📞 Supporto

Per domande:
- Tel: +39 347 181 1119
- WhatsApp: https://wa.me/393471811119

## ✅ Checklist Finale

Dopo aver inserito tutte le sezioni:

- [ ] Verifica che tutte le sezioni siano visibili
- [ ] Testa su mobile (usa anteprima Elementor)
- [ ] Sostituisci immagini placeholder
- [ ] Aggiorna link e URL
- [ ] Testa form di contatto
- [ ] Pubblica la pagina!

---

**Pronto per iniziare? Apri il primo file `01-hero-section.html`!** 🚀
