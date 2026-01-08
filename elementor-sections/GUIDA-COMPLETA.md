# 🎯 GUIDA COMPLETA - Inserire il Sito in Elementor

## 📚 Hai 8 Sezioni Pronte

Ogni file è una sezione HTML completa da copiare in Elementor:

1. ✅ `01-hero-section.html` - Slider principale con 3 slides
2. ✅ `02-intro-section.html` - Chi siamo e presentazione
3. ✅ `03-reviews-section.html` - Recensioni Google
4. ✅ `04-contact-form.html` - Form contatti
5. ✅ `05-events-grid.html` - Griglia eventi (18 anni, lauree, etc)
6. ✅ `06-photos-section.html` - Gallery foto
7. ✅ `07-location-section.html` - Mappa e dove siamo
8. ✅ `08-mobile-cta.html` - Barra chiamata/WhatsApp mobile

---

## 🚀 PROCEDURA PASSO-PASSO

### STEP 1: Crea la Pagina in WordPress

1. Login a WordPress (https://tuosito.it/wp-admin)
2. Vai su **Pagine** → **Aggiungi Nuova**
3. Titolo: "Home" o "747 Disco"
4. Clicca **"Modifica con Elementor"**

### STEP 2: Per Ogni Sezione, Segui Questi Passaggi

#### A) Aggiungi Widget HTML
- Dal pannello sinistro Elementor
- Cerca il widget **"HTML"** (icona < >)
- Trascinalo nella posizione desiderata

#### B) Copia il Codice
- Apri il file della sezione (es. `01-hero-section.html`)
- Seleziona **TUTTO** il contenuto (Ctrl+A o Cmd+A)
- Copia (Ctrl+C o Cmd+C)

#### C) Incolla in Elementor
- Clicca nel campo HTML del widget
- Incolla (Ctrl+V o Cmd+V)
- Clicca fuori dal widget per vedere l'anteprima

#### D) Verifica
- Guarda l'anteprima
- Se sembra corretto, passa alla sezione successiva

### STEP 3: Ordine Corretto delle Sezioni

Inserisci le sezioni in questo ordine dall'alto verso il basso:

```
1. Hero Section (slider)
2. Intro Section
3. Reviews Section
4. Contact Form
5. Events Grid
6. Photos Section
7. Location Section
8. Mobile CTA (alla fine!)
```

### STEP 4: Pubblica

1. Clicca **"Aggiorna"** in basso a sinistra
2. Poi clicca **"Pubblica"**
3. Imposta come homepage: **Impostazioni** → **Lettura** → **Home page statica**

---

## 🎨 PERSONALIZZAZIONE

### 🖼️ Cambiare Immagini

1. **Carica in WordPress Media:**
   - Media → Aggiungi Nuovo
   - Carica la tua immagine
   - Clicca sull'immagine → Copia URL

2. **Sostituisci nel Codice:**
   - Cerca `url('https://...')` o `src="https://..."`
   - Sostituisci con il TUO URL

### 🎨 Cambiare Colori

Ogni sezione ha questo all'inizio:
```css
<style>
/* qui ci sono i colori */
--color-gold: #917F59;
```

Trova il colore e cambia il codice esadecimale.

**Strumenti utili:**
- https://htmlcolorcodes.com/it/
- https://colorhunt.co/

### ✏️ Modificare Testi

Il testo è in italiano e facilmente riconoscibile.
Cerca e sostituisci direttamente nel codice HTML.

---

## 📋 CHECKLIST FINALE

Dopo aver inserito tutte le sezioni:

- [ ] Tutte le 8 sezioni sono state inserite
- [ ] Le sezioni sono nell'ordine corretto
- [ ] Ho sostituito le immagini placeholder con le mie
- [ ] Ho personalizzato i testi se necessario
- [ ] Ho configurato il form di contatto (vedi sotto)
- [ ] Ho testato su mobile (anteprima Elementor)
- [ ] Ho pubblicato la pagina
- [ ] Ho impostato come homepage

---

## 📝 FORM DI CONTATTO - IMPORTANTE!

Il form nella sezione 04 è solo un esempio HTML.

**Devi sostituirlo con un form WordPress vero:**

### Opzione A: WPForms (Raccomandato)
1. Vai su **WPForms** → **Aggiungi Nuovo**
2. Scegli template "Modulo di Contatto Semplice"
3. Aggiungi campi: Nome, Email, Telefono, Messaggio
4. Salva e copia lo shortcode (es: `[wpforms id="123"]`)
5. **Nel widget HTML di Elementor**, sostituisci il form con:

```html
<!-- Sostituisci il <form> con questo: -->
[wpforms id="123"]
```

### Opzione B: Contact Form 7
1. Plugin → Aggiungi Nuovo → Cerca "Contact Form 7"
2. Installa e attiva
3. Contact → Contact Forms → Aggiungi Nuovo
4. Configura i campi
5. Copia shortcode e incolla nel widget HTML

### Opzione C: Elementor Form Widget
1. Invece di usare il widget HTML
2. Usa il widget **"Form"** di Elementor
3. Configura i campi manualmente
4. Imposta email di destinazione

---

## 🗺️ GOOGLE MAPS

Se l'indirizzo è corretto (Viale J. F. Kennedy, 131, Ciampino), lascia così.

**Per personalizzare:**

1. Vai su https://www.google.com/maps
2. Cerca il tuo indirizzo
3. Clicca **"Condividi"** → **"Incorpora mappa"**
4. Copia il codice iframe
5. Incolla nella sezione 07 sostituendo l'iframe esistente

---

## 📱 TEST MOBILE

1. In Elementor, clicca icona 📱 in basso
2. Seleziona "Mobile" dal menu
3. Verifica che tutto sia leggibile
4. La barra CTA (chiama/WhatsApp) dovrebbe essere visibile

---

## ⚠️ PROBLEMI COMUNI

### Il layout è rotto
- Hai copiato TUTTO il codice? Incluso `<style>` e `<script>`?
- Verifica di non aver lasciato caratteri strani

### Le immagini non si vedono
- Le immagini placeholder vanno sostituite
- Carica le TUE foto in WordPress Media
- Copia URL e sostituisci nel codice

### Lo slider non scorre
- Hai copiato anche la parte `<script>` in fondo?
- Verifica nella console browser (F12) eventuali errori

### Il form non funziona
- Il form HTML è solo esempio
- Devi usare WPForms o Contact Form 7 (vedi sopra)

---

## 🆘 SUPPORTO

### 1. Video Tutorial WordPress/Elementor
- https://www.youtube.com/results?search_query=elementor+html+widget+tutorial

### 2. Documentazione Elementor
- https://elementor.com/help/

### 3. Forum WordPress Italia
- https://it.wordpress.org/support/

### 4. Contatta 747 Disco
- Tel: +39 347 181 1119
- WhatsApp: https://wa.me/393471811119

---

## ✨ SUGGERIMENTI EXTRA

### Plugin Utili (Opzionali)
- **Rank Math SEO** - Ottimizzazione SEO (già installato)
- **WP Rocket** - Cache e velocità (già installato)
- **ShortPixel** - Ottimizza immagini (già installato)

### Dopo la Pubblicazione
1. Testa su più dispositivi (PC, tablet, smartphone)
2. Verifica che tutti i link funzionino
3. Testa il form di contatto inviando un messaggio di prova
4. Aggiungi Google Analytics se non l'hai già fatto
5. Invia sitemap a Google Search Console

---

## 🎉 SEI PRONTO!

Hai tutto quello che ti serve per creare il tuo sito 747 Disco con Elementor!

**Tempo stimato:** 30-60 minuti per inserire tutte le sezioni

**Difficoltà:** Facile - è solo copia/incolla!

Buon lavoro! 🚀
